<?php

class M_user extends CI_Model{

	function getMember($table,$where){
		return $this->db->get_where($table,$where);
	}
	function apakah_email_tersedia($email) {
       	$this->db->where('email', $email);
       	$query = $this->db->get("member");
       	if($query->num_rows() > 0) {
            return true;
       	}
       	else {
            return false;
        }
  	}

  	function simpanDataRegister($data,$table){
  		$this->db->insert($table,$data);
      return true;
  	}
}
