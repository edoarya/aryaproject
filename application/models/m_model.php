<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class M_model extends CI_Model
{
	
	public function m_simpan($i){
		$data = $this->db->insert('mahasiswa',$i);
		return $data;
	}
	function searchData($keyword){
		$this->db->like('nama',$keyword);
		$query = $this->db->get('mahasiswa');
		return $query->result();
	}
}