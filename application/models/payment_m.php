<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Payment_m extends CI_Model
{
	
	function getData(){
		$data = $this->db->get('payments');
		return $data;
	}
	function getDoku(){
		$query = $this->db->get('payments');
		return $query->result_array();
	}
	function simpanData($d){
		$data = $this->db->insert('payments',$d);
		return $data;
	}
	public function getDataById($course_id){
		$this->db->select('*');
		$this->db->from('payments');
		$this->db->where('course_id',$course_id);
		$query = $this->db->get();
		return $query->result();
	}
	public function getData_doku() {
   		return $this->db->query("SELECT * FROM payments ORDER BY course_id DESC LIMIT 1")->result(); //menampilkan data /row yang terakhir
	}

	public function join_table(){
		$this->db->select('course.type, course.price, payments.course_id, payments.name, payments.email, payments.hp, payments.country, payments.address, payments.TRANSIDMERCHANT')
		->join('course','course.kode_course = payments.kode_course');
		$this->db->order_by("course_id", "DESC"); // tampilkan data dari kolom terakhir
		$this->db->limit(1); // tampilkan 1 kolom terakhir
		return $this->db->get('payments')->result();
	}
	public function getCourse(){
		return $this->db->get('course');
	}
	public function m_notif($i){
		$data = $this->db->insert('doku',$i);
		return $data;
	}
}