<?php 
/**
 * 
 */
class Supplier extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('menu_model');
		$this->load->model('supplier_model');
		$this->load->model('Wilayah_model');
		
	}
	function index(){
		$data['parent_menu'] = $this->menu_model->tampil_parent();
		foreach ($data['parent_menu'] as $parent) {
			$data['menu'] = $this->menu_model->tampil_menu($parent['kode_parent_menu']);
		}
		$value['provinsi'] = $this->Wilayah_model->get_provinsi();
		$value['bank'] = $this->Wilayah_model->get_bank();
		$this->load->view('parts/header');
		$this->load->view('parts/menu',$data);
		$this->load->view('parts/sidebar');
		$this->load->view('supplier/supplier_view',$value);
		$this->load->view('parts/footer');
	}
	function get_kota(){
		$kode = $this->input->post('kode');
		$data = $this->Wilayah_model->get_kota($kode);
		foreach ($data as $kota) {
			
			echo "<option value='".$kota['id']."'>".$kota['nama']."</option>";
		}
	}
	function get_kecamatan(){
		$kode = $this->input->post('kode');
		$data = $this->Wilayah_model->get_kecamatan($kode);
		foreach ($data as $kecamatan) {
			echo "<option value='".$kecamatan['id']."'>".$kecamatan['nama']."</option>";
		}
	}
	function get_kelurahan(){
		$kode = $this->input->post('kode');
		$data = $this->Wilayah_model->get_kelurahan($kode);
		foreach ($data as $kelurahan) {

			echo "<option value='".$kelurahan['id']."'>".$kelurahan['nama']."</option>";
		}
	}
	function simpan_supplier(){
		$kode_supplier  =$this->input->post('kode_supplier');
		$nama_supplier  =ucwords($this->input->post('nama_supplier'));
		$nama_perusahaan_supplier = $this->input->post('nama_perusahaan_supplier');
		$no_telp_perusahaan = $this->input->post('no_telp_perusahaan');
		$no_telp_supplier = $this->input->post('no_telp_supplier');
		$email_supplier = $this->input->post('email_supplier');
		$provinsi_supplier = $this->input->post('provinsi_supplier');
		$kabupaten_supplier = $this->input->post('kabupaten_supplier');
		$kecamatan_supplier = $this->input->post('kecamatan_supplier');
		$kodepos_supplier = $this->input->post('kodepos_supplier');
		$alamat_lengkap_supplier = $this->input->post('alamat_lengkap_supplier');
		$kode_bank = $this->input->post('kode_bank');
		$atas_nama_supplier = $this->input->post('atas_nama_supplier');
		$no_rek_supplier = $this->input->post('no_rek_supplier');
		$kode_user = '001';
		$status  =$this->input->post('status');
		$data  = array(
			'kode_supplier' =>$kode_supplier,
			'nama_supplier'=>$nama_supplier,
			'nama_perusahaan_supplier' =>$nama_perusahaan_supplier,
			'no_telp_perusahaan'=>$no_telp_perusahaan,
			'no_telp_supplier'=>$no_telp_supplier,
			'email_supplier'=>$email_supplier,
			'keluarahan_supplier'=>$kelurahan_supplier,
			'kodepos_supplier'=>$kodepos_supplier,
			'alamat_lengkap_supplier'=>$alamat_lengkap_supplier,
			'kode_bank'=>$kode_bank,
			'atas_nama_supplier'=>$atas_nama_supplier,
			'no_rek_supplier'=>$no_rek_supplier,
			'kode_user'=>$kode_user
		);
		if ($status == 'simpan') {
			$this->supplier_model->simpan_supplier($data);
			echo 1;
		}else{
			$this->supplier_model->ubah_supplier($kode_supplier,$data);
			echo 2;
		}
	}
	function cek_supplier(){
		$nama_perusahaan_supplier = $this->input->post('nama_perusahaan_supplier');
		$cek = $this->supplier_model->cek_supplier($nama_perusahaan_supplier);
		echo count($cek);

	}
	function get_supplier(){
		$data['supplier'] = $this->supplier_model->get_supplier();
		foreach ($data['supplier'] as $data) {

			echo '
			<tr>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input checkSingle"
                               id="user_id_1" required><label
                            class="custom-control-label" for="user_id_1"></label>
                    </div>
                </td>

                <td>
                    <div class="avatar avatar-md mr-3 mt-1 float-left">
                        <span class="avatar-letter avatar-letter-'.substr($data['nama_supplier'], 0,1).' avatar-md circle"></span>
                    </div>
                    <div>
                        <div>
                            <strong>'.$data['nama_supplier'].'</strong>
                        </div>
                        <small> '.$data['email_supplier'].'</small>
                    </div>
                </td>

                <td>2</td>
                <td>'.$data['no_telp_supplier'].'</td>
                <td>
                    <a href="panel-page-profile.html"><i class="icon-eye mr-3"></i></a>
                    <a href="panel-page-profile.html"><i class="icon-pencil"></i></a>
                </td>
            </tr>
			';
		}	
	}
	// function ubah_supplier(){
	// 	$kode_supplier  =$this->input->post('kode_supplier');
	// 	$nama_supplier  =ucwords($this->input->post('nama_supplier'));
	// 	$status  =$this->input->post('status');
	// 	$nama_perusahaan_supplier = $this->input->post('nama_perusahaan_supplier');
	// 	$no_telp_perusahaan = $this->input->post('no_telp_perusahaan');
	// 	$no_telp_supplier = $this->input->post('no_telp_supplier');
	// 	$email_supplier = $this->input->post('email_supplier');
	// 	$provinsi_supplier = $this->input->post('provinsi_supplier');
	// 	$kabupaten_supplier = $this->input->post('kabupaten_supplier');
	// 	$kecamatan_supplier = $this->input->post('kecamatan_supplier');
	// 	$kelurahan_supplier = $this->input->post('kelurahan_supplier');
	// 	$kodepos_supplier = $this->input->post('kodepos_supplier');
	// 	$alamat_lengkap_supplier = $this->input->post('alamat_lengkap_supplier');
	// 	$kode_bank = $this->input->post('kode_bank');
	// 	$atas_nama_supplier = $this->input->post('atas_nama_supplier');
	// 	$no_rek_supplier = $this->input->post('no_rek_supplier');
	// 	$kode_user = $this->input->post('kode_user');
	// 	$data  = array(
	// 		'nama_supplier'=>$nama_supplier,
	// 		'nama_perusahaan_supplier' =>$nama_perusahaan_supplier,
	// 		'no_telp_perusahaan'=>$no_telp_perusahaan,
	// 		'no_telp_supplier'=>$no_telp_supplier,
	// 		'email_supplier'=>$email_supplier,
	// 		'provinsi_supplier'=>$provinsi_supplier,
	// 		'kabupaten_supplier'=>$kabupaten_supplier,
	// 		'kecamatan_supplier'=>$kecamatan_supplier,
	// 		'keluarahan_supplier'=>$kelurahan_supplier,
	// 		'kodepos_supplier'=>$kodepos_supplier,
	// 		'alamat_lengkap_supplier'=>$alamat_lengkap_supplier,
	// 		'kode_bank'=>$kode_bank,
	// 		'atas_nama_supplier'=>$atas_nama_supplier,
	// 		'no_rek_supplier'=>$no_rek_supplier,
	// 		'kode_user'=>$kode_user
	// 	);
	// 	$this->supplier_model->ubah_supplier($kode_supplier,$data);

	// }
	function hapus_supplier(){
		$kode_supplier = $this->input->post('kode_supplier');
		$this->supplier_model->hapus_supplier($kode_supplier);
	}
}
 ?>