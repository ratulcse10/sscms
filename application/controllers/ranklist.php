<?php

class Ranklist extends CI_Controller {

	public function index(){
		$data['title']="Ranklist";
		$this->load->view('common/head',$data);
		$this->load->view('ranklist/show');
		$this->load->view('common/footer');
	}
}