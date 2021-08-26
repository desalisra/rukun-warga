<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

class MKKHeader extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('user_login')) {redirect('auth');}
		$this->load->helper('alert_helper');
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

		// 1 Akun Hanya Bisa Input 1 KK
		if($this->MKkHeader_model->KK_Double($nokk) > 0){
			$this->session->set_flashdata("message",alert("danger","Hanya Dapat Menginputkan 1 Data KK"));
			redirect('mkkheader');
		}

		$message = "";
		$nokk = $this->input->post('nokk');
		$telp = $this->input->post('telepon');

		// Validasi Input KK
		if(!preg_match("/^[0-9]*$/", $nokk)){
			$message = $message . " - Nomor KK tidak Boleh Mengandung Huruf ...!<br>";
		}

		if(!preg_match("/^[0-9]*$/", $telp)){
			$message = $message . " - Nomor Telpon tidak Boleh Mengandung Huruf ...!<br>";
		}

		if($message !== ""){
			$this->session->set_flashdata("message",alert("danger",$message));
      redirect('mkkheader');
		}

		// Cek No KK Sudah Terdaftar
		if($this->MKkHeader_model->KK_Exist($nokk) > 0){
			$this->session->set_flashdata("message",alert("danger","No KK Sudah Terdaftar Dalam Sistem"));
			redirect('mkkheader');
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

	public function confirm(){
		if (!isset($_POST))
        show_404();

		// Validasi Data sudah Confirm
		$result = $this->MKkHeader_model->chkConfirm();
		if($result > 0){
			$this->session->set_flashdata("message",alert("danger","Data Sudah di Verifikasi Sebelumnya"));
			redirect('mkkheader');
		}
		
		$result = $this->MKkHeader_model->confirm();
		if($result > 0){
			$this->session->set_flashdata("message",alert("success","Data Berhasil di Verifikasi"));
			redirect('mkkheader');
		}else{
			$this->session->set_flashdata("message",alert("danger","Data Gagal di Verifikasi"));
			redirect('mkkheader');
		}
	}
}
