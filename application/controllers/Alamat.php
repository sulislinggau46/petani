<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Alamat extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('Alamat_model');
	}
 
	function alamat(){
		$data['alamat'] = $this->Alamat_model->ambil_data()->result();
		$this->load->view('alamat_view.php',$data);
	}
 
}