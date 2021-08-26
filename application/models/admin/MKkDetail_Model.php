<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class MKkDetail_Model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();		
    }

    public function getDataHeader()
    {
      $id = $this->uri->segment(3);
      $query = $this->db->query("SELECT * FROM tb_kk_header WHERE kkh_id = '$id'");
      return $query->result();
    }

    public function getDataDetail()
    {
      $id = $this->uri->segment(3);
      $query = $this->db->query("SELECT * FROM tb_kk_detail WHERE kkd_idheader = '$id' ORDER BY kkd_idheader");
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

        $userId = $this->session->userdata('user_id');

        if (!empty($id)){
            $query = $this->db->query("UPDATE tb_kk_detail 
                SET KKD_IdHeader = '$idHeader',
                    KKD_Nama = '$nama',
                    KKD_NIK = '$nik',
                    KKD_Jk = '$jk',
                    KKD_TmpLahir = '$tmpLahir',
                    KKD_TglLahir = '$tglLahir',
                    KKD_Agama = '$agama',
                    KKD_Pendidikan = '$pendidikan',
                    KKD_Pekerjaan = '$pekerjaan',
                    KKD_UpdateID = '$userId',
                    KKD_UpdateTime = NOW()
                WHERE KKD_ID = '$id'"); 
        } else {
            $query = $this->db->query("INSERT INTO tb_kk_detail
              (KKD_IdHeader,KKD_Nama,KKD_NIK,KKD_Jk,KKD_TmpLahir,KKD_TglLahir,KKD_Agama,KKD_Pendidikan,KKD_Pekerjaan,KKD_UpdateID,KKD_UpdateTime) 
              VALUES ('$idHeader','$nama','$nik','$jk','$tmpLahir','$tglLahir','$agama','$pendidikan','$pekerjaan','$userId',NOW())");     
        }
    }


    public function hapus()
    {
        $id = $this->uri->segment('3');
        $query = $this->db->query("DELETE FROM tb_kk_detail WHERE KKD_ID = '$id'");
    }

    public function edit()
    {
        $id=$this->input->post('id');
        $query = $this->db->query("SELECT * FROM tb_kk_detail WHERE KKD_ID = '$id'");
        return $query->result();
    }
}
