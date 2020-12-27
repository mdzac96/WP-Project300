
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	 
	public function index()
	{

		$data['title']='Show The Users List';


		$data['user']=$this->db->get('blood_donation_history')->result_array();

		$this->load->view('show-user',$data);
	}



	public function add_bdh()
	{

		$data['title']='Add Blood Donation History';

		
		$this->form_validation->set_rules('user_id', 'User Id','required');
		$this->form_validation->set_rules('date', 'Date','required');
		


		if ($this->form_validation->run() == FALSE) {

			 $this->load->view('add-bdh',$data);

		} else {


			
			$idata['user_id']=$this->input->post('user_id');
			$idata['date']=$this->input->post('date');
			
		

			$this->db->insert('blood_donation_history',$idata);

			$message='<div class="alert alert-success">Data Successfully Inserted</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}


	 
		 
	}


	public function view_bdh()
	{

		$data['title']='Blood Donation History';

	
		// $data['user']=$this->db->like('blood_group', 'O','both')->get('tbl_user')->result_array();
		$data['user']=$this->db->get('blood_donation_history')->result_array();

		$this->load->view('show-user',$data);
	}

	
	
		public function edit_bdh($id)
	{

		$data['title']='Edit Blood Donation History';


		
		$this->form_validation->set_rules('user_id', 'User Id','required');
		$this->form_validation->set_rules('date', 'Date','required');
	
		

		if ($this->form_validation->run() == FALSE) {
			
			
			$data['user']=$this->db->where('b_id',$id)->get('blood_donation_history')->result_array();


			 $this->load->view('edit-bdh',$data);

		} else {


			
			$idata['user_id']=$this->input->post('user_id');
			$idata['date']=$this->input->post('date');
			

			
			}else{
			
			$message='<div class="alert alert-danger">Please Add Image</div>';

			$this->session->set_flashdata('message',$message);

			redirect('User/edit_bdh/'.$id);

			}

			$this->db->where('b_id',$id)->update('blood_donation_history',$idata);

			$message='<div class="alert alert-success">Data Successfully Updated</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}


	 
		 
	}
	
	
	public function delete_user($id)
	{


		$old_image=$this->db->where('b_id',$id)->get('blood_donation_history')->result_array();


			  
		$this->db->where('b_id',$id)->delete('blood_donation_history');
		
		redirect($_SERVER['HTTP_REFERER']);
	
	}



