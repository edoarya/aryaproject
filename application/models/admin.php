<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Admin extends CI_Model
{
	
	public function GetContacts(){
		$data = $this->db->get('departemen');
		return $data;
		
	}
	public function getadmin(){
		$data = $this->db->get('admin');
		return $data->result();
	}
	public function getModalAdmin($id){
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('id_username',$id);
		$query = $this->db->get();
		return $query->row();
	}
	public function simpan_admin($i){
		$data = $this->db->insert('admin',$i);
		return $data;
	}
	public function DeleteAdmin($Tablename,$where){
		$row = $this->db->delete($Tablename,$where);
		return $row;
	}
	public function get_login($u,$p,$s){
		$this->db->where('username',$u);
		$this->db->where('password',$p);
		$this->db->where('status="superadmin"',$s);
		$query = $this->db->get('admin');
		return $query->result();
	}
	function ubah($data, $id){
	    $this->db->where('id_username',$id);
	    $this->db->update('admin', $data);
	    return TRUE;
	}
}
