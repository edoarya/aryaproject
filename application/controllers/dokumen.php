<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Dokumen extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('modelku');

		if(null===$this->session->userdata('username')){
			redirect('login');
		}
	}
	public function index(){

		$isi['content']		= 'dokumen/tabel_dok';	
		$isi['judul']		= 'Data Upload Dokumen';
		$isi['sub_judul']	= 'Dokumen | Tabel';
		$isi['data']		= $this->modelku->GetDokumen();
		

		
		$this->load->view('halaman_utama',$isi);
	}
	public function add_dok(){
		$isi['content']		= 'dokumen/add_dok';
		$isi['judul']		='Data Upload Dokumen';
		$isi['sub_judul']	='Dokumen | Upload';
		
		$this->load->view('halaman_utama',$isi);
	}
	public function simpan(){
		//file proses upload
		
				$config['upload_path']          = './uploads/dokumen';
                $config['allowed_types']        = 'doc|docs|pdf';
                $config['max_size']             = '100'; //1024 = 1 MB

                $this->load->library('upload', $config);

					if ( ! $this->upload->do_upload('nama_dok'))
				{
					$error = array('error' => $this->upload->display_errors());
						echo var_dump($error);		
				}
				else
				{
              
               $file_data = array('upload_data' => $this->upload->data());

			   $kode_dok 		= $this->input->post('kode_dok');
			   $tanggal_tambah 	= $this->input->post('tanggal_tambah');
			   $keterangan		= $this->input->post('keterangan');
			   $nama_dok 		= $this->input->post('nama_dok');
			   $data = array(
			   	'kode_dok'			=> $kode_dok,
			   	'tanggal_tambah'	=> $tanggal_tambah,
			   	'keterangan'		=> $keterangan,
			   	'nama_dok'			=> $file_data['upload_data']['file_name'],
			   	);
			  	$this->modelku->SimpanDok($data);
			   if($data >=1){
			   	echo $this->session->set_flashdata('message','Data berhasil di simpan !');
			   	redirect('dokumen');
			   }else{
			   	echo $this->session->set_flashdata('message','gagal input data');
			   	redirect('dokumen');
			   }
			}	
		}
		public function edit($kd){
			$isi['content']		= 'dokumen/edit_doc';
			$isi['judul']		= 'Form Edit';
			$isi['sub_judul']	= 'form dokumen | edit';
			$isi['dkm']		= $this->modelku->editDok($kd);
			$this->load->view('halaman_utama',$isi);
		}
		public function simpanEdit(){
			//file proses upload
				$config['upload_path']          = './uploads/dokumen';
                $config['allowed_types']        = 'doc|docs|pdf';
                $config['max_size']             = 10000;

                $this->load->library('upload', $config);

				if ( ! $this->upload->do_upload('nama_dok'))
				{
					$error = array('error' => $this->upload->display_errors());
						echo var_dump($error);		
				}
				else
				{
               $file_data = array('upload_data' => $this->upload->data());

			$kode_dok = $this->input->post('kode_dok');
			$tanggal_tambah = $this->input->post('tanggal_tambah');
			$keterangan = $this->input->post('keterangan');
			$nama_dok	=	$this->input->post('nama_dok');
			$data = array(
				'tanggal_tambah'=> $tanggal_tambah,
				'keterangan'	=>$keterangan,
				'nama_dok'		=> $file_data['upload_data']['file_name'],
				);
			
			$this->modelku->updateDok($data,$kode_dok);
			redirect('dokumen');
		}
	}
	public function do_delete($kode_dok){
		$where 	= array('kode_dok' =>$kode_dok);
		$row 	= $this->modelku->DeleteDok('dokumen',$where);
		if($row){
			redirect('dokumen');
		}
	}
		
}