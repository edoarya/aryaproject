<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Model_login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		
	}
	public function getlogin($u,$p){
		
		$this->db->where('username',$u);
		$this->db->where('password',$p);
		$query = $this->db->get('admin');
		return $query->result();
	}
	function cek_login($username,$password){
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$this->db->cache_delete_all();
		return $this->db->get('admin');
	}
}