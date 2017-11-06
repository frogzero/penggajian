<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('model_admin'));
		$this->load->library('cart');
		$this->load->helper(array('form', 'url'));  
	}

	public function index()
	{
		$data['staff'] = $this->model_admin->tampil_staff();
		$this->load->view('index');
		$this->load->view('admin/header_admin');
		$this->load->view('admin/staff/data_staff',$data);
		$this->load->view('footer');
	}

	public function tambah_staff()
	{
		// $this->load->view('backup_view/TambahStaff');
		$this->load->view('index');
		$this->load->view('admin/header_admin');
		$this->load->view('admin/staff/form_tambah_staff');
		$this->load->view('footer');
	}



}

/* End of file staff.php */
/* Location: ./application/controllers/staff.php */