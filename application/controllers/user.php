<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class User extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->view_data['base_url'] = base_url();
		if(null===$this->session->userdata('username')){
			redirect('login');
		}
	}
	public function index(){
		$this->register();
	}
	public function register(){

		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_numeric|min_length[6]');
		$this

		if($this->form_validation->run() == FALSE){
			$this->load->view('view_register',$this->view_data);

		}
		else
		{
			//everything is good 
		}		
	}
	
}