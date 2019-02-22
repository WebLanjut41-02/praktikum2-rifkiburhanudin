<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_paket extends CI_Controller {


	function __construct(){
		parent::__construct();		
		$this->load->model('m_model');
	}

	function index($value="loginkaryawan")
	{
		$this->load->view(''.$value);
	}

	//===================================================

	function pros_login(){
		$nama = $this->input->post('nama');
		$nip = $this->input->post('nip');
		$where = array(
			'nama' => $nama,
			'nip' => $nip
			);
		$cek = $this->m_model->cek_login("karyawan",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $nama
				);
 
			$this->session->set_userdata($data_session);
 
			redirect('c_paket/crepat');
 
		}else{
			echo "Username dan password anda tidak cocok !";
		}
	}

	function crepat()
	{
		$this->load->view('createpaket');
	}

	//===================================================

	function tampildata(){
		$data['user'] = $this->m_model->tampil_data()->result();
		$this->load->view('listpaket',$data);
	}

	//===================================================
	
	function inputpaket(){
		$tgldatang = $this->input->post('tgldatang');
		$sasaran = $this->input->post('sasaran');
		$penerima = $this->input->post('penerima');
		$isipaket = $this->input->post('isipaket');
		$tglambil = $this->input->post('tglambil');
 
		$data = array(
			'tgldatang' => $tgldatang,
			'sasaran' => $sasaran,
			'penerima' => $penerima,
			'isipaket' => $isipaket,
			'tglambil' => $tglambil
			);
		$this->m_model->input_paket($data,'paket');
		redirect('c_paket/tampildata');
	}
	//===================================================

	function inputpeng(){
		$nama = $this->input->post('nama');
		$unit = $this->input->post('unit');
		$ktp = $this->input->post('ktp');
 
		$dataa = array(
			'nama' => $nama,
			'unit' => $unit,
			'ktp' => $ktp
			
			);
		$this->m_model->input_peng($dataa,'paket');

			$data_session1 = array(
				'nama' => $nama
				);
 
			$this->session->set_userdata($data_session1);

		redirect('c_paket/tampildatapeng');
	}

	function tampildatapeng(){
		$dataa['user1'] = $this->m_model->tampil_datapeng()->result();
		$this->load->view('penghuni',$dataa);
	}

}

/* End of file c_paket.php */
/* Location: ./application/controllers/c_paket.php */
?>