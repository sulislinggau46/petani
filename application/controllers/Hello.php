<?php
class Hello extends CI_Controller {
	public function index() {
		// muat model dgn nama Hello_model
		$this->load->model('Hello_model');
		
		//tangkap objek dari kelas Hello_model
		//yg telah dimuat dalam variabel $model
		$model = $this->Hello_model;
		
		//mengambil data/properti $str milik objek $model
		//yg telah dimuat dalam variabel $s
		$s = $model->str;
		
		//membuat data yg akan dikirim ke view dl bentuk array
		$data['teks'] = $s;
		
		//memuat view 'hello_view'
		//dengan mengirimkan data ke view bersangkutan
		$this->load->view('hello_view', $data);
		
		
		
	
	}
	public function coba() {
		//coba
	}
}


?>