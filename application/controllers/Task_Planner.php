<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task_Planner extends MY_Controller {

	
	public function index()
	{
		if($this->session->user_id)
		{
             $this->task_status();
		}
		else
		{
			 redirect('da_projects/login');
		}
		
	}

    public function task_status()
    {
    	if($this->session->user_id)
		{
             $this->load->view('task_view');
		}
		else
		{
			 redirect('da_projects/login');
		}
    }

     public function create_task()
    {
    	if($this->session->user_id)
		{ 
			 $submit = $this->input->post('submit');
			 $update = $this->input->post('update');
              
              $array_insert = array(
              'activity_name'          =>$this->input->post('activity_name'),
              'project_id'             =>$this->session->project_id,
              'responsibility'         =>$this->input->post('responsibility'),
              'target_start_date'      =>$this->input->post('target_start_date'),
              'actual_start_date'      =>$this->input->post('actual_start_date'),
              'target_completion_date' =>$this->input->post('target_completion_date'),
              'actual_completion_date' =>$this->input->post('actual_completion_date'),
              'status'                 =>$this->input->post('status'),
              'remark'                 =>$this->input->post('remark'),
              'is_active'              =>'1'
              );

			 if(isset($submit))
			 {
                 $array_insert = array_merge($array_insert,array('created_by'=>$this->session->user_id,'created_on'=>date("Y-m-d H:i:s")));
                 $already_exit = $this->Common->getdata('activity_management',array('activity_name'=>$this->input->post('activity_name'),'target_start_date'=>$this->input->post('target_start_date'),'target_completion_date'=>$this->input->post('target_completion_date')));
                 	if(!$already_exit)
                 	{
                 		$insert = $this->Common->insertData('activity_management',$array_insert);
                 		$data['msg'] =(isset($insert)&&$insert=='1')?" Activity Added Successfully. ":" Unable To Add Activity. ";

                 	}
                 	else
                 	{
                 		$data['msg'] = "Activity with These Date Already Exit. ";
                 	}

                 	$this->load->view('task_entry',$data);

			 }
			 else if(isset($update))
			 {
                        $array_insert = array_merge($array_insert,array('updated_by'=>$this->session->user_id,'updated_on'=>date("Y-m-d H:i:s")));
                        $update_id  = $this->input->post('update_id'); 
                 		$update = $this->Common->updateData('activity_management',$array_insert,array('id'=>$update_id));
                 		$data['msg'] =(isset($update))?" Activity Updated Successfully. ":" Unable To Update Activity. ";
                 	    $this->load->view('task_entry',$data);
			 }
			 else
			 {
                $this->load->view('task_entry');
			 }
		}
		else
		{
			 redirect('da_projects/login');
		}
    }



}