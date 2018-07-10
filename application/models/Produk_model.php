<?php
class Produk_model extends CI_Model {
	public $id;
	public $nama;
	public $harga;
	
	public $labels = [];
	
	public function __construct() {
		parent::__construct();
		$this->labels = $this->attribute_labels();
		$this->load->database();
	}
	
	public function get_table_name(){
		return 'produk';
		
	}
	public function insert(){
		$this->db->insert($this->get_table_name(), $this);
		
	} 
	public function update(){
		$this->db->update($this->get_table_name(), $this, ['id'=>$this->id]);
	}
	public function delete(){
		$this->db->delete($this->get_table_name(), ['id'=>$this->id]);
	}
	public function attribute_labels() {
		return [
			'id'=>'Kode:',
			'nama'=>'Nama Produk:',
			'harga'=>'Harga:'
		];
	}

}