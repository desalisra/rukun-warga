<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class jurusan_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();		
    }

    public function getJurusan()
    {
        $query = $this->db->query("SELECT * FROM tb_detail_jurusan 
                INNER JOIN tb_jurusan ON id_jurusan = jurusan_id");
        return $query->result();
    }

    public function getDetail($id)
    {
        $query = $this->db->query("SELECT * FROM tb_detail_jurusan 
                INNER JOIN tb_jurusan ON id_jurusan = jurusan_id
                WHERE jurusan_id = '$id' ");
        return $query->row();
    }
    
	
}
