<?php
class Admin_model extends CI_Model{
 
  public function validate($email,$password){
    $this->db->where('email', $email);
    $this->db->where('password', $password);
    $result = $this->db->get('users_details');
    return $result;
  }

  function insert($data){
    //inserts multiple ajax requests
		$this->db->insert_batch('customer', $data);
  }
 
  function insert_data($data){
    //insert ajax requests
		$this->db->insert('personal_details', $data);
  }
  
  public function checkExist($email){ 
    //checks ajax requests
     $this->db->where("email",$email);
     //$this->db->where("mobile",$phone);
     $query=$this->db->get("personal_details");
     if($query->num_rows()>0){
      return true;
     }else{
      return false;
     }
    }

    public function checkUser($personal_id){ 
      //checks ajax requests
       $this->db->where("personal_id",$personal_id);
       $query=$this->db->get("personal_details");
       return $query->result();
    }

    function getCity(){

      $response = array();
   
      // Select record
      $this->db->select('*');
      $q = $this->db->get('city');
      $response = $q->result_array();
  
      return $response;
    }
    
    function getState($postData){
      $response = array();
   
      // Select record
      $this->db->select('id,state');
      $this->db->where('city_id', $postData['city_id']);
      $q = $this->db->get('states');
      $response = $q->result_array();
  
      return $response;
    }




  
}