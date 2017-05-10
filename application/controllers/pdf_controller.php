<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Pdf_controller extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('Pdf_library');
		$this->load->model('Pdf_model');
	}
	public function index(){
		$isi['content']	="tabel_student";
		$isi['judul']	="TRIAL PRINT";
		$isi['sub_judul']	="TRIAL PRINT | STUDENT";
		$isi['data']		= $this->Pdf_model->select_student();

		$this->load->view('halaman_utama',$isi);
	}
	public function generate_pdf_report(){
		$data['student']	= $this->Pdf_model->select_student();
		$this->load->view('students_report',$data);
	}
}