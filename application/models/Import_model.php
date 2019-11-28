<?php
class Import_model extends CI_Model{
 
  function insert_data($data){
		$this->db->insert_batch('customer', $data);
	}
 
}