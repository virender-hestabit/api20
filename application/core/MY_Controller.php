<?php
class MY_Controller extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        //error_reporting(0);
        error_reporting(E_ALL);
        //$this->output->enable_profiler(TRUE);

        if(isset($this->session->user_id))
        {
           $check_access = $this->prevent_unauthorised_access();
           if($check_access==False)
           { //$this->output->enable_profiler(TRUE);
           	  $this->load->view('index');
           }	
        }

          
     }
     
     function prevent_unauthorised_access()
     {
     	$path = substr($_SERVER['PATH_INFO'],1);
     	if($path=='da_projects/logout')
        {
            return True;
        }
     	$url_check = explode("/", $path);
     	if(isset($url_check['1'])&&$url_check!='')
     	{
     		$url_check1 = "/".$url_check['1'];
     	}
     	else
     	{
     		$url_check1 = '';
     	}
     	$real_path = $url_check['0'].$url_check1;
        $page_id = $this->Common->getDataSingle('sidemenu','id',array('page_query_string'=>$real_path));
        if(isset($page_id))
        { 
            //var_dump($page_id);
            $page_assign = $this->Common->getDataSingle('menu_user','comma_seperated_menu_ids',array('user_id'=>$this->session->user_id));
            $all_page = explode(',',$page_assign);
              // echo "<pre>";var_dump($page_id);
              // var_dump($all_page);
    	      if((in_array($page_id,$all_page)))
    	      {
    	        return True;
    	      }
    	      else
    	      {
                return False;
    	        //return True;
    	      }
        }
        else
        {
            return True;
        }

     	 
     }
}
?>