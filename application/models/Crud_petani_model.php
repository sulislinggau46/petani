<?php 
 
class Crud_petani_model extends CI_Model{
	
	function tampil_data(){
		return $this->db->get('petani');
	}
	
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	
	function hapus_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
	}
	
	function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
	}
	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	
	function get_all_provinsi() {
	$this->db->select('*');
	$this->db->from('provinsi');
	$query = $this->db->get();
	   
	return $query->result();
	}

}