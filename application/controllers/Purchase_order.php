<?php 
/**
 * 
 */
class Purchase_order extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	function index(){
		$this->load->view('Purchase_order/purchase_order_view');
	}
}
 ?>