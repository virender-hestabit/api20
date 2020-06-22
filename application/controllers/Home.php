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
		

		$get_diseases_data = $this->get_diseases_data();
        $arrData['title'] = $get_diseases_data["query"]["pages"];
        $arrData['cateDiseaseDetail'] = $this->dc->getDisease();
        
		$this->load->view('home',$arrData);
	}

	public function get_diseases_data() {

        $header[] = "Content-type: application/json";
        
        $this->curl = curl_init();
   
       curl_setopt($this->curl, CURLOPT_URL,"https://en.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exintro=&explaintext=&titles=Cancer");

       
        curl_setopt($this->curl, CURLOPT_POST, 0);
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($this->curl, CURLOPT_HTTPHEADER,  $header);
        $this->response = json_decode(curl_exec($this->curl), true);
        
        return $this->response;
    }


}
?>