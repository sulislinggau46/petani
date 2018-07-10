<?php
include ("C:\\xampp\htdocs\ci\system\core\\Model.php");
class Segitiga_model extends CI_Model {
	const AB  = 0.5;
	private $alas;
	private $tinggi;
	
	public function __construct($a) {
		$this->alas = $a;
	}
	
	public function __construct($t){
		$this->tinggi = $t;
	}
	
	public function set_alas($a) {
		$this->alas = $a;
	}
	
	public function set_tinggi($t) {
		$this->tinggi = $t;
	}
	
	public function get_alas() {
		return $this->alas;
	}
	
	public function get_tinggi() {
		return $this->tinggi;
	}
	
	public function hitung_luas() {
		return self::AB * $this->alas * $this->tinggi;
	}
}





