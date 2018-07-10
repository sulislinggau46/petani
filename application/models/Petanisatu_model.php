<?php
class User_model extends CI_Model{
	public $nama;
	public $alamat;
	public $desa;
	public $kecamatan;
	public $kabupaten;
	
	public $labels = [];
	
	public function __construct() {
		parent::__construct();
		$this->labels = $this->attribute_labels();
	}
	public function authenticate() {
		if (isset($this->username) && isset($this->password)) {
			if ($this->username === 'demo' && $this->password === 'demo') {
				return TRUE;
			} else {
				return FALSE;
			}
		} else {
			return FALSE;
		}

}
public function attribute_labels() {
	return [
		'username'=>'USERNAME:',
		'password'=>'PASSWORD:'
	];
}
}