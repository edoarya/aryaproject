<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Modelku extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}


	public function GetProdi(){
		$data = $this->db->get('prodi');
		return $data;
	}
	public function GetData(){
		$data = $this->db->get('mata_kuliah');
		return $data;
	}
	public function SimpanProdi($data){
		$data = $this->db->insert('prodi',$data);
		return $data;
		
	}
	public function GetDosen(){
		$data = $this->db->get('dosen');
		return $data;
	}
	public function GetMatkul(){
		$data = $this->db->get('mata_kuliah');
		return $data;
	}
	public function simpan($data){
		$data = $this->db->insert('dosen',$data);
		return $data;
	}
	public function simpanMatkul($d){
		$data = $this->db->insert('mata_kuliah',$d);
		return $data;
	}
	public function GetMahasiswa(){
		$data = $this->db->get('mahasiswa');
		return $data->result();
	}
	public function getMahasiswaByNim($nim){
		$this->db->select('*');
		$this->db->from('mahasiswa');
		$this->db->where('nim', $nim);
		$query = $this->db->get();
		return $query->row();
	}
	public function simpan_mhs($i){
		$this->db->insert('mahasiswa',$i);
		
	}
	public function update_mhs($data, $nim){
		$this->db->set($data);
		$this->db->where('nim', $nim);
		$this->db->update('mahasiswa');
	}
	public function DeleteMhs($Tablename,$where){
		$row = $this->db->delete($Tablename,$where);
		return $row;
	}
	public function DeleteMatkul($Tablename,$where){
		$row = $this->db->delete($Tablename,$where);
		return $row;
	}
	public function DeleteProdi($Tablename, $where){
		$row = $this->db->delete($Tablename,$where);
		return $row;
	}
	public function GetProdiByKd($kd){
		$this->db->select('*');
		$this->db->from('prodi');
		$this->db->where('kd_prodi',$kd);
		$query = $this->db->get();
		return $query->row();
	}
	public function updateprodi($data,$kd){
		$this->db->set($data);
		$this->db->where('kd_prodi',$kd);
		$this->db->update('prodi');
	}
	public function GetUpdateMatkul($matkul){
		$this->db->select('*');
		$this->db->from('mata_kuliah');
		$this->db->where('kode_matkul', $matkul);
		$query = $this->db->get();
		return $query->row();
	}
	public function UpdateMatkul($data,$mtk){
		$this->db->set($data);
		$this->db->where('kode_matkul',$mtk);
		$this->db->update('mata_kuliah');
	}
	public function GetDivisi(){
		$data = $this->db->get('departemen');
		return $data->result();
	}
	public function GetImage($kd){
		$this->db->select('*');
		$this->db->from('departemen');
		$this->db->where('kode_dep',$kd);
		$query = $this->db->get();
		return $query->row();
	}
	public function SimpanDivisi($d){	
		$this->db->insert('departemen',$d);
	
	}
	public function GetDivisiByKd($kd){
		$this->db->select('*');
		$this->db->from('departemen');
		$this->db->where('kode_dep', $kd);
		$query = $this->db->get();
		return $query->row();
	}
	public function UpdateDivisi($data,$kd){
		$this->db->set($data);
		$this->db->where('kode_dep',$kd);
		$this->db->update('departemen');
	}
	public function DeleteDivisi($Tablename,$where){
		$row = $this->db->delete($Tablename,$where);
		return $row;
	}
	public function GetProker(){
		$data = $this->db->get('proker');
		return $data->result();
	}
	public function SimpanProker($d){
		$data = $this->db->insert('proker',$d);
	}
	
	public function GetStruktur(){
		$data = $this->db->get('struktur');
		return $data->result();
	}
	public function SimpanStruktur($kode){
		$data = $this->db->insert('struktur',$kode);
		return $data;
		}
	public function GetUpdateProker($proker){
			$this->db->select('*');
			$this->db->from('proker');
			$this->db->where('kode_proker',$proker);
			$query = $this->db->get();
			return $query->row();
		}
	public function UpdateProker($data,$kd){
		$this->db->set($data);
		$this->db->where('kode_proker',$kd);
		$this->db->update('proker');
	}
	public function DeleteProker($Tablename,$where){
	$row = $this->db->delete($Tablename,$where);
	return $row;
	}
	public function GetUpdateStruktur($data){
		$this->db->select('*');
		$this->db->from('struktur');
		$this->db->where('kode_struktur',$data);
		$query = $this->db->get();
		return $query->row();
	}
	public function UpdateStruktur($data,$kd){
		$this->db->set($data);
		$this->db->where('kode_struktur',$kd);
		$this->db->update('struktur');
	}
	public function DeleteStruktur($Tablename,$where){
		$row = $this->db->delete($Tablename,$where);
		return $row;

	}
	public function insert($dep){
		$this->db->insert('departemen',$dep);
	}
	
	public function GetDokByKd($kd){
		$this->db->select('*');
		$this->db->from('dokumen');
		$this->db->where('kode_dok', $kd);
		$query = $this->db->get();
		return $query->row();
	}
	public function GetDokumen(){
		$data = $this->db->get('dokumen');
		return $data->result();
	}
	public function SimpanDok($d){
	$this->db->insert('dokumen',$d);
	}
	public function SimpanUbah($data,$kd){
		$this->db->set($data);
		$this->db->where('kode_dok',$kd);
		$this->db->update('dokumen');

	}
	public function editDok($kd){
		$this->db->select('*');
		$this->db->from('dokumen');
		$this->db->where('kode_dok',$kd);
		$query = $this->db->get();
		return $query->row();
	}
	public function updateDok($data,$kode){
		$this->db->set($data);
		$this->db->where('kode_dok',$kode);
		$this->db->update('dokumen');
	}
	public function DeleteDok($Tablename,$where){
		$row = $this->db->delete($Tablename,$where);
		return $row;
	}
	public function update_divisi($data,$kode_dep){
		$this->db->where('kode_dep',$kode_dep);
		$this->db->update('departemen',$data);
	}
	
}