<?php 
/**
 * 
 */
class Setting_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('datatables');
	}
	function simpan_level($data){
		$this->db->insert('tb_level',$data);
	}
	function ubah_level($data,$kode){
		$this->db->where('kode_level',$kode);
		$this->db->update('tb_level',$data);
	}
	function hapus_level($kode){
		$this->db->where('kode_level',$kode);
		$this->db->delete('tb_level');
	}
	function cek_level($cek_nama){
		$this->db->where('nama_level',$cek_nama);
		$query = $this->db->get('tb_level');
		return $query->result_array();
	}
	function cek_menu($cek_nama){
		$this->db->where('nama_menu',$cek_nama);
		$query = $this->db->get('tb_menu');
		return $query->result_array();
	}
	function cek_parent_menu($cek_nama){
		$this->db->where('nama_parent_menu',$cek_nama);
		$query = $this->db->get('tb_parent_menu');
		return $query->result_array();
	}
	function cek_detail_level($kode_level){
		$this->db->where('kode_level',$kode_level);
		$query = $this->db->get('tb_level');
		return $query->result_array();	
	}
	function get_level(){
		$query = $this->db->get('tb_level');
		return $query->result_array();
	}	
	function get_all_level() {
        $this->datatables->select('kode_level,nama_level');
        $this->datatables->from('tb_level');
        $this->datatables->add_column('action','<button class="btn btn-warning" id="btnEditLevel" data-id="$1"><i class="icon icon-pencil"></i>&nbsp;</button><button class="btn btn-danger" id="btnHapusLevel" data-id="$1"><center><i class="icon icon-trash"></i></center></button>','kode_level');
        return $this->datatables->generate();
	}	
	function get_all_akses() {
        $this->datatables->select('kode_akses,nama_level');
        $this->datatables->from('tb_level');
        $this->datatables->add_column('action','<button class="btn btn-warning" id="btnEditLevel" data-id="$1"><i class="icon icon-pencil"></i>&nbsp;</button><button class="btn btn-danger" id="btnHapusLevel" data-id="$1"><center><i class="icon icon-trash"></i></center></button>','kode_level');
        return $this->datatables->generate();
	}
	function get_all_menu_json() {
        $this->datatables->select('kode_menu,nama_menu');
        $this->datatables->from('tb_menu');
        $this->datatables->add_column('action','<button class="btn btn-warning" id="btnEditMenu" data-id="$1"><i class="icon icon-pencil"></i>&nbsp;</button><button class="btn btn-danger" id="btnHapusMenu" data-id="$1"><center><i class="icon icon-trash"></i></center></button>','kode_menu');
        return $this->datatables->generate();
	}
	function get_all_parent_menu_json() {
        $this->datatables->select('kode_parent_menu,nama_parent_menu');
        $this->datatables->from('tb_parent_menu');
        $this->datatables->add_column('action','<button class="btn btn-warning" id="btnEditParentMenu" data-id="$1"><i class="icon icon-pencil"></i>&nbsp;</button><button class="btn btn-danger" id="btnHapusParentMenu" data-id="$1"><center><i class="icon icon-trash"></i></center></button>','kode_parent_menu');
        return $this->datatables->generate();
	}
	function get_all_menu(){
		$query = $this->db->get('v_menu');
		return $query->result_array();
	}
	function get_all_menu_akses($kode){
		$this->db->where('kode_level',$kode);
		$query = $this->db->get('v_akses');
		return $query->result_array();
	}
	function simpan_akses($data){
		$query = $this->db->insert('tb_akses',$data);
	}
	function simpan_menu($data){
		$query = $this->db->insert('tb_menu',$data);
	}
	function simpan_parent_menu($data){
		$query = $this->db->insert('tb_parent_menu',$data);
	}
	function hapus_akses($kode){
		$this->db->where('kode_akses',$kode);
		$query = $this->db->delete('tb_akses');
	}
	function hapus_menu($kode){
		$this->db->where('kode_menu',$kode);
		$query = $this->db->delete('tb_menu');
	}
	function hapus_parent_menu($kode){
		$this->db->where('kode_parent_menu',$kode);
		$query = $this->db->delete('tb_parent_menu');
	}
	function ubah_menu($data,$kode){
		$this->db->where('kode_menu',$kode);
		$this->db->update('tb_menu',$data);
	}
	function ubah_parent_menu($data,$kode){
		$this->db->where('kode_parent_menu',$kode);
		$this->db->update('tb_parent_menu',$data);
	}
	function cek_detail_akses($kode_level,$kode_menu){
		$this->db->where('kode_menu',$kode_menu);
		$this->db->where('kode_level',$kode_level);
		$query = $this->db->get('tb_akses');
		return $query->result_array();	
	}
	function cek_detail_menu($kode_menu){
		$this->db->where('kode_menu',$kode_menu);
		$query = $this->db->get('tb_menu');
		return $query->result_array();	
	}
	function cek_detail_parent_menu($kode_menu){
		$this->db->where('kode_parent_menu',$kode_menu);
		$query = $this->db->get('tb_parent_menu');
		return $query->result_array();	
	}
}
 ?>