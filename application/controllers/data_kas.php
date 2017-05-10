<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Data_kas extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('keuangan');
		
		if(null===$this->session->userdata('username')){
			redirect('login');
		}
	}
	public function index(){
		$isi['content']		= 'kas/tabel';
		$isi['judul']		= 'KEUANGAN';
		$isi['sub_judul']	= 'Data Kas';
		$isi['data']		= $this->keuangan->GetKas();
		$this->load->view('halaman_utama',$isi);
	}
}