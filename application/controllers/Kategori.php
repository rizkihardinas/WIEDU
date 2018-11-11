<?php 
/**
 * 
 */
class Kategori extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	function index(){
		$this->load->view('kategori/kategori_view');
	}
}
 ?>