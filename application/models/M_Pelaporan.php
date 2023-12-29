<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Pelaporan extends CI_Model {

    public function getPelaporanPendning($id)
    {
        $this->db->where("status_laporan","pending");
        $this->db->where("id_teknisi", $id);
        return $this->db->get("tb_lapor");
    }
}