<?php 
 
class Crud_petani extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('Crud_petani_model');
        $this->load->helper('url');
		$this->load->database(); //sumber: A. (https://itsolutionstuff.com/post/codeigniter-dynamic-dependent-dropdown-using-jquery-ajax-exampleexample.html)
	}
 
	function index(){
		$data['petani'] = $this->Crud_petani_model->tampil_data()->result();
		$this->load->view('crud_petani_view',$data);
		    
			$provinsi = $this->db->get("provinsi")->result();//sumber: A.
			$this->load->view('crud_petani_view', array('provinsi' => $provinsi )); //sumber: A. 
	}
	
	public function myformAjax($IDkabkota) { //sumber: A

       $result = $this->db->where("IDprovinsi",$IDkabkota)->get("kabkota")->result();
       echo json_encode($result);

   }
	
	function tambah() {
		$this->load->view('crud_petani_tambah_view');
	}
		
	function tambah_aksi(){
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$desa = $this->input->post('desa');
		$kecamatan = $this->input->post('kecamatan');
		$kabupaten = $this->input->post('kabupaten');
		$provinsi = $this->input->post('provinsi');
		$tglmasuk = $this->input->post('tglmasuk');
		$status = $this->input->post('status');
		$koords = $this->input->post('koords');
		$koorde = $this->input->post('koorde');
 
		$data = array(
			'nik' => $nik,
			'nama' => $nama,
			'alamat' => $alamat,
			'desa' => $desa,
			'kecamatan' => $kecamatan,
			'kabupaten' => $kabupaten,
			'provinsi' => $provinsi,
			'tglmasuk' => $tglmasuk,
			'status' => $status,
			'koords' => $koords,
			'koorde' => $koorde
			);
		$this->Crud_petani_model->input_data($data,'petani');
		redirect('Crud_petani/index');
	}
	
	function hapus($IDpetani){
		$where = array('IDpetani' => $IDpetani);
		$this->Crud_petani_model->hapus_data($where,'petani');
		redirect('Crud_petani/index');
	}
	
	function edit($IDpetani){
		$where = array('IDpetani' => $IDpetani);
		$data['petani'] = $this->Crud_petani_model->edit_data($where,'petani')->result();
		$this->load->view('crud_petani_edit_view',$data);
		}
	
	function update(){
		$IDpetani = $this->input->post('IDpetani');
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$desa = $this->input->post('desa');
		$kecamatan = $this->input->post('kecamatan');
		$kabupaten = $this->input->post('kabupaten');
		$provinsi = $this->input->post('provinsi');
		$tglmasuk = $this->input->post('tglmasuk');
		$status = $this->input->post('status');
		$koords = $this->input->post('koords');
		$koorde = $this->input->post('koorde');

		$data = array(
			'nik' => $nik,
			'nama' => $nama,
			'alamat' => $alamat,
			'desa' => $desa,
			'kecamatan' => $kecamatan,
			'kabupaten' => $kabupaten,
			'provinsi' => $provinsi,
			'tglmasuk' => $tglmasuk,
			'status' => $status,
			'koords' => $koords,
			'koorde' => $koorde
		);

		$where = array(
			'IDpetani' => $IDpetani
		);

		$this->Crud_petani_model->update_data($where,$data,'petani');
		redirect('Crud_petani/index');
	}
}