<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
		public function __construct(){
		parent::__construct();
		$this->load->model(array('model_web','model_matakuliah'));
		$this->load->library('cart');
		$this->load->helper(array('form', 'url'));  
	}


	public function index()
	{
		$this->load->view('login'); //load view ketika belum login
		
	}

	public function lupa_password()
	{
		$this->load->view('lupa_password');
		
	}
	
		public function cek_password()
	{
		$email = $this->input->post('email');
		$email_hasil = $this->model_web->cek_lupa_password($email);
		if($email_hasil==null){
				echo '<script language="javascript">';
				echo 'alert("Email Tidak Terdaftar !!!")';
				echo '</script>';
				echo '<script type="text/javascript">';    
			    echo 'window.location.assign("'.site_url('').'")'; 
			    echo '</script>';
		}else{
			$password_baru = md5("password_baru");
			// var_dump($password_baru);die();
			$this->model_web->update_password_baru($email,$password_baru);

					
					$ci = get_instance();
			        $ci->load->library('email');
			        $config['protocol'] = "smtp";
			        $config['smtp_host'] = "ssl://smtp.gmail.com";
			        $config['smtp_port'] = "465";
			        $config['smtp_user'] = "paradiseresto1@gmail.com";
			        $config['smtp_pass'] = "123paradiseresto";
			        $config['charset'] = "utf-8";
			        $config['mailtype'] = "html";
			        $config['newline'] = "\r\n";
					ob_start();
			        $this->load->view('email_password');
			        $html =  ob_get_contents();
			        ob_end_clean();      
					$ci->email->initialize($config);	 
			        $ci->email->from('paradiseresto1@gmail.com', 'Password Baru Penggajian');
			        $email_penerima = $email;
			        $list = array($email_penerima);
			        $ci->email->to($list);
			        $ci->email->subject('Password Baru');
			     	$ci->email->message($html);
			        $this->email->send();

				echo '<script language="javascript">';
				echo 'alert("PPassword Sudah Diganti, Silahkan Cek Email Anda, Untuk Melihat password baru ")';
				echo '</script>';
				echo '<script type="text/javascript">';    
			    echo 'window.location.assign("'.site_url('').'")'; 
			    echo '</script>';
		}
	}

	
	public function login()
	{
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$cek_1=$this->model_web->cek_tbl_admin($email,$password);
		if ($cek_1==0) {
			// echo "kosong";
			$cek2=$this->model_web->cek_tbl_staff($email,$password);
			if ($cek2==0) {
								echo '<script language="javascript">';
								echo 'alert("Mohon Maaf, Email Atau Password SALAH !!!!")';
								echo '</script>';
								echo '<script type="text/javascript">';    
							    echo 'window.location.assign("'.site_url().'")'; 
							    echo '</script>';
			}else{
				$data_session = array(
								'email'		=> $cek2[0]->email_staff,
								'nama_staff' => $cek2[0]->nama_staff,
								'level' => $cek2[0]->id_user,
								'nip'=> $cek2[0]->nip
								);
				$this->session->set_userdata($data_session);
				redirect(site_url('home/cek_dashboard'),'refresh');
		}

		}else{
			// echo "ada";
			$data_session = array(
								'email'		=> $cek_1[0]->email_admin,
								'level' => $cek_1[0]->id_user,
								'nip'=> $cek_1[0]->id_admin
								);
				$this->session->set_userdata($data_session);
				redirect(site_url('home/cek_dashboard'),'refresh');
		}
	
	}

	function cek_dashboard()
	{
		if ($this->session->userdata('level')==1) {
			redirect('home/admin','refresh');
		}elseif ($this->session->userdata('level')==2) {
			redirect('home/staff','refresh');
		}

	}


	public function admin()
	{
		$this->load->view('index');
		$this->load->view('admin/header_admin');
		$this->load->view('content');
		$this->load->view('footer');
		
	}
	public function staff()
	{
		$this->load->view('index');
		$this->load->view('staff/header_staff');
		$this->load->view('content');
		$this->load->view('footer');
		
	}

	public function akun_admin()
	{
		$this->load->view('index');
		$this->load->view('admin/header_admin');
		$this->load->view('admin/akun');
		$this->load->view('footer');

	}
	public function akun_staff()
	{
		$this->load->view('index');
		$this->load->view('staff/header_staff');
		$this->load->view('staff/akun');
		$this->load->view('footer');
	}

	public function simpan_password_baru()
	{
		$email = $this->session->userdata('email');
		//var_dump($email);die();
		$email_baru = $this->input->post('email_baru');




		$password_baru = md5($this->input->post('password_baru'));
		$cek_10= $this->model_web->cek_tbl_admin_akun($email);
		if ($cek_10==0) {
			// echo "kosong";
			$cek20 =$this->model_web->cek_tbl_staff_akun($email);
			if ($cek20==0) {
								echo '<script language="javascript">';
								echo 'alert("Mohon Maaf, Email Atau Password SALAH !!!!")';
								echo '</script>';
								echo '<script type="text/javascript">';    
							    echo 'window.location.assign("'.site_url().'")'; 
							    echo '</script>';
			}else{
								$a = $this->model_web->cek_email_staff($email_baru);
								if ($a==0) {
								$this->model_web->ubah_password_staff($password_baru,$email_baru,$email);
								echo '<script language="javascript">';
								echo 'alert("Password dan email berhasil di ubah, silahkan login ulang !!!!")';
								echo '</script>';
								echo '<script type="text/javascript">';    
							    echo 'window.location.assign("'.site_url('home/log_out').'")'; 
							    echo '</script>';
								}else{
								echo '<script language="javascript">';
								echo 'alert("Email Sudah digunakan !!!!")';
								echo '</script>';
								echo '<script type="text/javascript">';    
							    echo 'window.location.assign("'.site_url('home/akun_staff').'")'; 
							    echo '</script>';
								
							}
		}

		}else{
								$b = $this->model_web->cek_email_admin($email_baru);
								if ($b==0) {
									$this->model_web->ubah_password_admin($password_baru,$email_baru,$email);
								echo '<script language="javascript">';
								echo 'alert("Password dan email berhasil di ubah, silahkan login ulang !!!!")';
								echo '</script>';
								echo '<script type="text/javascript">';    
							    echo 'window.location.assign("'.site_url('home/log_out').'")'; 
							    echo '</script>';
									
								}else{
								echo '<script language="javascript">';
								echo 'alert("Email Sudah digunakan !!!!")';
								echo '</script>';
								echo '<script type="text/javascript">';    
							    echo 'window.location.assign("'.site_url('home/akun_admin').'")'; 
							    echo '</script>';
							}
		}
	
	}
	public function log_out()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}

}

// update by eko laptop
/* End of file home.php */
/* Location: ./application/controllers/home.php */