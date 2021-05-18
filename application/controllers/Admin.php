<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

class admin extends CI_Controller {
	public function __construct()
	{
	  	parent::__construct();
	  	$this->load->library('form_validation');  
        $this->load->model('auth_model');

    }
	

    public function cek_aktif() {
        if ($this->session->userdata('admin_valid') == false) {
            redirect('admin/login');
        }
    }

	public function index()
	{
		$this->cek_aktif();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/menu');
		$this->load->view('admin/pages/dashboard');
		$this->load->view('admin/templates/footer');
	}

	
	public function login() {
		$this->form_validation->set_rules('email','Email','required|trim|valid_email');
        $this->form_validation->set_rules('password','Password','required|trim');

        if($this->form_validation->run() == false){
        	//cek sudah login belum
        	if ($this->session->userdata('admin_valid') == true) {
	            //jika sudah arahkan ke halaman admin
	            redirect('admin');
	        }

            $this->load->view('admin/login_view');
        }else{
        	//proses login
            $this->auth_model->validasi_login();
            redirect('admin'); 
        }

	}

	public function logout() {
		$data = array(
                    'admin_id' => '',
                    'admin_nama' => '',
                    'admin_img' => '',
					'admin_valid' => false
                    );
        $this->session->set_userdata($data);
        		redirect('admin');
	}
}
