<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {


	public function index()
	{
		$this->load->view('inc/header');
		$this->load->view('gallery');
		$this->load->view('inc/footer');
	}
}
