<?php 
/**
 * 
 */
class Kategori_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('datatables');
	}
	function get_all_kategori() {
        $this->datatables->select('kode_kategori,nama_kategori');
        $this->datatables->from('tb_kategori');
        $this->datatables->add_column('action','<button class="btn btn-warning" id="btnEditKategori" data-id="$1"><i class="icon icon-pencil"></i>&nbsp;</button><button class="btn btn-danger" id="btnHapusKategori" data-id="$1"><center><i class="icon icon-trash"></i></center></button>','kode_kategori');
        return $this->datatables->generate();
	}
	function simpan_kategori($data){
		$this->db->insert('tb_kategori',$data);
	}	
	function ubah_kategori($kode,$data){
		$this->db->where('kode_kategori',$kode);
		$this->db->update('tb_kategori',$data);
	}
	function hapus_kategori($kode){
		$this->db->where('kode_kategori',$kode);
		$this->db->delete('tb_kategori');
	}
	function cek_kategori($cek_nama){
		$this->db->where('nama_kategori',$cek_nama);
		$query = $this->db->get('tb_kategori');
		return $query->result_array();
	}
	function cek_detail_kategori($kode){
		$this->db->where('kode_kategori',$kode);
		$query = $this->db->get('tb_kategori');
		return $query->result_array();
	}
}
 ?>