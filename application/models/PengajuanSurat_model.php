<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class PengajuanSurat_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();		
    }

    public function getDataByNIK($nik = null)
    {
        $query = $this->db->query("SELECT * FROM tb_kk_detail
                                   LEFT JOIN tb_kk_header 
                                   ON hid_dkk = id_kk
                                   WHERE nik_dkk = '$nik'");
        return $query->row();
    }

    public function cekNoSurat($bulan)
    {
        $query = $this->db->query("SELECT IFNULL(MAX(srt_noSurat),0) AS noSurat FROM tb_surat WHERE MONTH(srt_tglPengajuan) = '" . $bulan . "'");
        return $query->row();
    }

    
    public function pengajuan($noSurat,$data,$keperluan)
    {
        //query insert ke database
        $query = $this->db->query("INSERT INTO tb_surat
                                (srt_noSurat, srt_nik, srt_nama, srt_tmpLahir, srt_tglLahir, srt_jk, srt_agama, srt_alamat, srt_keperluan, srt_tglPengajuan, srt_stsPrint) 
                                VALUES ('$noSurat',
                                        '$data->nik_dkk',
                                        '$data->nama_dkk',
                                        '$data->tmpLahir_dkk',
                                        '$data->tglLahir_dkk',
                                        '$data->jk_dkk',
                                        '$data->agama_dkk',
                                        '$data->alamat_kk',
                                        '$keperluan',
                                        NOW(),
                                        '0') ");
    }   
	
}
