<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Mymodel extends CI_Model
{
	
	public function getdata($key){
		$this->db->where('nim',$key);
		$hasil = $this->db->get('mahasiswa');
		return $hasil;
	}
	public function getUpdate($key,$data){
		$this->db->where('nim',$key);
		$this->db->update('mahasiswa'.$data);
	}
	public function getInsert($data){
		$this->db->insert('mahasiswa',$data);
	}
	public function GetDosen(){
		$data = $this->db->get('dosen');
		return $data->result();
	}
	public function simpan($data){
		$data = $this->db->insert('dosen',$data);
		return $data;
	}
	public function DeleteData($Tablename, $where){
		$row = $this->db->delete($Tablename,$where);
		return $row;
	}
	public function GetDosenByNid($nid){
		$this->db->select('*');
		$this->db->from('dosen');
		$this->db->where('nid',$nid);
		$query = $this->db->get();
		return $query->row();
	}
	public function UpdateDosen($data,$nid){
		$this->db->set($data);
		$this->db->where('nid',$nid);
		$this->db->update('dosen');
	}

	public function insert($company){
		$data = $this->db->insert('tbl_company',$company);
		return $data;
	}
	public function get_company_update($ID){
		$this->db->select('*');
		$this->db->from('tbl_company');
		$this->db->where('CompanyID',$ID);
		$query = $this->db->get();
			if($query->num_rows() > 0){
				return $query->result();
			}else{
				return $query->result();
			}
	}
	public function get_company(){
		$query =$this->db->get('tbl_company');
		if($query->num_rows() > 0){
				return $query->result();
			}else{
				return $query->result();
			}
	}
	public function update_company($company,$ID){
		$this->db->where('CompanyID',$ID);
		$this->db->update('tbl_company',$company);
	}
	
}