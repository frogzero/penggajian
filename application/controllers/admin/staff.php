<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('model_admin','model_web','model_staff'));
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
	

	public function simpan()
	{
		$nip = $this->input->post('nip');
		$user = $this->input->post('user');
		$nama = $this->input->post('nama');
		$status = $this->input->post('status');
		$alamat = $this->input->post('alamat');
		$noHp = $this->input->post('noHp');
		$email = $this->input->post('email');
		$email_baru = $this->input->post('email');
		$pass = md5($this->input->post('pass'));

		$cek = $this->model_staff->cek_ketersediaan_nip($nip);//cek apakah nip sudah dipakae atau belum

		if ($cek==null) {
		$a = $this->model_web->cek_email_staff($email_baru);
		if ($a==0) {
		$data = array(
						'nip' => $nip,
						'id_user' => $user,
						'nama_staff' => $nama,
						'status'=>$status,
						'alamat_staff' => $alamat,
						'nohp_staff' => $noHp,
						'email_staff' => $email,
						'password_staff' => $pass );
		$this->model_staff->simpan($data); //simpan di database, memanggil model staff function simpan
		echo '<script language="javascript">';
		echo 'alert("Staff Berhasil Di input !!!")';
		echo '</script>';
		echo '<script type="text/javascript">';    
		echo 'window.location.assign("'.site_url('/admin/staff').'")'; 
		echo '</script>';
		}else{
								echo '<script language="javascript">';
								echo 'alert("Email Sudah digunakan !!!!")';
								echo '</script>';
								echo '<script type="text/javascript">';    
							    echo 'window.location.assign("'.site_url('admin/staff/tambah_staff').'")'; 
							    echo '</script>';
		}
		}
		else{
		echo '<script language="javascript">';
		echo 'alert("Nip Sudah ada Mohon Ganti yang lainya !!!")';
		echo '</script>';
		echo '<script type="text/javascript">';    
		echo 'window.location.assign("'.site_url('/admin/staff').'")'; 
		echo '</script>';
		}

 	}

 	public function update($nip)
 	{
 		$this->form_validation->set_rules('nama','nama','required');
 		if($this->form_validation->run() == false){
	 		$data['staf'] = $this->model_staff->find($nip);
	 		/*$data['user'] = $this->model_staff->user();*/
	 		$this->load->view('index');
			$this->load->view('admin/header_admin');
			$this->load->view('admin/staff/form_edit_staff', $data);
			$this->load->view('footer');
		}else{
			$user = $this->input->post('user');
			$nama = $this->input->post('nama');
			$status = $this->input->post('status');
			$alamat = $this->input->post('alamat');
			$noHp = $this->input->post('noHp');
			$email = $this->input->post('email');
			$data_staff = array(
							'id_user' => $user,
							'nama_staff' => $nama,
							'status'=>$status,
							'alamat_staff' => $alamat,
							'nohp_staff' => $noHp,
							'email_staff' => $email);
			$this->model_staff->update($nip, $data_staff);
			echo '<script language="javascript">';
			echo 'alert("Data Berhasil Di Update ")';
			echo '</script>';
			echo '<script type="text/javascript">';    
			echo 'window.location.assign("'.site_url('/admin/staff').'")'; 
			echo '</script>';
		}
 	}

 	public function hapus($nip)
 	{
 		$this->model_staff->hapus($nip);
 		echo '<script type="text/javascript">';    
		echo 'window.location.assign("'.site_url('/admin/staff').'")'; 
		echo '</script>';
 	}


}

/* End of file staff.php */
/* Location: ./application/controllers/staff.php */