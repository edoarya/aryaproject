<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Proker extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('modelku');
		$this->load->library('form_validation');
		if(null===$this->session->userdata('username')){
			redirect('login');
		}
	}
	public function index(){
	
		$isi['content'] 	= 'proker/tabel_proker';
		$isi['judul']		= 'Master';
		$isi['sub_judul']	= 'Data Proker';
		$isi['data']		= $this->modelku->GetProker();
		
		$this->load->view('halaman_utama',$isi);
	}
	public function add_data(){
		$isi['content'] 	= 'proker/add_data';
		$isi['judul']		= 'Master';
		$isi['sub_judul']	= 'Data Tambah Proker';
		$this->load->view('halaman_utama',$isi);
	}
	 public function simpan(){
	 	$kode_proker 	= $this->input->post('kode_proker');
	 	$jadwal_mulai 	= $this->input->post('jadwal_mulai');
	 	$jadwal_selesai	= $this->input->post('jadwal_selesai');
	 	$kegiatan	 	= $this->input->post('kegiatan');
	 	$keterangan	 	= $this->input->post('keterangan');
	 	$data =  array(
	 		'kode_proker'	=>$kode_proker,
	 		'jadwal_mulai'	=>$jadwal_mulai,
	 		'jadwal_selesai'=>$jadwal_selesai,
	 		'kegiatan'		=>$kegiatan,
	 		'keterangan'	=>$keterangan,
	 		);
	 	$this->modelku->SimpanProker($data);
	 	redirect('proker');
	 }
	 public function edit($proker){
	 	$isi['content'] 	= 'proker/edit_data';
		$isi['judul']		= 'Master';
		$isi['sub_judul']	= 'Data Edit Proker';
		$isi['prk']			= $this->modelku->GetUpdateProker($proker);
		$this->load->view('halaman_utama',$isi);
	 }
	 public function update(){
	 	$kode_proker 	= $this->input->post('kode_proker');
	 	$jadwal_mulai 	= $this->input->post('jadwal_mulai');
	 	$jadwal_selesai	= $this->input->post('jadwal_selesai');
	 	$kegiatan	 	= $this->input->post('kegiatan');
	 	$keterangan	 	= $this->input->post('keterangan');
	 	$data =  array(
	 		'jadwal_mulai'	=>$jadwal_mulai,
	 		'jadwal_selesai'=>$jadwal_selesai,
	 		'kegiatan'		=>$kegiatan,
	 		'keterangan'	=>$keterangan,
	 		
	 		);
	 	$this->modelku->UpdateProker($data,$kode_proker);
	 	redirect('proker');
	 }
	 public function do_delete($kode_proker){
	 	$where = array('kode_proker' => $kode_proker);
	 	$row = $this->modelku->DeleteProker('proker',$where);
	 	if($row>=1){
	 		redirect('proker');
	 	}
	 }
	 public function view($proker){
	 	$isi['content'] 	= 'proker/view_data';
		$isi['judul']		= 'PROKER';
		$isi['sub_judul']	= 'View Data Proker';
		$isi['prk']			= $this->modelku->GetUpdateProker($proker);
		$this->load->view('halaman_utama',$isi);
	 }

}