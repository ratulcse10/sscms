<?php

class Contest extends CI_Controller {

	public function index(){

		$data['title']="Contest";
		$this->load->view('common/head',$data);
		$this->load->view('contest/list');
		$this->load->view('common/footer');
	}

	public function show($contest_id){
		$data['title']="Contest";
		$this->load->view('common/head',$data);
		$this->load->view('contest/contest_menu');
		$this->load->view('contest/show');
		$this->load->view('common/footer');
	}


	public function problemListShow($contest_id){
		$data['title']="Contest";
		$this->load->view('common/head',$data);
		$this->load->view('contest/contest_menu');
		$this->load->view('contest/problemlist');
		$this->load->view('common/footer');
	}

	public function problemShow($contest_id,$problem_id){
		$data['title']="Contest";
		$data['problem_id']=$problem_id;
		$this->load->view('common/head',$data);
		$this->load->view('contest/contest_menu');
		$this->load->view('contest/problemlist');
		$this->load->view('problem/show',$data);
		$this->load->view('common/footer');
	}

	public function ranklistShow ($contest_id){
		$data['title']="Contest";
		$this->load->view('common/head',$data);
		$this->load->view('contest/contest_menu');
		$this->load->view('contest/ranklist',$data);
		$this->load->view('common/footer');
	}

	public function submissionShow($contest_id){
		$data['title']="Contest";
		$this->load->view('common/head',$data);
		$this->load->view('contest/contest_menu');
		$this->load->view('contest/submission');
		$this->load->view('common/footer');
	}

	public function problemSubmit(){
		$data['title']="Contest";
		$this->load->view('common/head',$data);
		$this->load->view('contest/contest_menu');
		$this->load->view('contest/submit');
		$this->load->view('common/footer');
	}
}