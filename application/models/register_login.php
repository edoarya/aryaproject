<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Register_login extends CI_Model
{
	
	public function GetRegister(){
		$data = $this->db->get('admin');
		return $data->result();
	}
	public function SimpanData($data){
		$dt = $this->db->insert('admin',$data);
		return $dt;
	}
	function is_email_available($email)
	{
		$this->db->where('username',$email);
		$query = $this->db->get('admin');
		//SELECT * FROM ADMIN WHERE USERNAME = '$email'
		if($query->num_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}	
}