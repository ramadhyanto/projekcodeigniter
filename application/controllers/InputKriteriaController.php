<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InputKriteriaController extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));	
		$this->load->model('kriteria/kriteria_model'); 
		$this->load->library('session');		
	}

	public function index()
	{
		$data['name'] = $this->session->userdata('name');
        $this->load->view('common/header');
		$this->load->view('kriteria/input_kriteria',$data);
	}

	function postKriteria(){
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
		$this->kriteria_model->add_data($data,'kriteria');
		redirect('KriteriaController/index');
	}

	 
}
