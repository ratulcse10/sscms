<?php

class Register extends CI_Controller{

	public function index(){
		$data['title']="Register";
		$this->load->view('common/head',$data);
		$this->load->view('register/form');
		$this->load->view('common/footer');
	}

	public function process(){

		//validation Rules
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.user_email]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('reg', 'Registration No', 'required|exact_length[10]|integer|integer|is_unique[users.user_reg]');
		$this->form_validation->set_rules('real_name', 'Full Name', 'required');
		$this->form_validation->set_rules('user_name', 'User Name', 'required|is_unique[users.user_name]|alpha_dash');

		//custom message for form validation
		$this->form_validation->set_message('required', '%s can\'t be Blank');
		$this->form_validation->set_message('valid_email', 'You Email ID is not in Valid Format');
		$this->form_validation->set_message('is_unique', '%s already used by Another User');

		if ($this->form_validation->run() == FALSE)
		{
			 $data['title']="Register";
			 $this->load->view('common/head',$data);
			 $this->load->view('register/form');
			 $this->load->view('common/footer');
		}
		else{
			
			$user = new User();
			$user->user_email=$this->input->post('email');
			$user->user_password=$this->input->post('password');
			$user->user_full_name=$this->input->post('real_name');
			$user->user_name=$this->input->post('user_name');
			$user->user_reg=$this->input->post('reg');
			$user->user_role_id=3;

			if($user->save()){
				 $data['title']="Registration Confirmation";
				 $data['name']=$this->input->post('real_name');
				 $this->load->view('common/head',$data);
				 $this->load->view('register/confirm',$data);
				 $this->load->view('common/footer');
			}
			else{
				 $data['title']="Register";
				 $this->load->view('common/head',$data);
				 $this->load->view('register/form');
				 $this->load->view('common/footer');
			}
		}
	}
}
