<?php
class Lingkaran extends CI_Controller {
	public function index(){
		if (isset($_POST['btnSubmit'])){
			//$this->load->model('Lingkaran_model');
			//$model=$this->Lingkaran_model;
			$radius = $_POST['jari2'];
			include (APPPATH . "models\\Lingkaran_model.php");
			$model = new Lingkaran_model($radius);
			//$model->set_radius($radius);
			$this->load->view('lingkaran_view', array('model'=>$model));
		} else {
			$this->load->view('lingkaran_form_view');
		}
		
		
		
		
	}
}

