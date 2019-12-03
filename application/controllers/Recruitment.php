<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recruitment extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('admin_model');
      }

	public function index(){

        $data['data'] = $this->db->get("personal_details")->result();
        // get cities 
        $data['cities'] = $this->admin_model->getCity();

        $data['title'] = "AdminLTE | Recuritment";

        //$this->load->view('common/header', $data); 
        $this->load->view('recruitment', $data);
        //$this->load->view('common/footer');
    }

    public function getStates(){ 
        // POST data 
        $postStates = $this->input->post();
        
        // get data 
        $data = $this->admin_model->getState($postStates);
        echo json_encode($data); 
      }

    public function check_email_exist(){ //receives ajax requests

        $isEmail = $this->input->post('email_id');
        //$isPhone = $this->input->post('phone');
		$result = $this->admin_model->checkExist($isEmail); //sending ajax data to model
		if($result)
		  echo "false";
		else
		  echo "true";
    }
    
    public function check_user_exist(){
        
        $personal_id= $this->input->post('personal_id');
        $result = $this->admin_model->checkUser($personal_id);
        if($result == 1)
		  print_r(json_encode($result->result()));
		else
		  echo 0;
    }

    public function register(){

        //if($this->input->post('next')){
            //$name = trim($this->input->post('name'));
            $email = trim($this->input->post('email_id'));
            $phone = trim($this->input->post('phone_no'));
            // $message = trim($this->input->post('message'));
            // $s_data = date('Y-m-d');

            $data = array(
                        //'name' => $name,
                        'email' => $email,
                        'mobile' => $phone,
                        //'message' => $message,
                        //'s_date' => $s_date
                        );
                
            echo '<pre>';
            print_r($_POST);// die();
            echo '</pre>';

            $res = $this->admin_model->insert_data($_POST);

           echo 'Data inserted..';
        //}

    }
}