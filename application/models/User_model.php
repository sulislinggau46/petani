<?php
class User_model extends CI_Model{
	public $username;
	public $password;
	
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