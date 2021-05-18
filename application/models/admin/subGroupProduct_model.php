<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class subGroupProduct_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();		
    }

	public function getGroup()
    {
		$groupproduct = $this->db->query("SELECT * from m_groupproduct");
		return $groupproduct->result();
    }

    public function getData()
    {
    	$subgroupproduct = $this->db->query("SELECT * from m_subgroupproduct 
			INNER JOIN m_groupproduct ON ssub_groupid = GroupProduct_auto
    		ORDER BY sSub_Auto");
		return $subgroupproduct->result();
    }

    public function add()
    {
        $sSub_Name = $this->input->post('txtGroupProduk');
        $ssub_groupid = $this->input->post('cmbGroup');
        $kodeGroup = $this->input->post('txtKodeProduk');

        if (!empty($kodeGroup)){
            $query = $this->db->query("UPDATE m_subgroupproduct 
                    SET sSub_Name = '$sSub_Name',
                    	ssub_groupid = '$ssub_groupid'
                    WHERE sSub_Auto = '$kodeGroup'");
        } else {
            $query = $this->db->query("INSERT INTO m_subgroupproduct (sSub_Name,ssub_groupid)
                    VALUES ('$sSub_Name','$ssub_groupid')");
        }

    }

    public function hapus()
    {
        $kodeGroup = $this->uri->segment('3');
        $query = $this->db->query("DELETE FROM m_subgroupproduct WHERE sSub_Auto = '$kodeGroup'");
    }

    public function edit()
    {
        $kodeGroup=$this->input->post('id');
        $query = $this->db->query("SELECT * from m_subgroupproduct 
			INNER JOIN m_groupproduct ON ssub_groupid = GroupProduct_auto
    		WHERE sSub_Auto = '$kodeGroup' ");
        return $query->result();
    }

}
