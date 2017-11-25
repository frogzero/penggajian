<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('model_admin','model_staff'));
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
	
	public function form_edit($nip)
	{
		// $this->load->view('backup_view/TambahStaff');
		$this->load->view('index');
		$this->load->view('admin/header_admin');
		$this->load->view('admin/staff/form_edit_staff');
		$this->load->view('footer');
	}
	public function simpan()
	{
		$nip = $this->input->post('nip');
		$user = $this->input->post('user');
		$nama = $this->input->post('nama');
		$status = $this->input->post('status');
		$alamat = $this->input->post('alamat');
		$noHp = $this->input->post('noHp');
		$email = $this->input->post('email');
		$pass = md5($this->input->post('pass'));
		$data = array(
						'nip' => $nip,
						'id_user' => $user,
						'nama_staff' => $nama,
						'status'=>$status,
						'alamat_staff' => $alamat,
						'nohp_staff' => $noHp,
						'email_staff' => $email,
						'password_staff' => $pass );
		$this->model_staff->simpan($data);
		echo '<script language="javascript">';
		echo 'alert("Staff Berhasil Di input !!!")';
		echo '</script>';
		echo '<script type="text/javascript">';    
		echo 'window.location.assign("'.site_url('/admin/staff').'")'; 
		echo '</script>';

 	}



}

/* End of file staff.php */
/* Location: ./application/controllers/staff.php */