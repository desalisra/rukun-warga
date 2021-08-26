<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MSurat extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('user_login') == false) {redirect('auth	');}
		$this->load->model('admin/MSurat_model');
		$this->load->model('Auth_model');
	}

	public function index()
	{

		$data['status'] = $this->Auth_model->status_akun();
		$data['nik'] = $this->MSurat_model->getNik();
		$data['data'] = $this->MSurat_model->getData();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/menu');
		$this->load->view('admin/pages/MSurat_view', $data);
		$this->load->view('admin/templates/footer');
	}


	public function hapus()
	{
		if (!isset($_POST))
			show_404();

		$this->MSurat_model->hapus();
		redirect('MSurat');
	}

	public function print($id)
	{
		include APPPATH . 'third_party/fpdf181/fpdf.php';

		$data = $this->MSurat_model->getData($id);

		$pdf = new FPDF('P', 'mm', 'A4');
		$pdf->AddPage();

		$pdf->SetFont('Arial', 'B', 14);
		$pdf->Cell(0, 0, 'KETUA RT. 02 RW. 04', 0, 1, 'C');
		$pdf->SetFont('Arial', '', 11);
		$pdf->Cell(0, 10, 'Kelurahan Larangan Utara, Kecamatan Larangan, Kabupaten Tangerang', 0, 1, 'C');

		$pdf->SetLineWidth(1);
		$pdf->Line(10, 20, 200, 20);
		$pdf->SetLineWidth(0);

		$pdf->SetFont('Arial', 'B', 12);
		$pdf->Cell(0, 25, 'SURAT KETERANGAN', 0, 1, 'C');
		$pdf->Line(80, 35, 130, 35);
		$pdf->SetFont('Arial', '', 11);
		$pdf->Cell(0, -15, 'No. ' . $data->Surat_Numb, 0, 20, 'C');

		$pdf->SetFont('Arial', '', 11);
		$pdf->Text(35, 60, 'Yang bertanda tangan di bawah ini Ketua RT. 02 RW 04, Kelurahan Larangan Utara');
		$pdf->Text(20, 65, 'Kecamatan Larangan Kabupaten Tangerang dengan ini menerangkan bahwa: ');


		$pdf->Text(35, 80, 'NIK');
		$pdf->Text(80, 80, ':');
		$pdf->Text(85, 80, $data->KKD_NIK);

		$pdf->Text(35, 85, 'Nama');
		$pdf->Text(80, 85, ':');
		$pdf->Text(85, 85, $data->KKD_NIK);

		$pdf->Text(35, 90, 'Tempat/Tanggal Lahir');
		$pdf->Text(80, 90, ':');
		$pdf->Text(85, 90, $data->KKD_TmpLahir . ' / ' . $data->KKD_TglLahir);

		$pdf->Text(35, 95, 'Jenis Kelamin');
		$pdf->Text(80, 95, ':');
		$pdf->Text(85, 95, $data->KKD_Jk == "L" ? "Laki-Laki" : "Perempuan");

		$pdf->Text(35, 100, 'Agama');
		$pdf->Text(80, 100, ':');
		$pdf->Text(85, 100, $data->KKD_Agama);

		$pdf->Text(35, 105, 'Alamat');
		$pdf->Text(80, 105, ':');
		$pdf->Text(85, 105, $data->KKH_Alamat);

		$pdf->Text(35, 120, 'Orang tersebut di atas, adalah benar-benar warga kami dan berdomisili di RT. 02 RW 04,');
		$pdf->Text(20, 125, 'Kelurahan Larangan Utara Kecamatan Larangan Kabupaten Tangerang. Surat keterangan ini');
		$pdf->Text(20, 130, 'dibuat sebagai kelengkapan pengurusan ' . $data->Surat_Keperluan);

		$pdf->Text(35, 140, 'Demikian surat ketrangan ini kami buat, untuk dapat digunakan sebagaimana mestinya');

		$tanggal = date("d M Y");
		$pdf->Text(145, 160, 'Tangerang, ' . $tanggal);
		$pdf->Text(145, 165, 'Ketua RT. 02, RW 04');
		$pdf->Line(145, 190, 190, 190);


		$pdf->Output();

		$data = $this->MSurat_model->updateStatus($id);
	}

	public function add()
	{
		if (!isset($_POST)) {
			show_404();
		}

		//Ambil data input User        
		$nik = $this->input->post('nik');
		$keperluan = $this->input->post('keperluan');

		// Cek Nik sudah terdaftar belum
		$data = $this->MSurat_model->getNik($nik);
		if (is_null($data)) {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  <strong>Pengajuan Surat Gagal,</strong> NIK yang anda masukan tidak terdaftar sebagai warga di RT ini.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>'
			);
			redirect('MSurart');
			return 0;
		}

		// Generate No Surat
		$bulan = date('n');
		$romawi = $this->getRomawi($bulan);
		$tahun = date('Y');

		$noSurat = $this->MSurat_model->cekNoSurat($bulan);

		$noUrut = substr($noSurat->Surat_Numb, 0, 3);
		
		$noUrut += 1;
		$noUrut = sprintf("%03s", $noUrut);
		$noSurat = $noUrut . "/SRT/" . $romawi . "/" . $tahun;

		$this->MSurat_model->addSurat($noSurat, $data->KKD_ID, $keperluan);

		$text = "NOTIFIKASI - Pengajuan Surat Nomor : $noSurat \n Pengajuan Dari : $data->KKD_Nama \n untuk pengurusan : $keperluan ";
		$result = file_get_contents("https://api.telegram.org/bot1806981542:AAHZv-150eNNBNu5YmUMDtZ6qyzssRTHdN0/sendMessage?chat_id=-516418446&text=$text");

		$this->session->set_flashdata(
			"message",
			"<div class='alert alert-success alert-dismissible fade show' role='alert'>
              <strong>Pengajuan Surat Berhasil,</strong><br/>
			  Silahkan Konfirmasi ke Pengurus RT dengan Nomor Surat $noSurat.
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
              </button>
            </div>"
		);
		redirect('MSurat');
	}


	private function getRomawi($bulan)
	{
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
