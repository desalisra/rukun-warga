<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

class mBerita extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('admin_valid') == false) {
        	redirect('admin/login');
        }
		$this->load->library('form_validation');  
        $this->load->model('admin/mBerita_model');
	}


	public function index()
	{
		$data['data'] = $this->mBerita_model->getData();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/menu');
		$this->load->view('admin/pages/mBerita_view', $data);
		$this->load->view('admin/templates/footer');
	}
	
	public function add(){

		// VALIDASI DATA INPUTAN
        $this->form_validation->set_rules('judul','Nama','required|trim');
        $this->form_validation->set_rules('berita','Nama','required|trim');
		
		// cek sudah klik publish belum
		if($this->form_validation->run() == false){
			$data['edit'] = false;

            $this->load->view('admin/templates/header');
			$this->load->view('admin/templates/menu');
			$this->load->view('admin/pages/mBerita_tambah',$data);
			$this->load->view('admin/templates/footer');    
        }else{
        	$this->mBerita_model->add();
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-block alert-info">
					<button type="button" class="close" data-dismiss="alert">
						<i class="ace-icon fa fa-times"></i>
					</button>
					<i class="ace-icon fa fa-check green"></i>
					Berita  
					<strong class="green">
						<b>Berhasil </b>
					</strong> di Tamabahkan 
				</div>'
            );
            redirect('mBerita'); 
        }
	}

	public function edit()
	{
		// VALIDASI DATA
        $this->form_validation->set_rules('judul','Nama','required|trim');
        $this->form_validation->set_rules('berita','Nama','required|trim');
		
		if($this->form_validation->run() == false){
			$id = $this->uri->segment('3');

			$data['edit'] = true;
			$data['row'] = $this->mBerita_model->edit($id);

            $this->load->view('admin/templates/header');
			$this->load->view('admin/templates/menu');
			$this->load->view('admin/pages/mBerita_tambah',$data);
			$this->load->view('admin/templates/footer');    
        }else{
        	$this->mBerita_model->add();
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-block alert-info">
					<button type="button" class="close" data-dismiss="alert">
						<i class="ace-icon fa fa-times"></i>
					</button>
					<i class="ace-icon fa fa-check green"></i>
					Berita  
					<strong class="green">
						<b>Berhasil </b>
					</strong> di Ubah 
				</div>'
            );
            redirect('mBerita'); 
        }
	}



	public function hapus()
	{
	  if (!isset($_POST))
        show_404();
		
		$this->mBerita_model->hapus();
		$this->session->set_flashdata(
            'message',
            '<div class="alert alert-block alert-info">
				<button type="button" class="close" data-dismiss="alert">
					<i class="ace-icon fa fa-times"></i>
				</button>
				<i class="ace-icon fa fa-check green"></i>
				Berita  
				<strong class="green">
					<b>Berhasil </b>
				</strong> di Hapus 
			</div>'
        );
		redirect('mBerita');	
	}
}
