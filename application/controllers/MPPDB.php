<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

class mPPDB extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('admin_valid') == false) {
        	redirect('admin/login');
        }

        $this->load->model('admin/mPPDB_model');
	}

	public function index()
	{
	  $data['data'] = $this->mPPDB_model->getData();
	  $this->load->view('admin/templates/header');
	  $this->load->view('admin/templates/menu');
	  $this->load->view('admin/pages/mPPDB_view', $data);
	  $this->load->view('admin/templates/footer');
	}
	
	public function add(){
		if (!isset($_POST)){
			show_404();
		}
		
		$this->mPPDB_model->add();
			redirect('mPPDB');	
	}

	public function hapus()
	{
	  if (!isset($_POST))
        show_404();
		
		$this->mPPDB_model->hapus();
			redirect('mPPDB');	
	}
	
	public function edit()
	{
		$data = $this->mPPDB_model->edit();
		echo json_encode($data);		
	}

}
