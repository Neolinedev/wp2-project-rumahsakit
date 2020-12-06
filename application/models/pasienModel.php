<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pasienModel extends CI_Model
{
    public function daftar($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function getAllPasien()
    {
        return $this->db->get('pasien')->result_array();
    }
}
