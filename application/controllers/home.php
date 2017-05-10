<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('mdepartemen');
		$this->load->model('keuangan');
		$this->load->helper(array('url','html')); 

		 if(null===$this->session->userdata('username')){
		 	redirect('login'); 
		 }
	}

	public function index()
	{
		// $this->model_security->getsecurity();
		$isi['content'] = 'tampilan_content';
		$isi['judul'] = '';
		$isi['sub_judul'] = '';
		$isi['str'] 	= $this->mdepartemen->strGet();
		$isi['data']	= $this->mdepartemen->selectAll();
		$isi['htg'] 	=  $this->keuangan->hitung(); //hitung kas masuk
		$isi['htg2'] 	=  $this->keuangan->hitung2(); // hitung pengeluaran
		$isi['nama_lengkap'] =  $this->mdepartemen->hitung3(); //hitung departemen anggota
		$this->load->library('session');
		$data['graph'] = $this->keuangan->statistik();
		$this->load->model('mproker');
		$this->load->view('halaman_utama',$isi,$data);
	}
	public function sendmail(){
		$config = array(
			'protocol'	=> 'smtp',
			'smtp_host'	=> 'ssl://smtp.googlemail.com',
			'smtp_port'	=> 465,
			'smtp_user'	=> 'edoarya.2017@gmail.com',
			'smtp_pass' => 'edoarya2017'
			);
		$this->load->library('email',$config);
		$this->email->initialize($config); 
		$this->email->set_newline("\r\n");
		$this->email->from('edoarya.2017@gmail.com','edo');
		$this->email->to($this->input->post('to'));
		$this->email->subject($this->input->post('subject'));
		$this->email->cc($this->input->post('cc'));
		$this->email->message($this->input->post('isi'));


		if( $this->email->send()){
			$this->session->set_flashdata("pesan","<div class=\"alert alert-info alert-dismissable\"><button aria-hidden=\"true\" class=\"close\" data-dismiss=\"alert\" >x</button>Selamat ! Email Berhasil Di kirim.<a class=\"alert-link\" href=\"#\"> close</a> </div>");
			redirect('home');
		}else
			{
			echo $this->email->print_debugger();
			}
		}
		function admin(){
		$this->load->view('admin/utility');
		}
		function getlogin(){
			 
		$u = $this->input->post('username'); 
		$p = $this->input->post('password');
		$s = $this->input->post('status');
		$this->load->model('admin');
		$c = $this->admin->get_login($u,$p,$s);
		if($c){
			redirect('home/showAkun');
		}else{
			$this->session->set_flashdata(
			'info',"<font color='red'><b><i>Anda bukan Superadmin, mohon hubungi superadmin untuk mengakses halaman ini !</i></b></font>");
			redirect('home/admin');
			}
		}
		function showAkun(){

			$isi['content'] = 'admin/show_akun';
			$isi['judul'] = 'Account';
			$isi['sub_judul'] = 'Admin';
			$this->load->model('admin');
			$isi['show'] = $this->admin->getadmin(); 
			$this->load->view('halaman_utama',$isi);
		}
		
		function admin_save(){
			$nama_lengkap = $this->input->post('nama_lengkap');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$status = $this->input->post('status');
			$data = array(
				'nama_lengkap' => $nama_lengkap,
				'username' => $username,
				'password' => $password,
				'status' => $status
				);
			$this->load->model('admin');
			$this->admin->simpan_admin($data);
			$this->session->set_flashdata("pesan","<div class=\"alert alert-info alert-dismissable\"><button aria-hidden=\"true\" class=\"close\" data-dismiss=\"alert\" ><i class=\"fa fa-times\"></i></button>Selamat! Proses Simpan Berhasil.<a class=\"alert-link\" href=\"#\"> close</a> </div>");
			redirect('home/showAkun');
		}

		function do_delete($id){
			$this->db->where('id_username',$id);
			$this->db->delete('admin');
			if($id){
				$this->session->set_flashdata("pesan","<div class=\"alert alert-info alert-dismissable\"><button aria-hidden=\"true\" class=\"close\" data-dismiss=\"alert\" ><i class=\"fa fa-times\"></i></button>Selamat ! Proses Hapus Berhasil.<a class=\"alert-link\" href=\"#\"> close</a> </div>");
			}else{
				$this->session->set_flashdata("pesan","<div class=\"alert alert-danger alert-dismissable\"><button aria-hidden=\"true\" class=\"close\" data-dismiss=\"alert\" ><i class=\"fa fa-times\"></i></button>Maaf ! Proses Hapus Gagal, mohon ulangi !.<a class=\"alert-link\" href=\"#\"> close</a> </div>");
				}
			redirect('home/showAkun','refresh');
			}
		function admin_update(){
			$id_username = $this->input->post('id_username');
		    $data = array(
		        'nama_lengkap'	=> $this->input->post('nama_lengkap'),
		        'username'	=> $this->input->post('username'),
		        'password'	=> $this->input->post('password'),
		        'status'	=> $this->input->post('status')
		    );
		    $this->load->model('admin');
		    $this->admin->ubah($data,$id_username);
		    $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		    redirect('home/showAkun');
		}

		function logout(){
			$this->session->sess_destroy();
			redirect('login');
		}

}