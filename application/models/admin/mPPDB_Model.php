<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class mPPDB_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();		
    }


    public function getData()
    {
        $query = $this->db->query("SELECT * from tb_ppdb 
				INNER JOIN tb_jurusan ON id_jurusan = jurusan_id
        		ORDER BY id_ppdb");
        return $query->result();
    }

//     public function add()
//     {

//         $id = $this->input->post('id');
//         $nama = $this->input->post('nama');
//         $email = $this->input->post('email');
//         $password = $this->input->post('password');

//         $pass = md5($password);


//         if (!empty($id)){
//             //cek jika ada gambar
//             $upload_gambar = $_FILES['gambar']['name'];

//             if($upload_gambar){
//                 $config['upload_path']          = './assets/images/avatars';
//                 $config['allowed_types']        = 'gif|jpg|png';
//                 $config['max_size']             = 2000;
             
//                 $this->load->library('upload', $config);
                
//                 //jika gambar sesuai
//                 if($this->upload->do_upload('gambar')){
//                     $gambar = $this->upload->data('file_name');

//                     $query = $this->db->query("UPDATE tb_admin 
//                     SET nama_admin = '$nama',
//                         email_admin = '$email'
//                         pass_admin = '$pass',
//                         img_admin = '$gambar'
//                     WHERE id_admin = '$id'");   
//                 }else{
//                     echo $this->upload->display_errors();
//                 }
//             }else{
//                 $query = $this->db->query("UPDATE tb_admin 
//                 SET nama_admin = '$nama',
//                     email_admin = '$email'
//                     pass_admin = '$pass'
//                 WHERE id_admin = '$id'"); 
//             }
//         } else {
//             // insert data
//             //cek jika ada gambar
//             $upload_gambar = $_FILES['gambar']['name'];

//             if($upload_gambar){
//                 $config['upload_path']          = './assets/images/avatars';
//                 $config['allowed_types']        = 'gif|jpg|png';
//                 $config['max_size']             = 2048;
             
//                 $this->load->library('upload', $config);
                
//                 //jika gambar sesuai
//                 if($this->upload->do_upload('gambar')){
//                     $gambar = $this->upload->data('file_name');

//                     $query = $this->db->query("INSERT INTO tb_admin (nama_admin,email_admin,pass_admin,img_admin)
//                     VALUES ('$nama','$email','$pass','$gambar')");   
//                 }else{
//                     echo $this->upload->display_errors();
//                 }

//             }else{
//                 //jika tidak ada gambar
//                 $query = $this->db->query("INSERT INTO tb_admin (nama_admin,email_admin,pass_admin,img_admin)
//                     VALUES ('$nama','$email','$pass','default.gif')");     
//             }     
//         }
//     }


    public function hapus()
    {
        $id = $this->uri->segment('3');
        $query = $this->db->query("DELETE FROM tb_ppdb WHERE id_ppdb = '$id'");
    }

//     public function edit()
//     {
//         $id=$this->input->post('id');
//         $query = $this->db->query("SELECT * FROM tb_admin WHERE id_admin = '$id'");
//         return $query->result();
//     }
}
