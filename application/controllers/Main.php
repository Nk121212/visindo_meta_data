<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('main');
	}

	public function modal_team(){
		$this->load->view('modals/detail_team');
	}

	public function struktur_organisasi_modal(){
		$this->load->view('modals/struktur_organisasi');
	}
}
