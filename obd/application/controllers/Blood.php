
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	 
	public function index()
	{

		$data['title']='Show The Users List';


		$data['user']=$this->db->get('tbl_blood_group')->result_array();

		$this->load->view('show-user',$data);
	}



	public function add_user()
	{

		$data['title']='Add User';

		$this->form_validation->set_rules('blood_group', 'Blood Group');

		


		if ($this->form_validation->run() == FALSE) {

			 $this->load->view('add-blood',$data);

		} else {


			
			$idata['password']=$this->input->post('blood_group');
			
		

			$this->db->insert('tbl_blood_group',$idata);

			$message='<div class="alert alert-success">Data Successfully Inserted</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}


	 
		 
	}


	public function view_user()
	{

		$data['title']='Like Function';

	
		// $data['user']=$this->db->like('blood_group', 'O','both')->get('tbl_user')->result_array();
		$data['user']=$this->db->get('tbl_blood_group')->result_array();

		$this->load->view('show-user',$data);
	}

	
	
		public function edit_user($id)
	{

		$data['title']='Edit User';


		$this->form_validation->set_rules('blood_group', 'Blood Group',);

	
		

		if ($this->form_validation->run() == FALSE) {
			
			
			$data['user']=$this->db->where('b_id',$id)->get('tbl_blood_group')->result_array();


			 $this->load->view('edit-user',$data);

		} else {


			
			$idata['password']=$this->input->post('blood_group');
			

			
			}else{
			
			$message='<div class="alert alert-danger">Please Add Image</div>';

			$this->session->set_flashdata('message',$message);

			redirect('User/edit_user/'.$id);

			}

			$this->db->where('id',$id)->update('tbl_user',$idata);

			$message='<div class="alert alert-success">Data Successfully Updated</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}


	 
		 
	}
	
	
	public function delete_user($id)
	{


		$old_image=$this->db->where('b_id',$id)->get('tbl_blood_group')->result_array();


			  
		$this->db->where('b_id',$id)->delete('tbl_blood_group');
		
		redirect($_SERVER['HTTP_REFERER']);
	
	}



		public function add_blood()
	{

		$data['title']='Add Blood';


		$this->form_validation->set_rules('blood_group', 'Blood Group','required');

		

		


		if ($this->form_validation->run() == FALSE) {

			 $this->load->view('add-blood',$data);

		} else {


			$idata['blood_group']=$this->input->post('blood_group');
			
		

			$this->db->insert('tbl_blood_group',$idata);

			$message='<div class="alert alert-success">Data Successfully Inserted</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}


	 
		 
	}

	







}
