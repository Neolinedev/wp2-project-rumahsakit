<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pasien extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->cek_login();
        $this->load->library('pagination');
        $this->load->helper('url');
        $this->load->model('pasienModel');
        $this->load->model('obatModel');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {
        // Pagination
        $config['base_url'] = 'http://localhost/wp2/pasien/index';
        $config['total_rows'] = $this->pasienModel->countAll();
        $config['per_page'] = 8;

        // Styling pagination
        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        // Initialize
        $this->pagination->initialize($config);

        $data['title'] = 'Daftar Pasien';

        $data['start'] = $this->uri->segment(3);
        $data['pasien'] = $this->pasienModel->getPasien($config['per_page'], $data['start']);

        $this->load->view('layout/header', $data);
        $this->load->view('pasien/index', $data);
    }

    public function pembayaran($kd_pasien)
    {
        $data['title'] = 'Form Pembayaran';
        $data['obat'] = $this->obatModel->getAllObat();
        $data['pasien'] = $this->pasienModel->getPasienByKd($kd_pasien);
        $this->load->view('layout/header', $data);
        $this->load->view('pasien/pembayaran', $data);
    }

    public function proses_bayar()
    {
        $jml_bayar = $this->input->post('jml_bayar');
        $tot_harga = $this->input->post('tot_harga');
        $kembalian = 0;
        if ($jml_bayar > $tot_harga) {
            $kembalian = $jml_bayar - $tot_harga;
            echo '<script>alert("Anda berhasil melakukan pembayaran sebesar Rp. ' . $jml_bayar . ' dan Kembalian sebesar Rp. ' . $kembalian . '");window.location.href="' . base_url('pasien/index') . '";</script>';
        } else {
            echo '<script>alert("Anda berhasil melakukan pembayaran sebesar Rp. ' . $jml_bayar . '");window.location.href="' . base_url('pasien/index') . '";</script>';
        }
    }

    public function hapus($kd_pasien)
    {
        $this->db->where('kd_pasien', $kd_pasien);
        $this->db->delete('pasien');

        echo '<script>alert("Anda berhasil menghapus pasien dengan kode ' . $kd_pasien . '"); window.location.href="' . base_url('pasien/index') . '"</script>';
    }

    public function daftar_pasien()
    {
        $data['title'] = 'Form Pendaftaran Pasien';
        $this->load->view('pasien/v-form-pasien');
    }

    public function proses_daftar()
    {
        $config = array(
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
                'rules' => 'required|max_length[12]',
                'errors' => array(
                    'required' => 'Field nomor telepon wajib untuk diisi.',
                    'max_length' => 'Nomor telepon maksimal memiliki 12 angka'
                ),
            ),
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {
            $errors = $this->form_validation->error_array();
            $this->session->set_flashdata('errors', $errors);
            $this->session->set_flashdata('input', $this->input->post());
            redirect('pasien/daftar_pasien');
        } else {
            $nama = $this->input->post('nm_pasien');
            $tanggal = $this->input->post('tgl_lahir');
            $alamat = $this->input->post('alm_pasien');
            $telepon = $this->input->post('telp_pasien');
            $data = [
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
