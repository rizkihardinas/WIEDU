<?php 
/**
 * 
 */
class Setting extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('menu_model');
		$this->load->model('setting_model');
		
	}
	function index(){
		$data['parent_menu'] = $this->menu_model->tampil_parent();
		foreach ($data['parent_menu'] as $parent) {
			$data['menu'] = $this->menu_model->tampil_menu($parent['kode_parent_menu']);
		}
		$this->load->view('parts/header');
		$this->load->view('parts/menu',$data);
		$this->load->view('parts/sidebar');
		$this->load->view('setting/setting_view');
	}
	function get_kode(){
		echo rand(00000,99999);
	}
	function get_level(){
		header('Content-Type: application/json');
    	echo $this->setting_model->get_all_level();
	}
	function simpan_level(){
		$nama_level =strtoupper($this->input->post('nama_level'));
		$data = array(
			'kode_level' => $this->input->post('kode_level'),
			'nama_level' => $nama_level
			 );
		if ($this->input->post('status') == 'simpan') {
			$cek = count($this->setting_model->cek_level($nama_level));
			if ( $cek == 1) {
				echo 3;
			}else{
				$query = $this->setting_model->simpan_level($data);
				if ($query) {
					echo 1;
				}else{
					echo 0;
				}	
			}
		}else{
			$query = $this->setting_model->ubah_level($data,$this->input->post('kode_level'));
			if ($query) {
				echo 2;
			}else{
				echo 0;
			}
		}
		
	}
	function get_detail_level(){
		$kode = $this->input->post('kode_level');
		$query = $this->setting_model->cek_detail_level($kode);
		echo json_encode($query);
	}
	function delete_level(){
		$kode_level = $this->input->post('kode_level');
		$query = $this->setting_model->hapus_level($kode_level);
		if ($query) {
			echo 1;
		}else{
			echo 0;
		}
	}
	function level(){
		$data['parent_menu'] = $this->menu_model->tampil_parent();
		foreach ($data['parent_menu'] as $parent) {
			$data['menu'] = $this->menu_model->tampil_menu($parent['kode_parent_menu']);
		}
		$this->load->view('parts/header');
		$this->load->view('parts/menu',$data);
		$this->load->view('parts/sidebar');
		$this->load->view('setting/level_view');	
	}
}
 ?>