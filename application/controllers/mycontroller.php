<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Mycontroller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('mymodel');
		if(null===$this->session->userdata('username')){
			redirect('login');
		}
	}
	public function index(){
		$error = array(
			'error_image'	=>'',
			'error_name'	=>''
			);
	}
	public function company_list(){
		$company['company'] = $this->mymodel->get_company();
		$this->load->view('company_list',$company);
	}
	public function edit_company($ID){
		$company = array(
			'error_image' =>'',
			'error_name' =>''
			);
		$this->load->model('mymodel');
		$company['company'] = $this->mymodel->get_company_update($ID);
		$this->load->view('edit_company',$company);
	}
	public function upload(){
			//file proses
				$this->load->helper(array('form','file','url'));
				$this->load->library('form_validation');
				$this->form_validation->set_rules('companyname','CompanyName','trim|required');
				$config = array();
				$config['upload_path']          = './uploads/img';
                $config['allowed_types']        = 'jpg|png|gif';
                $config['max_size']             = '1024';

                $this->load->library('upload', $config);
                if($this->form_validation->run()==false and empty($_FILES['userfile']['name'][0])){
                	$error = array(
                		'error_image'	=> 'Please Choose Image to Upload',
                		'error_name'	=>'Please Complete company name'
                		);
                	$this->load->view('upload_image',$error);
                }elseif($this->form_validation->run()==true and empty($_FILES['userfile']['name'][0])){
                	$error = array(
                		'error_image'	=> 'Please Choose Image to Upload',
                		'error_name'	=>''
                		);
                	$this->load->view('upload_image',$error);
                }elseif($this->form_validation->run()==false and !empty($_FILES['userfile']['name'][0])){
                	!$this->upload->data();
                	$error = array(
                		'error_image'	=> '',
                		'error_name'	=>'Please Complete company name'
                		);
                	$this->load->view('upload_image',$error);
                }elseif($this->form_validation->run()==true and !empty($_FILES['userfile']['name'][0])){
                	 $this->upload->do_upload();
                	 $data = array('upload_data' => $this->upload->data());
                     $this->image_resize($data['upload_data']['full_path'],$data['upload_data']['file_name']);
                     $company = array(
                     	'CompanyName'	=>$this->input->post('companyname'),
                     	'CompanyImage'	=>$data['upload_data']['file_name']
                     	);
                     $this->load->model('mymodel');
                     $this->mymodel->insert($company);
                }
            }
	
	public function image_resize($path,$file){
		$config_resize = array();
		$config_resize['image_library']	= 'gd2';
		$config_resize['source_image']	= '$path';

		$config_resize['maintian_ratio'] = TRUE;
		$config_resize['width']			= 75;
		$config_resize['height']		= 50;
		$config_resize['new_image']	='./uploads/img/thumb/'.$file;
		$this->load->library('image_lib',$config_resize);
		$this->image_lib->resize();
	}
	public function update(){
			//file proses
				$this->load->helper(array('form','file','url'));
				$this->load->library('form_validation');
				$this->form_validation->set_rules('companyname','CompanyName','trim|required');
				$config = array();
				$config['upload_path']          = './uploads/img';
                $config['allowed_types']        = 'jpg|png|gif';
                $config['max_size']             = '1024';

                $this->load->library('upload', $config);
               
                if($this->form_validation->run()==false and empty($_FILES['userfile']['name'][0])){
                	 $ID =$this->input->post('companyid');
                	$company = array(
                		'error_image'	=> '',
                		'error_name'	=>'Please Complete company name'
                		);
                	
                	$company['company'] = $this->mymodel->get_company_update($ID);
                	$this->load->view('edit_company',$company);
                }elseif($this->form_validation->run()==true and empty($_FILES['userfile']['name'][0])){
                	$ID = $this->input->post('companyid');
                	$company = array(
                		'CompanyName'	=>$this->input->post('companyname')
                		);
                	$this->mymodel->update_company($company,$ID);
                	redirect('mycontroller/company_list');

                }elseif($this->form_validation->run()==true and !empty($_FILES['userfile']['name'][0])){
                	 $this->upload->do_upload();
                	 $data = array('upload_data' => $this->upload->data());
                     $this->image_resize($data['upload_data']['full_path'],$data['upload_data']['file_name']);
                    $ID = $this->input->post('companyid');
                    $query = $this->db->query("Select * from tbl_company where CompanyID = '{$ID}'");
                    foreach($query->result() as $row){
                    	unlink('./uploads/img/'.$row->CompanyImage);
                    	unlink('./uploads/img/thumb/'.$row->CompanyImage);
                    } 
                     $company = array(
                     	'CompanyName'	=>$this->input->post('companyname'),
                     	'CompanyImage'	=>$data['upload_data']['file_name']
                     	);
                     $this->load->model('mymodel');
                     $this->mymodel->update_company($company,$ID);
                     redirect('mycontroller/company_list');
                }    
	}
	public function delete_company($ID){
		$query = $this->db->query("Select * from tbl_company where CompanyID = '{$ID}' ");
		foreach($query->result() as $row){
			unlink('./uploads/img/'.$row->CompanyImage);
            unlink('./uploads/img/thumb/'.$row->CompanyImage);
		}
		$this->db->where('CompanyID',$ID);
		$this->db->delete('tbl_company');
		redirect('mycontroller/company_list');
	}
}