<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Detail_keuangan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->model('mdepartemen');
		$this->load->model('keuangan');
		$this->load->helper('date');
		
		if(null===$this->session->userdata('username')){
			redirect('login'); 
		}
	}
	public function index(){
		$isi['content']		= 'kas/laporan/detail_v';
		$isi['judul']		= 'KEUANGAN';
		$isi['sub_judul']	= 'Report';
		$isi['data']		= $this->keuangan->show_detail();
		$this->load->view('halaman_utama',$isi);
	}
	public function simpan($data){
		$data = $this->input->post('tgl_bayar');
		
		 $this->keuangan->getByTgl($data);

		 redirect('Detail_keuangan/show_report');
	}
}