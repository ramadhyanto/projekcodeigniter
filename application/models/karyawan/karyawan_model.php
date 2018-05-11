<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class karyawan_model extends CI_Model {


	function get_karyawan () {
		$this->db->select("*");
		$this->db->from('user');  
		$query = $this->db->get();
		return $result=$query->result();  
	}

	function add_data($data,$table) {
		$this->db->insert($table,$data);
	}

	function delete_data($id) {
		$this -> db -> where('id', $id);
		$this -> db -> delete('user');
	}

	function edit_data($id) {
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $result=$query->result(); 
	}

	function edit_data_2($id,$data) {
		$this->db->where('id', $id);
		$this->db->update('user',$data);
	}

}