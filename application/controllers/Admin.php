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

  public function addCategory($msg='')
  {
    if(!isset($this->session->user_id))
      return redirect('admin/login');
      $submit = $this->input->post('submit');
      $category = $this->input->post('category');
      if(isset($submit))
      {
        if(!$this->Database_conn->getData('wbs_category',array('category_name'=>$category))){
          $data = array('category_name' => $category , 'created_by' => $this->session->user_id , 'created_on'=>date('y-m-d H:i:s'));
          $insert = $this->Database_conn->insert('wbs_category',$data);
          $data['msg'] = 'Disease Category Inserted Successfully';
        }
        else
          $data['msg'] = 'Disease Category Already exist';
      }
      $data['dataArr'] = $this->Database_conn->category();
      return $this->load->view('category',$data);
  }

  public function editCategory($category_id = 0 , $msg='')
  {
    if(!isset($this->session->user_id))
      return redirect('admin/login');
      $submit = $this->input->post('submit');
      $category = $this->input->post('category');
      if(isset($submit))
      {
        $category_id = $this->input->post('category_id');
        if(!$this->Database_conn->getData('wbs_category',array('category_name'=>$category,'id!='=>$category_id))){
          $data = array('category_name' => $category , 'created_on'=>date('y-m-d H:i:s'));
          $insert = $this->Database_conn->update('wbs_category',$data, 'id',$category_id);
          $data['msg'] = 'Disease Category Updated Successfully';
        }
        else
          $data['msg'] = 'Disease Category Already exist';
          $category_id = (int)$category_id;
          $data['edit_category'] = $this->Database_conn->getData('wbs_category',array('id'=>$category_id));
      }
      else if($category_id!=0)
      {
        $category_id = (int)$category_id;
        $data['edit_category'] = $this->Database_conn->getData('wbs_category',array('id'=>$category_id));
      }
      $data['dataArr'] = $this->Database_conn->category();
      return $this->load->view('category',$data);
  }  
  public function deleteCategory($category_id = 0 , $msg='')
  {
    if(!isset($this->session->user_id))
      return redirect('admin/login');
      if($category_id!=0)
      {
        $category_id = (int)$category_id;
        $this->Database_conn->deleteData('wbs_category',$category_id);
        $data['msg'] = 'Disease Category Deleted Successfully';
      }
      $data['dataArr'] = $this->Database_conn->category();
      return $this->load->view('category',$data);
  }

  public function manageDisease($msg='')
  {
    if(!isset($this->session->user_id))
      return redirect('admin/login');
      $submit = $this->input->post('submit');
      $category = $this->input->post('category');
      $disease_name = $this->input->post('disease_name');
      if(isset($submit))
      {
        if(!$this->Database_conn->getData('disease',array('disease_name'=>$disease_name,'category'=>$category ))){
          $data = array('disease_name' => $disease_name , 'category'=>$category , 'created_by' => $this->session->user_id , 'created_on'=>date('y-m-d H:i:s'));
          $insert = $this->Database_conn->insert('disease',$data);
          $data['msg'] = 'Disease Detail Inserted Successfully';
        }
        else
          $data['msg'] = 'Disease Detail Already exist';
      }
      $data['dataArr'] = $this->Database_conn->disease();
      $data['category_detail'] = $this->Database_conn->category();
      return $this->load->view('disease_detail',$data);
  }

  public function editDisease($disease_id = 0 , $msg='')
  {
    if(!isset($this->session->user_id))
      return redirect('admin/login');
      $submit = $this->input->post('submit');
      $disease_name = $this->input->post('disease_name');
      $category = $this->input->post('category');
      if(isset($submit))
      {
        $disease_id = $this->input->post('disease_id');
        if(!$this->Database_conn->getData('disease',array('disease_name'=>$disease_name,'category'=>$category))){
          $data = array('disease_name' => $disease_name ,'category'=>$category, 'created_on'=>date('y-m-d H:i:s'));
          $insert = $this->Database_conn->update('disease',$data, 'id',$disease_id);
          $data['msg'] = 'Disease Detail Updated Successfully';
        }
        else
          $data['msg'] = 'Disease Detail Already exist';
          $disease_id = (int)$disease_id;
          $data['edit_disease'] = $this->Database_conn->getData('disease',array('id'=>$disease_id));
      }
      else if($disease_id!=0)
      {
        $disease_id = (int)$disease_id;
        $data['edit_disease'] = $this->Database_conn->getData('disease',array('id'=>$disease_id));
      }
      $data['dataArr'] = $this->Database_conn->disease();
      $data['category_detail'] = $this->Database_conn->category();
      return $this->load->view('disease_detail',$data);
  }  
  public function deleteDisease($disease_id = 0 , $msg='')
  {
    if(!isset($this->session->user_id))
      return redirect('admin/login');
      if($disease_id!=0)
      {
        $disease_id = (int)$disease_id;
        $this->Database_conn->deleteData('disease',$disease_id);
        $data['msg'] = 'Disease Detail Deleted Successfully';
      }
      $data['dataArr'] = $this->Database_conn->disease();
      $data['category_detail'] = $this->Database_conn->category();
      return $this->load->view('disease_detail',$data);
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