<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
require_once dirname(__File__) . '/tcpdf.php';
class Pdf extends TCPDF
{
	
	function __construct()
	{
		parent::__construct();
	}
}