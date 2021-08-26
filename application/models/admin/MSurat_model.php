<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MSurat_model extends CI_Model
{

    public function __construct(){
        parent::__construct();
    }

    public function getData($id = null){
        $userId = $this->session->userdata('user_id');
        $userAkses = $this->session->userdata('user_akses');

        if (is_null($id)) {
            if($userAkses == "ADMIN"){
                $sSQL = "SELECT * FROM tb_surat
                        LEFT JOIN tb_kk_detail ON Surat_IdKKD = KKD_ID";
            }else{
                $sSQL = "SELECT * FROM tb_surat 
                        LEFT JOIN tb_kk_detail ON Surat_IdKKD = KKD_ID
                        WHERE Surat_Pengajuan = '$userId'";
            }

            $query = $this->db->query($sSQL);
            return $query->result();

        } else {
            
            $sSQL = "SELECT * FROM tb_surat 
                    LEFT JOIN tb_kk_detail ON Surat_IdKKD = KKD_ID
                    LEFT JOIN tb_kk_header ON KKD_IdHeader = KKH_ID
                    WHERE Surat_Id = '$id'";

            $query = $this->db->query($sSQL);
            return $query->row();
        }
    }

    public function getNik($nik = null){
        $userId = $this->session->userdata('user_id');

        if(is_null($nik)){
            $sSQL = "SELECT * FROM tb_kk_header 
                LEFT JOIN tb_kk_detail ON KKD_IdHeader = KKH_ID
                WHERE KKH_Status = 'C'
                AND KKD_ID IS NOT NULL
                AND KKH_UpdateID = '$userId'";

            $query = $this->db->query($sSQL);
            return $query->result();
        }else{
            $sSQL = "SELECT * FROM tb_kk_detail 
                WHERE KKD_NIK = '$nik'
                AND KKD_UpdateID = '$userId'";

            $query = $this->db->query($sSQL);
            return $query->row();
        }
    }

    public function cekNoSurat($bulan)
    {
        $query = $this->db->query("SELECT IFNULL(MAX(Surat_Numb),0) AS Surat_Numb FROM tb_surat WHERE MONTH(Surat_Pengajuan) = '" . $bulan . "'");
        return $query->row();
    }

    public function addSurat($noSurat,$id,$keperluan)
    {
        $userId = $this->session->userdata('user_id');

        //query insert ke database
        $query = $this->db->query("INSERT INTO tb_surat
                                (Surat_Numb, Surat_IdKKD, Surat_Keperluan, Surat_Pengajuan, Surat_TglPengajuan, Surat_PrintYN, Surat_UpdateID, Surat_UpdateTime) 
                                VALUES ('$noSurat', '$id', '$keperluan', '$userId', NOW(), 'N', '$userId', NOW())");
    }   

    public function updateStatus($id = null){
        $userId = $this->session->userdata('user_id');
        $query = $this->db->query("UPDATE tb_surat 
                                SET Surat_PrintYN = 'Y',
                                    Surat_UpdateID = '$userId',
                                    Surat_UpdateTime = NOW()
                                WHERE Surat_ID = '$id'");
    }

    public function hapus(){
        $id = $this->uri->segment('3');
        $query = $this->db->query("DELETE FROM tb_surat WHERE srt_id = '$id'");
    }
}
