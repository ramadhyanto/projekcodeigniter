<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KriteriaController extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));	
		$this->load->model('kriteria/kriteria_model'); 
		$this->load->library('session');			
	}

	public function index()
	{
		if($this->session->userdata('role') == 'admin') {
			$data['name'] = $this->session->userdata('name');
			$data['data'] = $this->kriteria_model->get_kriteria();
			$this->load->view('common/header');
			$this->load->view('kriteria/kriteria',$data);
		}
		else {
			$data['data'] = 'SUKSES';
			$data['name'] = $this->session->userdata('name');
			$this->load->view('dashboard/dashboard',$data);
		}
		
	}

	function delete_data($kode)
	{
		$this->kriteria_model->delete_data($kode);
		redirect('KriteriaController/index');
	}

	function edit_data($kode)
	{
		$data['name'] = $this->session->userdata('name');
		$data['data'] = $this->kriteria_model->edit_data($kode);
		$this->load->view('common/header');
		$this->load->view('kriteria/edit_kriteria',$data);
	}

	function editKriteria(){
		$kode = $this->input->post('kode');
		$nama_kriteria = $this->input->post('nama_kriteria');
		$kategori = $this->input->post('kategori');
		$bobot = $this->input->post('bobot');
		$data = array(
			'kode' => $kode,
			'nama_kriteria' => $nama_kriteria,
			'kategori' => $kategori,
			'bobot' => $bobot
		);
		$this->kriteria_model->edit_data_2($kode,$data);
		redirect('KriteriaController/index');
	}
}
