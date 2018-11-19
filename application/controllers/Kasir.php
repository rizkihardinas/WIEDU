<?php 
/**
 * 
 */
class Kasir extends CI_Controller
{
	
	function __construct()
	{
		$this->load->model('menu_model');
		parent::__construct();
	}
	function index(){
		$data['parent_menu'] = $this->menu_model->tampil_parent();
		foreach ($data['parent_menu'] as $parent) {
			$data['menu'] = $this->menu_model->tampil_menu($parent['kode_parent_menu']);
		}
		$this->load->view('parts/header');
		$this->load->view('parts/menu',$data);
		$this->load->view('parts/sidebar');
		$this->load->view('kasir_view');
	}
	function add(){
		$this->load->view('kasir/add_kasir_view');
	}
}
 ?>