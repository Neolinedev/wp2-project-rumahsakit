<?php
defined('BASEPATH') or exit('No direct script access allowed');

class authModel extends CI_Model
{
    public function register($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function cek_login($username)
    {
        $hasil = $this->db->where('username', $username)->limit(1)->get('user');
        if ($hasil->num_rows() > 0) {
            return $hasil->row();
        } else {
            return array();
        }
    }
}
