<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('model_web','model_admin','model_staff'));
		$this->load->library('cart');
		$this->load->helper(array('form', 'url'));  
	}

	public function index()
	{
		$data['admin'] = $this->model_admin->tampil_admin();
		$this->load->view('index');
		$this->load->view('admin/header_admin');
		$this->load->view('admin/data_admin/form_data_admin',$data);
		$this->load->view('footer');
	}
	public function tambah_admin()
	{

		$this->load->view('index');
		$this->load->view('admin/header_admin');
		$this->load->view('admin/data_admin/form_tambah_data_admin');
		$this->load->view('footer');
	}
	function simpan()
	{

		$email_baru = $this->input->post('email');
		$a = $this->model_web->cek_email_staff($email_baru);
		if ($a==null) {
				echo '<script language="javascript">';
								echo 'alert("Email sudah digunakan !!!!")';
								echo '</script>';
								echo '<script type="text/javascript">';    
							    echo 'window.location.assign("'.site_url('admin/data_admin/tambah_admin').'")'; 
							    echo '</script>';
		}else{
			$data = array(
						'id_user' 	  => 1,
						'email_admin' => $email_baru,
						'password_admin' => md5($this->input->post('password'))
						 );
		$this->model_admin->simpan_admin($data);
	echo '<script language="javascript">';
								echo 'alert("Berhasil di Input !!!!")';
								echo '</script>';
								echo '<script type="text/javascript">';    
							    echo 'window.location.assign("'.site_url('admin/data_admin/').'")'; 
							    echo '</script>';; 
		}
	}

	function hapus($id_admin)
	{
		$this->model_admin->hapus_admin($id_admin);
			echo '<script language="javascript">';
								echo 'alert("Berhasil di Hapus !!!!")';
								echo '</script>';
								echo '<script type="text/javascript">';    
							    echo 'window.location.assign("'.site_url('admin/data_admin/').'")'; 
							    echo '</script>';
	}

}

/* End of file data_admin.php */
/* Location: ./application/controllers/admin/data_admin.php */