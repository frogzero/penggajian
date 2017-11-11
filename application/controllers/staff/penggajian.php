<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penggajian extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('model_admin','model_matakuliah','model_dash_staff'));
		$this->load->library('cart');
		$this->load->helper(array('form', 'url'));  
	}

	public function index()
	{
		$data['penggajian'] = $this->model_dash_staff->tampil_penggajian();
		$this->load->view('index');
		$this->load->view('staff/header_staff');
		$this->load->view('staff/penggajian/data_penggajian',$data);
		$this->load->view('footer');
	}

}

/* End of file penggajian.php */
/* Location: ./application/controllers/staff/penggajian.php */