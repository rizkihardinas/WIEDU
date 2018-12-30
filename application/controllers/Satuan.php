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
		$this->load->model('satuan_model');
		
	}
	function index(){
		$data['parent_menu'] = $this->menu_model->tampil_parent();
		foreach ($data['parent_menu'] as $parent) {
			$data['menu'] = $this->menu_model->tampil_menu($parent['kode_parent_menu']);
		}
		$this->load->view('parts/header');
		$this->load->view('parts/menu',$data);
		$this->load->view('parts/sidebar');
		$this->load->view('satuan/satuan_view');
	}
	function get_satuan(){
		header('Content-Type: application/json');
    	echo $this->satuan_model->get_all_satuan();
	}
	function simpan_satuan(){
		$kode_satuan  =$this->input->post('kode_satuan');
		$nama_satuan  =ucwords($this->input->post('nama_satuan'));
		$status  =$this->input->post('status');
		$kode_satuan  =$this->input->post('kode_satuan');
		$data = array(
			'kode_satuan' => $kode_satuan,
			'kode_user' =>1,
			'nama_satuan' => $nama_satuan,
			'tgl_input_satuan' => date('Y-m-d'),
			'status_satuan' => 'aktif'
		);
		if ($status == 'simpan') {
			$cek = $this->satuan_model->cek_satuan($nama_satuan);
			if (count($cek) == 1) {
				echo 3;
			}else{
				$simpan = $this->satuan_model->simpan_satuan($data);	
			}
			
		}else{
			$ubah = $this->satuan_model->ubah_satuan($kode_satuan,$data);
		}
		if (isset($simpan)) {
			echo 1;
		}else if (isset($ubah)) {
			echo 2;
		}else{
			echo 0;
		}
	}
	function hapus_satuan(){
		$kode_satuan = $this->input->post('kode_satuan');
		$hapus = $this->satuan_model->hapus_satuan($kode_satuan);
		if ($hapus) {
			echo 3;
		}else{
			echo 0;
		}
	}
	function get_detail_satuan(){
		$kode = $this->input->post('kode');
		$query = $this->satuan_model->cek_detail_satuan($kode);
		echo json_encode($query);
	}
}
 ?>