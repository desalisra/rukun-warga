<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class mDetailJurusan_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();		
    }


    public function getData()
    {
        $query = $this->db->query("SELECT * FROM tb_detail_jurusan 
                    INNER JOIN tb_jurusan ON jurusan_id = id_jurusan 
                    ORDER BY id_jurusan");
        return $query->result();
    }

    public function getJurusan()
    {
        $query = $this->db->query("SELECT * from tb_jurusan ORDER BY id_jurusan");
        return $query->result();
    }

    public function add()
    {
        $id = $this->input->post('id');
        $id_jurusan = $this->input->post('id_jurusan');
        $jurusan = $this->input->post('cmbGroup');
        $text1 = $this->input->post('text1');
        $text2 = $this->input->post('text2');


        if (!empty($id)){
            $query = $this->db->query("UPDATE tb_detail_jurusan 
                    SET deskripsi_jurusan='$text1',kompetensi_jurusan='$text2'
                    WHERE id_detailJurusan = '$id' AND jurusan_id = '$id_jurusan'"); 
        } else {
            $query = $this->db->query("INSERT INTO tb_detail_jurusan (jurusan_id,deskripsi_jurusan,kompetensi_jurusan)
                VALUES ('$jurusan','$text1','$text2')");     
        }
    }


    public function hapus()
    {
        $id = $this->uri->segment('3');

        $query = $this->db->query("DELETE FROM tb_detail_jurusan WHERE id_detailJurusan = '$id'");
    }

    public function edit($id)
    {
        $query = $this->db->query("SELECT * FROM tb_detail_jurusan 
                INNER JOIN tb_jurusan ON id_jurusan = jurusan_id
                WHERE jurusan_id = '$id'");
        return $query->row();
    }
}
