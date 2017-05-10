<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Divisi extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->gallerypath = realpath(APPPATH.'../uploads');
		$this->gallery_path_url = base_url().'uploads/';
		$this->load->model('modelku');

		if(null===$this->session->userdata('username')){
			redirect('login');
		}
	}
	public function index(){
		$error = array(
			'error_image'	=> '',
			'error_name'	=> ''
			);
		$isi['content']		= 'departemen/tabel_depart';
		$isi['judul']		= 'HIMATIF';
		$isi['sub_judul']	= 'Department';
		$isi['data']		= $this->modelku->GetDivisi();
		$this->load->view('halaman_utama',$isi,$error);
		 // $this->data = array('get_image' => $this->db->get('departemen'));
	}
	public function add_data(){
		$isi['content'] 	= 'departemen/form_add';
		$isi['judul']		= 'HIMATIF';
		$isi['sub_judul']	= 'Department | form add';
		$isi['data']		= $this->modelku->GetDivisi();

		$this->load->view('halaman_utama',$isi);
	}
	public function simpan(){
		$this->load->helper(array('form','file','url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_dep','nama_dep','trim|required');
	//file proses
		$konfigurasi = array(
		'allowed_types'		=>'jpg|png|gif',  
		'upload_path'		=> './uploads/img/',
		'overwrite'			=> FALSE,
		'remove_spaces'		=> TRUE,
		'max_size'			=> '2048000'
		);
		$this->load->library('upload',$konfigurasi);
		
		if($this->form_validation->run()==true and !empty($_FILES['userfile']['name'][0])){
			$this->upload->do_upload();
			$data = array('upload_data'	=> $this->upload->data());
			$this->image_resize($data['upload_data']['full_path'],$data['upload_data']['file_name']);
			  $data = array(
			  	'kode_dep' 		=> $this->input->post('kode_dep'),	
				'nama_lengkap'	=> $this->input->post('nama_lengkap'),
				'jabatan'		=> $this->input->post('jabatan'),
				'kontak'		=> $this->input->post('kontak'),
				'foto' 			=> $data['upload_data']['file_name'],
				'id_struktur' 	=> $this->input->post('id_struktur')
			  	); 
			  // var_dump($data);
			$this->modelku->SimpanDivisi($data);
			echo $this->session->set_flashdata('message','Data berhasil di simpan !');
			redirect('divisi');
		}
	}	
	public function edit($kd){
		$isi['content']		= 'departemen/form_edit';
		$isi['judul']		= 'HIMATIF';
		$isi['sub_judul']	= 'Department | edit';
		$isi['data']		= $this->modelku->GetImage($kd);	

		$isi['dep']		= $this->modelku->GetDivisiByKd($kd);
		$this->load->view('halaman_utama',$isi);
	}
	public function update(){
		$this->load->helper(array('form','file','url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_dep','nama_dep','trim|required');
	//file proses
		$konfigurasi = array(
		'allowed_types'		=>'jpg|png|gif',  
		'upload_path'		=> './uploads/img/',
		'overwrite'			=> FALSE,
		'remove_spaces'		=> TRUE,
		'max_size'			=> '60000'
		);
		$this->load->library('upload',$konfigurasi);
		
		if($this->form_validation->run()==true and !empty($_FILES['userfile']['name'][0])){
			$this->upload->do_upload();
			$data = array('upload_data'	=> $this->upload->data());
			$this->image_resize($data['upload_data']['full_path'],$data['upload_data']['file_name']);
			$kode_dep = $this->input->post('kode_dep');
			$query = $this->db->query("Select * from departemen where kode_dep = '{$kode_dep}'");
			foreach($query->result() as $row){
				unlink('./uploads/img/'.$row->foto);
				unlink('./uploads/img/thumb/'.$row->foto);
			}
			  $data = array(
			  	'kode_dep' 		=> $this->input->post('kode_dep'),
				'nama_lengkap'	=> $this->input->post('nama_lengkap'),
				'jabatan'		=> $this->input->post('jabatan'),
				'kontak'		=> $this->input->post('kontak'),
				'foto' 			=> $data['upload_data']['file_name']
			  	); 
			$this->modelku->update_divisi($data,$kode_dep);
			echo $this->session->set_flashdata('message','Data berhasil di Update !');
			redirect('divisi',$data);
		}
	}
	public function do_delete($kode_dep){
		$query = $this->db->query("Select * from departemen where kode_dep = '{$kode_dep}'");
		foreach($query->result() as $row){
			unlink('./uploads/img/'.$row->foto);
			unlink('./uploads/img/thumb/'.$row->foto);
		}
		$this->db->where('kode_dep',$kode_dep);
		$this->db->delete('departemen');
		redirect('divisi');
	}
	public function tampil(){
		$isi['content']		= 'departemen/tampil';
		$isi['judul']		= 'HIMATIF';
		$isi['sub_judul']	= 'Department';
		$isi['data']		= $this->modelku->GetDivisi();
		$this->load->view('halaman_utama',$isi);
	}
	public function simpankas($kd){
		$isi['content']		= 'kas/data_tabel';
		$isi['judul']		= 'HIMATIF';
		$isi['sub_judul']	= 'KAS | edit';
		$isi['dept']		= $this->modelku->GetKasByDep($kd);
		$this->load->view('halaman_utama',$isi);
	}
	public function image_resize($path,$file){
		$config_resize	= array();
		$config_resize['image_library']	= 'gd2';
		$config_resize['source_image']	= $path;
		$config_resize['maintian_ratio']= TRUE;
		$config_resize['width']= 75;
		$config_resize['height']= 50;
		$config_resize['new_image']= 'uploads/img/thumb/'.$file;
		$this->load->library('image_lib',$config_resize);
		$this->image_lib->resize();


	}
}
