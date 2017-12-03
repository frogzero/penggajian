<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status_staff extends CI_Controller {
		public function __construct(){
		parent::__construct();
		$this->load->model(array('model_admin','model_staff'));
		$this->load->library('cart');
		$this->load->helper(array('form', 'url'));  
	}

	public function index()
	{
		$data['status_staff'] = $this->model_admin->tampil_status_staff();
		$this->load->view('index');
		$this->load->view('admin/header_admin');
		$this->load->view('admin/status_staff/data_status_staff',$data);
		$this->load->view('footer');
	}
	public function ubah($status)
	{
		$data['status_staff'] = $this->model_admin->tampil_status_edit($status);
		$this->load->view('index');
		$this->load->view('admin/header_admin');
		$this->load->view('admin/status_staff/form_edit_status',$data);
		$this->load->view('footer');
	}
	public function ubah_simpan($status)
	{
		$data = array('nominal' => $this->input->post('nominal') );
		$this->model_staff->ubah_simpan($status,$data);
		echo '<script language="javascript">';
		echo 'alert("status Staff Berhasil Di Ubah !!!")';
		echo '</script>';
		echo '<script type="text/javascript">';    
		echo 'window.location.assign("'.site_url('/admin/status_staff').'")'; 
		echo '</script>';
	}

}

/* End of file status_staff.php */
/* Location: ./application/controllers/admin/status_staff.php */