<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct() {
	    parent::__construct();
	    //model load
	    $this->load->model('Database_conn','dc');
	}
	public function index()
	{
		

		// $get_diseases_data = $this->get_diseases_data();
        $arrData['title'] = $get_diseases_data["query"]["pages"];
        $cateDiseaseDetail = $this->dc->getDisease();
		foreach ($cateDiseaseDetail as $data) {
			$get_diseases_data = $this->get_diseases_data($data['disease_name']);
			$data['api_response'] = $get_diseases_data;
			// $cate_DiseaseDetail = $data;
			 array_push($arrData, $data);
		}
        // echo "<pre>";print_r($arrData);die;
		$this->load->view('home',$arrData);
	}

	public function get_diseases_data($disease_name) {

        $header[] = "Content-type: application/json";
        
        $this->curl = curl_init();
   
       curl_setopt($this->curl, CURLOPT_URL,"https://en.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exintro=&explaintext=&titles=".$disease_name."");

       
        curl_setopt($this->curl, CURLOPT_POST, 0);
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($this->curl, CURLOPT_HTTPHEADER,  $header);
        $this->response = json_decode(curl_exec($this->curl), true);
        
        return $this->response;
    }


}
?>