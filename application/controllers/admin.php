<?php

class Admin extends CI_Controller{

	public function index(){

	}

	public function contest(){
		$data['title']="Contest";
		$this->load->view('common/head',$data);
		$this->load->view('admin/contest/list');
		$this->load->view('common/footer');
	}
}