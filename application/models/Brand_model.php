<?php 
/**
 * 
 */
class Brand_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('datatables');
	}
	function get_all_brand() {
        $this->datatables->select('kode_brand,nama_brand');
        $this->datatables->from('tb_brand');
        $this->datatables->add_column('action','<button class="btn btn-warning" id="btnEditBrand" data-id="$1"><i class="icon icon-pencil"></i>&nbsp;</button><button class="btn btn-danger" id="btnHapusBrand" data-id="$1"><center><i class="icon icon-trash"></i></center></button>','kode_brand');
        return $this->datatables->generate();
	}
	function simpan_brand($data){
		$this->db->insert('tb_brand',$data);
	}	
	function ubah_brand($kode,$data){
		$this->db->where('kode_brand',$kode);
		$this->db->update('tb_brand',$data);
	}
	function hapus_brand($kode){
		$this->db->where('kode_brand',$kode);
		$this->db->delete('tb_brand');
	}
	function cek_brand($cek_nama){
		$this->db->where('nama_brand',$cek_nama);
		$query = $this->db->get('tb_brand');
		return $query->result_array();
	}
	function cek_detail_brand($kode){
		$this->db->where('kode_brand',$kode);
		$query = $this->db->get('tb_brand');
		return $query->result_array();
	}
}
 ?>