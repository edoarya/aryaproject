<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Model_security extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function getsecurity(){
		$username = $this->session->userdata('username');
		if (empty($username)) {
			$this->session->sess_destroy();
			redirect('login');
		}
	}
}