<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_login extends CI_Model {

	
	public function ambillogin($username,$password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		$query = $this->db->get('login');
		if($query->num_rows()>0){
			foreach ($query->result() as $row ) {
				$sess = array('username'=> $row->username,
								'password'=>$row->password
			);
			}
			$this->session->set_userdata($sess);
			redirect('Data');
		}
		else{
			$this->session->set_flashdata('info','mon maap u kaga bisa login sis');
			redirect('login');
		}
	}

	public function keamanan(){
		$username = $this->session->sess_destroy('username');
		if(!empty($username)){
			$this->session->sess_destroy();
			redirect('login');
		}
	}
}


