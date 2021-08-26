<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Berita_model');
		$this->load->model('PengajuanSurat_model');
		$this->load->model('visimisi_model');
	}


	public function index()
	{
		$this->load->view('pages/header_view');
		$this->load->view('pages/home_view');
		$this->load->view('pages/footer_view');
	}

	public function visimisi()
	{
		$data['row'] = $this->visimisi_model->getVisiMisi();
		$this->load->view('pages/header_view');
		$this->load->view('pages/visimisi_view', $data);
		$this->load->view('pages/footer_view');
	}

	public function berita()
	{
		//Ambil data dari model
		$data['data'] = $this->Berita_model->getData();

		$this->load->view('pages/header_view');
		$this->load->view('pages/berita_view', $data);
		$this->load->view('pages/footer_view');
	}

	public function detail()
	{
		$data['row'] = $this->Berita_model->getDetail();

		$this->load->view('pages/header_view');
		$this->load->view('pages/detail_view', $data);
		$this->load->view('pages/footer_view');
	}	
}
