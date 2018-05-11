<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_model extends CI_Model {


	function adminlogin($username, $password) 
	{
		$this -> db -> select('id, username, password');
		$this -> db -> from('user');
		$this -> db -> where('username', $username);
		$this -> db -> where('password', MD5($password));
		$this -> db -> limit(1);
		$query = $this -> db -> get();

		if($query -> num_rows() == 1){
			return $query->result();
		}
		else
		{
			return false;
		}
	}

	function signup($data,$table) {
		$this->db->insert($table,$data);
	}

}