<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recruitment extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('recruitment_model','rm');
      }

	public function index(){

        $data['title'] = "AdminLTE | Recuritment";

        //$this->load->view('common/header', $data); 
        $this->load->view('recruitment', $data);
        //$this->load->view('common/footer');
    }
}