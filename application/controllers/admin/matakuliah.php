<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
		$this->load->view('admin/header_admin');
		$this->load->view('admin/matakuliah/data_matakuliah');
		$this->load->view('footer');
	}

	public function tambah_matakuliah()
	{
		$this->load->view('index');
		$this->load->view('admin/header_admin');
		$this->load->view('admin/matakuliah/tambah_data_matakuliah');
		$this->load->view('footer');
	}

}

/* End of file matakuliah.php */
/* Location: ./application/controllers/matakuliah.php */