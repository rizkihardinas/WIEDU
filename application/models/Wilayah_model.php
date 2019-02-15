<?php 
/**
 * 
 */
class Wilayah_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('datatables');

	}
	function get_provinsi(){
		$query = $this->db->get('tb_provinsi');
		return $query->result_array();
	}
	function get_kota($kode){
		$this->db->where('province_id',$kode);
		$query = $this->db->get('tb_kota');
		return $query->result_array();
	}
	function get_kecamatan($kode){
		$this->db->where('regency_id',$kode);
		$query = $this->db->get('tb_kecamatan');
		return $query->result_array();
	}
	function get_kelurahan($kode){
		$this->db->where('district_id',$kode);
		$query = $this->db->get('tb_desa');
		return $query->result_array();
	}
	function get_bank(){
		$query = $this->db->get('tb_bank');
		return $query->result_array();
	}
	
}
 ?>