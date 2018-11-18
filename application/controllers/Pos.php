<?php 
/**
 * 
 */
class Pos extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	function index(){
		$this->load->view('pos/pos_view');
	}
}
 ?>