<?php 
/**
 * 
 */
class Produk extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		//load library
		$this->load->library('zend');
		//load in folder Zend
		$this->zend->load('Zend/Barcode');
	}
	function bahan_baku(){
		$this->load->view('produk/bahan_baku_view');
	}
	function resep(){
		$this->load->view('produk/resep_view');
	}
	function menu(){
		$this->load->view('produk/menu_view');
	}
	function barcode($code)
	{
		//generate barcode
		Zend_Barcode::render('code128', 'image', array('text'=>$code), array());
	}
}
 ?>