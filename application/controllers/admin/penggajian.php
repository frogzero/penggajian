<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penggajian extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('model_penggajian','model_admin'));
		$this->load->library('cart');
		$this->load->helper(array('form', 'url'));  
	}

	public function index()
	{
		$data['penggajian'] = $this->model_admin->tampil_penggajian();
		$this->load->view('index');
		$this->load->view('admin/header_admin');
		$this->load->view('admin/penggajian/data_penggajian', $data);
		$this->load->view('footer');
	}

	public function tambah_data_penggajian()
	{
		$this->load->view('index');
		$this->load->view('admin/header_admin');
		$this->load->view('admin/penggajian/tambah_data_penggajian');
		$this->load->view('footer');
	}


	function get_staf($staf){	
	$this->session->set_userdata('status_staff', $staf);	
		$sql="SELECT * from staff
			WHERE status='$staf'";
			$query = $this->db->query($sql);	
			var_dump($query->result());
	
		  //echo $response;
			$data = $query->result();
			 echo "<option>Pilih Kode/Nama Staff</option>";

			foreach ($data as $row) {
				    echo "<option value='".$row->nip."'>".$row->nip.'-'.$row->nama_staff."</option>";
				# code...
			}
	}

	function get_mk($presensi){	
	$this->session->set_userdata('nip', $presensi);	
		$sql="SELECT * from presensi WHERE nip='$presensi' group by kodeMK";
			$query = $this->db->query($sql);	
			var_dump($query->result());
			$data = $query->result();
			echo "<option>Pilih Kode MK</option>";
			foreach ($data as $row) {
				    echo "<option value='".$row->kodeMK."'>".$row->kodeMK."</option>";

			}	
	}

	function get_kelas($matakuliah){	

		$this->session->set_userdata('kode_mk', $matakuliah);
		$nip =$this->session->userdata('nip');
		$kodemk =$this->session->userdata('kode_mk');
		$sql="SELECT kelas from presensi WHERE nip='$nip' and kodeMK='$matakuliah' group by kelas";
			$query = $this->db->query($sql);	
			var_dump($query->result());
			$data = $query->result();
			echo "<option>Pilih kelas</option>";
			foreach ($data as $row) {
				    echo "<option value='".$row->kelas."'>".$row->kelas."</option>";
			}	
	}

	function simpan_bulan($bulan){	
		$this->session->set_userdata('bulan', $bulan);
		$this->session->userdata('kelas');
	$nip =$this->session->userdata('nip');
	$nominal =$this->session->userdata('nominal');
	$kodemk =$this->session->userdata('kode_mk');

	$jmla_sesi_hadir = $this->model_penggajian->hitung_sesi_hadir();
	$jmla_sesi = $this->model_penggajian->hitung_jumlah_sesi();
	$nominal_staff = $this->model_penggajian->nominal_status();

	$total_gaji = $jmla_sesi_hadir *$nominal_staff;
	
				$asdf = array(
					'sesi' => $jmla_sesi_hadir ,
					'jumlah' => $jmla_sesi ,
					'nominal' => $nominal_staff,
					'total_gaji'=> $total_gaji );
	
		// var_dump($asdf);
		echo json_encode($asdf);
	}

	function simpan_tahun($tahun){	
		$this->session->set_userdata('tahun', $tahun);
		$this->session->userdata('kelas');
	$nip =$this->session->userdata('nip');
	$nominal =$this->session->userdata('nominal');
	$kodemk =$this->session->userdata('kode_mk');

	$jmla_sesi_hadir = $this->model_penggajian->hitung_sesi_hadir();
	$jmla_sesi = $this->model_penggajian->hitung_jumlah_sesi();
	$nominal_staff = $this->model_penggajian->nominal_status();

	$total_gaji = $jmla_sesi_hadir *$nominal_staff;
	
				$asdf = array(
					'sesi' => $jmla_sesi_hadir ,
					'jumlah' => $jmla_sesi ,
					'nominal' => $nominal_staff,
					'total_gaji'=> $total_gaji );
	
		// var_dump($asdf);
		echo json_encode($asdf);
	}

	function get_presensi($kelas){	

	$this->session->set_userdata('kelas', $kelas);
	$nip =$this->session->userdata('nip');
	$nominal =$this->session->userdata('nominal');
	$kodemk =$this->session->userdata('kode_mk');

	$jmla_sesi_hadir = $this->model_penggajian->hitung_sesi_hadir();
	$jmla_sesi = $this->model_penggajian->hitung_jumlah_sesi();
	$nominal_staff = $this->model_penggajian->nominal_status();

	$total_gaji = $jmla_sesi_hadir *$nominal_staff;
	
				$asdf = array(
					'sesi' => $jmla_sesi_hadir ,
					'jumlah' => $jmla_sesi ,
					'nominal' => $nominal_staff,
					'total_gaji'=> $total_gaji );
	
		// var_dump($asdf);
		echo json_encode($asdf);
		// minimal PHP 5.2s
		
	}


}

/* End of file penggajian.php */
/* Location: ./application/controllers/admin/penggajian.php */