<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MKeuangan_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }


    public function getData()
    {
        $sql = "SELECT  penerima_transaksi,in_transaksi,out_transaksi,keterangan_transaksi,tgl_transaksi
                FROM (
                    SELECT penerima_transaksi,value_transaksi AS in_transaksi, 0 AS out_transaksi,keterangan_transaksi,tgl_transaksi
                    FROM tb_keuangan
                    WHERE flag_transaksi = 'K'
                    UNION
                    SELECT penerima_transaksi,0 AS in_transaksi, value_transaksi AS out_transaksi,keterangan_transaksi,tgl_transaksi
                    FROM tb_keuangan
                    WHERE flag_transaksi = 'D'
                ) a
                ORDER BY tgl_transaksi";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function add($flag)
    {
        $id = $this->input->post('id');
        $penerima = $this->input->post('penerima');
        $jumlah = $this->input->post('jumlah');
        $keterangan = $this->input->post('keterangan');

        if (!empty($id)) {
            $query = $this->db->query("");
        } else {
            $query = $this->db->query("INSERT INTO tb_keuangan
                (penerima_transaksi,flag_transaksi,value_transaksi,keterangan_transaksi,tgl_transaksi) 
                VALUES ('$penerima','$flag','$jumlah','$keterangan',NOW())");
        }
    }


    public function hapus()
    {
        $id = $this->uri->segment('3');
        $query = $this->db->query("DELETE FROM tb_kk_header WHERE id_kk = '$id'");
    }

    public function edit()
    {
        $id = $this->input->post('id');
        $query = $this->db->query("SELECT * FROM tb_kk_header WHERE id_kk = '$id'");
        return $query->result();
    }
}
