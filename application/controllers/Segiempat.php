<?php
class Segiempat extends CI_Controller {
	public function index() {
	if (isset($_POST['btnSubmit'])) {
		//$this->load->model('Segiempat_model');
		$model=$this->Segiempat_model;
		$p = $_POST['panjang'];
		$l = $_POST['lebar'];
		$model->set_panjang($p);
		$model->set_lebar($l);
		$this->load->view('segiempat_view', array('model'=>$model));
		
	} else {
		$this->load->view('segiempat_form_view');
	}
	}
}


?>