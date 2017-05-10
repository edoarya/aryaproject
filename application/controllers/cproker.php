<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Cproker extends CI_Controller
{
	var $limit = 10;
	var $offset = 10;

	function __construct()
	{
		parent::__construct();
		$this->load->library('Pdf_library');
		$this->load->model('mproker');
		$this->load->helper(array('url'));
		if(null==$this->session->userdata('username')){
			redirect('login');
		}
	}

	public function index($page=NULL,$offset='',$key=NULL){
		$isi['content']		= 'proker/tabel_proker';
		$isi['judul']		= 'Program Kerja';
		$isi['sub_judul']	= 'Program Kerja | Data';
		$isi['data']		= $this->mproker->selectAll();
		$isi['data_join']	= $this->mproker->GetStruktur();

		$this->load->helper('tglindo_helper');
		$this->load->view('halaman_utama',$isi);
	}
	public function simpan_data(){
		$jadwal_mulai 	= $this->input->post('jadwal_mulai');
		$jadwal_selesai = $this->input->post('jadwal_selesai');
		$id_struktur	= $this->input->post('id_struktur');
		$kegiatan 		= $this->input->post('kegiatan');
		$keterangan 	= $this->input->post('keterangan');
		$data=array(
			'jadwal_mulai'	=> $jadwal_mulai,
			'jadwal_selesai'=> $jadwal_selesai,
			'id_struktur'	=> $id_struktur,
			'kegiatan'		=> $kegiatan,
			'keterangan'	=> $keterangan			
			);
		$this->mproker->simpan($data);
		$this->session->set_flashdata("pesan","<div class=\"alert alert-info alert-dismissable\"><button aria-hidden=\"true\" class=\"close\" data-dismiss=\"alert\" >x</button>Selamat ! Proses Insert Berhasil.<a class=\"alert-link\" href=\"#\"> close</a> </div>");
	        		redirect('cproker','refresh');

	}
	public function do_delete($kode){
		$this->db->where('kode_proker',$kode);
		$this->db->delete('proker');
		if($kode){
			$this->session->set_flashdata("pesan","<div class=\"alert alert-info alert-dismissable\"><button aria-hidden=\"true\" class=\"close\" data-dismiss=\"alert\" ><i class=\"fa fa-times\"></i></button>Selamat ! Proses Hapus Berhasil.<a class=\"alert-link\" href=\"#\"> close</a> </div>");
		}else{
			$this->session->set_flashdata("pesan","<div class=\"alert alert-danger alert-dismissable\"><button aria-hidden=\"true\" class=\"close\" data-dismiss=\"alert\" ><i class=\"fa fa-times\"></i></button>Maaf ! Proses Insert Gagal, mohon ulangi !.<a class=\"alert-link\" href=\"#\"> close</a> </div>");
			}
		redirect('cproker','refresh');
	}
	public function tampil_edit($data){
		$isi['content']		= 'proker/edit_data';
		$isi['judul']		= 'Program Kerja';
		$isi['sub_judul']	= 'Program Kerja | Data';
		$isi['data']		= $this->mproker->selectAll();
		$isi['data_join']	= $this->mproker->GetStruktur();
		$isi['prk']			= $this->mproker->GetUpdate($data);

		$this->load->view('halaman_utama',$isi);
	}
	public function simpan_edit(){
		$kode_proker	= $this->input->post('kode_proker');
		$jadwal_mulai 	= $this->input->post('jadwal_mulai');
		$jadwal_selesai = $this->input->post('jadwal_selesai');
		$kegiatan 		= $this->input->post('kegiatan');
		$keterangan 	= $this->input->post('keterangan');
		$data=array(
			'jadwal_mulai'	=> $jadwal_mulai,
			'jadwal_selesai'=> $jadwal_selesai,
			'kegiatan'		=> $kegiatan,
			'keterangan'	=> $keterangan			
			);
		$this->mproker->update_data($data,$kode_proker);
		$this->session->set_flashdata("pesan","<div class=\"alert alert-info alert-dismissable\"><button aria-hidden=\"true\" class=\"close\" data-dismiss=\"alert\" >x</button>Selamat ! Proses Update Berhasil.<a class=\"alert-link\" href=\"#\"> close</a> </div>");
	        		redirect('struktur_div/detail_struktur/','refresh');
	}
	public function generate_pdf_report(){ //CETAK LAPORAN
		$data['proker']	= $this->mproker->selectAll();
		$this->load->view('proker/laporan',$data);
	}
	
}