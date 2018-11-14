<?php 
/**
 * 
 */
class Stock_opname extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	function index(){
		$this->load->view('stock_opname/stock_opname_view');
	}
}
 ?>