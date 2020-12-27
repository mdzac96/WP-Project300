<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	 function __construct() {

        parent::__construct();

		date_default_timezone_set('Asia/Dhaka');
		
        if($this->session->userdata('type')!='admin'){
			redirect('Welcome');
		}else{
		
		}


    }


	public function index()
	{
		$this->load->view('admin/inc/header');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/inc/footer');
	}

	public function add_user()
	{

		$data['title']='Add User';


		$this->form_validation->set_rules('name', 'Name', 'required|regex_match[/^[a-zA-Z ]*$/]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tbl_user.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[10]');
		$this->form_validation->set_rules('c_password', 'Confirm', 'required|matches[password]');
		$this->form_validation->set_rules('mobile', 'Mobile', 'required|is_numeric|exact_length[11]');
		$this->form_validation->set_rules('date_of_birth', 'Date of Birth','required');
		$this->form_validation->set_rules('blood_group', 'Blood Id','required');
		$this->form_validation->set_rules('weight', 'Weight','required');
		$this->form_validation->set_rules('address', 'Address','required');
		$this->form_validation->set_rules('place_id', 'Place Id','required');
		


		//$this->form_validation->set_message('validate_age', 'The %s is not allowed');

		$this->form_validation->set_message('validate_age', 'Your age is not allowed');
		//$this->form_validation->set_message('validate_age', 'আপনার বায়স গ্রহণ যোগ্য নয়');

		function validate_age($var){

			if($var>18&&$var<60){

					return true;

			    }else{

			    	return false;
			    }


		}


 
		

 
 
		if ($this->form_validation->run() == FALSE) {

		$data['places']=$this->db->get('tbl_user')->result_array();

		
		$this->load->view('admin/inc/header');
		$this->load->view('admin/add-user',$data);
		$this->load->view('admin/inc/footer');

		}

		else {


			$idata['name']=$this->input->post('name');
			$idata['email']=$this->input->post('email');
			$idata['password']=$this->input->post('password');
			$idata['mobile']=$this->input->post('mobile');
			$idata['date_of_birth']=$this->input->post('date_of_birth');
			$idata['blood_group']=$this->input->post('blood_group');
			$idata['password']=$this->input->post('password');
			$idata['weight']=$this->input->post('weight');
			$idata['address']=$this->input->post('address');
			$idata['place_id']=$this->input->post('place_id');
		

			$this->db->insert('tbl_user',$idata);

			$message='<div class="alert alert-success">Data Successfully Inserted</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}
	}


	public function view_user()
	{

		$data['title']='View User';

		if($this->input->post('search')){

				$this->db->where('blood_group',$this->input->post('blood_group'));
			}
			

	
		// $data['user']=$this->db->like('blood_group', 'O','both')->get('tbl_user')->result_array();
		$data['user']=$this->db->get('tbl_user')->result_array();

		$this->load->view('admin/inc/header');
		$this->load->view('admin/view-user',$data);
		$this->load->view('admin/inc/footer');

	}

	
	
		public function edit_user($id)
	{

		$data['title']='Edit User';


		
		$this->form_validation->set_rules('name', 'Name', 'required|regex_match[/^[a-zA-Z ]*$/]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[10]');
		$this->form_validation->set_rules('c_password', 'Confirm', 'required|matches[password]');
		$this->form_validation->set_rules('mobile', 'Mobile', 'required|is_numeric|exact_length[11]');
		$this->form_validation->set_rules('date_of_birth', 'Date of Birth','required');
		$this->form_validation->set_rules('blood_group', 'blood_group','required');
		$this->form_validation->set_rules('weight', 'Weight','required');
		$this->form_validation->set_rules('address', 'Address','required');
		$this->form_validation->set_rules('place_id', 'Place Id','required');
		
	
		
 



		$this->form_validation->set_message('validate_blood', 'The %s is Invalid');

		function validate_blood($var){

			if($var=='O+'||$var=='A+'||$var=='B+'||$var=='AB+'||$var=='O-'||$var=='B-'||$var=='AB-'||$var=='A-'){
					return true;
			    }else{

			    	return false;
			    }


		}




		$this->form_validation->set_message('validate_age', 'Your age is not allowed');

		function validate_age($var){

			if($var>18&&$var<60){

					return true;

			    }else{

			    	return false;
			    }


		}

	

		if ($this->form_validation->run() == FALSE) {
			
			
			$data['user']=$this->db->where('id',$id)->get('tbl_user')->result_array();


		$this->load->view('admin/inc/header');
		$this->load->view('admin/edit-user',$data);
		$this->load->view('admin/inc/footer');


		} else {


			$idata['name']=$this->input->post('name');
			$idata['email']=$this->input->post('email');
			$idata['password']=$this->input->post('password');
			$idata['mobile']=$this->input->post('mobile');
			$idata['date_of_birth']=$this->input->post('date_of_birth');
			$idata['blood_group']=$this->input->post('blood_group');
			$idata['password']=$this->input->post('password');
			$idata['weight']=$this->input->post('weight');
			$idata['address']=$this->input->post('address');
			$idata['place_id']=$this->input->post('place_id');

			



			$this->db->where('id',$id)->update('tbl_user',$idata);

			$message='<div class="alert alert-success">Data Successfully Updated</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}


	 
		 
	}
	
	
	public function delete_user($id)
	
	{  
		$this->db->where('id',$id)->delete('tbl_user');
		
		redirect($_SERVER['HTTP_REFERER']);
	
	}


	public function view_contact()
	{

		$data['title']='View Contact';

	
		$data['contact']=$this->db->get('tbl_contact')->result_array();

		$this->load->view('admin/inc/header');
		$this->load->view('admin/view-message',$data);
		$this->load->view('admin/inc/footer');

	}


	public function delete_contact($id)
	{  
		$this->db->where('id',$id)->delete('tbl_contact');
		
		redirect($_SERVER['HTTP_REFERER']);
	
	}



	public function add_place()
	{

		$data['title']='Add place';


		$this->form_validation->set_rules('place_name', 'Place Name', 'required');
		
 
 
		if ($this->form_validation->run() == FALSE) {

		$this->load->view('admin/inc/header');
		$this->load->view('admin/add-place',$data);
		$this->load->view('admin/inc/footer');

		}

		else {


			$idata['place_name']=$this->input->post('place_name');
			
		

			$this->db->insert('tbl_place',$idata);

			$message='<div class="alert alert-success">Data Successfully Inserted</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}
	}


	public function view_place()
	{

		$data['title']='View place';

	
		
		$data['place']=$this->db->get('tbl_place')->result_array();

		$this->load->view('admin/inc/header');
		$this->load->view('admin/view-place',$data);
		$this->load->view('admin/inc/footer');

	}

	
	
		public function edit_place($id)
	{

		$data['title']='Edit place';


		
		$this->form_validation->set_rules('place_name', ' Place Name', 'required');
		
		
	



		if ($this->form_validation->run() == FALSE) {
			
			
			$data['place']=$this->db->where('place_id',$id)->get('tbl_place')->result_array();


			$this->load->view('admin/inc/header');
		$this->load->view('admin/edit-place',$data);
		$this->load->view('admin/inc/footer');


		} else {


			$idata['place_name']=$this->input->post('place_name');
			

			



			$this->db->where('place_id',$id)->update('tbl_place',$idata);

			$message='<div class="alert alert-success">Data Successfully Updated</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}


	 
		 
	}
	
	
	public function delete_place($id)
	{


			  
		$this->db->where('place_id',$id)->delete('tbl_place');
		
		redirect($_SERVER['HTTP_REFERER']);
	
	}






		public function add_blood()
	{

		$data['title']='Add Blood';


		$this->form_validation->set_rules('blood_group', 'Blood Group','required');
		
	
		if ($this->form_validation->run() == FALSE) {

		$this->load->view('admin/inc/header');
		$this->load->view('admin/add-blood',$data);
		$this->load->view('admin/inc/footer');

		}

		else {


			$idata['blood_group']=$this->input->post('blood_group');
			
		

			$this->db->insert('tbl_blood_group',$idata);

			$message='<div class="alert alert-success">Data Successfully Inserted</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}
	}


	public function view_blood()
	{

		$data['title']='View Blood';

	
		
		$data['blood']=$this->db->get('tbl_blood_group')->result_array();

		$this->load->view('admin/inc/header');
		$this->load->view('admin/view-blood',$data);
		$this->load->view('admin/inc/footer');

	}

	
	
		public function edit_blood($id)
	{

		$data['title']='Edit Blood';


		
		$this->form_validation->set_rules('blood_group', 'Blood Group','required');
		
		
	



		if ($this->form_validation->run() == FALSE) {
			
			
			$data['blood']=$this->db->where('b_id',$id)->get('tbl_blood_group')->result_array();


			$this->load->view('admin/inc/header');
			$this->load->view('admin/edit-blood',$data);
			$this->load->view('admin/inc/footer');


		} else {


			$idata['blood_group']=$this->input->post('blood_group');
			

			



			$this->db->where('b_id',$id)->update('tbl_blood_group',$idata);

			$message='<div class="alert alert-success">Data Successfully Updated</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}


	 
		 
	}
	
	
	public function delete_blood($id)
	{


			  
		$this->db->where('b_id',$id)->delete('tbl_blood_group');
		
		redirect($_SERVER['HTTP_REFERER']);
	
	}








		public function add_bdh()
	{

		$data['title']='Add Blood Donation History';


		$this->form_validation->set_rules('user_id', 'User Id','required');
		$this->form_validation->set_rules('date', 'Date','required');
	
		if ($this->form_validation->run() == FALSE) {


		$data['users']=$this->db->order_by('name')->get('tbl_user')->result_array();

		$this->load->view('admin/inc/header');
		$this->load->view('admin/add-bdh',$data);
		$this->load->view('admin/inc/footer');

		}

		else {


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

		$data['title']='View Blood Donation History';

		if($this->input->post('search')){

				$this->db->where('mobile',$this->input->post('mobile'));
			}
			
		
		$data['bdh']=$this->db->select('*')->from('blood_donation_history,tbl_user')->where('blood_donation_history.user_id=tbl_user.id')->get()->result_array();

		$this->load->view('admin/inc/header');
		$this->load->view('admin/view-bdh',$data);
		$this->load->view('admin/inc/footer');

	}

	
	
		public function edit_bdh($id)
	{

		$data['title']='Edit Blood Donation History';


		
		$this->form_validation->set_rules('user_id', 'User Id','required');
		$this->form_validation->set_rules('date', 'Date','required');
	
		
	



		if ($this->form_validation->run() == FALSE) {


			
			$data['bdh']=$this->db->where('b_id',$id)->get('blood_donation_history')->result_array();



			$data['users']=$this->db->order_by('name')->get('tbl_user')->result_array();

			$this->load->view('admin/inc/header');
			$this->load->view('admin/edit-bdh',$data);
			$this->load->view('admin/inc/footer');


		} else {


			$idata['user_id']=$this->input->post('user_id');
			$idata['date']=$this->input->post('date');
			

			



			$this->db->where('b_id',$id)->update('blood_donation_history',$idata);

			$message='<div class="alert alert-success">Data Successfully Updated</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}


	 
		 
	}
	
	
	public function delete_bdh($id)
	{


			  
		$this->db->where('b_id',$id)->delete('blood_donation_history');
		
		redirect($_SERVER['HTTP_REFERER']);
	
	}






	}		