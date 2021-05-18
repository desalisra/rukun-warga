<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class auth_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();		
    }

    // public function daftar()
    // {
    // 	$nama = htmlspecialchars($this->input->post('nama_user',true));
    // 	$email = htmlspecialchars($this->input->post('email_user',true));
    // 	$password = $this->input->post('password');
    // 	$pass = md5($password);

    // 	$query = $this->db->query("INSERT INTO tb_user(nama_user,email_user,pass_user,level)
    //                 VALUES (UPPER('$nama'),'$email','$pass','USER')");
    // }

    public function validasi_login()
    {
    	//tampung data inputan email dan password
		$email	= $this->input->post('email');
		$password = $this->input->post('password');
		
		//enkripsi password
		$pass	= md5($password);
		
		//cek database email dan password sama atau tidak
		$q_data		= $this->db->query("SELECT * FROM tb_admin WHERE 
							email_admin = '$email' AND pass_admin = '$pass'");
		
		$n_data		= $q_data->num_rows();
		$r_data		= $q_data->row();
		
		if ($n_data === 1) {				
			$data = array(
                    'admin_id' => $r_data->id_admin,
                    'admin_nama' => $r_data->nama_admin,
                    'admin_img' => $r_data->img_admin,
					'admin_valid' => true
                    );
			$this->session->set_userdata($data);			
		} else {
			$this->session->set_flashdata(
	            'message',
	            '<div class="alert alert-block alert-danger">
					<button type="button" class="close" data-dismiss="alert">
						<i class="ace-icon fa fa-times"></i>
					</button>
					<i class="ace-icon fa fa-times red"></i>
					<strong class="red"><b>Login gagal</b></strong>,<br><br>
					Email atau Password salah
				</div>'
	        );
	        redirect('admin/login'); 
		}
	}
    
}
