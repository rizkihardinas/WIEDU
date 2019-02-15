<?php 
/**
 * 
 */
class Satuan_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('datatables');
	}
	function get_all_satuan() {
        $this->datatables->select('kode_satuan,nama_satuan');
        $this->datatables->from('tb_satuan');
        $this->datatables->add_column('action','<button class="btn btn-warning" id="btnEditSatuan" data-id="$1"><i class="icon icon-pencil"></i>&nbsp;</button><button class="btn btn-danger" id="btnHapusSatuan" data-id="$1"><center><i class="icon icon-trash"></i></center></button>','kode_satuan');
        return $this->datatables->generate();
	}
	function simpan_satuan($data){
		$this->db->insert('tb_satuan',$data);
	}	
	function ubah_satuan($kode,$data){
		$this->db->where('kode_satuan',$kode);
		$this->db->update('tb_satuan',$data);
	}
	function hapus_satuan($kode){
		$this->db->where('kode_satuan',$kode);
		$this->db->delete('tb_satuan');
	}
	function cek_satuan($cek_nama){
		$this->db->where('nama_satuan',$cek_nama);
		$query = $this->db->get('tb_satuan');
		return $query->result_array();
	}
	function cek_detail_satuan($kode){
		$this->db->where('kode_satuan',$kode);
		$query = $this->db->get('tb_satuan');
		return $query->result_array();
	}
}
 ?>