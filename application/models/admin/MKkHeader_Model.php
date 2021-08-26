<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MKkHeader_Model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }


    public function getData(){
        $userId = $this->session->userdata('user_id');
        $userAkses = $this->session->userdata('user_akses');
        
        if($userAkses == "ADMIN"){
            $sSQL = "SELECT * FROM tb_kk_header ORDER BY KKH_UpdateTime DESC";
        }else{
            $sSQL = "SELECT * FROM tb_kk_header WHERE KKH_UpdateID = '$userId' ORDER BY KKH_UpdateTime DESC";
        }

        $query = $this->db->query($sSQL);
        return $query->result();
    }

    public function KK_Exist($NoKK){
        return $this->db->query("SELECT * FROM tb_kk_header WHERE KKH_NoKK = '$NoKK'")->num_rows();
    }
    
    public function KK_Double($NoKK){
        $userId = $this->session->userdata('user_id');
        return $this->db->query("SELECT * FROM tb_kk_header WHERE KKH_UpdateID = '$userId'")->num_rows();
    }
    
    public function add(){
        $id = $this->input->post('id');
        $nokk = $this->input->post('nokk');
        $nama = $this->input->post('nama');
        $telp = $this->input->post('telepon');
        $alamat = $this->input->post('alamat');
        $domisiliYN = $this->input->post('domisili');

        $userId = $this->session->userdata('user_id');

        if (is_null($domisiliYN)) {
            echo "masuk sini";
            $domisiliYN = 'N';
        } else {
            $domisiliYN = 'Y';
        }

        if (!empty($id)) {
            $query = $this->db->query("UPDATE tb_kk_header 
                SET KKH_NoKK = '$nokk',
                    KKH_KepalaKK = '$nama',
                    KKH_Tlp = '$telp',
                    KKH_Alamat = '$alamat',
                    KKH_DomisiliYN = '$domisiliYN',
                    KKH_UpdateID = '$userId',
                    KKH_UpdateTime = NOW()
                WHERE KKH_ID = '$id'");
        } else {
            $query = $this->db->query("INSERT INTO tb_kk_header
                (KKH_NoKK,KKH_KepalaKK,KKH_Tlp,KKH_Alamat,KKH_DomisiliYN,KKH_UpdateID,KKH_UpdateTime) 
                VALUES ('$nokk','$nama','$telp','$alamat','$domisiliYN','$userId',NOW())");
        }
    }


    public function hapus(){
        $id = $this->uri->segment('3');
        $query = $this->db->query("DELETE FROM tb_kk_detail WHERE KKD_IdHeader = '$id'");
        $query = $this->db->query("DELETE FROM tb_kk_header WHERE KKH_ID = '$id'");
    }

    public function edit(){
        $id = $this->input->post('id');
        $query = $this->db->query("SELECT * FROM tb_kk_header WHERE KKH_ID = '$id'");
        return $query->result();
    }

    public function chkConfirm(){
        $id = $this->uri->segment('3');
        $query = $this->db->query("SELECT * FROM tb_kk_header WHERE KKH_ID = '$id' AND KKH_Status = 'C'");
        return $query->num_rows();
    }

    public function confirm(){
        $id = $this->uri->segment('3');
        $this->db->query("UPDATE tb_kk_header SET KKH_Status = 'C' WHERE KKH_ID = '$id' ");
        return $this->db->affected_rows();
    }
}
