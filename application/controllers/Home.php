<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct() {
	    parent::__construct();
	    //model load
	}
	public function index()
	{

		$getDiseaseCategory = $this->Database_conn->fetch_Data('wbs_category');
		$final_array  = array();
		foreach ($getDiseaseCategory as $category){
			$single_array = array();
			$single_array['cat_id'] = $category['id'];
			$single_array['cat_name'] = $category['category_name'];
			$getDiseaseName = $this->Database_conn->getData('disease',array('category'=>$category['id']));
			$temp_array  = array();
			foreach ($getDiseaseName as $value) {
				$single_disease  = array();
				$single_disease['disease_id'] = $value['id'];
				$single_disease['disease_name'] = $value['disease_name'];			
				$single_disease['disease_article'] = $this->get_diseases_data($value['disease_name']);
				array_push($temp_array, $single_disease);		
			}
			$single_array['single_disease'] = $temp_array;
		// print_r($single_array['disease_name']['query']);die;
			array_push($final_array, $single_array);
		}
		$data['final_data'] = $final_array;
		// print_r($final_array);die;
		$this->load->view('home',$data);
		
	}

	public function get_diseases_data($disease_name) {

        $header[] = "Content-type: application/json";
        
        $this->curl = curl_init();
   
       curl_setopt($this->curl, CURLOPT_URL,"https://en.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&titles=".$disease_name);
       
        curl_setopt($this->curl, CURLOPT_POST, 0);
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($this->curl, CURLOPT_HTTPHEADER,  $header);
        $this->response = json_decode(curl_exec($this->curl), true);
        foreach ($this->response['query']['pages'] as $key => $value) {
        	return $value['extract'];
        }
    }


}
?>