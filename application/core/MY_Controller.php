<?php
class MY_Controller extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        error_reporting(0);
        // error_reporting(E_ALL);
        //$this->output->enable_profiler(TRUE); 
     }
}
?>