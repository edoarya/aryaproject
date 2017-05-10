<?php
require_once dirname(__file__).'/tcpdf/tcpdf.php';
/**
* 
*/
class Pdf_library extends TCPDF
{
		
	function __construct()
	{
	parent::__construct();
	}
}