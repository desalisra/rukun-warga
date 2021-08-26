<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class auth_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();		
    }

		public function email_exist($email)
		{
    	return $this->db->query("SELECT * FROM tb_users WHERE user_email = '$email'")->num_rows();
    }

    public function register()
    {
    	$username = htmlspecialchars($this->input->post('username',true));
    	$email = htmlspecialchars($this->input->post('email',true));
    	$password = $this->input->post('password');

			// Enkrip Password
			$password = MD5($password);

			// Insert ke Database
    	$query = $this->db->query("INSERT INTO tb_users (user_username,user_email,user_password,user_akses)
                    VALUES (UPPER('$username'),'$email','$password','USER')");
    }

    public function validasi_login()
    {
    	//tampung data inputan email dan password
		$email	= $this->input->post('email');
		$password = $this->input->post('password');
		
		//enkripsi password
		$password	= md5($password);
		
		//cek database email dan password sama atau tidak
		$q_data		= $this->db->query("SELECT * FROM tb_users WHERE user_email = '$email' AND user_password = '$password'");
		
		$n_data		= $q_data->num_rows();
		$r_data		= $q_data->row();
		
		if ($n_data === 1) {				
			$data = array(
				'user_id' => $r_data->User_Id,
				'user_nama' => $r_data->User_Username,
				'user_akses' => $r_data->User_Akses,
				'user_login' => true
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
	        redirect('auth'); 
		}
	}

	public function status_akun()
	{
		$userId = $this->session->userdata('user_id');
		return $this->db->query("SELECT KKH_Status FROM tb_kk_header WHERE KKH_UpdateID = '$userId'")->row();
	}
    
}
