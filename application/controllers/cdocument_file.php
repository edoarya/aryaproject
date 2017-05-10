<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Cdocument_file extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->gallerypath = realpath(APPPATH.'../uploads/dokumen');
		$this->gallery_path_url = base_url().'uploads/dokumen/';
		$this->load->model('mdocument');
		$this->load->library('form_validation');

		if(null===$this->session->userdata('username')){
			redirect('login');
		}
	}
	function index(){
		$isi['content']	= 'documents/tabel_dok';
		$isi['judul']	= 'Dokumen Upload';
		$isi['sub_judul']	= 'Dokumen | add';
		$isi['data']		= $this->mdocument->tampil_file();
		$this->load->view('halaman_utama',$isi);
		$this->load->view('documents/modal_file');  //memanggil MODAL yang ada di folder document/modal_file
	
		}
	function add_file(){
		if($this->input->post('submit')){		
			$this->mdocument->simpan_file();
		}
		$data['hasil']	= $this->mdocument->tampil_file();
		$this->load->view('documents/modal_file',$data);
		redirect('cdocument_file',$data);	
	}

	public function simpan_file(){
		$this->load->library('upload','form_validation');
		$this->form_validation->set_rules('keterangan','keterangan','trim|required');
		$nmfile = "dok_".time(); 

		ini_set('upload_max_filesize', '200M');
    	ini_set('post_max_size', '200M');                               
    	ini_set('max_input_time', 3000);                                
    	ini_set('max_execution_time', 3000);
		$config['upload_path']		= './assets/uploads/dokumen/';
		$config['allowed_types']	= 'pdf|doc|docs|pptx|xlsx';
		$config['overwrite']		= FALSE;
		$config['remove_spaces']	= TRUE;
		$config['max_size'] = '1000000';
		$config['max_width']  = '1024000';
		$config['max_height']  = '768000';
		$config['file_name']		= $nmfile;

		$this->upload->initialize($config);
		if($_FILES['userfile']['name'])
		{
			if($this->upload->do_upload('userfile'))
			{
				$file = $this->upload->data();
				$data = array(
					'judul'	=> $this->input->post('judul'),
					'tanggal_input'	=> $this->input->post('tanggal_input'),
					'keterangan'	=> $this->input->post('keterangan'),
					'nama_file' 	=> $file['file_name']
					);
				$this->mdocument->simpan_file($data, $config);
				$this->session->set_flashdata("pesan","<div class=\"alert alert-info alert-dismissable\"><button aria-hidden=\"true\" class=\"close\" data-dismiss=\"alert\" >x</button>Selamat ! Proses Insert Berhasil.<a class=\"alert-link\" href=\"#\"> close</a> </div>");
	        		redirect('cdocument_file');
			}else{
				$this->session->set_flashdata("pesan","<div class=\"alert alert-danger alert-dismissable\"><button aria-hidden=\"true\" class=\"close\" data-dismiss=\"alert\" >x</button>Maaf ! Proses Insert Gagal, Mohon Periksa File yang di upload.<a class=\"alert-link\" href=\"#\"> close</a> </div>");
					redirect('cdocument_file');
			}
		}
	}	

	public function hapus($kode){
		$query = $this->db->query("select * from dokumen_upload where id_dokumen = '{$kode}'");
		foreach($query->result() as $row){
			unlink('assets/uploads/dokumen/'.$row->nama_file);
		}
		$this->db->where('id_dokumen',$kode);
		$this->db->delete('dokumen_upload');
		redirect('cdocument_file');
	}
	public function update($kd){
		$isi['content'] 	= 'documents/edit_dok';
		$isi['judul']		= 'Update';
		$isi['sub_judul']	= 'Form Update Dokumen';
		$isi['dkm'] = $this->mdocument->GetDokByKd($kd);
		
		$this->load->view('halaman_utama',$isi);
	}
	public function simpanUpdate(){
		$this->load->helper(array('form','file','url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('judul','judul','trim|required');
	//file proses
		$konfigurasi = array(
		'allowed_types'		=>'pptx|docx|doc|pdf|xlsx',  
	 	'upload_path' 		=> $this->gallerypath,
		'overwrite'			=> FALSE,
	 	'remove_spaces'		=> TRUE,
	 	'max_size'			=> '60000'
	 	);
		$this->load->library('upload',$konfigurasi);
		
		if($this->form_validation->run()==true and !empty($_FILES['userfile']['name'][0])){
			$this->upload->do_upload();

			$data = array('upload_data'	=> $this->upload->data());
			$id_dokumen = $this->input->post('id_dokumen');
			$query = $this->db->query("select * from dokumen_upload where id_dokumen = '{$id_dokumen}'");
			foreach($query->result() as $row){
				unlink ('./uploads/dokumen/'.$row->nama_file);
			}
			  $data = array(
			  	'id_dokumen'	=> $this->input->post('id_dokumen'),
				'judul' 		=> $this->input->post('judul'),	
				'tanggal_input'	=> $this->input->post('tanggal_input'),
				'keterangan'	=> $this->input->post('keterangan'),
				'nama_file' 	=> $data['upload_data']['file_name']
			  	); 

			$this->mdocument->UpdateDok($data,$id_dokumen);
			echo $this->session->set_flashdata('message','Data berhasil di simpan !');
			redirect('cdocument_file',$data);
		}
	}
}