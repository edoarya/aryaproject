 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Mproker extends CI_Model
{
	
	
	public function GetStruktur(){
		return $this->db->get('struktur_divisi');
	}

 	public function selectAll(){
	 	$this->db->select('proker.kode_proker,proker.jadwal_mulai,proker.jadwal_selesai,proker.kegiatan,proker.keterangan, struktur_divisi.nama_struktur')
	 	->join('struktur_divisi','struktur_divisi.id_struktur = proker.id_struktur');
	 	return $this->db->get('proker')->result();
	 }
	 public function selectByNama($kd){
	 	$this->db->select('proker.kode_proker,proker.jadwal_mulai,proker.jadwal_selesai,proker.kegiatan,proker.keterangan, struktur_divisi.nama_struktur')
	 	->join('struktur_divisi','struktur_divisi.id_struktur = proker.id_struktur')
	 	->where('kode_proker',$kd);
	 }
	 public function simpan($data){
	  $this->db->insert('proker',$data);
	 	return TRUE;
	 }
	 public function GetUpdate($data){
	 	$this->db->select('*');
	 	$this->db->from('proker');
	 	$this->db->where('kode_proker',$data);
	 	$query = $this->db->get();
	 	return $query->row();
	 }
	 public function update_data($data,$kd){
		$this->db->set($data);
		$this->db->where('kode_proker',$kd);
		$this->db->update('proker');
	}
	public function getprokerJs(){ // menampilkan chart js di home
		$this->db->select('jadwal_mulai,kegiatan,status, struktur_divisi.id_struktur, struktur_divisi.nama_struktur')
		->join('struktur_divisi', 'struktur_divisi.id_struktur = proker.id_struktur');
		$this->db->from('proker');
		$query = $this->db->get();
		return $query->result();
	}
	
}