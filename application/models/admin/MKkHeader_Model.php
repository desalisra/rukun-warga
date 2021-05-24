<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class mJurusan_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();		
    }


    public function getData()
    {
        $query = $this->db->query("SELECT * from tb_jurusan ORDER BY id_jurusan");
        return $query->result();
    }

    public function add()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $nama = $this->input->post('nama');
        $nama = $this->input->post('nama');
        $nama = $this->input->post('nama');
        $nama = $this->input->post('nama');


        if (!empty($id)){
            $query = $this->db->query("UPDATE tb_jurusan SET nama_jurusan = '$nama' WHERE id_jurusan = '$id'"); 
        } else {
            $query = $this->db->query("INSERT INTO tb_jurusan (nama_jurusan) VALUES ('$nama')");     
        }
    }


    public function hapus()
    {
        $id = $this->uri->segment('3');
        $query = $this->db->query("DELETE FROM tb_jurusan WHERE id_jurusan = '$id'");
    }

    public function edit()
    {
        $id=$this->input->post('id');
        $query = $this->db->query("SELECT * FROM tb_jurusan WHERE id_jurusan = '$id'");
        return $query->result();
    }
}
