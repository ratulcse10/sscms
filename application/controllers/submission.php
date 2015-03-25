<?php

class Submission extends CI_Controller {

	public function index(){
		$data['title']="Submission";
		$this->load->view('common/head',$data);
		$this->load->view('submission/show');
		$this->load->view('common/footer');
	}
}