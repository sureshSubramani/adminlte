<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Import_excel extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('import_model');
      }

	public function index(){

        $data['title'] = 'Import Data';

        $this->load->view('common/header', $data);
        $this->load->view('import-excel');
        $this->load->view('common/footer');
    }

    public function import(){
       
        if(isset($_FILES["file"]["name"])){    

			$path = $_FILES["file"]["tmp_name"];
            $object = PHPExcel_IOFactory::load($path);

			foreach($object->getWorksheetIterator() as $worksheet){

				$highestRow = $worksheet->getHighestRow();
                $highestColumn = $worksheet->getHighestColumn();

				for($row=2; $row<=$highestRow; $row++){

					$customer_name = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
					$address = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
					$city = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
					$postal_code = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
                    $country = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
                    
					$data[] = array(
						'customer_name'		=>	$customer_name,
						'address'			=>	$address,
						'city'				=>	$city,
						'postal_code'		=>	$postal_code,
						'country'			=>	$country
                    );
                }
                              
            }
                $this->import_model->insert_data($data);
                
                redirect(base_url('import_excel'));
                $this->session->set_flashdata('success','Data Imported successfully');
                                      
        }	
        
        
	}
}