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
		$this->load->model('menu_model');
		
	}
	function paket(){
		$data['parent_menu'] = $this->menu_model->tampil_parent();
		foreach ($data['parent_menu'] as $parent) {
			$data['menu'] = $this->menu_model->tampil_menu($parent['kode_parent_menu']);
		}
		$this->load->view('parts/header');
		$this->load->view('parts/menu',$data);
		$this->load->view('parts/sidebar');
		$this->load->view('produk/paket_view');
	}
	function produk(){
		$data['parent_menu'] = $this->menu_model->tampil_parent();
		foreach ($data['parent_menu'] as $parent) {
			$data['menu'] = $this->menu_model->tampil_menu($parent['kode_parent_menu']);
		}
		$this->load->view('parts/header');
		$this->load->view('parts/menu',$data);
		$this->load->view('parts/sidebar');
		$this->load->view('produk/produk_view');
	}
	function barcode($code)
	{
		//generate barcode
		Zend_Barcode::render('code128', 'image', array('text'=>$code), array());
	}
	function generate_barcode(){
		$kode_negara = '899';
		$kode_perusahaan = '078';
		$kode_produk = '098';
		$cek_digit = rand(0000,9999);
		$barcode = $kode_negara.''.$kode_perusahaan.''.$kode_produk.''.$cek_digit;
		echo $barcode;
	}
}
 ?>