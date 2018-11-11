<?php 
/**
 * 
 */
class Terima_barang extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	function index(){
		$this->load->view('Terima_barang/terima_barang_view');
	}
}
 ?>