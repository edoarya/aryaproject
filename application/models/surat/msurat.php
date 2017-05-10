<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Msurat extends CI_Model
{
	
	function __construct()
	{
	$this->gallerypath = realpath(APPPATH.'../files');
		$this->gallery_path_url = base_url().'files/';
	}
	public function getData(){
		$ih = $this->db->get('surat');
		return $ih->result();
	}
	public function simpanData($dt){
		$i = $this->db->insert('surat',$dt);
		return $i;
	}
	public function getPem(){
		$i = $this->db->get('spemberitahuan');
		return $i->result();
	}
	public function getPemByid($kode){
		$this->db->select('*');
		$this->db->from('sPemberitahuan');
		$this->db->where('nomor',$kode);
		$query = $this->db->get();
		return $query->row();
	}
	public  function simpanUpdateSpem($data,$nomor){
		$this->db->set($data);
		$this->db->where('nomor',$nomor);
		$this->db->update('sPemberitahuan');
	}
	public function simpanPem($data){
	$data = $this->db->insert('sPemberitahuan',$data);
	return $data;

	}
	public function GetNoPem($no){
		$this->db->select('*');
		$this->db->from('spemberitahuan');
		$this->db->where('nomor',$no);
		$query = $this->db->get();
		return $query->row();
	}
	public function GetDataByID($id){
		$this->db->select('*');
		$this->db->from('surat');
		$this->db->where('kode_surat',$id);
		$query = $this->db->get();
		return $query; 
	}
	public function get_insert($data){
		$data = $this->db->insert('surat',$data);
		return $data;
	}
	public function getSurat(){
		$data = $this->db->get('sPemberitahuan');
		return $data->result();
	}
	public function getDep(){
		$data = $this->db->get('departemen');
		return $data;
			
	}
	public function getSuratPin(){
		  $data = $this->db->get('spinjaman');
		  return $data->result();
	}
	public function simpanSpin($i){
		$this->db->insert('spinjaman',$i);
		return $i;
	}
	public function selectAll(){
		$this->db->select('spinjaman.no_surat, spinjaman.penerima, spinjaman.perihal, spinjaman.isi, departemen.nama_lengkap')
		->join('departemen', 'departemen.kode_dep = spinjaman.kode_dep');
		return $this->db->get('spinjaman')->result();
	}
	public function tampilKode($kode){
		$this->db->select('*');
		$this->db->from('spinjaman');
		$this->db->where('no_surat',$kode);
		$query = $this->db->get();
		return $query;
	}
	public function view_row(){
    return $this->db->get('spemberitahuan')->result();
  	}
  	public function kodeAuto(){ //membuat kode atau nomor otomatis pada tampilan surat pemberitahuan
  	$this->db->select('RIGHT(sPemberitahuan.nomor,6) as kode', FALSE);
  	$this->db->order_by('nomor','DESC');
  	$this->db->limit(1);
  	$query = $this->db->get('sPemberitahuan');

  	//cek apakan sudah ada nomor
  	if($query->num_rows() <> 0) 
  	{
  		//jika kode sudah ada
  		$data = $query->row();
  		$kode = intval($data->kode) + 1;
  	}else{
  		//jika kode belum ada
  		$kode = 1;
  	}
  	$kodemax = str_pad($kode, 6,"0", STR_PAD_LEFT);
  	$kodejadi = "SPM".$kodemax;
  	return $kodejadi;
  }
  public function autokode(){
  	$this->db->select('RIGHT(spemberitahuan_dua.no,6) as kode',FALSE);
  	$this->db->order_by('no','DESC');
  	$this->db->limit(1);
  	$query = $this->db->get('spemberitahuan_dua');

  	//memeriksa apakah sudah ada nomor
  	if ($query->num_rows() <> 0){
  		//jika kode sudah ada
  		$data = $query->row();
  		$kode = intval($data->kode) + 1;
  	}else{
  		//jika kode belum ada
  		$kode = 1;
  	}
  	$kodemax = str_pad($kode, 6,"0", STR_PAD_LEFT);
  	$kodejadi = "SPM2".$kodemax;
  	return $kodejadi;
  }
  public function delete_sPem($Tablename, $where){
  	$row = $this->db->delete($Tablename, $where);
  	return $row;
  }
  public function GetPem2(){
   $i = $this->db->get('spemberitahuan_dua');
   return $i->result();
  }
  public  function simpanspem_dua($i){
  	$data = $this->db->insert('spemberitahuan_dua',$i);
  	return $data;
  }
  public function GetNoPem2($no){
  	$this->db->select('*');
  	$this->db->from('spemberitahuan_dua');
  	$this->db->where('no',$no);
  	$query = $this->db->get();
  	return $query->row();
  }
  public function delete_sPem2($Tablename,$where){
  	$row = $this->db->delete($Tablename,$where);
  	return $row;
  }
  public function simpanUpdateSpem2($data,$no){
  	$this->db->set($data);
  	$this->db->where('no',$no);
  	$this->db->update('spemberitahuan_dua');
  }
}