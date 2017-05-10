<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Mdocument extends CI_Model
{
	var $gallerypath;		// seting variabel untuk dijadikan director files
	var $gallery_path_url;	//seting variabel untuk dijadikan url
	
	function __construct()
	{
		parent::__construct();
		$this->gallerypath = realpath(APPPATH.'../files');
		$this->gallery_path_url = base_url().'files/';
	}
	function simpan_file($data){
		$this->db->insert('dokumen_upload',$data);
		return $data;
	}
	function tampil_file(){
		$query = $this->db->get('dokumen_upload');
		return $query;
	}
	function GetDokByKd($kd){
		$this->db->select('*');
		$this->db->from('dokumen_upload');
		$this->db->where('id_dokumen',$kd);
		$query = $this->db->get();
		return $query->row();
	}
	function DeleteDok($Tablename, $data){
		$data = $this->db->delete($Tablename,$data);
		return $data;
	}
	function UpdateDok($data,$id_dokumen){
		$this->db->set($data);
		$this->db->where('id_dokumen', $id_dokumen);
		$this->db->update('dokumen_upload');
	}
}