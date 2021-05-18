<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class login extends CI_Controller {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('login_model');
    }
 
    public function index()
    {
        $this->load->view('login_view');
	}

    public function validasi_login()
    {
        if(!isset($_POST)) {
            show_404();
		}
		
		$this->login_model->validasi_login();
		redirect('layout');	
    }
}
