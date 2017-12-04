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
		$kodemk_1 = $this->input->post('kodemk');
		$namamk = $this->input->post('namamk');
		$cek = $this->model_matakuliah->cek_ketersediaan_makul($kodemk_1);

		if ($cek==null) {
		$data = array(
					  'kodeMK' => $kodemk_1 ,
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

		echo '<script language="javascript">';
		echo 'alert("Kode Matakuliah sudah ada, Mohon ganti kode yang lainnya !!!")';
		echo '</script>';
		echo '<script type="text/javascript">';    
		echo 'window.location.assign("'.site_url('/admin/matakuliah').'")'; 
		echo '</script>';

	}

	public function form_ubah($kodemk)
	{
		$data["matakuliah"] = $this->model_matakuliah->find($kodemk);
		// var_dump($data);die();
		$this->load->view('index');
		$this->load->view('admin/header_admin');
		$this->load->view('admin/matakuliah/edit_data_matakuliah',$data);
		$this->load->view('footer');

	}

	public function ubah($kodemk)
	{

			$kodemk_1 = $this->input->post('kodemk');
			$namaMK_baru = $this->input->post('namamk');
			$cek = $this->model_matakuliah->cek_ketersediaan_makul($kodemk_1);
			if ($cek==null) 
			{
			$this->model_matakuliah->ubah($kodemk_1,$namaMK_baru,$kodemk);
			echo '<script language="javascript">';
			echo 'alert("Data Berhasil Di Update ")';
			echo '</script>';
			echo '<script type="text/javascript">';    
			echo 'window.location.assign("'.site_url('/admin/matakuliah').'")'; 
			echo '</script>';
			}else
			{
				echo '<script language="javascript">';
				echo 'alert("Kode Matakuliah sudah ada, Mohon ganti kode yang lainnya !!!")';
				echo '</script>';
				echo '<script type="text/javascript">';    
				echo 'window.location.assign("'.site_url('/admin/matakuliah').'")'; 
				echo '</script>';

			}
	}

	public function hapus($kodemk)
	{
		$this->model_matakuliah->hapus($kodemk);
		echo '<script type="text/javascript">';    
		echo 'window.location.assign("'.site_url('/admin/matakuliah').'")'; 
		echo '</script>';
	}

}

/* End of file matakuliah.php */
/* Location: ./application/controllers/matakuliah.php */
// ganti dari cmd coba coba push dari cmd
