<?php
/**
* 
*/
class Mupload extends CI_Model
{
    //membuat variabel folder directory file upload
    var $gallerypath;
    var $gallery_path_url;
    //end 

    function __construct()
    {
    parent::__construct();
    $this->gallerypath = realpath(APPPATH .'../files');     //set directory/lokasi file
    $this->gallery_path_url = base_url().'files/';          // set URL
    }
    function simpan_file(){
        $konfigurasi = array('allowed_types'=>'rar|ppt|pdf|zip|doc|xl',
            'upload_path'   => $this->gallerypath,
            'overwrite'     => FALSE,
            'remove_spaces' => TRUE,
            'max_size'      =>'80000');
        $this->load->library('upload',$konfigurasi);
        $this->upload->do_upload();
        $datafile = $this->upload->data();

        $judul      = $this->input->post('judul');
        $nama_file  = $_FILES['userfile']['name'];

        $data = array('judul'=> $judul,
            'nama_file'=>'files/'.$nama_file);
        $this->db->insert('download',$data);
    }
    function tampil_file(){
        $query =$this->db->get('download');
        return $query;
    }
}
?>