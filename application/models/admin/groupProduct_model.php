<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class groupProduct_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();		
    }

    public function add()
    {
        $namaGroup = $this->input->post('txtGroupProduk');

        $kodeGroup = $this->input->post('txtKodeProduk');
        if (!empty($kodeGroup)){
            $query = $this->db->query("UPDATE m_groupproduct 
                    SET GroupProduct_Name='$namaGroup' 
                    WHERE GroupProduct_Auto='$kodeGroup'");
        } else {
            $query = $this->db->query("INSERT INTO m_groupproduct(GroupProduct_Name)
                    VALUES ('$namaGroup')");
        }

    }


    public function hapus()
    {
        $kodeGroup = $this->uri->segment('3');
        $query = $this->db->query("DELETE from m_groupproduct where groupproduct_auto='$kodeGroup'");
    }

    public function edit()
    {
        $kodeGroup=$this->input->post('id');
        $query = $this->db->query("SELECT * from m_groupproduct where groupproduct_auto='$kodeGroup'");
        return $query->result();
    }


	public function getData()
    {
		$groupproduct = $this->db->query("SELECT * from m_groupproduct ORDER BY GroupProduct_auto");
		return $groupproduct->result_array();
    }
}
