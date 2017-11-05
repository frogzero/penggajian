<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$this->load->view('login');
		
	}

	public function admin()
	{
		$this->load->view('index');
		$this->load->view('admin/header');
		$this->load->view('content');
		$this->load->view('footer');
		
	}

}

// update by eko laptop
/* End of file home.php */
/* Location: ./application/controllers/home.php */