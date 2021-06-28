<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MSurat_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }


    public function getData($id = null)
    {
        if (is_null($id)) {
            $query = $this->db->query("SELECT * FROM tb_surat");
            return $query->result();
        } else {
            $query = $this->db->query("SELECT * FROM tb_surat WHERE srt_id = '{$id}'");
            return $query->row();
        }
    }

    public function updateStatus($id = null)
    {
        $query = $this->db->query("UPDATE tb_surat 
                                SET srt_stsPrint = 1
                                WHERE srt_id = '$id'");
    }

    public function hapus()
    {
        $id = $this->uri->segment('3');
        $query = $this->db->query("DELETE FROM tb_surat WHERE srt_id = '$id'");
    }
}
