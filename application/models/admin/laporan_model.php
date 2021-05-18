<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class laporan_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();		
    }

    
    public function rptView($tglAwal,$tglAkhir)
    {
		$sql = "SELECT * FROM tb_ppdb 
                WHERE tgl_ppdb BETWEEN '$tglAwal' AND '$tglAkhir'"; // Tampilkan semua data yang ada di tabel
        return $this->db->query($sql)->result();
    }
	
}
