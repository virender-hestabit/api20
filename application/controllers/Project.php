<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends MY_Controller {


   public function index()
   {
   	if($this->session->user_id)
   	{
                $data_insert=array(
				'project_name'      =>     $this->input->post('project_name'),
				'location'          =>     $this->input->post('location'),
				'type_of_project'   =>     $this->input->post('project_type'),
				'address'           =>     $this->input->post('address'),
				'company'           =>     $this->input->post('company'),
				'gst_no'            =>     $this->input->post('gst_no'),
				'tin_no'            =>     $this->input->post('tin_no'),
				'build_up_area'     =>     $this->input->post('build_up_area'),
				'start_date'        =>     $this->input->post('start_date'),
				'duration'          =>     $this->input->post('duration'),
				'budgeted_cost'     =>     $this->input->post('budgeted_cost'),
				'project_brief'     =>     $this->input->post('project_brief'),
				'is_active'         =>     '1',
				'company_id'        =>      $this->session->company_id,
		      	);
		      
		      	$check=$this->input->post('save');
		      	$update=$this->input->post('update');

		        if(isset($check))
		        {
		          $total_project = $this->Common->getDataSingle('projects','count(id)',array('company_id'=>$this->session->company_id));
		          if(isset($total_project)&&$total_project<TOTAL_PROJECT)
		          { 
		          	$already_exit = $this->Common->getData('projects',array('company_id'=>$this->session->company_id,'project_name'=>$this->input->post('project_name')));
		          	if(!$already_exit)
		          	{
		          
				          $data_insert = array_merge($data_insert,array('created_by'=>$this->session->user_id,'created_on'=>date("Y-m-d H:i:s")));
				          $insert=$this->Database_conn->insert('projects',$data_insert);
				          if($insert)
				          {
				          	$data['msg']="Save Successfully ";
				          }
				          else
				          {
				          	$data['msg']="Could not Save";
				          }
                          $get_project_id = $this->Common->getDataSingle('projects','id',array('project_name'=>$this->input->post('project_name'),'company_id'=>$this->session->company_id));

                          $charter_array = array(
                          'project_id'=>$get_project_id,
                          'tentative_project_cost'=>$this->input->post('budgeted_cost'),
                          'tentative_project_timeline'=>$this->input->post('duration'),
                          'buildup_area'=>$this->input->post('build_up_area'),
                          'project_brief'=>$this->input->post('project_brief'),
                          'company_id'=>$this->session->company_id,
                          'created_by'=>$this->session->user_id,
                          'created_on'=>date('Y-m-d')
                          );
                          $insert_charter=$this->Database_conn->insert('project_charter',$charter_array);


                          $data['display_project'] = "none";
				          $this->load->view('create_project',$data);
				      }
				      else
				      {
				      	  $data['msg']="Project With This name already Exist";
				      }
				  }
				  else
				  {
				  	 $data['msg']="Five Projects Are Already Created.";
				  }
                  $data['display_project'] = "none";
                  $this->load->view('create_project',$data);
		        }
		        else if(isset($update))
		        {   
		          $update_id=$this->input->post('update_id');
		          $data_insert = array_merge($data_insert,array('updated_by'=>$this->session->user_id,'updated_on'=>date("Y-m-d H:i:s")));
		          $update_data=$this->Database_conn->update('projects',$data_insert,'id',$update_id);
		          if($update_data)
		          {
		          	$data['msg']="Update Successfully ";
		          }
		          else
		          {
		          	$data['msg']="Could not Update";
		          }

		                   $get_project_id = $this->Common->getDataSingle('projects','id',array('project_name'=>$this->input->post('project_name'),'company_id'=>$this->session->company_id));

                          $charter_array = array(
                          'project_id'=>$get_project_id,
                          'tentative_project_cost'=>$this->input->post('budgeted_cost'),
                          'tentative_project_timeline'=>$this->input->post('duration'),
                          'buildup_area'=>$this->input->post('build_up_area'),
                          'project_brief'=>$this->input->post('project_brief'),
                          'company_id'=>$this->session->company_id,
                          'updated_on'=>date('Y-m-d')
                          );
                          $insert_charter=$this->Database_conn->update('project_charter',$charter_array,'project_id',$update_id);



		          $data['display_project'] = "none";
		          $this->load->view('create_project',$data);
		        }
		        else
		        {  
                   $data['display_project'] = "none";
		           $this->load->view('create_project',$data);
		        }
   	}
   	else
   	{
   		redirect('da_projects/login');
   	}
   } 

######################################################################################################################################
     //  edit  project 
        public function edit_project()
        {
	        if(isset($this->session->user_id))
		    {	
	        	
	        	$edit_id=$this->input->post('edit_id');
	        	if($edit_id)
	        	{
	        	$data['edit_data']=$this->Common->getData('projects',array('id'=>$edit_id));
	        	$data['updateFlag']=1;
	        	$data['display_project'] = "block";
	        	$this->load->view('create_project',$data);
	        	}
	        	else
	        	{ 
	        	   $data['display_project'] = "none"; 	
	        	   $this->load->view('create_project',$data);
	        	}
	        }
	        else
	        {
	        	redirect('da_projects/login');
	        }
        } 

#######################################################################################################################################


        public function view_purchase_order($po_id='')
        {
        	if($this->session->user_id)
        	{
                if(isset($po_id)&&$po_id!='')
                {
                	$data['po_id'] = $po_id; 
                   $this->load->view('po_invoice',$data);
                }
                else
                {
                	redirect('da_projects/po_entry');
                }
        	}
        	else
        	{
        		redirect('da_projects/login');
        	}
        }



}
?>