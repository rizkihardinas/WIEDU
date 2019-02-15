<?php 
/**
 * 
 */
class Supplier_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('datatables');

	}
	function simpan_supplier($data){
		$this->db->insert('tb_supplier',$data);
	}	
	function ubah_supplier($kode,$data){
		$this->db->where('kode_supplier',$kode);
		$this->db->update('tb_supplier',$data);
	}
	function hapus_supplier($kode){
		$this->db->where('kode_supplier',$kode);
		$this->db->delete('tb_supplier');
	}
	function cek_detail_supplier($kode){
		$this->db->where('kode_supplier',$kode);
		$query = $this->db->get('tb_supplier');
		return $query->result_array();
	}
	function get_supplier(){
		$query = $this->db->get('tb_supplier');
		return $query->result_array();
	}
	function cek_supplier($nama){
		$this->db->where('nama_perusahaan_supplier',$nama);
		$query = $this->db->get('tb_supplier');
		return $query->result_array();
	}
	
}
 ?>