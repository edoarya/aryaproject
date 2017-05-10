<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model('m_modelku');
		$data = $this->model->m_modelku();
		$this->load->view('v_matakuliah',array('data' => $data));
	}
}
