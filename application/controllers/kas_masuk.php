<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Kas_masuk extends CI_Controller
{
	
	function __construct()
	{
	parent::__construct();
		$this->load->library('Pdf_library');
		$this->load->model('mkas_masuk');
		$this->load->helper(array('url'));
		if(null==$this->session->userdata('username')){
			redirect('login');
		}
	}
	public function index(){
		$isi['content']		= 'kas/tabel_kasMasuk';
		$isi['judul']		= 'DATA KAS';
		$isi['sub_judul']	= 'Add Data';
		$isi['data_join']	= $this->mkas_masuk->GetStruktur();

		$this->load->view('halaman_utama',$isi);
	}
	public function simpan_data(){
		$nama_lengkap 	= $this->input->post('nama_lengkap');
		$id_struktur 	= $this->input->post('id_struktur');
		$jml_bayar		= $this->input->post('jml_bayar');
		$tgl_bayar 		= $this->input->post('tgl_bayar');
		$keterangan 	= $this->input->post('keterangan');
		$data = array(
			'nama_lengkap'
			);

	}

}