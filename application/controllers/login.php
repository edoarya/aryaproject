<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		
		
	}

	public function index()
	{
		$this->load->view('tampilan_login');
	}
	public function getlogin(){

		$u = $this->input->post('username'); 
		$p = $this->input->post('password');
		$this->load->model('model_login');
		$c = $this->model_login->getlogin($u,$p);

		if($c){
			foreach($c as $row){
				$data = array(
					'username'		=>$row->username,
					'nama_lengkap'	=>$row->nama_lengkap,
					);
				$this->session->set_userdata($data);
			}
				redirect('home');
			}else{
				$this->session->set_flashdata(
					'info',"<font color='red'><b><i>The Username or Password is not correct !</i></b></font>");
				redirect('login');
			}
		}
		
}

