<?php
class Blog extends CI_controller{
	public function index() {
	$this->load->view('blog_view');
	$data['judul']= "JUDUL bLOG ada disini";
	$data['isi']= "ISI bog ada disini";
	$this->load->view('blog_view', $data);

}
    function komentar() 
    { 
      $this->load->view('blog_view');
	  $data['komen']= "Ini adalah fungsi komentar"; 
	  $this->load->view('blog_view', $data);
    } 

}