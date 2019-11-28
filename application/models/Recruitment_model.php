<?php
class Recruitment_model extends CI_Model{
 
  public function validate($email,$password){
    $this->db->where('email', $email);
    $this->db->where('password', $password);
    $result = $this->db->get('users_details');
    return $result;
  }

  function insert($data){
		$this->db->insert_batch('recuritement', $data);
	}
 
}