<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

	
	public function index()
	{
		if($this->session->user_id)
		{
             $this->create_user();
		}
		else
		{
			 redirect('da_projects/login');
		}
		
	}

    public function create_user()
    {
    	if($this->session->user_id)
		{
			$submit = $this->input->post('submit_user');
			$update = $this->input->post('update_user');
			
			if(isset($submit))
			{
                $company_id = $this->input->post('company');
                if($company_id=='other_company')
                {
                   $company_type="other_company";
                   $company_id = $this->session->company_id;

                }
                else
                {
                   $company_type = "our_company";
                }
					    $insert_array = array(
		             'project_id'=>$this->input->post('project'),
		             'username'=>$this->input->post('user_name'),
		             'password'=>$this->input->post('password'),
		             'full_name'=>$this->input->post('full_name'),
		             'user_type'=>$this->input->post('user_type'),
		             'company_id'=>$company_id,
		             'department'=>$this->input->post('department'),
		             'email_id'=>$this->input->post('email_id'),
                 'company'=>($this->input->post('company')=='other_company')?($this->input->post('other_company_name')):(''),
                 'company_type'=>$company_type,
		             'is_active'=>'1',
		             'created_by'=>$this->session->user_id,
		             'created_on'=>date("Y-m-d H:i:s")
		               			 );	
                     $already_exit = $this->Common->getData('users',array('username'=>$this->input->post('user_name'),'company_id'=>$this->session->company_id));
                     if(!$already_exit)
                     {     
                           if($this->input->post('user')!='Superadmin')
                           {
                             $insert = $this->Common->insertData('users',$insert_array);
                           }

                           $data['msg'] = (isset($insert))?' User Created Successfully. ':' Unable To Create User.';
		             
                     }
                     else
                     {
					                $data['msg'] = ' User Already Exist.';
                     }

					 $this->load->view('create_user',$data);
			}
			else if(isset($update))
			{
                $company_id = $this->input->post('company');
                if($company_id=='other_company')
                {
                   $company_type="other_company";
                   $company_id = $this->session->company_id;

                }
                else
                {
                   $company_type = "our_company";
                } 
					$insert_array = array(
					'project_id'=>$this->input->post('project'),
					'username'=>$this->input->post('user_name'),
					'password'=>$this->input->post('password'),
					'full_name'=>$this->input->post('full_name'),
					'user_type'=>$this->input->post('user_type'),
					'company_id'=>$company_id,
					'department'=>$this->input->post('department'),
          'company'=>($this->input->post('company')=='other_company')?($this->input->post('other_company_name')):(''),
          'company_type'=>$company_type,
					'email_id'=>$this->input->post('email_id'),
					'is_active'=>'1'
					);	
             
					$update = $this->Common->Update('users',$insert_array,array('id'=>$this->input->post('update_id')));
					$data['msg'] = (isset($update))?' User Updated Successfully. ':' Unable To Update User.';
					$this->load->view('create_user',$data);
			}
			else
			{
				$this->load->view('create_user');
			}
		}
		else
		{
			 redirect('da_projects/login');
		}
    }

####################################################################################################################

    public function ajax_validate_username()
    {
      if(isset($_POST['username']))
      {
        $username = $_POST['username'];
        $output = '';
        $validate_user = $this->Common->validateUser('users','username',$username);
        if(isset($validate_user)&&sizeof($validate_user)>0)
        {
          $output = "User Name Already Exit";
        }
        echo $output;
      }
    }



#######################################################################################################################


     public function edit_user( $user_id='')
    {
    	if($this->session->user_id)
		{
           if($user_id!='')
           {
           	 $data['edit_flag']='1';
           	 
           	  $data['edit_data'] = $this->Common->getData('users',array('company_id'=>$this->session->company_id,'id'=>$user_id));
           	  $this->load->view('create_user',$data);
           }
           else
           {
           	  $this->load->view('create_user');
           }
             
		}
		else
		{
			 redirect('da_projects/login');
		}
    }

###############################################################################################################################

    public function assign_menu()
    {
    	if($this->session->user_id)
    	{
           $can_see_assign_menu = $this->Common->can_see_assign_menu();
           if($can_see_assign_menu)
           {
           	   $user_id = $this->input->post('edit_id');
               if(isset($user_id))
               {  
                  $data['user_id'] = $user_id; 
               	  $menu_ids = implode(",",$_POST['menu_id']);
               	  //echo "<pre>";print_r($menu_ids);exit();
               	  $submit_btn = $this->input->post('submit');
               	  $update_btn = $this->input->post('update');

               	  if(isset($submit_btn))
               	  {
               	  	$insert_array = array(
                     'user_id'=>$user_id,
                     'comma_seperated_menu_ids'=>$menu_ids,
                     'assigned_on'=>date("Y-m-d H:i:s")
               	  	);
               	  	$insert = $this->Common->insertData('menu_user',$insert_array);
               	    $data['msg'] = (isset($insert))?' Inserted Successfully.':' Unable to Insert.';

               	  }
               	  else if(isset($update_btn))
               	  {
               	  	$update = $this->Common->update('menu_user',array('comma_seperated_menu_ids'=>$menu_ids),array('user_id'=>$user_id));
               	    $data['msg'] = (isset($update))?' Updated Successfully.':' Unable to Update.';
               	  }

                  $this->load->view('assign_menu',$data);
               }
               else
               {
                  $this->load->view('assign_menu');  	
               }
           	 
           }
           else
           {
           	 $this->load->view('dashboard');
           }
    	}
    	else
    	{
    		redirect('da_projects/login');
    	}
    }




#################################################################################################################################
   
   public function update_company()
   {
    if($this->session->user_id)
    {
      $this->load->view('update_company');
    }
    else
    {
      redirect('da_project/login');
    }
   }

   

}