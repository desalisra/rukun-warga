<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MKeuangan_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }


    public function getData()
    {
        $sql = "SELECT  transaksi_penerima,in_transaksi,out_transaksi,transaksi_keterangan,transaksi_tanggal
                FROM (
                    SELECT transaksi_penerima,Transaksi_Value AS in_transaksi, 0 AS out_transaksi,transaksi_keterangan,transaksi_tanggal
                    FROM tb_keuangan
                    WHERE transaksi_flag = 'K'
                    UNION
                    SELECT transaksi_penerima,0 AS in_transaksi, Transaksi_Value AS out_transaksi,transaksi_keterangan,transaksi_tanggal
                    FROM tb_keuangan
                    WHERE transaksi_flag = 'D'
                ) a
                ORDER BY transaksi_tanggal";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function add($flag)
    {
        $id = $this->input->post('id');
        $penerima = $this->input->post('penerima');
        $jumlah = $this->input->post('jumlah');
        $keterangan = $this->input->post('keterangan');

        $userId = $this->session->userdata('user_id');

        if (!empty($id)) {
            $query = $this->db->query("");
        } else {
            $query = $this->db->query("INSERT INTO tb_keuangan
                (transaksi_penerima,transaksi_flag,Transaksi_Value,transaksi_keterangan,transaksi_tanggal,transaksi_updateId,transaksi_updatetime) 
                VALUES ('$penerima','$flag','$jumlah','$keterangan',NOW(),'$userId',NOW())");
        }
    }

}
