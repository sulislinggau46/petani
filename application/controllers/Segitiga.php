<?php
class Segitiga extends CI_Controller {
	public function index(){
		if (isset($_POST['btnSubmit'])){
			//$this->load->model('Lingkaran_model');
			//$model=$this->Lingkaran_model;
			$alas = $_POST['alas'];
			$tinggi = $_POST['tinggi'];
			include (APPPATH . "models\\Segitiga_model.php");
			$model1 = new Segitiga_model($alas);
			$model2 = new Segitiga_model($tinggi);
			
			//$model->set_radius($radius);
			$this->load->view('Segitiga_view', array('model'=>$model1));
			$this->load->view('Segitiga_view',array('model'=>$model2));
		} else {
			$this->load->view('Segitiga_form_view');
		}
		
		
		
		
	}
}

