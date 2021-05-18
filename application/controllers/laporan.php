<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

class laporan extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('admin/laporan_model');
    }

    public function index()
    {
      $this->load->view('admin/templates/header');
      $this->load->view('admin/templates/menu');
      $this->load->view('admin/pages/laporan_view');
      $this->load->view('admin/templates/footer');
    }

    public function proses(){
        $laporan = $this->input->post('jenis');
        $tglAwal = $this->input->post('tglawal');
        $tglAkhir =$this->input->post('tglakhir');

        switch ($laporan) {
            case 'pdf':
                $this->exportPDF($tglAwal,$tglAkhir);
                break;
            
            default:
                $this->exportExcel($tglAwal,$tglAkhir);
                break;
        }
    }

    public function exportPDF($tglAwal,$tglAkhir) {
      include APPPATH.'third_party/fpdf181/fpdf.php';

      $pdf = new FPDF('l', 'mm', 'A4');
      $pdf->AddPage();

      $pdf->SetFont('Arial', 'B', 16);
      $pdf->Cell(282, 7, 'Laporan Peserta Didik Baru', 0, 1, 'C');

      $pdf->SetFont('Arial', 'B', 12);
      $pdf->Cell(282, 7, 'SMK TELKOM JAKARTA', 0, 1, 'C');

      $pdf->Cell(10, 7, '', 0, 1);

      $pdf->SetFont('Arial', 'B', 10);
      $pdf->Cell(20, 6, 'ID PPDB', 1, 0, 'C');
      $pdf->Cell(27, 6, 'NAMA', 1, 0, 'C');
      $pdf->Cell(15, 6, 'JK', 1, 0, 'C');
      $pdf->Cell(50, 6, 'TEMPAT LAHIR', 1, 0, 'C');
      $pdf->Cell(50, 6, 'TANGGAL LAHIR', 1, 0, 'C');
      $pdf->Cell(20, 6, 'AGAMA', 1, 0, 'C');
      $pdf->Cell(30, 6, 'ASAL SEKOLAH', 1, 0, 'C');
      $pdf->Cell(50, 6, 'ALAMAT SEKOLAH', 1, 0, 'C');
      $pdf->Cell(20, 6, 'DAFTAR', 1, 0, 'C');

      

      $pdf->SetFont('Arial', '', 10);
      $groupModel = $this->laporan_model->rptView($tglAwal,$tglAkhir);
      $no = 1;
      foreach ($groupModel as $data) {
        $pdf->Cell(10, 6, '', 0, 1);
        $pdf->Cell(20, 6, $data->id_ppdb, 1, 0);
        $pdf->Cell(27, 6, $data->namsiswa_ppdb, 1, 0);
        $pdf->Cell(15, 6, $data->jk_ppdb, 1, 0);
        $pdf->Cell(50, 6, $data->tmplahir_ppdb, 1, 0);
        $pdf->Cell(50, 6, $data->tgllahir_ppdb, 1, 0);
        $pdf->Cell(20,6, $data->agaman_ppdb, 1, 0);
        $pdf->Cell(30,6, $data->sekolah_ppdb, 1, 0);
        $pdf->Cell(50,6, $data->almtskolah_ppdb, 1, 0);  
        $pdf->Cell(20,6, $data->tgl_ppdb, 1, 0);  

        $no++;
      }

      $pdf->Output();
    } 

    public function exportExcel($tglAwal,$tglAkhir)
    {
        //load plugin
      include APPPATH.'third_party/PHPExcel/PHPExcel.php';

      //panggil class
      $excel = new PHPExcel();

      //setting file excel
      $excel->getProperties()->setCreator('Admin Telkom')
                      ->setLastModifiedBy('Admin Telkom')
                      ->setTitle("PPDB TELKOM")
                      ->setSubject("PPDB TELKOM")
                      ->setDescription("Laporan Peserta Didik Baru");
                        
        // Buat sebuah variabel untuk menampung pengaturan style dari header tabel    
        $style_col = array(      
                'font' => array('bold' => true), // Set font nya jadi bold      
                'alignment' => array(        
                    'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text center        
                    'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text secara vertical (middle)      
                    ),      
                'borders' => array(        
                    'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis        
                    'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis        
                    'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis        
                    'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis      
                    )    
        );    
        
        // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel    
        $style_row = array(      
                'alignment' => array(        
                    'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text secara vertical (middle)      
                ),      
                'borders' => array(        
                    'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis        
                    'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis        
                    'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis        
                    'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis      
                )    
        );    
        
        $excel->setActiveSheetIndex(0)->setCellValue('A1', "DATA PESERTA DIDIK BARU"); // Set kolom A1 dengan tulisan "DATA GROUP"    
        $excel->getActiveSheet()->mergeCells('A1:I1'); // Set Merge Cell pada kolom A1 sampai C1    
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1    
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1   
        // Set text center untuk kolom A1 
        $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);    
        
        // Buat header tabel nya pada baris ke 3    
        $excel->setActiveSheetIndex(0)->setCellValue('A3', "ID PPDB"); // Set kolom A3 dengan tulisan "ID BERITA"    
        $excel->setActiveSheetIndex(0)->setCellValue('B3', "NAMA SISWA"); // Set kolom B3 dengan tulisan "JUDUL BERITA"    
        $excel->setActiveSheetIndex(0)->setCellValue('C3', "JENIS KELAMIN"); // Set kolom C3 dengan tulisan "ISI BERITA"    
        $excel->setActiveSheetIndex(0)->setCellValue('D3', "TEMPAT LAHIR"); // Set kolom C3 dengan tulisan "GAMBAR BERITA"
        $excel->setActiveSheetIndex(0)->setCellValue('E3', "TANGGAL LAHIR"); // Set kolom C3 dengan tulisan "GAMBAR BERITA"
        $excel->setActiveSheetIndex(0)->setCellValue('F3', "AGAMA"); // Set kolom C3 dengan tulisan "GAMBAR BERITA"
        $excel->setActiveSheetIndex(0)->setCellValue('G3', "ASAL SEKOLAH"); // Set kolom C3 dengan tulisan "GAMBAR BERITA"
        $excel->setActiveSheetIndex(0)->setCellValue('H3', "ALAMAT SEKOLAH"); // Set kolom C3 dengan tulisan "GAMBAR BERITA"
        $excel->setActiveSheetIndex(0)->setCellValue('I3', "TANGGAL DAFTAR"); // Set kolom C3 dengan tulisan "GAMBAR BERITA"

        // Apply style header yang telah kita buat tadi ke masing-masing kolom header    
        $excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);    
        $excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);    
        $excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);  
        $excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);   
        $excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);  
        $excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);  
        $excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);  
        $excel->getActiveSheet()->getStyle('H3')->applyFromArray($style_col); 
        $excel->getActiveSheet()->getStyle('I3')->applyFromArray($style_col);  
        
        // Panggil function rptView yang ada di rptGroupModel 
        $groupModel = $this->laporan_model->rptView($tglAwal,$tglAkhir);    
        $no = 1;        // Untuk penomoran tabel, di awal set dengan 1    
        $numrow = 4;    // Set baris pertama untuk isi tabel adalah baris ke 4    
        foreach($groupModel as $data){ // Lakukan looping pada variabel siswa      
            $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $data->id_ppdb);      
            $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->namsiswa_ppdb);      
            $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->jk_ppdb);
            $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->tmplahir_ppdb); 
            $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->tgllahir_ppdb); 
            $excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data->agaman_ppdb); 
            $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data->sekolah_ppdb);
            $excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $data->almtskolah_ppdb);  
            $excel->setActiveSheetIndex(0)->setCellValue('I'.$numrow, $data->tgl_ppdb);
            
            // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)      
            $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);      
            $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);  
            $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row); 
            $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row); 
            $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row); 
            $excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row); 
            $excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($style_row); 
            $excel->getActiveSheet()->getStyle('I'.$numrow)->applyFromArray($style_row);
            
            $no++; // Tambah 1 setiap kali looping      
            $numrow++; // Tambah 1 setiap kali looping    
        }    
        // Set width kolom    
        $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A    
        $excel->getActiveSheet()->getColumnDimension('B')->setWidth(30); // Set width kolom B    
        $excel->getActiveSheet()->getColumnDimension('C')->setWidth(5); // Set width kolom C
        $excel->getActiveSheet()->getColumnDimension('D')->setWidth(20); // Set width kolom C 
        $excel->getActiveSheet()->getColumnDimension('E')->setWidth(20); // Set width kolom C
        $excel->getActiveSheet()->getColumnDimension('F')->setWidth(20); // Set width kolom C
        $excel->getActiveSheet()->getColumnDimension('G')->setWidth(20); // Set width kolom C   
        $excel->getActiveSheet()->getColumnDimension('H')->setWidth(30); // Set width kolom C
        $excel->getActiveSheet()->getColumnDimension('I')->setWidth(30); // Set width kolom C
        
        // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)    
        $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);    
        // Set orientasi kertas jadi LANDSCAPE    
        $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);    
        
        // Set judul file excel nya    
        $excel->getActiveSheet(0)->setTitle("Laporan Peserta Didik Baru");    
        $excel->setActiveSheetIndex(0);    
        
        // Proses file excel    
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');    
        header('Content-Disposition: attachment; filename="PPDB TELKOM"'); 
        
        // Set nama file excel nya    
        header('Cache-Control: max-age=0');  
        //PHPExcel_Settings::setZipClass(PHPExcel_Settings::PCLZIP);
        //zip pada php ini diaktifkan       
        $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');    
        $write->save('php://output');       
    }
}

