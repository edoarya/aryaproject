<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Contacts extends CI_Controller
{
	
	function __construct()
	{
	parent::__construct();
		$this->load->model('mdepartemen'); 

		if(null===$this->session->userdata('username')){
			redirect('login');
		}
	}
	public function index(){
		$isi['content']		= 'admin/contacts';
		$isi['judul']		= 'CONTACTS';
		$isi['sub_judul']	= 'Data kontak';
		// $isi['datas']		= $this->modelku->GetDivisi();
		$isi['data']		= $this->mdepartemen->selectAll();
		$this->load->view('halaman_utama',$isi);
	}
}