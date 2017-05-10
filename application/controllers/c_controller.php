<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class C_Controller extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
			$this->load->model('m_model');
		
	}
	function index(){
		$keyword = $this->input->post('keyword');
		$isi['results'] = $this->m_model->searchData($keyword);
		$this->load->view('v_form',$isi); //menampilkan form pada tampilan pertama
	}
	function simpanData(){ //untuk menyimpan data ke dalam database
		$nama = $this->input->post('nama');
		$nim = $this->input->post('nim');
		$alamat = $this->input->post('alamat');
		$data = array(
			'nama' => $nama,
			'nim' => $nim,
			'alamat' => $alamat
			);
		$this->m_model->m_simpan($data);
		redirect('c_controller');
	}
	function search_keyword(){
		$keyword = $this->input->post('keyword');
		$isi['results'] = $this->m_model->searchData($keyword);
		$this->load->view('v_form',$isi); //menampilkan form pada tampilan pertama
	}
}