<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{

		$this->load->model('m_crud');

		$data['about_us'] = $this->m_crud->total_record('vmd_about_us');
		$data['visi_misi'] = $this->m_crud->total_record('vmd_visi_misi');
		$data['service'] = $this->m_crud->total_record('vmd_service');
		$data['activity'] = $this->m_crud->total_record('vmd_activity');
		$data['team'] = $this->m_crud->total_record_paging('vmd_team', '0', '4');
		$data['session'] = isset($_SESSION['user_login']) ? "ok" : "failed";

		$this->load->view('main', $data);
	}

	public function login(){

		$this->load->model('m_login');

		$check = $this->m_login->is_user_exist();

		if($check === true){
			$this->session->set_flashdata('message', 'Login Success');
            $session_setted = array('user_login' => true, 'sess_message' => 'Session Exist');
            $this->session->set_userdata($session_setted);
		}else{
			$this->session->set_flashdata('message', 'Login Failed, Check your email & Password!');
		}

		redirect('main');
		
	}

	public function logout(){
		$this->session->set_flashdata('message', '');
		redirect("main");
	}

	public function modal_team(){

		$this->load->model('m_crud');

		$data['all_team'] = $this->m_crud->total_record('vmd_team');
		$this->load->view('modals/detail_team', $data);
	}

	public function struktur_organisasi_modal(){
		$this->load->view('modals/struktur_organisasi');
	}

	public function login_modal(){
		$this->load->view('modals/login');
	}

	public function add_activity_modal(){
		$this->load->view('modals/activity');
	}

	public function add_new_activity(){

		$this->load->model('m_crud');

		$title_exp = explode(' ', $this->input->post('title'));

		$title = '';
		foreach ($title_exp as $key => $value) {
			# code...
			$title .= $value;
			//print_r($value.'_');
		}

		$file_name = $title;

		$upload = $this->do_upload('assets/img/activity/', $file_name);

		if($upload['status'] == 'ok'){

			$this->m_crud->insert_vmd_activity($upload['image_path'], $this->input->post('title'), $this->input->post('desc'));

			$arr = array(
            	'status' => 'ok',
            	'message' => 'Insert data success',
            	'color' => 'primary'
            );

			$this->session->set_flashdata('message', $arr);
			redirect('main/activity_page');

		}else{

			$this->session->set_flashdata('message', $upload);
			redirect('main/activity_page');

		}

	}

	public function patch_activity(){
		$this->load->model('m_crud');

		$title_exp = explode(' ', $this->input->post('title'));

		$title = '';
		foreach ($title_exp as $key => $value) {
			# code...
			$title .= $value;
			//print_r($value.'_');
		}

		$file_name = $title;

		$upload = $this->do_upload('assets/img/activity/', $file_name);

		if($upload['status'] == 'ok'){

			$query = $this->m_crud->update_vmd_activity($upload['image_path'], $this->input->post('title'), $this->input->post('desc'));

			$arr = array(
            	'status' => 'ok',
            	'message' => 'update data success',
            	'color' => 'primary'
            );

			$this->session->set_flashdata('message', $arr);
			redirect('main/activity_page');

		}else{

			$query = $this->m_crud->update_vmd_activity('', $this->input->post('title'), $this->input->post('desc'));

			$arr = array(
            	'status' => 'ok',
            	'message' => 'update data success',
            	'color' => 'primary'
            );

			$this->session->set_flashdata('message', $arr);
			redirect('main/activity_page');

		}
	}

	public function delete_activity(){

		header('content-type:application/json');

		$this->load->model('m_crud');
		$this->load->helper('file'); 


		$get_rec = $this->m_crud->get_record_by_id_and_table('vmd_activity', $this->input->post('id'));

		$path = '';
		foreach ($get_rec->result() as $data) {
			# code...
			$path = $data->image;
		}
		
		$query = $this->m_crud->delete_vmd_activity();

		if($query){

			$del_image = unlink(FCPATH.$path);

			$resp = array(
				'status' => ucfirst('ok'),
				'message' => 'Delete Success',
				'icon' => 'success',
				'resp_del_image' => $del_image,
			);

		}else{

			$resp = array(
				'status' => ucfirst('error'),
				'message' => 'Delete Failed',
				'icon' => 'error'
			);

		}

		echo json_encode($resp, JSON_PRETTY_PRINT);

	}

	public function team_page(){
		$this->load->view('table/team');
	}

	public function modal_add_team(){
		$this->load->view('modals/add_team');
	}

	public function modal_edit_team($id){

		$this->load->model('m_crud');

		$resp = $this->m_crud->get_team_by_id($id);

		$data = array(
			'data_team' => $resp
		);
		$this->load->view('modals/edit_team', $data);

	}

	public function add_new_team(){

		$this->load->model('m_crud');

		$title_exp = explode(' ', $this->input->post('nama'));

		$title = '';
		foreach ($title_exp as $key => $value) {
			# code...
			$title .= $value;
			//print_r($value.'_');
		}

		$file_name = $title;

		$upload = $this->do_upload('assets/img/team/', $file_name);

		if($upload['status'] == 'ok'){

			$file_path = array('image' => $upload['image_path']);
			$post_data = array_filter($this->input->post());

			$data = array_merge($file_path, $post_data);

			$query = $this->m_crud->insert_vmd_team($data);

			if($query){

				$arr = array(
		        	'status' => 'ok',
		        	'message' => 'Insert data Success',
		        	'color' => 'primary'
		        );

			}else{

				$arr = array(
		        	'status' => 'error',
		        	'message' => 'Insert data Failed',
		        	'color' => 'danger'
		        );

			}

		}else{

			$arr =array(
				'status' => 'error',
	        	'message' => $upload['message'],
	        	'color' => 'danger'
			);

		}

		$this->session->set_flashdata('message', $arr);
		//print_r($arr);
		//print_r($this->input->post());
		redirect('main/team_page');

	}

	public function patch_team(){
		$this->load->model('m_crud');

		$title_exp = explode(' ', $this->input->post('nama'));

		$title = '';
		foreach ($title_exp as $key => $value) {
			# code...
			$title .= $value;
			//print_r($value.'_');
		}

		$file_name = $title;

		$upload = $this->do_upload('assets/img/activity/', $file_name);

		if($upload['status'] == 'ok'){

			$query = $this->m_crud->update_vmd_team($upload['image_path']);

			$arr = array(
            	'status' => 'ok',
            	'message' => 'update data success',
            	'color' => 'primary'
            );

			$this->session->set_flashdata('message', $arr);
			redirect('main/team_page');

		}else{

			$query = $this->m_crud->update_vmd_team('');

			$arr = array(
            	'status' => 'ok',
            	'message' => 'update data success',
            	'color' => 'primary'
            );

			$this->session->set_flashdata('message', $arr);
			redirect('main/team_page');

		}
	}

	public function delete_team(){

		header('content-type:application/json');

		$this->load->model('m_crud');
		$this->load->helper('file'); 


		$get_rec = $this->m_crud->get_record_by_id_and_table('vmd_team', $this->input->post('id'));

		$path = '';
		foreach ($get_rec->result() as $data) {
			# code...
			$path = $data->image;
		}
		
		$query = $this->m_crud->delete_vmd_team();

		if($query){

			$del_image = unlink(FCPATH.$path);

			$resp = array(
				'status' => ucfirst('ok'),
				'message' => 'Delete Success',
				'icon' => 'success',
				'resp_del_image' => $del_image,
			);

		}else{

			$resp = array(
				'status' => ucfirst('error'),
				'message' => 'Delete Failed',
				'icon' => 'error'
			);

		}

		echo json_encode($resp, JSON_PRETTY_PRINT);

	}

	public function about_us_page(){
		$this->load->model('m_crud');

		$records = $this->m_crud->total_record('vmd_about_us');
		$data['records'] = $records;
		$this->load->view('forms/patch_about_us', $data);
	}

	public function visi_misi_page(){
		$this->load->model('m_crud');

		$records = $this->m_crud->total_record('vmd_visi_misi');
		$data['records'] = $records;
		$this->load->view('forms/patch_visi_misi', $data);
	}

	public function pelayanan_page(){
		$this->load->model('m_crud');

		$records = $this->m_crud->total_record('vmd_service');
		$data['records'] = $records;
		$this->load->view('forms/patch_service', $data);
	}

	public function activity_page(){
		$this->load->model('m_crud');

		$records = $this->m_crud->total_record('vmd_activity');
		$data['records'] = $records;
		$this->load->view('table/activity', $data);
	}

	public function modal_edit_activity($id){
		$this->load->model('m_crud');

		$resp = $this->m_crud->get_activity_by_id($id);

		$data = array(
			'data_activity' => $resp
		);
		$this->load->view('modals/edit_activity', $data);
	}

	public function patch_service(){

		$this->load->model('m_crud');

		$records = $this->m_crud->total_record('vmd_service');

		if($records->num_rows() < 1){

			$query = $this->m_crud->insert_vmd_service($this->input->post('jasa_pelayanan'), $this->input->post('e_arsip'), $this->input->post('aplikasi_build'));

		}else{

			$query = $this->m_crud->update_vmd_service($this->input->post('jasa_pelayanan'), $this->input->post('e_arsip'), $this->input->post('aplikasi_build'));

		}

		$arr = array(
        	'status' => 'ok',
        	'message' => 'update data success',
        	'color' => 'primary'
        );

		$this->session->set_flashdata('message', $arr);
		redirect('main/pelayanan_page');

	}

	public function patch_visi_misi(){

		$this->load->model('m_crud');

		$records = $this->m_crud->total_record('vmd_visi_misi');

		if($records->num_rows() < 1){

			$query = $this->m_crud->insert_vmd_visi_misi($this->input->post('visi'), $this->input->post('misi'));

		}else{

			$query = $this->m_crud->update_vmd_visi_misi($this->input->post('visi'), $this->input->post('misi'));

		}

		$arr = array(
        	'status' => 'ok',
        	'message' => 'update data success',
        	'color' => 'primary'
        );

		$this->session->set_flashdata('message', $arr);
		redirect('main/visi_misi_page');

	}

	public function patch_about_us(){

		$this->load->model('m_crud');

		$upload = $this->do_upload('assets/img/', 'about');

		if($upload['status'] == 'ok'){

			$records = $this->m_crud->total_record('vmd_about_us');

			if($records->num_rows() < 1){

				$this->m_crud->insert_vmd_about_us($upload['image_path'], $this->input->post('p1'), $this->input->post('p2'), $this->input->post('p3'));

			}else{

				$this->m_crud->update_vmd_about_us($upload['image_path'], $this->input->post('p1'), $this->input->post('p2'), $this->input->post('p3'));

			}

			$arr = array(
            	'status' => 'ok',
            	'message' => 'update data success',
            	'color' => 'primary'
            );

			$this->session->set_flashdata('message', $arr);
			redirect('main/about_us_page');

		}else{

			$this->session->set_flashdata('message', $upload);
			redirect('main/about_us_page');

		}

	}

	public function do_upload($upload_path, $file_name)
    {
    	$this->load->library('upload');

        $config['upload_path']          = $upload_path;
        $config['allowed_types']        = '*';
        $config['max_size']             = 1300;
        $config['max_width']            = 6000;
        $config['max_height']           = 6000;
        $config['file_name']           	= $file_name;
        $config['overwrite']           	= true;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ( ! $this->upload->do_upload('image'))
        {
                $error = array('error' => $this->upload->display_errors());
                $arr = array(
                	'status' => 'error',
                	'message' => $this->upload->display_errors(),
                	'color' => 'danger'
                );

                return $arr;

                //$this->load->view('upload_form', $error);
        }
        else
        {
                $data = array('upload_data' => $this->upload->data());
				$arr = array(
                	'status' => 'ok',
                	'message' => 'upload success',
                	'image_path' => $config['upload_path'].$this->upload->data('file_name'),
                	'color' => 'primary'
                );

                return $arr;
                //$this->load->view('upload_success', $data);
        }
    }
}
