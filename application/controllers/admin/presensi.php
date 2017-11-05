<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Presensi extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
		$this->load->view('admin/header_admin');
		$this->load->view('admin/presensi/data_presensi');
		$this->load->view('footer');
	}

	public function tambah_presensi()
	{
		$this->load->view('index');
		$this->load->view('admin/header_admin');
		$this->load->view('admin/presensi/tambah_data_presensi');
		$this->load->view('footer');
	}

}

/* End of file presensi.php */
/* Location: ./application/controllers/presensi.php */