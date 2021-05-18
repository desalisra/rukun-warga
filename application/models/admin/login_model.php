<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class login_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();		
    }
    
    public function validasi_login()
    {
		$username	= $this->input->post('username');
		$password	= $this->input->post('password');
		$password2	= md5($password);
		
		$q_data		= $this->db->query("SELECT * FROM petugas WHERE 
							username = '".$username."' AND password = '$password2'");
		$j_data		= $q_data->num_rows();
		$a_data		= $q_data->row();
		
		$adding = false; $edit 	= false; $delete = false;
		
		if ($j_data === 1) {
			if ($a_data->level == "Petugas") {
				$adding = true; $edit = true;	$delete = true;
			}else if ($a_data->level == "User") {
				$adding = true;
			}
		
			$data = array(
                    'admin_id' => $a_data->kd_petugas,
                    'admin_user' => $a_data->username,
                    'admin_level' => $a_data->level,
                    'admin_nama' => $a_data->nm_petugas,
					'admin_add' => $adding,
                    'admin_edit' => $edit,
                    'admin_delete' => $delete,
					'admin_valid' => true
                    );
			$this->session->set_userdata($data);
			echo json_encode(array('success'=>true,'msg'=>'Berhasil login'));			
		} else {
			echo json_encode(array('msg'=>'Username atau Password salah!!'));
		}
	}
}
