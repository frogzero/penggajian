<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Presensi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('model_admin'));
		$this->load->helper(array('form', 'url'));  
	}

	public function index()
	{
		$data['presensi'] = $this->model_admin->tampil_presensi();
		$this->load->view('index');
		$this->load->view('admin/header_admin');
		$this->load->view('admin/presensi/data_presensi',$data);
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