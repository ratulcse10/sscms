<?php

class Profile extends CI_Controller{

	public function index(){
		redirect(base_url()."profile/show/".$this->session->userdata('user_name'), 'refresh');
	}

	public function show($user_name){
		$data['title']=$user_name;
		$this->load->view('common/head',$data);
		$this->load->view('profile/show');
		$this->load->view('common/footer');
	}
}