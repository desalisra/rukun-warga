<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

class MKKHeader extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('admin_valid') == false) {
        	redirect('admin/login');
        }

        $this->load->model('admin/MKkHeader_model');
	}

	public function index()
	{
	  $data['data'] = $this->MKkHeader_model->getData();
	  $this->load->view('admin/templates/header');
	  $this->load->view('admin/templates/menu');
		$this->load->view('admin/pages/mKKHeader_view', $data);
	  $this->load->view('admin/templates/footer');
	}
	
	public function add(){
		if (!isset($_POST)){
			show_404();
		}
		
		$this->MKkHeader_model->add();
		redirect('MKKHeader');	
	}

	public function hapus()
	{
	  if (!isset($_POST))
        show_404();
		
		$this->MKkHeader_model->hapus();
			redirect('MKKHeader');	
	}
	

	public function edit()
	{
		$data = $this->MKkHeader_model->edit();
		echo json_encode($data);
		
	}

}
