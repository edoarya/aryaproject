<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Mdepartemen extends CI_Model
{
	var $tabel = 'departemen';

	public function GetDep($i){
		$d = $this->db->get('departemen',$i);
		return $d->result();
	}
	public function GetDept(){
		$data = $this->db->get('departemen');
		return $data->result();
	}
	public function GetStr($i){
		$d = $this->db->get('struktur_divisi',$i);
		return $d->result();
	}
	public function strGet(){
		$d = $this->db->get('struktur_divisi');
		return $d->result();
	}
	public function GetStruktur(){
		return $this->db->get('struktur_divisi');
	}
	public function ShowStruktur($i){
		$this->db->select('*');
		$this->db->from('struktur_divisi');
		$this->db->where('id_struktur',$i);
		$query = $this->db->get();
		return $query;
	}
	
	public function selectAll(){  //join tabel departemen dengan struktur divisi
		$this->db->select('departemen.kode_dep, departemen.nama_lengkap,departemen.jabatan,
		departemen.hp,departemen.email,departemen.foto, struktur_divisi.nama_struktur')
		->join('struktur_divisi','struktur_divisi.id_struktur = departemen.id_struktur');
		return $this->db->get('departemen')->result();
	}
	public function get_allimage(){
		$this->db->from($this->tabel);
		$query = $this->db->get();  

		//cek apakah ada data
		if($query->num_rows()>0){
			return $query->result();
		} 
	}
	public function get_insert($data){
		$this->db->insert($this->tabel,$data);
		return TRUE;
	}
	public function get_input($data_dep,$data_str){
		$this->db->insert('departemen',$data_dep);
		$data_str['id_struktur'] = $this->db->insert_id();
		$this->db->insert('struktur_divisi',$data_str);
	}
	public function GetDivisiByKd($kd){
		$this->db->select('*');
		$this->db->from('departemen');
		$this->db->where('kode_dep', $kd);
		$query = $this->db->get();
		return $query->row();
	}
	public function GetStrukturById($kd){
		$this->db->select('*');
		$this->db->from('struktur_divisi');
		$this->db->where('id_struktur',$kd);
		$query = $this->db->get();
		return $query->row();
	}
	public function update($data,$kode_dep){
		$this->db->where('kode_dep',$kode_dep);
		$this->db->update('departemen',$data);
	}
	public function show(){
		$query = $this->db->query('select nama_lengkap from departemen where kode_dep = 44');
		return $query;

	}
	public function hitung3(){ //menjumlahkan kas masuk
		$row =  $this->db->count_all_results('departemen');
		return $row;
	}
	
}