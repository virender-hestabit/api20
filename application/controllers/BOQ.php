<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BOQ extends MY_Controller {


   public function index()
   {
   	if($this->session->user_id)
   	{
        $this->boq_management();
   	}
   	else
   	{
   		redirect('da_projects/login');
   	}
   } 

################################################################################################################################

    public function boq_management()
    {
      if($this->session->user_id)
      {
          $this->load->view('boq_structure');
      }
      else
      {
        redirect('da_projects/login');
      }
    }


################################################################################################################################

    public function add_boq_contractor()
    {
      if($this->session->user_id)
      {  
        $submit = $this->input->post('save');
        $update_btn = $this->input->post('update');
              
              $boq_number = $this->input->post('boq_number'); 
              $item_id = $this->input->post('item_id');
              $unit = $this->input->post('unit');
              $quantity = $this->input->post('quantity'); 
              $rate = $this->input->post('rate'); 
              $amount = ($quantity*$rate);

              $boq_array = array(
        'boq_number'=>$boq_number,
        'project_id'=>$this->session->project_id,
        'item_id'=>$item_id,
        'unit'=>$unit,
        'quantity'=>$quantity,
        'rate'=>$rate,
        'amount'=>$amount,
        'created_by'=>$this->session->user_id,
        'updated_on'=>date('Y-m-d H:i:s')
              );

        if(isset($submit))
        {
          $boq_array = array_merge($boq_array,array('created_on'=>date("Y-m-d H:i:s")));
          $insert = $this->Database_conn->insert('boq_master',$boq_array);
          $data['msg'] = (isset($insert))?'BOQ Added Successfully':'Unable To Add BOQ';
          $this->load->view('boq_contractor',$data);
        }
        else if($update_btn)
        {
          $update_condition = $this->input->post('updt_flag');
          $update = $this->Common->update('boq_master',$boq_array,array('id'=>$update_condition));
          $data['msg'] = (isset($update))?'BOQ Updated Successfully':'Unable To Update BOQ';
          $this->load->view('boq_structure',$data);
        }
        else
        {
             $this->load->view('boq_contractor'); 
        }
          
      }
      else
      {
        redirect('da_projects/login');
      }
    }
###############################################################################################################################

    public function edit_client_boq($edit_id = '')
    {
      if($this->session->user_id)
      {
          $data['edit_id'] = $edit_id;
          $this->load->view('boq_contractor',$data);
      }
      else
      {
        redirect('da_projects/login');
      }
    }



###############################################################################################################################

    public function delete_client_boq($delete_id = '')
    {
      if($this->session->user_id)
      {
          
          $delete = $this->Common->deleteData('boq_master',array('id'=>$delete_id,'project_id'=>$this->session->project_id));
          $data['msg'] = (isset($delete))?' BOQ Deleted Successfully. ':' Unable To Update BOQ. ';
          $this->load->view('boq_structure',$data);
      }
      else
      {
        redirect('da_projects/login');
      }
    }


}
?>