<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->cek_login();
        $this->load->model('dokterModel');
    }

    public function index()
    {
        $data['dokter'] = $this->dokterModel->getAllDokter();
        $this->load->view('dashboard', $data);
    }
}
