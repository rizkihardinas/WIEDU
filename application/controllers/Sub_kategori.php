<?php 
/**
 * 
 */
class Sub_kategori extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	function index(){
		$this->load->view('kategori/sub_kategori_view');
	}
}
 ?>