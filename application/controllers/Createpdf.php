<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Createpdf extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function create_pdf($htmlcontent,$for_upload=false,$new_file=null){
		include(APPPATH."third_party/dompdf/autoload.inc.php");
		$dompdf=new Dompdf\Dompdf();

		$dompdf->load_html($htmlcontent);
		$dompdf->render();
		if($for_upload) {
			file_put_contents($new_file.".pdf",$dompdf->output());	
		}
		//
	}
}