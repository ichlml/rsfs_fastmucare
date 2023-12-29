<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('m_home', 'home');
		check_not_login();
	}

	public function index()
	{
		// $this->load->view('index');
		$data = [
			'teknisi' => $this->home->getTeknisi()->result()
		];
		$this->template->load('index','pegawai/lapor', $data);
	}

	public function getChatid()
	{
		$id = $this->input->post('id_teknisi');
		// print_r($id_teknisi);
		// die;
		$data = $this->home->getChatid($id)->row();
		echo json_encode($data);
	}

	public function addLapor()
	{
		$post = $this->input->post(null, true);
		$token = "1755341140:AAGBKU4inteHpGIOqzUCLyE-WLYRvxdCGmo"; // token bot
		$text = " ----- Laporan Kerusakan ----- \nTanggal ". $post['tgl_masuk'] ."\nDari Unit/Bagian ". $post['unit'] ." dengan nama pelapor ". $post['nama'] ." \nLaporan : ". $post['judul_laporan']."\nKeterangan : ". $post['ket'] ." \nTerimakasih, Tetep Semangat Menjalani Hidup :D ";
		$data = [
			'text' => $text,
			'chat_id' =>  $post['id_chat'] //   //contoh bot, group id -442697126
		];
		// print_r($post);
		// die;
		$addLapor = $this->home->addLapor($post);
		if($addLapor){
			file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
            $this->session->set_flashdata('success', 'Berhasil Di Laporkan');
            redirect('welcome');
        }else{
            $this->session->set_flashdata('failed', 'Gagal Di Laporkan');
            redirect('welcome');
        }
		
		
	}
}
