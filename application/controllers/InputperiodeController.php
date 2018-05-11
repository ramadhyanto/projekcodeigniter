<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InputperiodeController extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));	
		$this->load->model('periode_seleksi/periode_seleksi_model'); 	
		$this->load->library('session');		
	}

	public function index()
	{
		$data['name'] = $this->session->userdata('name');
        $this->load->view('common/header');
		$this->load->view('periode_seleksi/input_periode_seleksi',$data);
	}

	function postKriteria(){
		$tahun = $this->input->post('tahun');
		$nama_periode = $this->input->post('nama_periode');
		$data = array(
			'tahun' => $tahun,
			'nama_periode' => $nama_periode
			);
		$this->periode_seleksi_model->add_data($data,'periode_seleksi');
		redirect('PeriodeSeleksiController/index');
	}

	function editKriteria(){
		$id = $this->input->post('id');
		$tahun = $this->input->post('tahun');
		$nama_periode = $this->input->post('nama_periode');
		$data = array(
			'id' => $id,
			'tahun' => $tahun,
			'nama_periode' => $nama_periode
			);
		$this->periode_seleksi_model->edit_data_2($id,$data);
		redirect('PeriodeSeleksiController/index');
	}
}
