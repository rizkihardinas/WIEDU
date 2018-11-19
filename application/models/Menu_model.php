<?php 
/**
 * 
 */
class Menu_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function tampil_parent(){
		$query = $this->db->get('tb_parent_menu');
		return $query->result_array();
	}
	function tampil_menu($id){
		$this->db->where('kode_parent_menu',$id);
		$query = $this->db->get('tb_menu');
		return $query->result_array();
	}
}
 ?>