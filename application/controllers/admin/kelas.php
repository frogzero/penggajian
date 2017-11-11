<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

		public function __construct(){
		parent::__construct();
		$this->load->model(array('model_admin','model_matakuliah','model_kelas'));
		$this->load->library('cart');
		$this->load->helper(array('form', 'url'));  
	}

	public function index()
	{
		$data['kelas'] = $this->model_admin->tampil_kelas();
		$this->load->view('index');
		$this->load->view('admin/header_admin');
		$this->load->view('admin/kelas/data_kelas',$data);
		$this->load->view('footer');
	}

	public function tambah_kelas()
	{
		$this->load->view('index');
		$this->load->view('admin/header_admin');
		$this->load->view('admin/kelas/tambah_kelas');
		$this->load->view('footer');
	}
	public function simpan()
	{
		$nama_kelas= $this->input->post('nama_kelas');
		$data = array('nama_kelas' => $nama_kelas, );
		$this->model_kelas->simpan($data);
		redirect('admin/kelas','refresh');
	}


}

/* End of file kelas.php */
/* Location: ./application/controllers/admin/kelas.php */