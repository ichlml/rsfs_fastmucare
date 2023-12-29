<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_Pegawai', 'petugas');
    }

    public function index()
    {
        check_alerdy_login();
        $this->load->view('login');
    }

    public function login()
    {
        $id = $this->input->post('id', true);
        
        $cek = $this->petugas->cekPegawai($id);
        // echo $cek;
        // die;
        if($cek == 1)
        {
            $data = $this->petugas->getPegawai($id);
            // print($data['nama']);
            // die;
            $params = [
                'id' => $data['id'],
                'nama' => $data['nama'],
                'nik' => $data['nik'],
                'bagian' => $data['bidang']
            ];
            $this->session->set_userdata($params);
            redirect('welcome');
        }elseif($cek == 0){
            $this->session->set_flashdata('failed', 'Username atau Password Salah');
            redirect('auth');
        } 
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }

    public function logAdmin()
    {
        $username = $this->input->post("user");

        $cek = $this->petugas->cekAdmin($username);

        // print_r($cek->num_rows());
        // die;
        if($cek->num_rows() == 1){
            $row = $cek->row();

            $params = [
                'id' => $row->id_role,
                'username' => $row->username,
                'rules' => $row->rules,
                'id_teknisi' => $row->id_teknisi,
                'nama_teknisi' => $row->nama_teknisi,
            ];
            $this->session->set_userdata($params);
            redirect('admin/welcome');
        }else{
            $this->session->set_flashdata('failed', 'Username atau Password Salah');
            redirect('admin/welcome');
        }
    }
}