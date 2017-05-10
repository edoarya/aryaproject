<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Mstruktur_div extends CI_Model
{
	
	function __construct()
	{
		 
	} 
	function GetStruktur(){
		$data = $this->db->get('struktur_divisi');
		return $data->result();

	}	
	function Simpan_struktur($data){
		$i = $this->db->insert('struktur_divisi',$data);
		return $i; 
	}
	public function GetUpdateStruktur($id){
		$this->db->select('*');
		$this->db->from('struktur_divisi');
		$this->db->where('id_struktur',$id);
		$query = $this->db->get();
		return $query->row();
	}
	function update_struktur($data,$id_struktur){
		$this->db->set($data);
		$this->db->where('id_struktur',$id_struktur);
		$this->db->update('struktur_divisi');
	}
	function DeleteStruktur($Tablename,$where){
		$row = $this->db->delete($Tablename,$where);
		return $row;
	}
	function GetDep(){
		$data =  $this->db->get('departemen');
		return $data->result();
	}
	function cari(){
		$this->db->select('*');
		$this->db->from('struktur_divisi');
		$this->db->like('nama_struktur',$keyword);
		$query = $this->db->get();
		return $query;
	}
	function GetJoinDep($id,$active = true){
		$this->db->select('*');
		$this->db->from('struktur_divisi');
		$this->db->join('departemen', 'departemen.kode_dep = struktur_divisi.kode_dep');
		$query = $this->db->get();
		}
	function getdepById($id){
		$this->db->select('*');
		$this->db->from('departemen');
		$this->db->where('id_struktur',$id);
		$query = $this->db->get();
		return $query->row();
	}
	function join_getById($id){
		$this->db->select('*')
		->join('departemen','struktur_divisi.id_struktur = departemen.id_struktur');
		$this->db->from('struktur_divisi');
		$this->db->where('struktur_divisi.id_struktur',$id);
		$query = $this->db->get();
		return $query->row();
		}
	function joinTable(){
		$this->db->select(' departemen.nama_lengkap,departemen.jabatan, departemen.foto, struktur_divisi.nama_struktur,struktur_divisi.visi_misi')
		->join('departemen','departemen.id_struktur = struktur_divisi.id_struktur');
		$this->db->from('struktur_divisi');
		$query = $this->db->get();
		return $query->result();
		}

	function joinStruktur($data){
		$this->db->select('departemen.id_struktur, departemen.kode_dep, departemen.nama_lengkap,departemen.jabatan, departemen.foto, struktur_divisi.nama_struktur,struktur_divisi.visi_misi')
		->join('struktur_divisi','struktur_divisi.id_struktur = departemen.id_struktur');
		$this->db->from('departemen');
		$this->db->where('struktur_divisi.id_struktur' ,$data);
		$query = $this->db->get();
		  return $query->row();
		}


	function show_ketua($data){
		$this->db->select('departemen.nama_lengkap,departemen.jabatan, departemen.foto, struktur_divisi.nama_struktur,struktur_divisi.visi_misi')
		->join('struktur_divisi','struktur_divisi.id_struktur = departemen.id_struktur');
		$this->db->from('departemen');
		$this->db->where('struktur_divisi.id_struktur' OR "jabatan = 'ketua'",$data);
		
		$query = $this->db->get(); 
		return $query->row();
		}
	function show_foto($data){
			$this->db->select('foto');
			$this->db->from('departemen');
			$this->db->where('departemen.id_struktur',$data);
			$query = $this->db->get();
			return $query->result();
		}
	function show_proker($data){
		$this->db->select('kode_proker, status, kegiatan,date_format(jadwal_mulai,"%d-%m-%Y") as jadwal_mulai,date_format(jadwal_mulai,"%d-%m-%Y") as jadwal_selesai');
		$this->db->from('proker');
		$this->db->where('proker.id_struktur', $data);
		$query = $this->db->get();
		return $query->result();
		}
	function hitung_proker($data){
		$this->db->select('count(id_struktur)as id_struktur');
		$this->db->from('proker');
		$this->db->where('id_struktur', $data);
		$query = $this->db->get();
		return $query->result();

	}
	function update_proker($data,$kode){
		$this->db->set($data);
		$this->db->where('kode_dep',$kode);
		$this->db->update('proker');
	}
	function insert_proker($data){
		$data = $this->db->insert('proker',$data);
		return $data;
	}

	function joinProker($data){ //join table struktur dengan proker cetak masing2 proker
		$this->db->select('kode_proker, status, keterangan, kegiatan,date_format(jadwal_mulai,"%d-%m-%Y") as jadwal_mulai,date_format(jadwal_mulai,"%d-%m-%Y") as jadwal_selesai, struktur_divisi.nama_struktur')
		->join('struktur_divisi','struktur_divisi.id_struktur = proker.id_struktur');
		$this->db->from('proker');
		$this->db->where('kode_proker' ,$data);
		$query = $this->db->get();
		  return $query->row();
		}
	function joinProker2($data){ //join table struktur dengan proker cetak semua proker
		$this->db->select('kegiatan,keterangan');
		$this->db->from('proker');
		$this->db->where('id_struktur' ,$data);
		$query = $this->db->get();
		  return $query->row();
		}
		public function getProker($kode){
			$this->db->select('*');
			$this->db->from('proker');
			$this->db->where('id_struktur',$kode);
			$data = $this->db->get();
			return $data->row();
		}
}