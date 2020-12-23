<?php

class M_crud extends CI_Model{

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

	public function total_record($table){
		$this->db->select('*');
		$this->db->from($table);
		$query = $this->db->get();
		return $query;
	}

	public function total_record_paging($table, $offset, $limit){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->limit($limit, $offset);
		$query = $this->db->get();
		return $query;
	}

	public function insert_vmd_about_us($img_path, $text1, $text2, $text3){
		
		$this->db->set('image', $img_path);
		$this->db->set('text_1', htmlentities($text1));
		$this->db->set('text_2', htmlentities($text2));
		$this->db->set('text_3', htmlentities($text3));
		$query = $this->db->insert('vmd_about_us');
		return $query;
	}

	public function update_vmd_about_us($img_path, $text1, $text2, $text3){
		$data = array(
	        'image' => $img_path,
	        'text_1' => htmlentities($text1),
	        'text_2' => htmlentities($text2),
	        'text_3' => htmlentities($text3),
		);

		$this->db->where('id', 1);
		$this->db->update('vmd_about_us', $data);
	}

	public function insert_vmd_visi_misi($visi, $misi){
		
		$this->db->set('visi', htmlentities($visi));
		$this->db->set('misi', htmlentities($misi));
		$query = $this->db->insert('vmd_visi_misi');
		return $query;
	}

	public function update_vmd_visi_misi($visi, $misi){
		$data = array(
	        'visi' => htmlentities($visi),
	        'misi' => htmlentities($misi),
		);

		$this->db->where('id', 1);
		$this->db->update('vmd_visi_misi', $data);
	}

	public function insert_vmd_service($jasa_pelayanan, $e_arsip, $aplikasi_build){
		
		$this->db->set('jasa_pelayanan', htmlentities($jasa_pelayanan));
		$this->db->set('e_arsip', htmlentities($e_arsip));
		$this->db->set('aplikasi_build', htmlentities($aplikasi_build));
		$query = $this->db->insert('vmd_service');
		return $query;
	}

	public function update_vmd_service($jasa_pelayanan, $e_arsip, $aplikasi_build){
		$data = array(
	        'jasa_pelayanan' => htmlentities($jasa_pelayanan),
	        'e_arsip' => htmlentities($e_arsip),
	        'aplikasi_build' => htmlentities($aplikasi_build),
		);

		$this->db->where('id', 1);
		$this->db->update('vmd_service', $data);
	}

	public function insert_vmd_activity($image_path, $title, $desc){
		
		$this->db->set('image', $image_path);
		$this->db->set('title', htmlentities($title));
		$this->db->set('desc', htmlentities($desc));
		$query = $this->db->insert('vmd_activity');
		return $query;
	}

	public function update_vmd_activity($image_path, $title, $desc){

		if($image_path == ''){

			$data = array(
		        'title' => htmlentities($title),
		        'desc' => htmlentities($desc),
			);

		}else{

			$data = array(
		        'image' => $image_path,
		        'title' => htmlentities($title),
		        'desc' => htmlentities($desc),
			);

		}

		$this->db->where('id', $this->input->post('id'));
		$query = $this->db->update('vmd_activity', $data);
		return $query;
	}

	public function delete_vmd_activity(){
		$id = $this->input->post('id');

		$this->db->where('id', $id);
		$query = $this->db->delete('vmd_activity');
		
		if(!$query){
			return $this->db->error();
		}else{
			return true;
		}
	}

	public function get_activity_by_id($id){
		$this->db->select('*');
		$this->db->from('vmd_activity');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query;
	}

	public function get_record_by_id_and_table($table, $id){

		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query;

	}

	public function get_team_by_id($id){

		$this->db->select('*');
		$this->db->from('vmd_team');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query;

	}

	public function insert_vmd_team($data){
		$query = $this->db->insert('vmd_team', $data);
		return $query;
	}

	public function update_vmd_team($image_path){

		if($image_path == ''){

			$data = array_filter($this->input->post());

		}else{

			$path = array('image' => $image_path);
			$post_data = array_filter($this->input->post());

			$data = array_merge($path, $post_data);

		}

		$this->db->where('id', $this->input->post('id'));
		$query = $this->db->update('vmd_team', $data);
		return $query;
	}

	public function delete_vmd_team(){
		$id = $this->input->post('id');

		$this->db->where('id', $id);
		$query = $this->db->delete('vmd_team');
		
		if(!$query){
			return $this->db->error();
		}else{
			return true;
		}
	}

}