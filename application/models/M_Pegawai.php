<?php
use GuzzleHttp\Client;
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Pegawai extends CI_Model {

    private $_client;
    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/restful/api/'
        ]);

    }

    public function cekPegawai($id)
    {
        $res = $this->_client->request('GET', 'petugas/countPegawai', [
            'query' => [
                'id' => $id
            ]
        ]);

         $result = json_decode($res->getBody()->getContents(), true);
        return $result['data'];
    }

    public function getPegawai($id)
    {
        $res = $this->_client->request('GET', 'petugas', [
            'query' => [
                'id' => $id
            ]
        ]);

         $result = json_decode($res->getBody()->getContents(), true);
        return $result['data'];
    }

    public function cekAdmin($username)
    {
        $this->db->select("*");
        $this->db->from("tb_teknisi");
        $this->db->join("tb_rules", "id_teknisi");
        $this->db->where("username", $username);
        return $this->db->get();
    }

 }