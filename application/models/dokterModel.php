<?php

defined('BASEPATH') or exit('No direct script access allowed');

class dokterModel extends CI_Model
{
    public function getAllDokter()
    {
        return $this->db->get('dokter')->result_array();
    }
}
