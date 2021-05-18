<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Berita_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();		
    }

    public function getData()
    {
        $query = $this->db->query("SELECT * FROM tb_berita ORDER BY tgl_berita DESC");
        return $query->result();
    }

    
    public function getDetail()
    {
        $id = $this->uri->segment('3');

        $query = $this->db->query("SELECT * FROM tb_berita WHERE  id_berita = '$id' ");
        return $query->row();
    }   
	
}
