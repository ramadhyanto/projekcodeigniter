<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kriteria_model extends CI_Model {


	function get_kriteria () {
		$this->db->select("*");
		$this->db->from('kriteria');  
		$query = $this->db->get();
		return $result=$query->result();  
	}

	function add_data($data,$table) {
		$this->db->insert($table,$data);
	}

	function delete_data($kode) {
		$this -> db -> where('kode', $kode);
		$this -> db -> delete('kriteria');
	}

	function edit_data($kode) {
		$this->db->select('*');
		$this->db->from('kriteria');
		$this->db->where('kode', $kode);
		$query = $this->db->get();
		return $result=$query->result(); 
	}

	function edit_data_2($kode,$data) {
		$this->db->where('kode', $kode);
		$this->db->update('kriteria',$data);
	}

}