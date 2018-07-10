<?php
class Login extends CI_Controller {
	public function index() {
	$this->load->model('User_model');
	$model= $this->User_model;
	if (isset($_POST['btnSubmit'])) {
		$model->username = $_POST['username'];
		$model->password = $_POST['password'];
		
		if ($model->authenticate()) {
			$this->load->view('login_success_view');
		} else {
			$this->load->view('login_error_view');
		}
		
	} else {
		$this->load->view('login_form_view', ['model'=>$model]);
	}
	
	
	}

}
//jika btnSubmit ditekan lakukan perintah ini
// jika username password benar, load login_success_view
//jika username password salah, load login_error_view
//jika btnSubmit tidak ditekan, load login_form_view