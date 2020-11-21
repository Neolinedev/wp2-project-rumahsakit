<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('authModel');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function login()
    {
        $this->load->view('auth/login');
    }

    public function register()
    {
        $this->load->view('auth/register');
    }

    public function proses_register()
    {
        // $this->form_validation->set_rules('nama', 'Nama', 'required');
        // $this->form_validation->set_rules('username', 'Username', 'required');
        // $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|trim', [
        //     'min_length' => 'Password minimal memiliki 8 karakter !'
        // ]);
        // $this->form_validation->set_rules('password2', 'Password2', 'required|trim|matches[password]', [
        //     'matches' => 'Password tidak sama !'
        // ]);

        $config = array(
            array(
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'Field nama wajib untuk diisi.'
                ),
            ),
            array(
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'Field username wajib untuk diisi.'
                ),
            ),
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|min_length[8]',
                'errors' => array(
                    'required' => 'Field password wajib untuk diisi.',
                    'min_length' => 'Password minimal memiliki 8 karakter.',
                ),
            ),
            array(
                'field' => 'password2',
                'label' => 'Password2',
                'rules' => 'required|matches[password]',
                'errors' => array(
                    'required' => 'Field konfirmasi password wajib untuk diisi.',
                    'matches' => 'Konfirmasi password tidak sesuai'
                ),
            ),
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {
            $errors = $this->form_validation->error_array();
            $this->session->set_flashdata('errors', $errors);
            $this->session->set_flashdata('input', $this->input->post());
            redirect('auth/register');
        } else {
            $nama = $this->input->post('nama');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $pass = password_hash($password, PASSWORD_DEFAULT);
            $data = [
                'nama' => $nama,
                'username' => $username,
                'password' => $pass
            ];

            $insert = $this->authModel->register("user", $data);
            if ($insert) {
                echo '<script>alert("Anda berhasil melakukan registrasi.Silahkan lanjut untuk login.");window.location.href="' . base_url('index.php/auth/login') . '";</script>';
            }
        }
    }

    public function proses_login()
    {
        // $this->form_validation->set_rules('username', 'Username', 'required');
        // $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]', [
        //     'min_length' => 'Password minimal memiliki 8 karakter.'
        // ]);

        $config = array(
            array(
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'Field username wajib diisi.'
                )
            ),
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|min_length[8]',
                'errors' => array(
                    'required' => 'Field password wajib diisi',
                    'min_length' => 'Password minimal harus memiliki 8 karakter'
                )
            )
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {
            $errors = $this->form_validation->error_array();
            $this->session->set_flashdata('errors', $errors);
            $this->session->set_flashdata('input', $this->input->post());
            redirect('auth/login'); // LOGIN

        } else {

            $username = htmlspecialchars($this->input->post('username'));
            $pass = htmlspecialchars($this->input->post('password'));

            // CEK KE DATABASE BERDASARKAN EMAIL
            $cek_login = $this->authModel->cek_login($username);

            if ($cek_login == FALSE) {
                echo '<script>alert("Username yang Anda masukan salah.");window.location.href="' . base_url('auth/login') . '";</script>';
            } else {
                if (password_verify($pass, $cek_login->password)) {
                    // $data = [
                    //     'role' => $user['role']
                    // ];
                    // if ($user['role'] == 'admin') {
                    //     redirect('admin');
                    // } else {
                    //     redirect('member');
                    // }
                    // Mengecek username dan password apakah sama
                    $this->session->set_userdata('id', $cek_login->id);
                    $this->session->set_userdata('nama', $cek_login->nama);
                    $this->session->set_userdata('username', $cek_login->username);

                    redirect('dashboard');
                } else {
                    echo '<script>alert("Username atau Password yang Anda masukan salah.");window.location.href="' . base_url('auth/login') . '";</script>';
                }
            }
        }

        // $username = $this->input->post('username');
        // $password = $this->input->post('password');
        // $user = $this->db->get_where('user', ['username' => $username])->row_array();

        // if ($user) {
        //     if (password_verify($password, $user['password'])) {
        //         $data = [
        //             'username' => $user['username'],
        //             'role' => $user['role']
        //         ];
        //         $this->session->set_userdata($data);
        //         if ($user['role'] == 'admin') {
        //             redirect('admin');
        //         } else {
        //             redirect('member');
        //         }
        //     } else {
        //         $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah !</div>');
        //         redirect('auth/login');
        //     }
        // } else {
        //     $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username Salah!</div>');
        //     redirect('auth/login');
        // }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        echo '<script>alert("Anda berhasil logout.");window.location.href="' . base_url('auth/login') . '";</script>';
    }
}
