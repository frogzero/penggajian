<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Presensi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('model_admin','model_presensi'));
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
		$data['mk'] = $this->model_admin->tampil_mk();
		$data['staff'] = $this->model_admin->tampil_staff();
		$data['kelas'] = $this->model_admin->tampil_kelas();
		$this->load->view('index');
		$this->load->view('admin/header_admin');
		$this->load->view('admin/presensi/tambah_data_presensi',$data);
		$this->load->view('footer');
	}

	function presensi_staff($nip){	
	$this->session->set_userdata('presensi_staff', $nip);	
	}
	function presensi_status($status){	
	$this->session->set_userdata('presensi_status', $status);	
		$sql="SELECT * from staff
			WHERE status='$status'";
			$query = $this->db->query($sql);	
			var_dump($query->result());
	
		  //echo $response;
			$data = $query->result();
			 echo "<option>Pilih NIP/Nama Staff</option>";

			foreach ($data as $row) {
				    echo "<option value='".$row->nip."'>".$row->nip.'-'.$row->nama_staff."</option>";
				# code...
			}
	}
	function presensi_matakuliah($matakuliah){	
	$this->session->set_userdata('presensi_matakuliah', $matakuliah);	
	}

	function hitung_presensi($kelas){	
	$this->session->set_userdata('presensi_kelas', $kelas);
	$staff =$this->session->userdata('presensi_staff');
	$status =$this->session->userdata('presensi_status');
	$kodemk =$this->session->userdata('presensi_matakuliah');
	$kelas = $this->session->userdata('presensi_kelas');

	$tampil_presensi = $this->model_presensi->hitung_presensi($staff,$kodemk,$kelas);
	// echo $staff;
		if ($tampil_presensi) {
			foreach ($tampil_presensi as $row) {
				
		$sesi = $row->sesi+1;

			}	
		}else{
		$sesi = 1;
	}
	// var_dump($sesi);
			$asdf = array(
					'sesi' => $sesi );
	
		// var_dump($asdf);
		echo json_encode($asdf);
		// // minimal PHP 5.2s
	}

	function simpan()
	{
		$this->session->set_userdata('presensi_kelas', '');
		$this->session->set_userdata('presensi_staff', '');
		$this->session->set_userdata('presensi_matakuliah', '');
		$data = array('tanggal' => $this->input->post('tanggal'),
						'status' => $this->input->post('status'),
						'nip' => $this->input->post('nip'),
						'kodeMK' => $this->input->post('kodemk'),
						'id_kelas' => $this->input->post('kelas'),
						'sesi' => $this->input->post('sesi'),
						'kehadiran' => $this->input->post('kehadiran')
						 );
		// var_dump($data);die();
		$this->model_presensi->simpan($data);
		redirect('admin/presensi','refresh');
	}
	public function edit_presensi($id_presensi,$id_kelas)
	{
		$data['presensi_edit'] = $this->model_presensi->tampil_presensi_edit($id_presensi,$id_kelas);
		$this->load->view('index');
		$this->load->view('admin/header_admin');
		$this->load->view('admin/presensi/form_edit_data_presensi',$data);
		$this->load->view('footer');
	
	}
	function simpan_update()
	{
		$id_presensi = $this->input->post('id_presensi');
		$id_kelas = $this->input->post('id_kelas');
		$kehadiran = $this->input->post('kehadiran');
		$this->model_presensi->simpan_update($kehadiran,$id_presensi,$id_kelas);
				echo '<script language="javascript">';
				echo 'alert("Data Sudah berhasil di Update")';
				echo '</script>';
				echo '<script type="text/javascript">';    
			    echo 'window.location.assign("'.site_url('admin/presensi').'")'; 
			    echo '</script>';
	}



}

/* End of file presensi.php */
/* Location: ./application/controllers/presensi.php */