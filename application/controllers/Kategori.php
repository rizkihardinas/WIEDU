<?php 
/**
 * 
 */
class Kategori extends CI_Controller
{
	
	function __construct()
	{

		parent::__construct();
		$this->load->model('menu_model');
		$this->load->model('kategori_model');
		
	}
	function index(){
		$data['parent_menu'] = $this->menu_model->tampil_parent();
		foreach ($data['parent_menu'] as $parent) {
			$data['menu'] = $this->menu_model->tampil_menu($parent['kode_parent_menu']);
		}
		$this->load->view('parts/header');
		$this->load->view('parts/menu',$data);
		$this->load->view('parts/sidebar');
		$this->load->view('kategori/kategori_view');
	}
	function get_kategori(){
		header('Content-Type: application/json');
    	echo $this->kategori_model->get_all_kategori();
	}
	function simpan_kategori(){
		$kode_kategori  =$this->input->post('kode_kategori');
		$nama_kategori  =ucwords($this->input->post('nama_kategori'));
		$status  =$this->input->post('status');
		$kode_kategori  =$this->input->post('kode_kategori');
		$data = array(
			'kode_kategori' => $kode_kategori,
			'kode_user' =>1,
			'nama_kategori' => $nama_kategori,
			'tgl_input_kategori' => date('Y-m-d'),
			'status_kategori' => 'aktif'
		);
		if ($status == 'simpan') {
			$cek = $this->kategori_model->cek_kategori($nama_kategori);
			if (count($cek) == 1) {
				echo 3;
			}else{
				$simpan = $this->kategori_model->simpan_kategori($data);	
			}
			
		}else{
			$ubah = $this->kategori_model->ubah_kategori($kode_kategori,$data);
		}
		if (isset($simpan)) {
			echo 1;
		}else if (isset($ubah)) {
			echo 2;
		}else{
			echo 0;
		}
	}
	function hapus_kategori(){
		$kode_kategori = $this->input->post('kode_kategori');
		$hapus = $this->kategori_model->hapus_kategori($kode_kategori);
		if ($hapus) {
			echo 3;
		}else{
			echo 0;
		}
	}
	function get_detail_kategori(){
		$kode = $this->input->post('kode');
		$query = $this->kategori_model->cek_detail_kategori($kode);
		echo json_encode($query);
	}
}
 ?>