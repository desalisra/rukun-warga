<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->library('form_validation'); 
        $this->load->model('Berita_model');
        $this->load->model('PengajuanSurat_model');
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

	public function pengajuanSurat()
	{
		$data['jurusan'] = $this->jurusan_model->getJurusan();

		$this->load->view('pages/header_view',$data);
		$this->load->view('pages/PengajuanSurat_view',$data);
		$this->load->view('pages/footer_view'); 
	}

	public function daftar(){
		if (!isset($_POST)){
			show_404();
		}

		// Generate No Surat
		$bulan = date('n');
		$romawi = $this->getRomawi($bulan);
		$tahun = date('Y');

		$noSurat = $this->PengajuanSurat_model->cekNoSurat($bulan);
		
		$noUrut = substr($noSurat->noSurat,0,3);
		$noUrut += 1;
		$noUrut = sprintf("%03s",$noUrut);
		$noSurat = $noUrut."/SRT/".$romawi."/".$tahun;
		
		$this->PengajuanSurat_model->pengajuan($noSurat);
		$this->session->set_flashdata(
            'message',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Pengajuan Surat Berhasil,</strong> Silahkan Konfirmasi ke Pengurus RT.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>'
        );
		redirect('pages/pengajuanSurat');	
	}


	private function getRomawi($bulan){
		switch ($bulan) {
			case 1:
				return "I";
				break;
			case 2:
				return "II";
				break;
			case 3:
				return "III";
				break;
			case 4:
				return "IV";
				break;
			case 5:
				return "V";
				break;
			case 6:
				return "VI";
				break;
			case 7:
				return "VII";
				break;
			case 8:
				return "VIII";
				break;
			case 9:
				return "IX";
				break;
			case 10:
				return "X";
				break;
			case 11:
				return "XI";
				break;
			case 12:
				return "XII";
				break;
		}
	}
}
