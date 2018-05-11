<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PeriodeSeleksiController extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));	
		$this->load->model('periode_seleksi/periode_seleksi_model'); 
		$this->load->library('session');			
	}

	public function index()
	{
		if($this->session->userdata('role') == 'admin') {
			$data['name'] = $this->session->userdata('name');
			$data['data'] = $this->periode_seleksi_model->get_years();
			$this->load->view('common/header');
			$this->load->view('periode_seleksi/periode_seleksi',$data);
		}
		else {
			$data['data'] = 'SUKSES';
			$data['name'] = $this->session->userdata('name');
			$this->load->view('dashboard/dashboard',$data);
		}

		
	}

	function delete_data($id)
	{
		$this->periode_seleksi_model->delete_data($id);
		redirect('PeriodeSeleksiController/index');
	}

	function edit_data($id)
	{
		$data['name'] = $this->session->userdata('name');
		$data['data'] = $this->periode_seleksi_model->edit_data($id);
		$this->load->view('common/header');
		$this->load->view('periode_seleksi/edit_periode_seleksi',$data);
	}
}
