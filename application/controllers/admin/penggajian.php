<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penggajian extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
		$this->load->view('admin/header_admin');
		$this->load->view('admin/penggajian/data_penggajian');
		$this->load->view('footer');
	}

	public function tambah_data_penggajian()
	{
		$this->load->view('index');
		$this->load->view('admin/header_admin');
		$this->load->view('admin/penggajian/tambah_data_penggajian');
		$this->load->view('footer');
	}


}

/* End of file penggajian.php */
/* Location: ./application/controllers/admin/penggajian.php */