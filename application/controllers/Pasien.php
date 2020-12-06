<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pasien extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pasienModel');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {
        $data['pasien'] = $this->pasienModel->getAllPasien();
        $this->load->view('pasien/index', $data);
    }

    public function daftar_pasien()
    {
        $this->load->view('pasien/v-form-pasien');
    }

    public function proses_daftar()
    {
        $config = array(
            array(
                'field' => 'kd_pasien',
                'label' => 'Kode',
                'rules' => 'required|max_length[8]',
                'errors' => array(
                    'required' => 'Field kode wajib untuk diisi.',
                    'max_length' => 'Kode pasien maksimal 8 karakter'
                ),
            ),
            array(
                'field' => 'nm_pasien',
                'label' => 'Nama',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'Field nama wajib untuk diisi.'
                ),
            ),
            array(
                'field' => 'tgl_lahir',
                'label' => 'Tanggal',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'Field tanggal wajib untuk diisi.'
                ),
            ),
            array(
                'field' => 'alm_pasien',
                'label' => 'Alamat',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'Field alamat wajib untuk diisi.'
                ),
            ),
            array(
                'field' => 'telp_pasien',
                'label' => 'Telepon',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'Field nomor telepon wajib untuk diisi.'
                ),
            ),
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {
            $errors = $this->form_validation->error_array();
            $this->session->set_flashdata('errors', $errors);
            $this->session->set_flashdata('input', $this->input->post());
            redirect('pasien/index');
        } else {
            $kode = $this->input->post('kd_pasien');
            $nama = $this->input->post('nm_pasien');
            $tanggal = $this->input->post('tgl_lahir');
            $alamat = $this->input->post('alm_pasien');
            $telepon = $this->input->post('telp_pasien');
            $data = [
                'kd_pasien' => $kode,
                'nm_pasien' => $nama,
                'tgl_lahir' => $tanggal,
                'alm_pasien' => $alamat,
                'telp_pasien' => $telepon
            ];

            $insert = $this->pasienModel->daftar("pasien", $data);
            if ($insert) {
                echo '<script>alert("Data pasien berhasil ditambahkan");window.location.href="' . base_url('pasien/index') . '";</script>';
            }
        }
    }
}
