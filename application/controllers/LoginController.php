<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));	
		$this->load->library('session');
		$this->load->model('login/login_model'); 			
	}

	public function index(){
		if ($this->session->userdata('logged') == true) {
			redirect('DashboardController');
		} else {
			$this->load->view('login/login');
		}
	}

	public function authentication() {
		$data = array();
		if($_POST) {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Password','required');

			if($this->form_validation->run()){
				$username = filter_var(trim($this->input->post('username')), FILTER_SANITIZE_STRING);
				$password = filter_var(trim($this->input->post('password')), FILTER_SANITIZE_STRING);
				$this->db->where('username', $username);
				$this->db->where('password', md5($password));
				$query = $this->db->get('user');

				if($query->num_rows() > 0){
					$row = $query->row();
					$data = array(
						'username'   => $row->username,
						'password'	=> $row->password, 
						'logged'	=> true,
						'name'		=> $row->name,
						'role'		=> $row->role
					);
					$this->session->set_userdata($data);

					$this->load->model('login/login_model');
					redirect('DashboardController');
				}
				else{
					$data['error'] = 'Username and password not match!';
					$this->load->view('login/login', $data);
				}
			}else{
				$data['error'] = 'Data not suffice!';
				$this->load->view('login/login', $data);
			}
		}
	}

	public function expired(){
    // Removing session data
		$sess_array = array(
			'username' => ''
		);
		$this->session->unset_userdata('logged_in', $sess_array);
		$data['message_display'] = 'Successfully Logout';
		$this->load->view('login/login', $data);
	}

	public function signup() {
		$this->load->view('login/signup');
	}

	function postSignup(){
		$username = $this->input->post('username');
		$nama_karyawan = $this->input->post('nama_karyawan');
		$role = $this->input->post('role');
		$password = $this->input->post('password');
		$jabatan = $this->input->post('jabatan');
		$data = array(
			'username' => $username,
			'name' => $nama_karyawan,
			'role' => $role,
			'password' => md5($password),
			'jabatan' => $jabatan
			);
		$this->login_model->signup($data,'user');
		$this->load->view('login/login');
	}
	
}
