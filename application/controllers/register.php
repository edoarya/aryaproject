<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*
*/
class Register extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		// $this->db->cache_delete_all();
		$this->load->model('register_login');
		$this->load->library('session');
		$this->load->library('form_validation');
	}
	public function index(){
		$this->load->helper(array('form', 'url'));
		$this->load->view('register/v_register');
	}
	public function simpan(){
		$config = array(
			'protocol'	=> 'smtp',
			'smtp_host'	=> 'ssl://smtp.googlemail.com',
			'smtp_port'	=> 465,
			'smtp_user'	=> 'edoarya.2017@gmail.com',
			'smtp_pass' => 'edoarya2017'
		);
		$username 		= $this->input->post('username');
		$nama_lengkap 	= $this->input->post('nama_lengkap');
		$password 		= $this->input->post('password');
		$data = array(
			'username' 		=> $username,
			'nama_lengkap' 	=> $nama_lengkap,
			'password' 		=> $password,
			);
		
			$this->register_login->SimpanData($data);

			$this->load->library('email',$config);
			$this->email->initialize($config);
			$this->email->set_newline("\r\n");
			$this->email->from('edoarya.2017@gmail.com','edo');
			$this->email->to($this->input->post('username'));
			$this->email->subject('Verification of Your Account APP-ARyA');
			$this->email->message('Terima kasih telah melakukan login, Akun anda telah terdaftar. Silahkan klik link berikut untuk Login'."<br>".base_url('index.php/login'));
			if( $this->email->send()){
			$this->session->set_flashdata("pesan","<div class=\"alert alert-info alert-dismissable\"><button aria-hidden=\"true\" class=\"close\" data-dismiss=\"alert\" >x</button>Selamat ! Email Berhasil Di kirim.<a class=\"alert-link\" href=\"#\"> close</a> </div>");
			redirect('register/confirm_email');
			}else
			{
				echo $this->email->print_debugger();
			}

			

		// $this->db->cache_delete_all();
		if($data){
			$this->session->set_flashdata("pesan","<div class=\"alert alert-info alert-dismissable\"><button aria-hidden=\"true\" class=\"close\" data-dismiss=\"alert\" >x</button>Selamat ! Proses Registrasi Berhasil, Silahkan Login.<a class=\"alert-link\" href=\"#\"> close</a> </div>");
		}else{
			$this->session->set_flashdata("pesan","<div class=\"alert alert-danger alert-dismissable\"><button aria-hidden=\"true\" class=\"close\" data-dismiss=\"alert\" >x</button>Gagal ! Ulangi Proses Registrasi.<a class=\"alert-link\" href=\"#\"> close</a> </div>");
		}
		redirect('register');
		}

		public function confirm_email(){
			$this->load->view('register/v_confirm');
		}

		function email_availability() { //memeriksa duplikat email dari database
			
			$this->load->view('register/v_register');

		}
		function check_email_availability(){
			if(!filter_val($_POST['email'],FILTER_VALIDATE_EMAIL))
			{
				echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span>Invalid Email</label>';
			}
			else{
				$this->register_login->is_email_available();
				if($this->register_login->is_email_available($_POST['email']))
				{
					echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span>Email sudah terdaftar</label>';
				}
				else
				{
					echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span>Email Tersedia</label>';
				}
			}
		}
}
