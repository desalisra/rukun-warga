<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class mProfil_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();		
    }


    public function getData()
    {
        $query = $this->db->query("SELECT * FROM tb_users 
                                WHERE User_Akses = 'ADMIN' OR User_Akses = 'OPRATION'
                                ORDER BY user_id");
        return $query->result();
    }

    public function add()
    {

        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $akses = $this->input->post('akses');
        $password = $this->input->post('password');
        
        $pass = md5($password);


        if (!empty($id)){
            $query = $this->db->query("UPDATE tb_users 
                                        SET User_Username = '$nama',
                                            User_Email = '$email',
                                            User_Password = '$pass',
                                            User_Akses = '$akses'
                                    WHERE User_Id = '$id'");
        } else {
            // insert data
            $query = $this->db->query("INSERT INTO tb_users (user_username,user_email,user_password,user_akses)
                    VALUES ('$nama','$email','$pass','$akses')");  
        }
    }


    public function hapus()
    {
        $id = $this->uri->segment('3');
        $query = $this->db->query("DELETE FROM tb_users WHERE user_id = '$id'");
    }

    public function edit()
    {
        $id=$this->input->post('id');
        $query = $this->db->query("SELECT * FROM tb_users WHERE user_id = '$id'");
        return $query->result();
    }
}
