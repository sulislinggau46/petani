<?php
class Petani_model extends CI_Model {
	public $nik;
	public $nama;
	public $alamat;
	public $desa;
	public $kecamatan;
	public $kabupaten;
	public $provinsi;
	public $tglmasuk;
	public $status;
	public $koords;
	public $koorde;
	
	public $labels = [];
	
	public function __construct() {
		parent::__construct();
		$this->labels = $this->attribute_labels();
		$this->load->database();
	}
	
	public function get_table_name(){
		return 'petani';
		
	}
	public function insert(){
		$this->db->insert($this->get_table_name(), $this);
		
	} 
	public function update(){
		$this->db->update($this->get_table_name(), $this, ['IDpetani'=>$this->IDpetani]);
	}
	public function delete(){
		$this->db->delete($this->get_table_name(), ['IDpetani'=>$this->IDpetani]);
	}
	public function attribute_labels() {
		return [
			'nik'=>'NIK :',
			'nama'=>'NAMA :',
			'alamat'=>'ALAMAT :',
			'desa'=>'DESA :',
			'kecamatan'=>'KECAMATAN :',
			'kabupaten'=>'KABUPATEN :',
			'provinsi'=>'PROVINSI :',
			'tglmasuk'=>'TANGGAL MASUK :',
			'status'=>'STATUS :',
			'koords'=>'KOORDINAT S :',
			'koorde'=>'KOORDINAT E :'
		];
	}

}