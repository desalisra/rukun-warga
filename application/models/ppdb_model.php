<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class ppdb_model extends CI_Model {
     
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

    
    public function daftar()
    {
        //Ambil data input User        
        $jurusan = $this->input->post('jurusan');
        $nama_siswa = $this->input->post('nama_siswa');
        $tmp_lahir = $this->input->post('tmp_lahir');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $jk = $this->input->post('jk');
        $agama = $this->input->post('agama');
        $nama_ortu = $this->input->post('nama_ortu');
        $alamat_rumah = $this->input->post('alamat_rumah');
        $no_tlp = $this->input->post('no_tlp');
        $asl_sekolah = $this->input->post('asl_sekolah');
        $alamat_sekolah = $this->input->post('alamat_sekolah');
        $ns_indo = $this->input->post('ns_indo');
        $nu_indo = $this->input->post('nu_indo');
        $ns_ing = $this->input->post('ns_ing');
        $nu_ing = $this->input->post('nu_ing');
        $ns_mtk = $this->input->post('ns_mtk');
        $nu_mtk = $this->input->post('nu_mtk');
        $ns_ipa = $this->input->post('ns_ipa');
        $nu_ipa = $this->input->post('nu_ipa');

        //query insert ke database
        $query = $this->db->query("INSERT INTO tb_ppdb
            (jurusan_id,namsiswa_ppdb,tmplahir_ppdb,tgllahir_ppdb,jk_ppdb,agaman_ppdb,namwali_ppdb,almtwali_ppdb,tlp_ppdb,
            sekolah_ppdb,almtskolah_ppdb,nsindo_ppdb,nuindo_ppdb,nsing_ppdb,nuing_ppdb,nsmtk_ppdb,numtk_ppdb,nsipa_ppdb,
            nuipa_ppdb,flag_ppdb,tgl_ppdb) 
            VALUES ('$jurusan','$nama_siswa','$tmp_lahir','$tgl_lahir','$jk','$agama','$nama_ortu','$alamat_rumah','$no_tlp',
            '$asl_sekolah','$alamat_sekolah','$ns_indo','$nu_indo','$ns_ing','$nu_ing','$ns_mtk','$nu_mtk','$ns_ipa','$nu_ipa',
            'N',NOW())
            ");
    }   
	
}
