<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KaryawanController extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));	
		$this->load->model('karyawan/karyawan_model'); 
		$this->load->library('session');			
	}

	public function index()
	{
		if($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'hrd') {
			$data['name'] = $this->session->userdata('name');
			$data['data'] = $this->karyawan_model->get_karyawan();
			$this->load->view('common/header');
			$this->load->view('karyawan/karyawan',$data);
		}
		else {
			$data['data'] = 'SUKSES';
			$data['name'] = $this->session->userdata('name');
			$this->load->view('dashboard/dashboard',$data);
		}
		
	}

	function delete_data($id)
	{
		if($this->session->userdata('role') == 'admin') {
			$this->karyawan_model->delete_data($id);
			redirect('KaryawanController/index');
		}
		else {
			$data['data'] = 'SUKSES';
			$data['name'] = $this->session->userdata('name');
			$this->load->view('dashboard/dashboard',$data);
		}
		
	}

	function edit_data($id)
	{
		if($this->session->userdata('role') == 'admin') {
			$data['name'] = $this->session->userdata('name');
			$data['data'] = $this->karyawan_model->edit_data($id);
			$this->load->view('common/header');
			$this->load->view('karyawan/edit_karyawan',$data);
		}
		else {
			$data['data'] = 'SUKSES';
			$data['name'] = $this->session->userdata('name');
			$this->load->view('dashboard/dashboard',$data);
		}
	}

	function detail_data($id)
	{
		if($this->session->userdata('role') == 'staff' || $this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'hrd') {
			$data['name'] = $this->session->userdata('name');
			$data['data'] = $this->karyawan_model->edit_data($id);
			$this->load->view('common/header');
			$this->load->view('karyawan/detail_karyawan',$data);
		}
		else {
			$data['data'] = 'SUKSES';
			$data['name'] = $this->session->userdata('name');
			$this->load->view('dashboard/dashboard',$data);
		}
		
	}

	function editKaryawan(){
		if($this->session->userdata('role') == 'admin') {
			$id = $this->input->post('id');
			$name  = $this->input->post('name');
			$jabatan = $this->input->post('jabatan');
			$data = array(
				'id' => $id,
				'name' => $name,
				'jabatan' => $jabatan
			);
			$this->karyawan_model->edit_data_2($id,$data);
			redirect('KaryawanController/index');
		}
		else {
			$data['data'] = 'SUKSES';
			$data['name'] = $this->session->userdata('name');
			$this->load->view('dashboard/dashboard',$data);
		}
		
	}
}
