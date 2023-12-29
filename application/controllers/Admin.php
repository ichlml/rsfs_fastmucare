<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pegawai', 'pegawai');
        $this->load->model('m_pelaporan', 'lapor');
    }

    public function index()
    {
        $this->load->view("admin");
    }

    public function welcome()
    {
        $this->template->load("admin/index","admin/dash");
    }

    public function dataPelaporan()
    {
        $id = $this->session->userdata("id_teknisi");
        $data = [
            'pending' => $this->lapor->getPelaporanPendning($id)->result()
        ];

        // print_r($id);
        // die;
        $this->template->load("admin/index","admin/pelaporan/data", $data);
    }
}