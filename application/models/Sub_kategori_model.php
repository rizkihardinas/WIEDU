<?php 
/**
 * 
 */
class Sub_kategori_model extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('datatables');
	}
	function get_all_sub_kategori() {
        $this->datatables->select('kode_sub_kategori,nama_sub_kategori,nama_kategori');
        $this->datatables->from('v_kategori');
        $this->datatables->add_column('action','<button class="btn btn-warning" id="btnEditSubKategori" data-id="$1"><i class="icon icon-pencil"></i>&nbsp;</button><button class="btn btn-danger" id="btnHapusSubKategori" data-id="$1"><center><i class="icon icon-trash"></i></center></button>','kode_sub_kategori');
        return $this->datatables->generate();
	}
	function simpan_sub_kategori($data){
		$this->db->insert('tb_sub_kategori',$data);
	}	
	function ubah_sub_kategori($kode,$data){
		$this->db->where('kode_sub_kategori',$kode);
		$this->db->update('tb_sub_kategori',$data);
	}
	function hapus_sub_kategori($kode){
		$this->db->where('kode_sub_kategori',$kode);
		$this->db->delete('tb_sub_kategori');
	}
	function cek_sub_kategori($cek_nama){
		$this->db->where('nama_sub_kategori',$cek_nama);
		$query = $this->db->get('tb_sub_kategori');
		return $query->result_array();
	}
	function cek_detail_sub_kategori($kode){
		$this->db->where('kode_sub_kategori',$kode);
		$query = $this->db->get('tb_sub_kategori');
		return $query->result_array();
	}
	function get_kategori(){
		$query = $this->db->get('tb_kategori');
		return $query->result_array();
	}
}
 ?>