<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

	
	public function index(){
		    return redirect('admin/login');
	}

  public function login(){
    if(isset($this->session->username))
      return redirect('admin/dashboard');

      if(!isset($this->session->username)){   
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        
        if(!isset($username) || !isset($password))
          return $this->load->view('login');

        if(isset($username) && isset($password)){
          $condition =array('username'   => $username,'password'   => $this->encrypt($password));
          $check=$this->Database_conn->check_login($condition);  
        
          if(isset($check) && sizeof($check)>0){   
            $username = $check->username;
            $id = $check->id;
            $this->session->set_userdata('username',$username);
            $this->session->set_userdata('user_id',$id);
                return redirect('admin/dashboard');          }
          else{ 
            $data['msg']="Invalid login credential.";
            return $this->load->view('login',$data);
          }
        }
      }  
  }

  public function dashboard()
  {
    if(isset($this->session->user_id))
      return $this->load->view('dashboard');
    else
      redirect('admin/login');
  }

  public function addCategory()
  {
    if(!isset($this->session->user_id))
      return $this->redirect('admin/login');
      $data['dataArr'] = $this->Database_conn->fetch_category('wbs_category','category_name');
      return $this->load->view('category',$data);
  }
  
  public function logout()
  {
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('user_id');
    return redirect('admin/login');
  }

  function encrypt($string) 
    {
        $output = false;
        $encrypt_method = "AES-256-CBC";
        $secret_key = 'da_proj';
        $secret_iv = 'da_projects';
        $key = hash('sha256', $secret_key);
        $iv = substr(hash('sha256', $secret_iv), 0, 16);
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
        return $output;
    }



    function decrypt($string) 
    {
        $output = false;
        $encrypt_method = "AES-256-CBC";
        $secret_key = 'da_proj';
        $secret_iv = 'da_projects';
        $key = hash('sha256', $secret_key);
        $iv = substr(hash('sha256', $secret_iv), 0, 16);
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
        return $output;
    } 

}