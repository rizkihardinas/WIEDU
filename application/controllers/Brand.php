<?php 
/**
 * 
 */
class Brand extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('menu_model');
		$this->load->model('brand_model');
		
	}
	function index(){
		$data['parent_menu'] = $this->menu_model->tampil_parent();
		foreach ($data['parent_menu'] as $parent) {
			$data['menu'] = $this->menu_model->tampil_menu($parent['kode_parent_menu']);
		}
		$this->load->view('parts/header');
		$this->load->view('parts/menu',$data);
		$this->load->view('parts/sidebar');
		$this->load->view('brand/brand_view');
		}
	function get_brand(){
		header('Content-Type: application/json');
    	echo $this->brand_model->get_all_brand();
	}
	function simpan_brand(){
		$kode_brand  =$this->input->post('kode_brand');
		$nama_brand  =ucwords($this->input->post('nama_brand'));
		$status  =$this->input->post('status');
		$kode_brand  =$this->input->post('kode_brand');
		$data = array(
			'kode_brand' => $kode_brand,
			'nama_brand' => $nama_brand,
			'tanggal_input_brand' => date('Y-m-d'),
			'status_brand' => 'aktif'
		);
		if ($status == 'simpan') {
			$cek = $this->brand_model->cek_brand($nama_brand);
			if (count($cek) == 1) {
				echo 3;
			}else{
				$simpan = $this->brand_model->simpan_brand($data);	
			}
			
		}else{
			$ubah = $this->brand_model->ubah_brand($kode_brand,$data);
		}
		if (isset($simpan)) {
			echo 1;
		}else if (isset($ubah)) {
			echo 2;
		}else{
			echo 0;
		}
	}
	function hapus_brand(){
		$kode_brand = $this->input->post('kode_brand');
		$hapus = $this->brand_model->hapus_brand($kode_brand);
		if ($hapus) {
			echo 3;
		}else{
			echo 0;
		}
	}
	function get_detail_brand(){
		$kode = $this->input->post('kode');
		$query = $this->brand_model->cek_detail_brand($kode);
		echo json_encode($query);
	}
}
 ?>