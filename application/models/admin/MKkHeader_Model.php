<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class MKkHeader_Model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();		
    }


    public function getData()
    {
        $query = $this->db->query("SELECT * from tb_kk_header ORDER BY no_kk");
        return $query->result();
    }

    public function add()
    {
        $id = $this->input->post('id');
        $nokk = $this->input->post('nokk');
        $nama = $this->input->post('nama');
        $telp = $this->input->post('telepon');
        $alamat = $this->input->post('alamat');
        $domisiliYN = $this->input->post('domisili');

        if (is_null($domisiliYN)){
            echo "masuk sini";
            $domisiliYN = 'N';
        }else{
            $domisiliYN = 'Y';
        }


        if (!empty($id)){
            $query = $this->db->query("UPDATE tb_kk_header 
                SET no_kk = '$nokk',
                    kepala_kk = '$nama',
                    telp_kk = '$telp',
                    alamat_kk = '$alamat',
                    domisili_kk = '$domisiliYN'
                WHERE id_kk = '$id'"); 
        } else {
            $query = $this->db->query("INSERT INTO tb_kk_header
                (no_kk,kepala_kk,telp_kk,alamat_kk,domisili_kk) 
                VALUES ('$nokk','$nama','$telp','$alamat','$domisiliYN')");     
        }
    }


    public function hapus()
    {
        $id = $this->uri->segment('3');
        $query = $this->db->query("DELETE FROM tb_kk_header WHERE id_kk = '$id'");
    }

    public function edit()
    {
        $id=$this->input->post('id');
        $query = $this->db->query("SELECT * FROM tb_kk_header WHERE id_kk = '$id'");
        return $query->result();
    }
}
