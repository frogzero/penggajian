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
		$this->load->view('login');
		
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
			echo "email tidak terdaftar";
		}else{
			echo "email dikirim";
		}
	}


	public function admin()
	{
		$this->load->view('index');
		$this->load->view('admin/header');
		$this->load->view('content');
		$this->load->view('footer');
		
	}

}

// update by eko laptop
/* End of file home.php */
/* Location: ./application/controllers/home.php */