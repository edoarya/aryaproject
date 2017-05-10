<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Departemen extends CI_Controller
{
	var $limit = 10;
	var $offset = 10;
	
	function __construct()
	{
		parent::__construct();
		// $this->gallerypath = realpath(APPPATH.'../uploads');
		// $this->gallery_path_url = base_url().'uploads/';
		$this->load->library('Pdf_library','form_validation');
		$this->load->model('mdepartemen');
		$this->load->helper(array('url')); //load helper url

		if(null===$this->session->userdata('username')){
			redirect('login');
		}
	}
	public function index($page=NULL,$offset='',$key=NULL){
		$isi['content']		= 'departemen/tabel_depart';
		$isi['judul']		= 'Departemen | Data';
		$isi['sub_judul']	= 'Departemen | Add | table';
		$isi['data_join']	= $this->mdepartemen->GetStruktur();
		$isi['data']		= $this->mdepartemen->selectAll();
		$isi['query']		= $this->mdepartemen->get_allimage();

		$this->load->view('halaman_utama',$isi);
	}
	public function simpan_data(){
		$this->load->library('upload','form_validation');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_lengkap','nama_lengkap','trim|required');
        $nmfile = "arya_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] 		= './assets/uploads/'; //path folder
        $config['allowed_types'] 	= 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
       	$config['overwrite']		= FALSE;
		$config['remove_spaces']	= TRUE;
        $config['max_size'] 		= '2048'; //maksimum besar file 2M
        $config['file_name'] 		= $nmfile; //nama yang terupload nantinya
 
        $this->upload->initialize($config);
        if($_FILES['userfile']['name'])
        {
	        	if ($this->upload->do_upload('userfile'))
	        	{
	        		$gbr = $this->upload->data();
	        		$data = array(
	        			'kode_dep'		=>$this->input->post('kode_dep'),
	        			'nama_lengkap'	=>$this->input->post('nama_lengkap'),
	        			'id_struktur'	=>$this->input->post('id_struktur'),
	        			'jabatan'		=>$this->input->post('jabatan'),
	        			'hp'			=>$this->input->post('hp'),
	        			'email'			=>$this->input->post('email'),
	        			'foto'			=>$gbr['file_name']
	        			);
	        	 
	       
	        		$this->mdepartemen->get_insert($data,$config); //akses ke model untuk menyimpan data
	        		$this->session->set_flashdata("pesan","<div class=\"alert alert-info alert-dismissable\"><button aria-hidden=\"true\" class=\"close\" data-dismiss=\"alert\" >x</button>Selamat ! Proses Insert Berhasil.<a class=\"alert-link\" href=\"#\"> close</a> </div>");
	        		redirect('departemen');
	        	}else{
	        		$this->session->set_flashdata("pesan","<div class=\"alert alert-danger alert-dismissable\"><button aria-hidden=\"true\" class=\"close\" data-dismiss=\"alert\" >x</button>MAAF ! Proses Insert Gagal, Periksa kembali Format Foto harus berupa file Foto.<a class=\"alert-link\" href=\"#\"> close</a> </div>");
	        		redirect('departemen');
	        	}
        }
	} 
	public function edit($kd){
		$isi['content']		= 'departemen/form_edit';
		$isi['judul']		= 'HIMATIF';
		$isi['sub_judul']	= 'Department | edit';
		$isi['data_join']	= $this->mdepartemen->GetStruktur();
		$isi['str']			= $this->mdepartemen->GetStrukturById($kd);
		$isi['dep']			= $this->mdepartemen->GetDivisiByKd($kd);
		$this->load->view('halaman_utama',$isi);
	}
	public function do_delete($kode_dep){
		$query = $this->db->query("Select * from departemen where kode_dep = '{$kode_dep}'");
		foreach($query->result() as $row){
			unlink('./uploads/'.$row->foto);
		}
		$this->db->where('kode_dep',$kode_dep);
		$this->db->delete('departemen');
		if($kode_dep){
			$this->session->set_flashdata("hapus","<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Proses Hapus berhasil !!</div></div>");
		}else{
			$this->session->set_flashdata("hapus","<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\"> Gagal Hapus. Ulangi Proses Hapus !!</div></div>");
		}
		redirect('departemen');
	}
	public function simpan_ubah(){
		$this->load->helper(array('form','file','url'));
		$this->load->library('upload');
        $nmfile = "arya_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] 		= './assets/uploads/'; //path folder
        $config['allowed_types'] 	= 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
       	$config['overwrite']		= FALSE;
		$config['remove_spaces']	= TRUE;
        $config['max_size'] 		= '2048'; //maksimum besar file 2M
        $config['file_name'] 		= $nmfile; //nama yang terupload nantinya
 
        $this->upload->initialize($config);
        if($_FILES['userfile']['name'])
        {
	        	if ($this->upload->do_upload('userfile'))
	        	{
	        		$gbr = $this->upload->data();
	        		$kode_dep = $this->input->post('kode_dep');
					$query = $this->db->query("Select * from departemen where kode_dep = '{$kode_dep}'");
					foreach($query->result() as $row){
						unlink('./assets/uploads/'.$row->foto);
					}
	        		$data = array(
	        			'kode_dep'		=>$this->input->post('kode_dep'),
	        			'nama_lengkap'	=>$this->input->post('nama_lengkap'),
	        			'id_struktur'	=>$this->input->post('id_struktur'),
	        			'jabatan'		=>$this->input->post('jabatan'),
	        			'hp'			=>$this->input->post('hp'),
	        			'email'			=>$this->input->post('email'),
	        			'foto'			=>$gbr['file_name']
	        			);
	      			// var_dump($data,$kode_dep);
	        		$this->mdepartemen->update($data,$kode_dep); 
	        		$this->session->set_flashdata("pesan","<div class=\"alert alert-info alert-dismissable\"><button aria-hidden=\"true\" class=\"close\" data-dismiss=\"alert\" >x</button>Selamat ! Proses Insert Berhasil.<a class=\"alert-link\" href=\"#\"> close</a> </div>");
	        		redirect('cdocument_file');
	       			 }else{
	        		$this->session->set_flashdata("pesan","<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\"> Gagal Proses. Ulangi Proses !!</div></div>");
	        		
	        		redirect('departemen','refresh');
	        }
        }
	}
	public function generate_pdf_report(){ //CETAK LAPORAN
		$data['dep']	= $this->mdepartemen->selectAll();
		$data['sek']	= $this->mdepartemen->show();
		$this->load->view('departemen/laporan',$data);
	}
}