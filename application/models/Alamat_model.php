<?php 
 
class Alamat_model extends CI_Model{
	function ambil_data(){
		return $this->db->get('alamat');
	}
}