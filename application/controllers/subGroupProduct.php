<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

class subGroupProduct extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
        $this->load->model('subGroupProduct_model');
        if ($this->session->userdata('admin_id') == "") {
			redirect('layout/login');
		} 
	}

	public function index()
	{
		$data['groupProduct'] = $this->subGroupProduct_model->getGroup();
		$data['data'] = $this->subGroupProduct_model->getData();
	  	json_encode($data);
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('subGroupProduct_add', $data);
		$this->load->view('footer');
	}

	public function add()
	{
		if (!isset($_POST)){
			show_404();
		}
	
		$this->subGroupProduct_model->add();
		redirect('subgroupProduct');	
	}

	public function hapus()
	{
		if (!isset($_POST))
        show_404();
		
		$this->subGroupProduct_model->hapus();
			redirect('subgroupProduct');	
	}

	public function edit()
	{	
		$data = $this->subGroupProduct_model->edit();
		echo json_encode($data);
		
	}	
}
