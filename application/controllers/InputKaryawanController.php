<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InputKaryawanController extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));	
		$this->load->model('karyawan/karyawan_model'); 
		$this->load->library('session');		
	}

	public function index()
	{
		$data['name'] = $this->session->userdata('name');
        $this->load->view('common/header');
		$this->load->view('karyawan/input_karyawan',$data);
	}

	function postKaryawan(){
		$name = $this->input->post('name');
		$jabatan = $this->input->post('jabatan');
		$data = array(
			'name' => $name,
			'jabatan' => $jabatan
			);
		$this->karyawan_model->add_data($data,'karyawan');
		redirect('KaryawanController/index');
	}

	 
}
