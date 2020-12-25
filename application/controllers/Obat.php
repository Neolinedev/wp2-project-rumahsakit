<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Obat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('obatModel');
    }

    public function index()
    {
        $data['obat'] = $this->obatModel->getAllObat();
        $this->load->view('pasien/pembayaran', $data);
    }
}
