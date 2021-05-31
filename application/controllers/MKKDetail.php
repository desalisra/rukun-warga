<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

class MKKDetail extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('admin_valid') == false) {
        	redirect('admin/login');
        }

        $this->load->model('admin/MKkDetail_model');
	}

	public function index()
	{
	  $data['header'] = $this->MKkDetail_model->getDataHeader();
    $data['detail'] = $this->MKkDetail_model->getDataDetail();

	  $this->load->view('admin/templates/header');
	  $this->load->view('admin/templates/menu');
		$this->load->view('admin/pages/mKKDetail_view', $data);
	  $this->load->view('admin/templates/footer');
	}
	
	public function add(){
		if (!isset($_POST)){
			show_404();
		}
		
		$this->MKkDetail_model->add();
		redirect('MKKDetail');	
	}

	public function hapus()
	{
	  if (!isset($_POST))
        show_404();
		
		$this->MKkDetail_model->hapus();
			redirect('MKKDetail');	
	}
	

	public function edit()
	{
		$data = $this->MKkDetail_model->edit();
		echo json_encode($data);
		
	}

}
