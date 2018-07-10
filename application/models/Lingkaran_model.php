<?php
include ("C:\\xampp\htdocs\ci\system\core\\Model.php");
class Lingkaran_model extends CI_Model {
	const PI = 3.14 ;
	private $radius;
	
	public function __construct($r) {
		$this->radius = $r;
	}
	
	public function set_radius($r) {
		$this->radius = $r;
	}
	public function get_radius() {
		return $this->radius;
	}
	public function hitung_luas() {
		return self::PI * $this->radius * $this->radius;
	}
	public function hitung_keliling() {
		return 2*self::PI * $this->radius;
	}
}





