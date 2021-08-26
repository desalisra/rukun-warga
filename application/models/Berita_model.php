<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Berita_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();		
    }

    public function getData()
    {
        $query = $this->db->query("SELECT * FROM tb_berita 
                                LEFT JOIN tb_users ON Berita_UpdateId = User_Id 
                                ORDER BY Berita_UpdateTime DESC");
        return $query->result();
    }

    
    public function getDetail()
    {
        $id = $this->uri->segment('3');

        $query = $this->db->query("SELECT * FROM tb_berita 
                                LEFT JOIN tb_users ON Berita_UpdateId = User_Id 
                                WHERE Berita_Id  = '$id' ");
        return $query->row();
    }   
	
}
