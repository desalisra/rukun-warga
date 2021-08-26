<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Auth extends CI_Controller {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Auth_model');
        $this->load->helper('alert_helper');
    }
 
    // Login
    public function index()
    {
        if ($this->session->userdata('user_login')) {redirect('admin');}
        $this->load->view('admin/login_view');
	}

    public function validasi_login()
    {
        if(!isset($_POST)) {
            show_404();
		}
		
		$this->Auth_model->validasi_login();
		redirect('admin');	
    }

    // Resgister
    public function register()
    {
        $this->load->view('admin/register_view');
	}

    public function validasi_register()
    {
        if(!isset($_POST)) {
            show_404();
		}

        $email = $this->input->post('email');
        $password1 = $this->input->post('password');
        $password2 = $this->input->post('valPassword');
        
        // Cek Password beda
        if($password1 !== $password2){
            $this->session->set_flashdata("message",alert("danger","Password Tidak Sesuai"));
            redirect('auth/register');
        }

        // Cek Email Sudah Terdaftar
        if($this->Auth_model->email_exist($email) > 0){
            $this->session->set_flashdata("message",alert("danger","Email Sudah Terdaftar"));
            redirect('auth/register');
        }
        
        // Simpan Data Ke Database
        $this->Auth_model->register();

        $this->session->set_flashdata("message",alert("success","Register Berhasil"));
        redirect('auth');
    }

    public function logout() {
		$data = array(
			'user_id' => '',
			'user_nama' => '',
			'user_akses' => '',
			'user_login' => false
        );
    
        $this->session->set_userdata($data);

        redirect('admin');
	}
}

