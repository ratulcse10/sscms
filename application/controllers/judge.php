<?php

class Judge extends CI_Controller{

	public function contest(){
		$data['title']="Contest";
		$this->load->view('common/head',$data);
		$this->load->view('judge/contest/list');
		$this->load->view('common/footer');
	}

	public function contestShow($contest_id){
		$data['title']="Contest";
		$this->load->view('common/head',$data);
		$this->load->view('judge/contest/contest_menu');
		$this->load->view('judge/contest/show');
		$this->load->view('common/footer');
	}
}