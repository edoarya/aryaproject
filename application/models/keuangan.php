<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Keuangan extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	public function GetKas(){
		$data = $this->db->get('kas');
		return $data;
	}
	public function SimpanKas($d){
		$data = $this->db->insert('kas',$d);
		return $data;
	} 
	public function GetKasBy($kd){
		$this->db->select('*');
		$this->db->from('kas');
		$this->db->where('id_kas',$kd);
		$query = $this->db->get();
		return $query->row();
	}
	public function UpdateKas($data,$kd){
		$this->db->set($data);
		$this->db->where('id_kas',$kd);
		$this->db->update('kas');
	} 
	public function selectAll(){
		$this->db->select('id_kas,format((jml_bayar),0) AS jml_bayar,tgl_bayar,keterangan, departemen.kode_dep, departemen.nama_lengkap')
		->join('departemen', 'departemen.kode_dep = kas.kode_dep');
		return $this->db->get('kas')->result();
	}
	public function GetJoinById($kd){
		$this->db->select('kas.id_kas, kas.jml_bayar,kas.tgl_bayar,kas.keterangan, departemen.kode_dep, departemen.nama_lengkap')
		->join('departemen', 'departemen.kode_dep = kas.kode_dep');
		$this->db->from('kas');
		$this->db->where('id_kas',$kd);
		$query = $this->db->get();
		return $query->row();
	}

	
	public function GetStruktur(){
		$data =  $this->db->get('struktur_divisi');
		return $data->result();
	}
	public function GetDep(){
		$data =  $this->db->get('departemen');
		return $data->result();
	}
	public function selectAll2(){  //join tabel departemen dengan struktur divisi
		$this->db->select('departemen.kode_dep, departemen.nama_lengkap,departemen.jabatan,
		departemen.hp,departemen.email,departemen.foto, struktur_divisi.nama_struktur')
		->join('struktur_divisi','struktur_divisi.id_struktur = departemen.id_struktur');
		return $this->db->get('departemen')->result();
	}
	public function hitung(){ //menjumlahkan kas masuk
		$this->db->select_sum('jml_bayar');
		$query = $this->db->get('kas');
		return $query->result();
	}
	public function hitung2(){ //menjumlahkan kas keluar
		$this->db->select_sum('total');
		$query = $this->db->get('pengeluaran');
		return $query->result();
	}
	public function DeleteKas($Tablename,$where){
		$row = $this->db->delete($Tablename,$where);
		return $row;
	}
	public function getKeluar(){
		$data = $this->db->get('pengeluaran');
		return $data->result();
	}
	public function simpan_pengeluaran($data){  //simpan ke tabel pengeluaran
		$data =  $this->db->insert('pengeluaran',$data);
		return $data;
	}
	public function do_delete($Tablename,$where){
		$data = $this->db->delete($Tablename,$where);
		return $data;
	}

	public function laporan_m($kode){
		$this->db->select('id_kas, jml_bayar,date_format(tgl_bayar,"%M-%Y") AS tgl_bayar,keterangan, departemen.kode_dep, departemen.nama_lengkap')
		->join('departemen', 'departemen.kode_dep = kas.kode_dep');
		$this->db->from('kas');
		$this->db->where("tgl_bayar",$kode);
		$query = $this->db->get();
		return $query->row();
	}
	public function tampil_tgl(){
		return $this->db->query("SELECT * FROM kas WHERE date_format(tgl_bayar,'%m %d %Y')")->result();
	}

	public function get_data($kode){
		$this->db->select("SUM(jml_bayar) as jml_bayar, date_format(tgl_bayar,'%m') as tgl_bayar");
		$this->db->from('kas');
		$this->db->where("date_format(tgl_bayar,'%m')",$kode);
		$query - $this->db->get();
		return $query->row();
	}
	public function get_bulan($data){
		$this->db->select('date_format(tgl_bayar,"%m"), jml_bayar');
		$this->db->from('kas');
		$this->db->where('tgl_bayar',$data);
		$query = $this->db->get();
		return $query->row();
		}
	public function show_detail(){ //tampil bulan di tabel controller detail keuangan
		$this->db->select('kas.tgl_bayar, kas.jml_bayar, kas.keterangan, departemen.nama_lengkap')
		->join('departemen','departemen.kode_dep = kas.kode_dep');
		$this->db->from('kas');
		$this->db->where('keterangan LIKE "belum lunas"');
		$data = $this->db->get();
		return $data->result();
	}
	public function getByTgl($data){
		$this->db->select('tgl_bayar,jml_bayar,keterangan');
		$this->db->from('kas');
		$this->db->where('date_format(tgl_bayar,"%m")',$data);
		$query = $this->db->get();
		return $query->row();
	}

	public function show_bulan(){ //tampil bulan di tabel controller detail keuangan
		$this->db->select('date_format(tgl_bayar,"%m") as tgl_bayar');
		$this->db->group_by('date_format(tgl_bayar,"%m")');
		$this->db->from('kas');
		return $this->db->get()->result();
	}

	function statistik(){
		//membuat graphic
		$query = $this->db->query('SELECT * from kas');

		return $query->result();
	}
} 
