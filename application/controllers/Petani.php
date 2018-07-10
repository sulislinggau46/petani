<?php
class Petani extends CI_Controller {
	public function index() {
		$this->load->model('Petani_model');
		$model = $this->Petani_model;
		if (isset($_POST['btnSubmit'])) {
			$model->nik = $_POST['nik'];
			$model->nama = $_POST['nama'];
			$model->alamat = $_POST['alamat'];
			$model->desa = $_POST['desa'];
			$model->kecamatan = $_POST['kecamatan'];
			$model->kabupaten = $_POST['kabupaten'];
			$model->provinsi = $_POST['provinsi'];
			$model->tglmasuk = $_POST['tglmasuk'];
			$model->status = $_POST['status'];
			$model->koords = $_POST['koords'];
			$model->koorde = $_POST['koorde'];
			$model->insert();
			$this->load->view('petani_respon_view',['model'=>$model]);
			
		} else {
			$this->load->view('petani_form_view',['model'=>$model]);
		}
	}


}