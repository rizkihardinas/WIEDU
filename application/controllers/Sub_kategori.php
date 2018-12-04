<?php 
/**
 * 
 */
class Sub_kategori extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('menu_model');
		$this->load->model('sub_kategori_model');
		
	}
	function index(){
		$data['parent_menu'] = $this->menu_model->tampil_parent();
		foreach ($data['parent_menu'] as $parent) {
			$data['menu'] = $this->menu_model->tampil_menu($parent['kode_parent_menu']);
		}
		$data['kategori'] = $this->sub_kategori_model->get_kategori();
		$this->load->view('parts/header');
		$this->load->view('parts/menu',$data);
		$this->load->view('parts/sidebar');
		$this->load->view('kategori/sub_kategori_view',$data);
	}
	function get_sub_kategori(){
		header('Content-Type: application/json');
    	echo $this->sub_kategori_model->get_all_sub_kategori();
	}
	function simpan_sub_kategori(){
		$kode_sub_kategori  =$this->input->post('kode_sub_kategori');
		$kode_kategori  =$this->input->post('kode_kategori');
		$nama_sub_kategori  =$this->input->post('nama_sub_kategori');
		$status  =$this->input->post('status');
		$kode_sub_kategori  =$this->input->post('kode_sub_kategori');
		$data = array(
			'kode_sub_kategori' => $kode_sub_kategori,
			'kode_kategori' => $kode_kategori,
			'kode_user' =>1,
			'nama_sub_kategori' => $nama_sub_kategori,
			'tgl_input_sub_kategori' => date('Y-m-d'),
			'status_sub_kategori' => 'aktif'
		);
		if ($status == 'simpan') {
			$cek = $this->sub_kategori_model->cek_sub_kategori($nama_sub_kategori);
			if (count($cek) == 1) {
				echo 3;
			}else{
				$simpan = $this->sub_kategori_model->simpan_sub_kategori($data);	
			}
			
		}else{
			$cek = $this->sub_kategori_model->cek_sub_kategori($nama_sub_kategori);
			if (count($cek) == 1) {
				echo 3;
			}else{
				$ubah = $this->sub_kategori_model->ubah_sub_kategori($kode_sub_kategori,$data);	
			}
			
		}
		if (isset($simpan)) {
			echo 1;
		}else if (isset($ubah)) {
			echo 2;
		}else{
			echo 0;
		}
	}
	function hapus_sub_kategori(){
		$kode_sub_kategori = $this->input->post('kode_sub_kategori');
		$hapus = $this->sub_kategori_model->hapus_sub_kategori($kode_sub_kategori);
		if ($hapus) {
			echo 1;
		}else{
			echo 0;
		}
	}
	function get_detail_sub_kategori(){
		$kode = $this->input->post('kode_sub_kategori');
		$query = $this->sub_kategori_model->cek_detail_sub_kategori($kode);
		echo json_encode($query);
	}
}
 ?>