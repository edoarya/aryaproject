<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Struktur_div extends CI_Controller
{
	var $limit = 10;
	var $offset = 10;
	function __construct() 
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('mstruktur_div'); 
		$this->load->model('modelku');
		$this->load->library('pagination');
		if(null===$this->session->userdata('username')){
			redirect('login');
		}
	}
	public function index(){
		$isi['content']		= 'team/dep_list';
		$isi['judul']		= 'Struktur HIMATIF';
		$isi['sub_judul']	= 'List | Divisi.';
		$isi['data']		= $this->mstruktur_div->GetStruktur();
		$this->load->view('halaman_utama',$isi);
	}
	public function add_struktur(){
		$id_struktur 	= $this->input->post('id_struktur');
		$nama_struktur 	= $this->input->post('nama_struktur');
		$visi_misi 		= $this->input->post('visi_misi');
		$data = array(
			'id_struktur'	=> $id_struktur,
			'nama_struktur'	=> $nama_struktur,
			'visi_misi'		=> $visi_misi,
			);
		$this->mstruktur_div->Simpan_struktur($data); 
		redirect('struktur_div');
	}
	// 
	public function update($id){
		$isi['content']		= 'team/form_edit';
		$isi['judul']		= 'EDIT FORM';
		$isi['sub_judul']	= 'Struktur | edit';
		$isi['mdl']			= $this->mstruktur_div->GetStrukturID($id);
		$this->load->view('halaman_utama',$isi);
	}
	public function edit($id){
	 	$isi['content'] 	= 'team/form_edit';
		$isi['judul']		= 'Master';
		$isi['sub_judul']	= 'Data Edit ';
		$isi['str']			= $this->mstruktur_div->GetUpdateStruktur($id);
		$this->load->view('halaman_utama',$isi);
	 }
	public function update_struktur(){
		
		$id_struktur 	= $this->input->post('id_struktur');
		$nama_struktur 	= $this->input->post('nama_struktur');
		$visi_misi 		= $this->input->post('visi_misi');
		$data = array(
			'nama_struktur'	=> $nama_struktur, 
			'visi_misi'		=> $visi_misi,
			);
		$this->mstruktur_div->update_struktur($data,$id_struktur);
		if($data){
			$this->session->set_flashdata("pesan","<div class=\"alert alert-info alert-dismissable\"><button aria-hidden=\"true\" class=\"close\" data-dismiss=\"alert\" >x</button>Selamat ! Proses Edit Berhasil.<a class=\"alert-link\" href=\"#\"> close</a> </div>");
			redirect('struktur_div/detail_struktur');
		}
	}
	 public function detail_struktur(){
		$isi['content']		= 'team/detail_struktur';
		$isi['judul']		= 'Struktur HIMATIF';
		$isi['sub_judul']	= 'List | Divisi.';
		$isi['data']		= $this->mstruktur_div->GetStruktur();  

		$this->load->view('halaman_utama',$isi);
	}
	 public function struktur_lengkap(){
		$isi['content']		= 'team/detail_struktur';
		$isi['judul']		= 'Struktur HIMATIF';
		$isi['sub_judul']	= 'List | Divisi.';
		$isi['prk']			= $this->modelku->GetUpdateProker($proker);
		$this->load->view('halaman_utama',$isi);
	}
	
	public function do_delete($id_struktur){ 
		$where = array('id_struktur' => $id_struktur);
		$row = $this->mstruktur_div->DeleteStruktur('struktur_divisi',$where);
		if($row >= 1){
			 $this->session->set_flashdata("pesan","<div class=\"alert alert-success alert-dismissable\"><button aria-hidden=\"true\" class=\"close\" data-dismiss=\"alert\" >x</button>Selamat ! Proses Delete Berhasil.<a class=\"alert-link\" href=\"#\"> close</a> </div>");
			redirect ('struktur_div/detail_struktur');
		}
	}
	public function show($id){
		$isi['content']		= 'team/proker_detail';
		$isi['judul']		= 'Struktur HIMATIF';
		$isi['sub_judul']	= 'List | Divisi.';
		$isi['data']	= $this->mstruktur_div->GetStruktur();

		$isi['dep']		= $this->mstruktur_div->GetJoinDep($id,true);	
		$isi['str']		= $this->mstruktur_div->GetJoinStr($id,false);	
		$this->load->view('halaman_utama',$isi);
	}

	public function show_struktur($data){ //menampilkan struktur secara lengkap
		$isi['content']		= 'team/profile_struktur';
		$isi['judul']		= 'Struktur HIMATIF';
		$isi['sub_judul']	= 'List | Divisi.';


		if(!empty($isi['data']		= $this->mstruktur_div->joinStruktur($data))){
			$isi['ket']		= $this->mstruktur_div->show_ketua($data); // tampilkan ketua
			$isi['ft']		= $this->mstruktur_div->show_foto($data);  //tampilkan foto
			$isi['prkr']	= $this->mstruktur_div->show_proker($data); // tampilkan proker
			$isi['htg']		= $this->mstruktur_div->hitung_proker($data); // hitung jumlah proker
			$isi['cetak2'] = $this->mstruktur_div->GetUpdateStruktur($data); 
			$this->load->view('halaman_utama',$isi);
		}else{
			$this->session->set_flashdata("pesan","<div class=\"alert alert-danger alert-dismissable\"><button aria-hidden=\"true\" class=\"close\" data-dismiss=\"alert\" >x</button>Maaf ! Data Anggota Departemen belum ada di Struktur ini, Mohon Lengkapi data Departemen dulu!.<a class=\"alert-link\" href=\"#\"> close</a> </div>");
			redirect('struktur_div/detail_struktur'); 
		}
	}

	public function edit_proker($data,$kode){
		$kegiatan 		= $this->input->post('kegiatan');
		$jadwal_mulai 	= $this->input->post('jadwal_mulai');
		$jadwal_selesai = $this->input->post('jadwal_selesai');
		$data = array(
			'kegiatan' => $kegiatan,
			'kegiatan' => $jadwal_mulai,
			'kegiatan' => $jadwal_selesai
			);
		$this->mstruktur_div->update_proker($data,$kode);
		redirect('struktur_div/show_struktur');
	}
	public function simpan_proker(){
		$id_struktur 	= $this->input->post('id_struktur');
		$kegiatan 		= $this->input->post('kegiatan');
		$jadwal_mulai 	= $this->input->post('jadwal_mulai');
		$jadwal_selesai = $this->input->post('jadwal_selesai');
		$keterangan 	= $this->input->post('isi');
		$status	 		= $this->input->post('status');
		$data = array(
			'id_struktur' 	=> $id_struktur,
			'kegiatan' 		=> $kegiatan,
			'jadwal_mulai' 	=> $jadwal_mulai,
			'jadwal_selesai' => $jadwal_selesai,
			'keterangan' 	 => $keterangan,
			'status' 	 	=> $status
			);
		if($data){
			$this->mstruktur_div->insert_proker($data);
			$this->session->set_flashdata("pesan","<div class=\"alert alert-info alert-dismissable\"><button aria-hidden=\"true\" class=\"close\" data-dismiss=\"alert\" >x</button>Selamat ! Proses Input Berhasil.<a class=\"alert-link\" href=\"#\"> close</a> </div>");
			redirect('struktur_div/show_struktur/'.$id_struktur);
		}else{
			$this->session->set_flashdata("gagal","<div class=\"alert alert-danger alert-dismissable\"><button aria-hidden=\"true\" class=\"close\" data-dismiss=\"alert\" >x</button>Maaf ! Proses Input gagal.<a class=\"alert-link\" href=\"#\"> close</a> </div>");
			redirect('struktur_div/detail_struktur'); 
		}
	}
	public function delete_proker($kode_proker){
		$where = array('kode_proker' => $kode_proker);
		$row = $this->mstruktur_div->DeleteStruktur('proker',$where);
		if($row >= 1){
			
		redirect('struktur_div/show_struktur/'.$id_struktur);
		}
	}
	public function view_prokerdetail($data){ // menampilkan detail proker departemen
		$isi['content']		= 'team/view_struktur';
		$isi['judul']		= 'Struktur HIMATIF';
		$isi['sub_judul']	= 'List | Divisi.';
		$isi['prkr']	= $this->mstruktur_div->joinProker($data); // tampilkan proker
		$this->load->view('halaman_utama',$isi);
	}

	public function cetakproker($kode){ //cetak per masing-masing proker
		$isi['prkr']	= $this->mstruktur_div->joinProker($kode);
        $isi['cetak'] = $this->mstruktur_div->getProker($kode);
        ob_start();
        $this->load->view('team/view_struktur', $isi);
        $html = ob_get_contents();
         ob_end_clean();
        require_once('./assets/html2pdf/html2pdf.class.php');
        $pdf = new HTML2PDF('P','A4','en');
        $pdf->WriteHTML($html);
        $pdf->Output('Data-Proker.pdf', 'I');
    }
    public function cetak_allProker2($data){  //cetak semua proker
		
        $isi['prt'] = $this->mstruktur_div->joinProker2($data); //tampilkan data di struktur div
        ob_start();
        $this->load->view('team/cetak_allProker', $isi);
        $html = ob_get_contents();
         ob_end_clean();
        require_once('./assets/html2pdf/html2pdf.class.php');
        $pdf = new HTML2PDF('P','A4','en');
        $pdf->WriteHTML($html);
        $pdf->Output('Data-Proker2.pdf', 'I');
    }

    public function sendmail(){
		$config = array(
			'protocol'	=> 'smtp',
			'smtp_host'	=> 'ssl://smtp.googlemail.com',
			'smtp_port'	=> 465,
			'smtp_user'	=> 'edoarya.2017@gmail.com',
			'smtp_pass' => 'edoarya2017'
			);
		$this->load->library('email',$config);
		$this->email->initialize($config); 
		$this->email->set_newline("\r\n");
		$this->email->from('edoarya.2017@gmail.com','edo');
		$this->email->to($this->input->post('to'));
		$this->email->subject($this->input->post('subject'));
		$this->email->cc($this->input->post('cc'));
		$this->email->message($this->input->post('pesan'));



		if( $this->email->send()){
			
			redirect('struktur_div/show_struktur');
		}else
		{
			echo $this->email->print_debugger();
		}
	}
}