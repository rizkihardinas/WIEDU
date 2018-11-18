<?php 
/**
 * 
 */
class Kasir extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	function index(){
		$this->load->view('kasir/kasir_view');
	}
	function add(){
		$this->load->view('kasir/add_kasir_view');
	}
}
 ?>