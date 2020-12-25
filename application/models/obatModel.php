<?php

defined('BASEPATH') or exit('No direct script access allowed');

class obatModel extends CI_Model
{
    public function getAllObat()
    {
        return $this->db->get('obat')->result_array();
    }
}
