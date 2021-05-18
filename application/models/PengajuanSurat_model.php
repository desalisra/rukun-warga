<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class PengajuanSurat_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();		
    }

    public function getJalurPpdb()
    {
        $query = $this->db->query("SELECT * FROM tb_jalur_ppdb ORDER BY id_jalurPpdb");
        return $query->row();
    }

    public function cekNoSurat($bulan)
    {
        $query = $this->db->query("SELECT IFNULL(MAX(srt_noSurat),0) AS noSurat FROM tb_surat WHERE MONTH(srt_tglPengajuan) = '" . $bulan . "'");
        return $query->row();
    }

    
    public function pengajuan($noSurat)
    {
        //Ambil data input User        
        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
        $tmp_lahir = $this->input->post('tmp_lahir');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $jk = $this->input->post('jk');
        $agama = $this->input->post('agama');
        $alamat = $this->input->post('alamat');
        $keperluan = $this->input->post('keperluan');

        //query insert ke database
        $query = $this->db->query("INSERT INTO tb_surat
            (srt_noSurat, srt_nik, srt_nama, srt_tmpLahir, srt_tglLahir, srt_jk, srt_agama, srt_alamat, srt_keperluan, srt_tglPengajuan, srt_stsPrint) 
            VALUES ('{$noSurat}','{$nik}','{$nama}','{$tmp_lahir}','{$tgl_lahir}','{$jk}','{$agama}','{$alamat}','{$keperluan}',NOW(),'0') ");
    }   
	
}
