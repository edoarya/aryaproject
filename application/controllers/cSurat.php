<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class CSurat extends CI_Controller
{
	var $limit = 10;
	var $offset = 10;
	
	function __construct()
	{
	parent::__construct();
	$this->load->helper(array('form', 'url'));
	$this->gallerypath = realpath(APPPATH.'../uploads/dokumen');
		$this->gallery_path_url = base_url().'uploads/dokumen/';
		$this->load->model('surat/msurat'); 
		$this->load->library('form_validation');
        
		// $isi['data'] = $this->msurat->getData();

		if(null===$this->session->userdata('username')){
			redirect('login');
		}
	}
    public function Hometemplate(){
        $isi['content']     = 'surat/vhome_dua.php';
        $isi['judul']       = 'TEMPLATE SURAT';
        $isi['sub_judul']   = 'Jenis-jenis';
        // $isi['data']        = $this->msurat->getData();
        $this->load->view('halaman_utama',$isi);
    }
	public function sPem(){
		$isi['content']		= 'surat/vsuratPem';
		$isi['judul']		= 'SURAT PEMBERITAHUAN';
		$isi['sub_judul']	= 'Form Isian';
        $isi['kode']        = $this->msurat->kodeAuto();
		$this->load->view('halaman_utama',$isi);
	}
    public function simpan_spem(){
        $nomor = $this->input->post('nomor');
        $kepada = $this->input->post('kepada');
        $posisi = $this->input->post('posisi');
        $perihal = $this->input->post('perihal');
        $penulis = $this->input->post('penulis');
        $isi    = $this->input->post('isi');
        $data = array(
            'nomor'     => $nomor,
            'kepada'    => $kepada,
            'posisi'    => $posisi,
            'perihal'   => $perihal,
            'penulis'   => $penulis,
            'isi'       => $isi
            );
        $this->msurat->simpanPem($data);
        $this->session->set_flashdata("pesan","<div class=\"alert alert-info alert-dismissable\"><button aria-hidden=\"true\" class=\"close\" data-dismiss=\"alert\" >x</button>Selamat ! Proses Insert Berhasil.<a class=\"alert-link\" href=\"#\"> close</a> </div>");
        redirect('csurat/tampilTabel');
    }
    public function viewPem($no){
        $isi['content']     = 'surat/view_spem';
        $isi['judul']       = 'SURAT PEMBERITAHUAN';
        $isi['sub_judul']   = 'Tampilan';
        $isi['pem']         = $this->msurat->GetNoPem($no);
        $this->load->view('halaman_utama',$isi);
    }
	public function tampilTabel(){
    	$isi['content']		= 'surat/tabel_sPem';
    	$isi['judul']		= ' Surat Pemberitahuan';
    	$isi['sub_judul']	= 'Tabel Data';
    	$isi['data']		= $this->msurat->getSurat(); 

    	$this->load->view('halaman_utama',$isi);
    }
    public function sPin($page=NULL,$offset='',$key=NULL){
    	$isi['content']		= 'surat/vsuratPin';
		$isi['judul']		= 'SURAT PINJAMAN ALAT';
		$isi['sub_judul']	= 'Form Isian';
		$isi['data']		= $this->msurat->getSuratPin();
		$isi['data_join']	= $this->msurat->getDep();
		$this->load->view('halaman_utama',$isi);
    }
    public function tampil_SPin(){
    	$isi['content']		= 'surat/tabel_sPin';
    	$isi['judul']		= 'Surat Pemberitahuan';
    	$isi['sub_judul']	= 'Tabel Data';
    	$isi['data']		= $this->msurat->getSuratPin();
    	$isi['join']		= $this->msurat->selectAll();
    	// $isi['data']		= $this->msurat->tampilKode($kode);


    	$this->load->view('halaman_utama',$isi);
    }
    public function simpan_sPin(){
    	$penerima = $this->input->post('penerima');
    	$perihal = $this->input->post('perihal');
    	$kode_dep = $this->input->post('kode_dep');
    	$isi 	  = $this->input->post('isi');
    	$data = array(
    		'penerima'	=> $penerima,
    		'kode_dep'	=> $kode_dep,
    		'isi'		=> $isi
    		);
    	 $this->msurat->simpanSpin($data);
    	 redirect('csurat/sPin');
    }
    public function cetak(){
    ob_start();
    $data['pem'] = $this->msurat->getPem();
    // $data['siswa'] = $this->siswa_model->view_row();
    $this->load->view('surat/lembarPdf', $data);
    $html = ob_get_contents();
    ob_end_clean();  
        require_once('./assets/html2pdf/html2pdf.class.php');
    $pdf = new HTML2PDF('P','A4','en');
    $pdf->WriteHTML($html);
    $pdf->Output('Data Siswa.pdf', 'I');
    }
   public function cetakdok($no){
        $isi['pem'] = $this->msurat->GetNoPem($no);
        ob_start();
        // $data['siswa'] = $this->siswa_model->view_row();
        $this->load->view('surat/lembarPdf', $isi);
        $html = ob_get_contents();
        ob_end_clean();  
            require_once('./assets/html2pdf/html2pdf.class.php');
        $pdf = new HTML2PDF('P','A4','en');
        $pdf->WriteHTML($html);
        $pdf->Output('Data Siswa.pdf', 'I');
    }
    public function hapus_sPem($no){
        $where = array('nomor' => $no);
        $row = $this->msurat->delete_sPem('spemberitahuan',$where);
        if($row){
            $this->session->set_flashdata("pesan","<div class=\"alert alert-success alert-dismissable\"><button aria-hidden=\"true\" class=\"close\" data-dismiss=\"alert\" >x</button>Selamat ! Proses Delete Berhasil.<a class=\"alert-link\" href=\"#\"> close</a> </div>");
        redirect('csurat/tampilTabel');
        }
    }
    public function hapus_sPem2($no){
        $where = array('no' => $no);
        $row = $this->msurat->delete_sPem2('spemberitahuan_dua',$where);
        if($row){
            $this->session->set_flashdata("pesan","<div class=\"alert alert-success alert-dismissable\"><button aria-hidden=\"true\" class=\"close\" data-dismiss=\"alert\" >x</button>Selamat ! Proses Delete Berhasil.<a class=\"alert-link\" href=\"#\"> close</a> </div>");
            redirect('csurat/tampiltabel_dua');
        }

    }
    public function edit_sPem($kode){
        $isi['content'] = 'surat/vedit_Spem';
        $isi['judul']   = 'Form Editing';
        $isi['sub_judul']   = 'Surat Pemberitahuan';
        $isi['pem']  = $this->msurat->getPemByid($kode);
        $this->load->view('halaman_utama',$isi);
    }
    public function edit_sPem2($kode){
        $isi['content'] = 'surat/vspem_dua/edit_spem_dua';
        $isi['judul']   = 'Form Editing';
        $isi['sub_judul']   = 'Surat Pemberitahuan 2';
        $isi['pem']  = $this->msurat->GetNoPem2($kode);
        $this->load->view('halaman_utama',$isi);
    }
    public function update_sPem(){
        $nomor      = $this->input->post('nomor');
        $kepada     = $this->input->post('kepada');
        $posisi     = $this->input->post('posisi');
        $perihal    = $this->input->post('perihal');
        $penulis    = $this->input->post('penulis');
        $isi        = $this->input->post('isi');
        $data = array(
            'kepada'    => $kepada,
            'posisi'    => $posisi,
            'perihal' => $perihal,
            'penulis' => $penulis,
            'isi'     => $isi
            );
        $this->msurat->simpanUpdateSpem($data,$nomor);
        $this->session->set_flashdata("pesan","<div class=\"alert alert-info alert-dismissable\"><button aria-hidden=\"true\" class=\"close\" data-dismiss=\"alert\" >x</button>Selamat ! Proses UPDATE Berhasil.<a class=\"alert-link\" href=\"#\"> close</a> </div>");
        redirect('csurat/tampilTabel');
    }
    public function update_sPem2(){
        $no      = $this->input->post('no');
        $kepada     = $this->input->post('kepada');
        $tgl_input  = $this->input->post('tgl_input');
        $posisi     = $this->input->post('posisi');
        $perihal    = $this->input->post('perihal');
        $penulis    = $this->input->post('penulis');
        $isi        = $this->input->post('isi');
        $mengetahui = $this->input->post('mengetahui');
        $pj         = $this->input->post('pj');
        $catatan    = $this->input->post('catatan');
        $data = array(
            'kepada'    => $kepada,
            'posisi'    => $posisi,
            'tgl_input' => $tgl_input,
            'perihal'   => $perihal,
            'penulis'   => $penulis,
            'isi'       => $isi,
            'mengetahui' => $mengetahui,
            'pj'         => $pj,
            'catatan'    => $catatan
            );
        $this->msurat->simpanUpdateSpem2($data,$no);
        $this->session->set_flashdata("pesan","<div class=\"alert alert-info alert-dismissable\"><button aria-hidden=\"true\" class=\"close\" data-dismiss=\"alert\" >x</button>Selamat ! Proses UPDATE Berhasil.<a class=\"alert-link\" href=\"#\"> close</a> </div>");
        redirect('csurat/tampiltabel_dua');
    }



    // s pemberitahuan 2
    public function spem_dua(){
        $isi['content']     = 'surat/vsuratPem_dua';
        $isi['judul']       = 'SURAT PEMBERITAHUAN II';
        $isi['sub_judul']   = 'Form Isian';
        $isi['kode']        = $this->msurat->autokode();
        $this->load->view('halaman_utama',$isi);
    }
    public function simpanspem_dua(){
        $no         = $this->input->post('no');
        $tgl_input  = $this->input->post('tgl_input');
        $kepada     = $this->input->post('kepada');
        $posisi     = $this->input->post('posisi');
        $perihal    = $this->input->post('perihal');
        $penulis    = $this->input->post('penulis');
        $isi        = $this->input->post('isi');
        $mengetahui = $this->input->post('mengetahui');
        $pj         = $this->input->post('pj');
        $catatan    = $this->input->post('catatan');
        $data = array(
            'no'         => $no,
            'tgl_input'  => $tgl_input,
            'kepada'     => $kepada,
            'posisi'     => $posisi,
            'perihal'    => $perihal,
            'penulis'    => $penulis,
            'isi'        => $isi,
            'mengetahui' => $mengetahui,
            'pj'         => $pj,
            'catatan'    => $catatan
            );
        $this->msurat->simpanspem_dua($data);
        $this->session->set_flashdata("pesan","<div class=\"alert alert-success alert-dismissable\"><button aria-hidden=\"true\" class=\"close\" data-dismiss=\"alert\" >x</button>Selamat ! Proses Insert Berhasil.<a class=\"alert-link\" href=\"#\"> close</a> </div>");
        redirect('csurat/tampiltabel_dua');
    }
    public function tampiltabel_dua(){
        $isi['content']     = 'surat/tblsPem_dua';
        $isi['judul']       = 'SURAT PEMBERITAHUAN 2';
        $isi['sub_judul']   = 'Tampilan';
        $isi['data']         = $this->msurat->GetPem2();
        $this->load->view('halaman_utama',$isi);
    }
    //template spem 2
    public function tampiltemp_dua($no){
        $query = $this->db->query("select UPPER('penulis') from spemberitahuan_dua");
        $isi['content']     = 'surat/vspem_dua/temp_view';
        $isi['judul']       = 'TEMPLATE SURAT PEMBERITAHUAN 2';
        $isi['sub_judul']   = 'Tampilan';
        $isi['pem']         = $this->msurat->GetNoPem2($no);
        $this->load->view('halaman_utama',$isi,$query);
    }
    public function cetakdok_spem_dua($no){
        $isi['pem'] = $this->msurat->GetNoPem2($no);
        ob_start();
        // $data['siswa'] = $this->siswa_model->view_row();
        $this->load->view('surat/vspem_dua/cetakPdf', $isi);
        $html = ob_get_contents();
        ob_end_clean();  
            require_once('./assets/html2pdf/html2pdf.class.php');
        $pdf = new HTML2PDF('P','A4','en');
        $pdf->WriteHTML($html);
        $pdf->Output('Surat Pemberitahuan.pdf', 'I');
    }
}