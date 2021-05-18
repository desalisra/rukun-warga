<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class mBerita_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();		
    }

    public function getData()
    {
        $query = $this->db->query("SELECT * from tb_berita ORDER BY id_berita DESC");
        return $query->result();
    }

    public function add()
    {
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $berita = $this->input->post('berita');

        if (!empty($id)){
            // EDIT DATA
            $upload_gambar = $_FILES['gambar']['name'];

            // Cek Upload Gambar Atau Tidak
            if($upload_gambar){
                $config['upload_path']          = './assets/img/berita'; //folder tempat gambar di upload
                $config['allowed_types']        = 'gif|jpg|png'; //type gambar yang boleh
                $config['max_size']             = 5000; //ukuran max gambar 5MB
             
                $this->load->library('upload', $config);
                
                //Jika Gambar Sesuai Kriteria
                if($this->upload->do_upload('gambar')){
                    $gambar = $this->upload->data('file_name');

                    $query = $this->db->query("UPDATE tb_berita 
                        SET judul_berita = '$judul',
                            post_berita = '$berita',
                            img_berita = '$gambar',
                            tgl_berita = NOW()
                        WHERE id_berita = '$id' ");   
                }else{
                    echo $this->upload->display_errors();
                }

            }else{
                //jika tidak ada gambar
                 $query = $this->db->query("UPDATE tb_berita 
                        SET judul_berita = '$judul',
                            post_berita = '$berita',
                            tgl_berita = NOW()
                        WHERE id_berita = '$id' "); 
            }
        } else {
            //INSERT DATA
            $upload_gambar = $_FILES['gambar']['name'];

            // Cek Upload Gambar Atau Tidak
            if($upload_gambar){
                $config['upload_path']          = './assets/img/berita'; //folder tempat gambar di upload
                $config['allowed_types']        = 'gif|jpg|png'; //type gambar yang boleh
                $config['max_size']             = 5000; //ukuran max gambar 5MB
             
                $this->load->library('upload', $config);
                
                //Jika Gambar Sesuai Kriteria
                if($this->upload->do_upload('gambar')){
                    $gambar = $this->upload->data('file_name');

                    $query = $this->db->query("INSERT INTO tb_berita (judul_berita,post_berita,img_berita,tgl_berita)
                    VALUES ('$judul','$berita','$gambar',NOW())");   
                }else{
                    echo $this->upload->display_errors();
                }

            }else{
                //jika tidak ada gambar
                 $query = $this->db->query("INSERT INTO tb_berita (judul_berita,post_berita,img_berita,tgl_berita)
                    VALUES ('$judul','$berita','no-image.svg',NOW())");     
            }
        }
    }

    public function edit($id)
    {
        $query = $this->db->query("SELECT * FROM tb_berita WHERE id_berita = '$id'");
        return $query->row();
    }


    public function hapus()
    {
        $id = $this->uri->segment('3');
        $query = $this->db->query("DELETE FROM tb_berita WHERE id_berita = '$id'");
    }

	
}
