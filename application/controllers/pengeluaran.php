<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengeluaran extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('tglindo_helper');
		$this->load->model('keuangan');
		if(null===$this->session->userdata('username')){
			redirect('login');
		}
	}

	public function index(){
		$isi['content']		= 'pengeluaran/pengeluaran_v';
		$isi['judul']		= 'KEUANGAN';
		$isi['sub_judul']	= 'Pengeluaran';
		$isi['data']			= $this->keuangan->getKeluar();
		$isi['htg'] 		= $this->keuangan->hitung2();
		$this->load->view('halaman_utama',$isi);
	}
	public function simpan(){ // simpan ke database pengeluaran
		
		$nama	= $this->input->post('nama');
		$total	= $this->input->post('total');
		$tgl_bayar	= $this->input->post('tgl_bayar');
		$ket	= $this->input->post('ket');
			$data = array(
			'nama'		=> $nama,
			'total'		=> $total,
			'tgl_bayar'=> $tgl_bayar,
			'ket'		=> $ket
			);
		$this->keuangan->simpan_pengeluaran($data);
		$this->session->set_flashdata("pesan","<div class=\"alert alert-info alert-dismissable\"><button aria-hidden=\"true\" class=\"close\" data-dismiss=\"alert\" >x</button>Selamat ! Proses Insert Berhasil.<a class=\"alert-link\" href=\"#\"> close</a> </div>");
		redirect('pengeluaran');
	}
	public function hapus($id_pengeluaran){
		$where =array('id_pengeluaran' => $id_pengeluaran);
		$row = $this->keuangan->do_delete('pengeluaran',$where);
		if($row >= 1){
		redirect('pengeluaran');
		}
	}
}