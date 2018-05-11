<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));	
		$this->load->library('session');			
	}

	public function index()
	{	
		$data['name'] = $this->session->userdata('name');
		$this->load->view('dashboard/dashboard',$data);
	}


	function logout()
	{
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('login/login', 'refresh');
	}
}
