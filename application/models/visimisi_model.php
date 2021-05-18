<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class visimisi_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();		
    }

    public function getVisiMisi()
    {
        $query = $this->db->query("SELECT * FROM tb_visimisi ORDER BY id_visimisi");
        return $query->row();
    }

    
	
}
