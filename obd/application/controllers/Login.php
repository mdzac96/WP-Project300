<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function index()
	{
		
	 
	 
	 	$this->form_validation->set_rules('Email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('Password', 'Password', 'required');
		 
 
 
		if ($this->form_validation->run() == FALSE) {

		$this->load->view('inc/header');
		 $this->load->view('login');
		 $this->load->view('inc/footer');

		}

		else {


			$result=$this->db->where('Email',$this->input->post('Email'))->where('Password',$this->input->post('Password'))->get('tbl_user')->result_array();

			if($result){


				$sdata['user_name']=$result[0]['user_name'];
				$sdata['email']=$result[0]['email'];
				$sdata['password']=$result[0]['password'];
				$sdata['type']=$result[0]['type'];
				
				$this->session->set_userdata($sdata);

				if($result[0]['type']=='admin'){

						redirect('Admin');

				}else{

					redirect('User');
				}

			
			}else{


			$message='<div class="alert alert-danger">Wrong Username or Password</div>';

			$this->session->set_flashdata('message',$message);


					redirect('Login');
			}
		}
	}



	

		 
		 
	 


}
