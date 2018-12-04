<?php 
/**
 * 
 */
class Satuan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('menu_model');
		$this->load->model('setting_model');
		$data['parent_menu'] = $this->menu_model->tampil_parent();
		foreach ($data['parent_menu'] as $parent) {
			$data['menu'] = $this->menu_model->tampil_menu($parent['kode_parent_menu']);
		}
		$this->load->view('parts/header');
		$this->load->view('parts/menu',$data);
		$this->load->view('parts/sidebar');
	}
	function index(){
		$this->load->view('satuan/satuan_view');
	}

	function get_satuan(){
		header('Content-Type: application/json');
    	echo $this->setting_model->get_all_satuan();
	}
	function simpan_satuan(){
		$nama_satuan =strtoupper($this->input->post('nama_satuan'));
		$data = array(
			
			'kode_satuan' => $this->input->post('kode_satuan'),
			'nama_satuan' => $nama_satuan,

			 );
		if ($this->input->post('status') == 'simpan') {
			$cek = count($this->setting_model->cek_satuan($nama_satuan));
			if ( $cek == 1) {
				echo 3;
			}else{
				$query = $this->setting_model->simpan_satuan($data);
				if ($query) {
					echo 1;
				}else{
					echo 0;
				}	
			}
		}else{
			$query = $this->setting_model->ubah_satuan($data,$this->input->post('kode_satuan'));
			if ($query) {
				echo 2;
			}else{
				echo 0;
			}
		}
		
	}
}
 ?>