<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
/**
* 
*/
class Gallery extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('mupload_gallery');
		$this->gallerypath = realpath(APPPATH.'../uploads/galeri');
		$this->gallery_path_url = base_url().'uploads/galeri/';
		$this->load->library('form_validation');
		if(null===$this->session->userdata('username')){
			redirect('login');
		}
	}

	public function index(){
		$isi['content']		= 'gallery/upld';
		$isi['judul']		= 'Gallery HIMATIF';
		$isi['sub_judul']	= 'gallery | aktifitas';
		$isi['data']		= $this->mupload_gallery->getdata();
		
		$this->load->view('halaman_utama',$isi);
	}
	public function do_upload(){ 
		$this->load->library('upload','form_validation');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('keterangan','keterangan','trim|required');
        $nmfile = "arya_".time(); //nama file saya beri nama langsung dan diikuti fungsi time

        ini_set('upload_max_filesize', '200M');
    	ini_set('post_max_size', '200M');                               
    	ini_set('max_input_time', 3000);                                
    	ini_set('max_execution_time', 3000);
        $config['upload_path'] 		= './assets/uploads/galeri-himatif/'; //path folder
        $config['allowed_types'] 	= 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
       	$config['overwrite']		= FALSE;
		$config['remove_spaces']	= TRUE;
       	$config['max_size'] 	= '1000000';
		$config['max_width']  	= '1024000';
		$config['max_height']  	= '768000';
        $config['file_name'] 	= $nmfile; //nama yang terupload nantinya
 
        $this->upload->initialize($config);
        if($_FILES['userfile']['name'])
        {
	        	if ($this->upload->do_upload('userfile'))
	        	{
	        		$gbr = $this->upload->data();
	        		$data = array(
	        			'keterangan'			=>$this->input->post('keterangan'),
	        			'nama_gambar'	=>$gbr['file_name']
	        			);
	        	
	       
	        		$this->mupload_gallery->simpan_file($data,$config); //akses ke model untuk menyimpan data
	        		$this->session->set_flashdata("pesan","<div class=\"alert alert-info alert-dismissable\"><button aria-hidden=\"true\" class=\"close\" data-dismiss=\"alert\" >x</button>Selamat ! Proses Insert Berhasil.<a class=\"alert-link\" href=\"#\"> close</a> </div>");
	        		redirect('gallery');
	        	}else{
	        		$this->session->set_flashdata("pesan","<div class=\"alert alert-danger alert-dismissable\"><button aria-hidden=\"true\" class=\"close\" data-dismiss=\"alert\" >x</button>Maaf ! Proses Insert Gagal.<a class=\"alert-link\" href=\"#\"> close</a> </div>");
	        		redirect('gallery');
	        	}
     	   }
	}
	public function tabel(){
		$isi['content']		= 'gallery/gallery_upload';
		$isi['judul']		= 'Gallery HIMATIF';
		$isi['sub_judul']	= 'gallery | aktifitas';
		$isi['data']		= $this->mupload_gallery->getdata();
		
		$this->load->view('halaman_utama',$isi);
	}
	public function do_delete($no){
		$query = $this->db->query("Select * from data_image where no = '{$no}'");
		foreach($query->result() as $row){
			unlink('assets/uploads/galeri-himatif/'.$row->nama_gambar);
		}
		$this->db->where('no',$no);
		$this->db->delete('data_image');
		if($no){
			$this->session->set_flashdata("hapus","<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Proses Hapus berhasil !!</div></div>");
		}else{
			$this->session->set_flashdata("hapus","<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\"> Gagal Hapus. Ulangi Proses Hapus !!</div></div>");
		}
		redirect('gallery/tabel');
	}
}