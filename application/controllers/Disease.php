<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Disease extends MY_Controller {

	
	public function index($disease_id='')
	{
		return $this->detail($disease_id);
	}
	public function detail($disease_id='')
	{
		if(!empty($disease_id) && $disease_id>0)
		{
			$disease_detail = $this->Database_conn->disease_con('disease.disease_name',array('disease.id'=>$disease_id));
			$data['disease_detail'] = $disease_detail;
			$data['disease_article'] = $this->get_diseases_data($disease_detail[0]['disease_name']);
			// echo "<pre>";print_r();die;
			$this->load->view('detail', $data);		
		}
		else
		{
			redirect('home');
		}
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