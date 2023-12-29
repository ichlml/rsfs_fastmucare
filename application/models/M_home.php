<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Home extends CI_Model {

    function getTeknisi()
    {
        return $this->db->get('tb_teknisi');
    }

    public function getChatid($id)
    {
        $this->db->where("id_teknisi", $id);
        return $this->db->get("tb_teknisi");
    }

    public function addLapor($post)
    {
        $params = [
            'id_teknisi' => $post['teknik'],
            'nama' => $post['nama'],
            'unit' => $post['unit'],
            'judul_lapor' => $post['judul_laporan'],
            'keterangan' => $post['ket'],
            'tgl_lapor' => $post['tgl_masuk'],
            'status_laporan' => $post['status_laporan']
        ];

        return $this->db->insert("tb_lapor", $params);
    }

}