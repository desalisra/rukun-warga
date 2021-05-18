<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->library('form_validation'); 
        $this->load->model('Berita_model');
        $this->load->model('ppdb_model');
        $this->load->model('visimisi_model');
        $this->load->model('jurusan_model');
	}


	public function index()
	{
		$data['jurusan'] = $this->jurusan_model->getJurusan();
		$this->load->view('pages/header_view',$data);
		$this->load->view('pages/home_view');
		$this->load->view('pages/footer_view');
	}

	public function visimisi()
	{
		$data['jurusan'] = $this->jurusan_model->getJurusan();
		$data['row'] = $this->visimisi_model->getVisiMisi();
		$this->load->view('pages/header_view',$data);
		$this->load->view('pages/visimisi_view',$data);
		$this->load->view('pages/footer_view');
	}

	public function jurusan($id)
	{
		$data['jurusan'] = $this->jurusan_model->getJurusan();
		$data['row'] = $this->jurusan_model->getDetail($id);
		$this->load->view('pages/header_view',$data);
		$this->load->view('pages/jurusan_view',$data);
		$this->load->view('pages/footer_view');
	}

	public function berita()
	{
		//Ambil data dari model
		$data['jurusan'] = $this->jurusan_model->getJurusan();
		$data['data'] = $this->Berita_model->getData();

		$this->load->view('pages/header_view',$data);
		$this->load->view('pages/berita_view',$data);
		$this->load->view('pages/footer_view');
	}

	public function detail()
	{
		$data['jurusan'] = $this->jurusan_model->getJurusan();
		$data['row'] = $this->Berita_model->getDetail();

		$this->load->view('pages/header_view',$data);
		$this->load->view('pages/detail_view',$data);
		$this->load->view('pages/footer_view');
	}

	public function ppdb()
	{
		$data['jurusan'] = $this->jurusan_model->getJurusan();

		$this->load->view('pages/header_view',$data);
		$this->load->view('pages/ppdb_view',$data);
		$this->load->view('pages/footer_view'); 
	}

	public function daftar(){
		if (!isset($_POST)){
			show_404();
		}
		
		$this->ppdb_model->daftar();
		$this->session->set_flashdata(
            'message',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Data Anda Berhasil di Daftarkan,</strong> Silahkan Konfirmasi Pendaftar Anda ke SMK Telkom Terdekat.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>'
        );
		redirect('pages/ppdb');	
	}
}
