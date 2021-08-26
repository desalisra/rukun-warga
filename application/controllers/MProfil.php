<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

class mProfil extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('user_login') == false) {redirect('auth');}

    $this->load->model('admin/mProfil_model');
	}

	public function index()
	{
	  $data['data'] = $this->mProfil_model->getData();
	  $this->load->view('admin/templates/header');
	  $this->load->view('admin/templates/menu');
	  $this->load->view('admin/pages/mProfil_view', $data);
	  $this->load->view('admin/templates/footer');
	}
	
	public function add(){
		if (!isset($_POST)){
			show_404();
		}
		
		$this->mProfil_model->add();
			redirect('mProfil');	
	}

	public function hapus()
	{
	  if (!isset($_POST))
        show_404();
		
		$this->mProfil_model->hapus();
			redirect('mProfil');	
	}
	

	public function edit()
	{
		$data = $this->mProfil_model->edit();
		echo json_encode($data);
		
	}

}
