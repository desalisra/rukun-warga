<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class mVisiMisi_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();		
    }


    public function getData()
    {
        $query = $this->db->query("SELECT * FROM tb_visimisi");
        return $query->row();
    }


    public function edit()
    {
        $id = $this->input->post('id');
        $text1 = $this->input->post('text1');
        $text2 = $this->input->post('text2');

        if (!empty($id)){
            $query = $this->db->query("UPDATE tb_visimisi 
                    SET Visimisi_Visi = '$text1', 
                        Visimisi_Misi = '$text2'
                    WHERE Visimisi_ID = '$id'"); 
        } 
    }

}

