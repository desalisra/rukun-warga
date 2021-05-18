<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

class mJurusan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('admin_valid') == false) {
        	redirect('admin/login');
        }

        $this->load->model('admin/mJurusan_model');
	}

	public function index()
	{
	  $data['data'] = $this->mJurusan_model->getData();
	  $this->load->view('admin/templates/header');
	  $this->load->view('admin/templates/menu');
	  $this->load->view('admin/pages/mJurusan_view', $data);
	  $this->load->view('admin/templates/footer');
	}
	
	public function add(){
		if (!isset($_POST)){
			show_404();
		}
		
		$this->mJurusan_model->add();
			redirect('mJurusan');	
	}

	public function hapus()
	{
	  if (!isset($_POST))
        show_404();
		
		$this->mJurusan_model->hapus();
			redirect('mJurusan');	
	}
	

	public function edit()
	{
		$data = $this->mJurusan_model->edit();
		echo json_encode($data);
		
	}

}
