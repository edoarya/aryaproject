<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctr_login extends CI_Controller {

	public function index()
	{
		$this->load->view('tampilan_login');
	}
	public function get_login(){
		$u = $this->input->post('username');
		$p = $this->input->post('password');
		$this->load->model('login_mod');
		$data = $this->login_mod->get_login($u,$p);

		if($data){
			foreach($data as $row){
				$a = array(
					'username'		=> 	$row->username,
					'nama_lengkap'	=>	$row->nama_lengkap,
					'foto'			=>	$row->foto,
					);
				$this->session->set_userdata($a);
			}
			redirect('home');
		}else{
			$this->session->set_flashdata(
				'info',"<font color='red'><b><i>The Username or Password is not correct !</i></b></font>"
				);
			redirect('ctr_login');
		}

	}
}
