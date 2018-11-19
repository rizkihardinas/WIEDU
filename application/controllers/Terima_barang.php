<?php 
/**
 * 
 */
class Terima_barang extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('menu_model');
	}
	function index(){
		$data['parent_menu'] = $this->menu_model->tampil_parent();
		foreach ($data['parent_menu'] as $parent) {
			$data['menu'] = $this->menu_model->tampil_menu($parent['kode_parent_menu']);
		}
		$this->load->view('parts/header');
		$this->load->view('parts/menu',$data);
		$this->load->view('parts/sidebar');
		$this->load->view('Terima_barang/terima_barang_view');
	}
}
 ?>