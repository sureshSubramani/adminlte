<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recruitment extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('admin_model');
      }

	public function index(){

        $data['data'] = $this->db->get("personal_details")->result();

        $data['title'] = "AdminLTE | Recuritment";

        //$this->load->view('common/header', $data); 
        $this->load->view('recruitment', $data);
        //$this->load->view('common/footer');
    }

    public function check_email_exist(){ //receives ajax requests
		// if (!$this->input->is_ajax_request()){ 
		// 		exit('No valid req.'); 
        // 	}
        
            // echo '<pre>';
            // print_r($_POST);// die();
            // echo '</pre>';

        $isEmail = $this->input->post('email_id');
        //$isPhone = $this->input->post('phone');
		$result = $this->admin_model->checkExist($isEmail); //sending ajax data to model
		if($result)
		  echo "false";
		else
		  echo "true";
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