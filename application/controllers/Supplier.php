<?php 
/**
 * 
 */
class Supplier extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	function index(){
		$this->load->view('supplier_view');
	}
}
 ?>