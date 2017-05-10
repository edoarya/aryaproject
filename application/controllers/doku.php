<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Doku extends CI_Controller
{    
	 
	function __construct()
		{  
	
		parent::__construct();
		
		$this->load->model('payment_m');  
		if(null===$this->session->userdata('username')){
			redirect('login');
			}
		} 
	public function index(){
		$isi['content']	= 'payment/doku';
		$isi['judul']	= '';
		$isi['sub_judul']	= '';
		$isi['crs']	= $this->payment_m->getCourse();
		$isi['join'] = $this->payment_m->join_table();
		$this->payment_m->getData();
		$this->load->view('halaman_utama',$isi);
		}

	public function simpan(){
		$course_id = $this->input->post('course_id');
		$name = $this->input->post('name');
		$kode_course = $this->input->post('kode_course');
		$email = $this->input->post('email');
		$hp = $this->input->post('hp');
		$country = $this->input->post('country');
		$TRANSIDMERCHANT = $this->input->post('TRANSIDMERCHANT');
		$address = $this->input->post('address'); 
	
		$data = array(
			'course_id' => $course_id,
			'name' => $name,
			'kode_course' => $kode_course,
			'email' => $email,
			'hp' => $hp,
			'country' => $country,
			'TRANSIDMERCHANT' => $TRANSIDMERCHANT,
			'address' => $address,
	
			); 
			$this->payment_m->simpanData($data);
		redirect('doku/showTable',$isi);
		}

	public function showTable(){
		$isi['content']	= 'payment/detail_trans';
		$isi['judul']	= 'Payment';
		$isi['sub_judul']	= 'Doku';
		$isi['data'] = $this->payment_m->getData_doku();
		$isi['join'] = $this->payment_m->join_table();
		$this->load->view('halaman_utama',$isi);
		}

	public function doku_notify(){
		$PAYMENTCHANNEL = $this->input->post('paymentchannel');
		$AMOUNT = $this->input->post('amount');
		$PAYMENTCODE = $this->input->post('paymentcode');
		$MCN = $this->input->post('MCN');
		$WORDS = $this->input->post('words');
		$RESULTMSG = $this->input->post('resultmsg');
		$VERIFYID = $this->input->post('verifyid');
		$TRANSIDMERCHANT = $this->input->post('transidmerchant');
		$BANK = $this->input->post('bank');
		$STATUSTYPE = $this->input->post('statustype');
		$APPROVALCODE = $this->input->post('APPROVALCODE');
		$EDUSTATUS = $this->input->post('EDUSTATUS');
		$THREEDSECURESTATUS = $this->input->post('THREEDSECURESTATUS');
		$VERIFYSCORE = $this->input->post('verifyscore');
		$CURRENCY = $this->input->post('CURRENCY');
		$RESPONSECODE = $this->input->post('response_code');
		$CHNAME = $this->input->post('CHNAME');
		$BRAND = $this->input->post('BRAND');
		$VERIFYSTATUS = $this->input->post('verifystatus');
		$SESSIONID = $this->input->post('session_id');
		$LIABILITY = $this->input->post('LIABILITY');

		$MALLID 	= 4174;
		$SHARED_KEY = "48Bq1CK5lrlC";
		$WORDS = sha1($AMOUNT.$MALLID.$SHARED_KEY.$TRANSIDMERCHANT.$RESULTMSG.$VERIFYSTATUS);
		
		$data = array(
			'paymentchannel' => $PAYMENTCHANNEL,
			'amount' => $AMOUNT,
			'paymentcode' => $PAYMENTCODE,
			'words'	=> $WORDS,
			'resultmsg' => $RESULTMSG,
			'verifyid'	=> $VERIFYID,
			'transidmerchant' => $TRANSIDMERCHANT,
			'bank'		=> $BANK,
			'statustype' => $STATUSTYPE,
			'approvalcode' => $APPROVALCODE,
			'verifyscore' => $VERIFYSCORE,
			'response_code' => $RESPONSECODE,
			'verifystatus' => $VERIFYSTATUS,
			'session_id' => $SESSIONID
			);
		$this->payment_m->m_notif($data); // input data from model to database
			if ( $WORDS) {
			echo ÒCONTINUEÓ;
			if ($RESULTMSG == 'SUCCESS') {
			$this->session->set_flashdata("pesan","<div class=\"alert alert-info alert-dismissable\"><button aria-hidden=\"true\" class=\"close\" data-dismiss=\"alert\" ><i class=\"fa fa-times\"></i></button>Selamat ! Proses Transaksi Pembayaran Berhasil.<a class=\"alert-link\" href=\"#\"> close</a> </div>");
			redirect('doku');
			}
			else {
			echo "STOP - WORDS DOES NOT MATCH";
			$this->session->set_flashdata("pesan","<div class=\"alert alert-danger alert-dismissable\"><button aria-hidden=\"true\" class=\"close\" data-dismiss=\"alert\" ><i class=\"fa fa-times\"></i></button>Maaf ! Proses Pembayaran Gagal.<a class=\"alert-link\" href=\"#\"> close</a> </div>");
			redirect('doku');

				}
			}
		}
	
	public function sent_doku(){
		
		$SESSIONID = $this->input->post('SESSIONID');
		$TRANSIDMERCHANT = $this->input->post('TRANSIDMERCHANT');
		$CHAINMERCHANT = $this->input->post('CHAINMERCHANT');
		$EMAIL = $this->input->post('EMAIL');
		$NAME = $this->input->post('NAME');
		$MALLID = $this->input->post('MALLID');
		$BASKET = $this->input->post('BASKET');
		$AMOUNT = $this->input->post('AMOUNT');
		$PURCHASEAMOUNT = $this->input->post('PURCHASEAMOUNT');
		$PAYMENTCHANNEL = $this->input->post('PAYMENTCHANNEL');
		$WORDS = $this->input->post('WORDS');
		$REQUESTDATETIME = $this->input->post('REQUESTDATETIME');
		$data = array(
			'SESSIONID' => $SESSIONID,
			'TRANSIDMERCHANT' => $TRANSIDMERCHANT,
			'CHAINMERCHANT' => $CHAINMERCHANT,
			'PAYMENTCHANNEL' => $PAYMENTCHANNEL,
			'EMAIL' => $EMAIL,
			'NAME' 	=> $NAME,
			'MALLID' => $MALLID,
			'BASKET' => $BASKET,
			'AMOUNT' => $AMOUNT,
			'PURCHASEAMOUNT' => $PURCHASEAMOUNT,
			'WORDS' => $WORDS,
			'REQUESTDATETIME' => $REQUESTDATETIME
			);
		
		redirect('http://staging.doku.com/Suite/Receive');
	}
	public function integrate_doku(){ //coba panggil doku
		$course_id 	= $this->input->post('course_id');
		$name 		= $this->input->post('name');
		$kode_course= $this->input->post('kode_course');
		$email 		= $this->input->post('email');
		$hp 		= $this->input->post('hp');
		$country 	= $this->input->post('country');
		$address 	= $this->input->post('address');
		$transidmerchant 	= $this->input->post('TRANSIDMERCHANT');

		$data = array(
			'course_id' 	=> $course_id,
			'name' 			=> $name,
			'kode_course' 	=> $kode_course, 
			'email' 	=> $email,
			'hp' 		=> $hp,
			'country' => $country,
			'address' => $address,
			'TRANSIDMERCHANT' => $transidmerchant,
			
			
			); 
			$this->payment_m->simpanData($data);
			// var_dump($data);
		// redirect('doku/showTable',$isi);
		redirect('doku/showTable');
	}
	public function transfer_doku(){
		$SESSIONID = $this->input->post('SESSIONID');
		$TRANSIDMERCHANT = $this->input->post('TRANSIDMERCHANT');
		$CHAINMERCHANT = $this->input->post('CHAINMERCHANT');
		$EMAIL = $this->input->post('EMAIL');
		$NAME = $this->input->post('NAME');
		$MALLID = $this->input->post('MALLID');
		$BASKET = $this->input->post('BASKET');
		$AMOUNT = $this->input->post('AMOUNT');
		$PURCHASEAMOUNT = $this->input->post('PURCHASEAMOUNT');
		$PAYMENTCHANNEL = $this->input->post('PAYMENTCHANNEL');
		$WORDS = $this->input->post('WORDS');
		$REQUESTDATETIME = $this->input->post('REQUESTDATETIME');
		$data = array(
			'SESSIONID' => $SESSIONID,
			'TRANSIDMERCHANT' => $TRANSIDMERCHANT,
			'CHAINMERCHANT' => $CHAINMERCHANT,
			'PAYMENTCHANNEL' => $PAYMENTCHANNEL,
			'EMAIL' => $EMAIL,
			'NAME' 	=> $NAME,
			'MALLID' => $MALLID,
			'BASKET' => $BASKET,
			'AMOUNT' => $AMOUNT,
			'PURCHASEAMOUNT' => $PURCHASEAMOUNT,
			'WORDS' => $WORDS,
			'REQUESTDATETIME' => $REQUESTDATETIME
			);
		 // var_dump($data);
		  // redirect($data,'http://staging.doku.com/Suite/Receive');
	}
	function insert(){
		$transidmerchant = $_POST["TRANSIDMERCHANT"];
		$totalamount = $_POST['AMOUNT'];
		$storeid = $_POST['STOREID'];
		$WORDS = $_POST['WORDS'];

		if($_SERVER['REMOTE_ADDR'] = '103.10.128.11'){
			$sql = "select id, totalamount from MYSHORTCART where transidmerchant ='".$transidmerchant."'and totalamount='".$totalamount."' and trxstatus='Requested'";
			$qsql = mysql_query($sql);

			if($qsql) {
				$num_rows = mysql_num_rows($qsql);
				if($num_rows > 0) $benar = 1;
			}
			$time = date("Y-m-d H:i:s");
			if($true == 1){
				$sql1 = "UPDATE MYSHORTCART set trxstatus ='Verified', starttime='".$time."' where transidmerchant='".$transidmerchant."'";
				$qsql = mysql_query($sql1);
				if($qsql) $response="Continue";else $response="Stop";
			}else $response="Stop";
			echo $response;
			}else{
				$sql1 ="UPDATE MYSHORTCART set trxstatus='FAILED - INJECTION DETECTED',starttime='".$time."' where transidmerchant='".$transidmerchant."'";
				$qsql = mysql_query($sql1);
				echo "Stop";
			}
		} 
	}
