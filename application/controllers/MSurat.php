<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MSurat extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('admin_valid') == false) {
			redirect('admin/login');
		}
		$this->load->model('admin/MSurat_model');
	}

	public function index()
	{
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
		$pdf->Cell(0, -15, 'No. ' . $data->srt_noSurat, 0, 20, 'C');

		$pdf->SetFont('Arial', '', 11);
		$pdf->Text(35, 60, 'Yang bertanda tangan di bawah ini Ketua RT. 02 RW 04, Kelurahan Larangan Utara');
		$pdf->Text(20, 65, 'Kecamatan Larangan Kabupaten Tangerang dengan ini menerangkan bahwa: ');


		$pdf->Text(35, 80, 'NIK');
		$pdf->Text(80, 80, ':');
		$pdf->Text(85, 80, $data->srt_nik);

		$pdf->Text(35, 85, 'Nama');
		$pdf->Text(80, 85, ':');
		$pdf->Text(85, 85, $data->srt_nama);

		$pdf->Text(35, 90, 'Tempat/Tanggal Lahir');
		$pdf->Text(80, 90, ':');
		$pdf->Text(85, 90, $data->srt_tmpLahir . ' / ' . $data->srt_tglLahir);

		$pdf->Text(35, 95, 'Jenis Kelamin');
		$pdf->Text(80, 95, ':');
		$pdf->Text(85, 95, $data->srt_jk == "L" ? "Laki-Laki" : "Perempuan");

		$pdf->Text(35, 100, 'Agama');
		$pdf->Text(80, 100, ':');
		$pdf->Text(85, 100, $data->srt_agama);

		$pdf->Text(35, 105, 'Alamat');
		$pdf->Text(80, 105, ':');
		$pdf->Text(85, 105, $data->srt_alamat);

		$pdf->Text(35, 120, 'Orang tersebut di atas, adalah benar-benar warga kami dan berdomisili di RT. 02 RW 04,');
		$pdf->Text(20, 125, 'Kelurahan Larangan Utara Kecamatan Larangan Kabupaten Tangerang. Surat keterangan ini');
		$pdf->Text(20, 130, 'dibuat sebagai kelengkapan pengurusan ' . $data->srt_keperluan);

		$pdf->Text(35, 140, 'Demikian surat ketrangan ini kami buat, untuk dapat digunakan sebagaimana mestinya');

		$tanggal = date("d M Y");
		$pdf->Text(145, 160, 'Tangerang, ' . $tanggal);
		$pdf->Text(145, 165, 'Ketua RT. 02, RW 04');
		$pdf->Line(145, 190, 190, 190);


		$pdf->Output();

		$data = $this->MSurat_model->updateStatus($id);
	}
}
