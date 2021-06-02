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
        $idHeader = $this->input->post('idHeader');
        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
        $jk = $this->input->post('jk');
        $tmpLahir = $this->input->post('tmpLahir');
        $tglLahir = $this->input->post('tglLahir');
        $agama = $this->input->post('agama');
        $pendidikan = $this->input->post('pendidikan');
        $pekerjaan = $this->input->post('pekerjaan');

        if (!empty($id)){
            $query = $this->db->query("UPDATE tb_kk_detail 
                SET hid_dkk = '$idHeader',
                    nik_dkk = '$nik',
                    nama_dkk = '$nama',
                    jk_dkk = '$jk',
                    tmpLahir_dkk = '$tmpLahir',
                    tglLahir_dkk = '$tglLahir',
                    agama_dkk = '$agama',
                    pendidikan_dkk = '$pendidikan',
                    pekerjaan_dkk = '$pekerjaan'
                WHERE id_dkk = '$id'"); 
        } else {
            $query = $this->db->query("INSERT INTO tb_kk_detail
              (hid_dkk,nik_dkk,nama_dkk,jk_dkk,tmpLahir_dkk,tglLahir_dkk,agama_dkk,pendidikan_dkk,pekerjaan_dkk) 
              VALUES ('$idHeader','$nik','$nama','$jk','$tmpLahir','$tglLahir','$agama','$pendidikan','$pekerjaan')");     
        }
    }


    public function hapus()
    {
        $id = $this->uri->segment('3');
        $query = $this->db->query("DELETE FROM tb_kk_detail WHERE id_dkk = '$id'");
    }

    public function edit()
    {
        $id=$this->input->post('id');
        $query = $this->db->query("SELECT * FROM tb_kk_detail WHERE id_dkk = '$id'");
        return $query->result();
    }
}
