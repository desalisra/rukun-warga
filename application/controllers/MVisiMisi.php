<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

class mVisiMisi extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('admin_valid') == false) {
        	redirect('admin/login');
        }
		$this->load->library('form_validation');  
        $this->load->model('admin/mVisiMisi_model');
	}


	public function index()
	{
		$data['data'] = $this->mVisiMisi_model->getData();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/menu');
		$this->load->view('admin/pages/mVisiMisi_view', $data);
		$this->load->view('admin/templates/footer');
	}

	public function edit()
	{
		// VALIDASI DATA
        $this->form_validation->set_rules('text1','Text1','required|trim');
        $this->form_validation->set_rules('text2','Text2','required|trim');
		
		if($this->form_validation->run() == false){
			$id = $this->uri->segment('3');

			$data['edit'] = true;
			$data['data'] = $this->mVisiMisi_model->getData();

            $this->load->view('admin/templates/header');
			$this->load->view('admin/templates/menu');
			$this->load->view('admin/pages/editorVisiMisi_view',$data);
			$this->load->view('admin/templates/footer');    
        }else{
        	$this->mVisiMisi_model->edit();
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-block alert-info">
					<button type="button" class="close" data-dismiss="alert">
						<i class="ace-icon fa fa-times"></i>
					</button>
					<i class="ace-icon fa fa-check green"></i>
					<strong class="green">
						<b>Berhasil </b>
					</strong> di Ubah 
				</div>'
            );
            redirect('mVisiMisi'); 
        }
	}



	public function hapus()
	{
	  if (!isset($_POST))
        show_404();
		
		$this->mVisiMisi_model->hapus();
		$this->session->set_flashdata(
            'message',
            '<div class="alert alert-block alert-info">
				<button type="button" class="close" data-dismiss="alert">
					<i class="ace-icon fa fa-times"></i>
				</button>
				<i class="ace-icon fa fa-check green"></i> 
				<strong class="green">
					<b>Berhasil </b>
				</strong> di Hapus 
			</div>'
        );
		redirect('mVisiMisi');	
	}
}
