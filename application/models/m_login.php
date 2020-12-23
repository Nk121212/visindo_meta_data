<?php

class M_login extends CI_Model{

	public function is_user_exist(){
		$this->db->select('*');
		$this->db->from('vmd_users');
		$this->db->where('email', $this->input->post('email'));
		$query = $this->db->get();

		if($query->num_rows() > 0){

			if (password_verify($this->input->post('password'), $query->row()->password)) {
	            return true;
	        } else {
	            return false;
	        }

		}

	}

}