<?php 
/**
 * 
 */
class Stock_adjusment extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	function index(){
		$this->load->view('Stock_adjusment/stock_adjusment_view');
	}
}
 ?>