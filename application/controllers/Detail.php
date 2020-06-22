<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends MY_Controller {

	
	public function index()
	{
		$get_diseases_data = $this->get_diseases_data();
        $arrData['title'] = $get_diseases_data["query"]["pages"];
		// echo "<pre>";
		// print_r($get_diseases_data["query"]["pages"]);
		// foreach( $get_diseases_data["query"]["pages"] as $k => $v ) {
		//         echo( $v["title"] . "\n" );
		// }
		// die;

		$this->load->view('detail', $arrData);
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