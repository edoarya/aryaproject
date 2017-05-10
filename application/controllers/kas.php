<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*  
*/
class Kas extends CI_Controller
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
		$isi['content']		= 'kas/data_tabel';
		$isi['judul']		= 'KEUANGAN';
		$isi['sub_judul']	= 'Data Kas';
		$isi['join_data']	= $this->keuangan->GetStruktur();
		$isi['dept']		= $this->keuangan->GetDep(); 
		$isi['data']		= $this->keuangan->selectAll();
		$isi['join2']		= $this->keuangan->selectAll2();
		$isi['htg'] 		= $this->keuangan->hitung();
		$isi['tgl'] 		= $this->keuangan->tampil_tgl();
		// $isi['bln'] 		= $this->keuangan->show_bulan();
  
		$this->load->view('halaman_utama',$isi);
	}
	public function tampil(){
		$isi['content']		= 'kas/data_dep';
		$isi['judul']		= 'KEUANGAN';
		$isi['sub_judul']	= 'Data Kas';
		$iis['join_data']	= $this->mdepartemen->GetDept();
		$this->load->view('halaman_utama',$isi);
	}
	public function add_kas(){
		$isi['content']		= 'kas/add_kas';
		$isi['judul']		= 'KEUANGAN';
		$isi['sub_judul']	= 'Data Tambah Kas';
		// $isi['data']		= $this->keuangan->GetKas();
		$this->load->view('halaman_utama',$isi);
	}
	public function simpan(){
		$id_kas		= $this->input->post('id_kas');
		$kode_dep 	= $this->input->post('kode_dep');
		$jml_bayar 	= $this->input->post('jml_bayar');
		$tgl_bayar 	= $this->input->post('tgl_bayar');

		
		if($jml_bayar <= 9999){
			$data = array(
			'id_kas' 	=> $id_kas,
			 'kode_dep' => $kode_dep,
			'jml_bayar' => $jml_bayar,
			'tgl_bayar' => $tgl_bayar,
			'keterangan' => "Belum Lunas"
			);

			$this->keuangan->SimpanKas($data);

		}else{
		$data = array(
			'id_kas' 	=> $id_kas,
			 'kode_dep' => $kode_dep,
			'jml_bayar' => $jml_bayar,
			'tgl_bayar' => $tgl_bayar,   
			'keterangan' => "Lunas"
			);

			$this->keuangan->SimpanKas($data);
		}
		
		$this->session->set_flashdata("pesan","<div class=\"alert alert-warning alert-dismissable\"><button aria-hidden=\"true\" class=\"close\" data-dismiss=\"alert\" >x</button>Selamat ! Proses Insert Berhasil.<a class=\"alert-link\" href=\"#\"> close</a> </div>");
		redirect('kas');
	}
	public function edit($kd){
		$isi['content']		= 'kas/edit_kas';
		$isi['judul']		= 'UBAH KEUANGAN';
		$isi['sub_judul']	= 'Kas | edit';;
		$isi['ks']			= $this->keuangan->GetJoinById($kd); 
		$this->load->view('halaman_utama',$isi);
	}

	// public function print($kode){
	// 	$isi['content']		= 'kas/laporan/tampil_report';
	// 	$isi['judul']		= 'KEUANGAN';
	// 	$isi['sub_judul']	= 'Kas | edit';
	// 	$isi['ctk']			= $this->keuangan->laporan_m($kode);
	// 	$this->load->view('halaman_utama',$isi);
	// }
	public function update(){
		$id_kas		= $this->input->post('id_kas');
		$kode_dep 	= $this->input->post('kode_dep');
		$jml_bayar 	= $this->input->post('jml_bayar');
		$tgl_bayar 	= $this->input->post('tgl_bayar');
		$keterangan = $this->input->post('keterangan');
		if($jml_bayar <= 9999){
			$data = array(
			'jml_bayar' => $jml_bayar,
			'tgl_bayar' => $tgl_bayar,
			'keterangan' => "Belum Lunas"
			);

			$this->keuangan->UpdateKas($data,$id_kas);
			$this->session->set_flashdata("pesan","<div class=\"alert alert-warning alert-dismissable\"><button aria-hidden=\"true\" class=\"close\" data-dismiss=\"alert\" >x</button>Selamat ! Proses Insert Berhasil.<a class=\"alert-link\" href=\"#\"> close</a> </div>");
			redirect('kas');

		}else{
		$data = array(
			
		
			'jml_bayar' => $jml_bayar,
			'tgl_bayar' => $tgl_bayar,   
			'keterangan' => "Lunas"
			);

			$this->keuangan->UpdateKas($data,$id_kas);
		    $this->session->set_flashdata("pesan","<div class=\"alert alert-warning alert-dismissable\"><button aria-hidden=\"true\" class=\"close\" data-dismiss=\"alert\" >x</button>Selamat ! Proses Update Berhasil.<a class=\"alert-link\" href=\"#\"> close</a> </div>");
		    redirect('kas');	
		}
	}
	public function do_delete($id_kas){ 
		$where = array('id_kas' => $id_kas);
		$row = $this->keuangan->DeleteKas('kas',$where);
		if($row >= 1){
			$this->session->set_flashdata("pesan","<div class=\"alert alert-warning alert-dismissable\"><button aria-hidden=\"true\" class=\"close\" data-dismiss=\"alert\" >x</button>Selamat ! Proses HAPUS Berhasil.<a class=\"alert-link\" href=\"#\"> close</a> </div>");
		redirect('kas');
		}
	}	

	public function show_report(){ //eror
		$isi['content']		= 'kas/laporan/tampil_report';
		$isi['judul']		= 'REPORT';
		$isi['sub_judul']	= 'Data Kas';
		$isi['data']		= $this->keuangan->get_data();
		$this->load->view('halaman_utama',$isi);
	}
	 

}