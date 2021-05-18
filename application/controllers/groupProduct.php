<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

class groupProduct extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
        $this->load->model('groupProduct_model');
        if ($this->session->userdata('admin_id') == "") {
			redirect('layout/login');
		} 
	}

	public function index()
	{
	  $data['data'] = $this->groupProduct_model->getData();
	  $this->load->view('header');
	  $this->load->view('menu');
	  $this->load->view('groupProduct_view', $data);
	  $this->load->view('footer');
	}
	
	public function add(){
		if (!isset($_POST)){
			show_404();
		}
		
		$this->groupProduct_model->add();
			redirect('groupProduct');	
	}

	public function hapus()
	{
	  if (!isset($_POST))
        show_404();
		
		$this->groupProduct_model->hapus();
			redirect('groupProduct');	
	}
	

	public function edit()
	{
		$data = $this->groupProduct_model->edit();
		echo json_encode($data);
		
	}

}
