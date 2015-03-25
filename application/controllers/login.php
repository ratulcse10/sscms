<?php

class Login extends CI_Controller{

	public function index(){
		$data['title']="Login";
		$this->load->view('common/head',$data);
		$this->load->view('login/form');
		$this->load->view('common/footer');
	}


	public function process(){

		//validation rules
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');

		//custom message for form validation
		$this->form_validation->set_message('required', '%s can\'t be Blank');
		$this->form_validation->set_message('valid_email', 'You Email ID is not in Valid Format');


		if ($this->form_validation->run() == FALSE)
		{
			$data['title']="Login";
			$this->load->view('common/head',$data);
			$this->load->view('login/form');
			$this->load->view('common/footer');
		}
		else{
			$user = new User();
			$user->where('user_email',$this->input->post('email'));
			$user->where('user_password',$this->input->post('password'));
			$user->get();
			
			if($user->user_name != NULL){
				$newdata = array(
                   'user_name'  => $user->user_name,
                   'user_full_name'  => $user->user_full_name,
                   'user_email'     => $user->user_email,
                   'user_role_id'	=> $user->user_role_id,
                   'user_reg'	=> $user->user_reg,
                   'logged_in' => TRUE
                );

			   $this->session->set_userdata($newdata);
			   redirect(base_url()."profile/show/".$this->session->userdata('user_name'), 'refresh');

			}
			else{
				$data['title']="Login";
				$this->load->view('common/head',$data);
				$this->load->view('login/error');
				$this->load->view('common/footer');
				$this->session->sess_destroy();
			}
		}
	}
}