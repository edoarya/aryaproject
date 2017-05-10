<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
/**
* 
*/
class Mupload_gallery extends CI_Model
{
	
	var $tabel = 'data_image';

	public function getdata(){
		$data = $this->db->get('data_image');
		return $data->result();
	}
	public function simpan_file($data){
		$this->db->insert($this->tabel,$data);
		return TRUE;
	}
}