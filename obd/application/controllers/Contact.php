<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {


	public function index()
	{

		if($this->input->post('submit')){


					$idata['name']=$this->input->post('name');
					 
					$idata['email']=$this->input->post('email');
					$idata['mobile']=$this->input->post('mobile');
					$idata['message']=$this->input->post('message');



					$message='<div class="alert alert-success">Message Successfully Sent</div>';

					$this->session->set_flashdata('message',$message);
				 

				 	$this->db->insert('tbl_contact',$idata);





				}

		$this->load->view('inc/header');
		$this->load->view('contact');
		$this->load->view('inc/footer');


		
		}
}
