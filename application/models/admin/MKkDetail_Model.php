<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class MKkDetail_Model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();		
    }


    
    
    public function getDataHeader()
    {
      $id = $this->uri->segment(3);
      $query = $this->db->query("SELECT * FROM tb_kk_header WHERE id_kk = '$id'");
      return $query->result();
    }

    public function getDataDetail()
    {
      $id = $this->uri->segment(3);
      $query = $this->db->query("SELECT * FROM tb_kk_detail WHERE hid_dkk = '$id' ORDER BY id_dkk");
      return $query->result();
    }
    
    public function add()
    {
        $id = $this->input->post('id');
        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
        $jk = $this->input->post('jk');
        $tmpLahir = $this->input->post('tmpLahir');
        $tglLahir = $this->input->post('tglLahir');
        $agama = $this->input->post('agama');
        $pendidikan = $this->input->post('pendidikan');
        $pekerjaan = $this->input->post('pekerjaan');

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
