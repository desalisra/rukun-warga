<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

class admin extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('form_validation');  
		$this->load->model('auth_model');

		if ($this->session->userdata('user_login') == false) {redirect('auth');}
	}

	public function index() {
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/menu');
		$this->load->view('admin/pages/dashboard');
		$this->load->view('admin/templates/footer');
	}
}
