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
	function simpan_akses(){
		$kode_level = $this->input->post('kode_level');
		$kode_menu = $this->input->post('kode_menu');
		$data = array(
			'kode_akses' => $this->input->post('kode_akses'),
			'kode_level' => $kode_level,
			'kode_menu' => $kode_menu,
			'status' => 'unlock'
			 );
			$cek = count($this->setting_model->cek_detail_akses($kode_level,$kode_menu));
			if ( $cek == 1) {
				echo 3;
			}else{
				$query = $this->setting_model->simpan_akses($data);
				if ($query) {
					echo 1;
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
	function delete_akses(){
		$kode_akses = $this->input->post('kode_akses');
		$query = $this->setting_model->hapus_akses($kode_akses);
		if ($query) {
			echo 1;
		}else{
			echo 0;
		}
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
	function hak_akses(){
		$data['parent_menu'] = $this->menu_model->tampil_parent();
		foreach ($data['parent_menu'] as $parent) {
			$data['menu'] = $this->menu_model->tampil_menu($parent['kode_parent_menu']);
		}
		$data['level'] = $this->setting_model->get_level();

		$data['data_menu'] = $this->setting_model->get_all_menu();
		$this->load->view('parts/header');
		$this->load->view('parts/menu',$data);
		$this->load->view('parts/sidebar');
		$this->load->view('setting/hak_akses_view',$data);	
	}
	function get_yang_diakses(){
		$data['di_akses'] = $this->setting_model->get_all_menu_akses($this->input->post('kode_level'));
		foreach ($data['di_akses'] as $yang_diakses) {
			echo "<tr>";
			echo "<td>".$yang_diakses['nama_menu']."</td>";
			echo '<td>
			<button class="btn btn-danger" id="btnHapusHakAkses" data-id="'.$yang_diakses['kode_akses'].'"><i class="icon icon-minus"></i></button>
			</td>';
			echo "</tr>";
		}
	}
	function hapus_akses(){
		$kode = $this->input->post('kode_akses');
		$delete = $this->setting_model->hapus_akses($kode);
		if ($delete) {
			echo 1;
		}
	}

}
 ?>