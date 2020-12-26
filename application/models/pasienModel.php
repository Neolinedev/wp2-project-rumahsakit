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

    public function getPasienByKd($kd_pasien)
    {
        return $this->db->get_where('pasien', ['kd_pasien' => $kd_pasien])->row_array();
    }

    public function hapusPasien($data, $table)
    {
        $this->db->where($data);
        $this->db->delete($table);
    }

    public function getPasien($limit, $start)
    {
        return $this->db->get('pasien', $limit, $start)->result_array();
    }

    public function countAll()
    {
        return $this->db->get('pasien')->num_rows();
    }
}
