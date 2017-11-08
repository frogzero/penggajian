<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {

		public function __construct(){
		parent::__construct();
		$this->load->model(array('model_admin','model_matakuliah'));
		$this->load->library('cart');
		$this->load->helper(array('form', 'url'));  
	}

	public function index()
	{
		$data['mk'] = $this->model_admin->tampil_mk();
		$this->load->view('index');
		$this->load->view('admin/header_admin');
		$this->load->view('admin/matakuliah/data_matakuliah',$data);
		$this->load->view('footer');
	}

	public function tambah_matakuliah()
	{
		$this->load->view('index');
		$this->load->view('admin/header_admin');
		$this->load->view('admin/matakuliah/tambah_data_matakuliah');
		$this->load->view('footer');
	}
	public function simpan()
	{
		$kodemk = $this->input->post('kodemk');
		$namamk = $this->input->post('namamk');
		$data = array(
					  'kodeMK' => $kodemk ,
					  'namaMK' => $namamk 
					 );
		$this->model_matakuliah->simpan($data);
		echo '<script language="javascript">';
		echo 'alert("Matakuliah Berhasil Di input !!!")';
		echo '</script>';
		echo '<script type="text/javascript">';    
		echo 'window.location.assign("'.site_url('/admin/matakuliah').'")'; 
		echo '</script>';
	}

}

/* End of file matakuliah.php */
/* Location: ./application/controllers/matakuliah.php */
// ganti dari cmd coba coba pull dari cmd
