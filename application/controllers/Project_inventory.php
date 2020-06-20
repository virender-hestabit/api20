<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_inventory extends MY_Controller {


   public function index()
   {
   	if($this->session->user_id)
   	{
        $this->inventory();
   	}
   	else
   	{
   		redirect('da_projects/login');
   	}
   } 

######################################################################################################################################

       public function inventory()
        {
        	if(isset($this->session->user_id))
        	{
                $this->load->view('inventory_management');
        	}
        	else
        	{
        		redirect('da_projects/login');
        	}
        }



#####################################################################################################################################

        public function inventory_receiving()
        {
        	if(isset($this->session->user_id))
        	{
        		$receiving_submit = $this->input->post('receiving_submit');





if(isset($receiving_submit)&&$receiving_submit=='Submit')
{
	$po_number = $this->input->post('receiving_po_number');
	$item_id = $this->input->post('receiving_item');
	$receiving_date = $this->input->post('date_of_receiving');
	$receiving_qty = $this->input->post('receiving_qty');
	$storage_location = $this->input->post('storage_location');
	$receiving_remark = $this->input->post('receiving_remark');
        
       $total_qty =$this->Common->get_data_single('po_transaction','quantity',array('po_number'=>$po_number,'item_id'=>$item_id));
       $db_balance_qty=$this->Common->getDataSingle('inventory_receiving','sum(qty)',array('po_number'=>$po_number,'item_id'=>$item_id));
       $balance_qty = ($total_qty -$db_balance_qty - $receiving_qty);
        
      if($balance_qty>=0)
      {  
              if($balance_qty==0)
              {
                 $excess_qty = (-1*$balance_qty);
                 $balance_qty = 0;
              }
              else
              {
              	$excess_qty = 0;
              }

             $update_all = $this->Common->update('inventory_receiving',array('balance_qty'=>$balance_qty),array('po_number'=>$po_number,'item_id'=>$item_id));
  			      $receiving = array(
              'project_id'=>$this->session->project_id,
              'company_id'=>$this->session->company_id,
              'po_number'=>$po_number,
              'item_id'=>$item_id,
              'date'=>$receiving_date,
              'qty'=>$receiving_qty,
              'location'=>$storage_location,
              'remark'=>$receiving_remark,
              'balance_qty'=>$balance_qty,
              'excess_received'=>$excess_qty,
              'created_by'=>$this->session->user_id,
              'created_on'=>date("Y-m-d")
  			      );
            $insert = $this->Common->insertData('inventory_receiving' , $receiving);
            $data['msg'] = (isset($insert)&&$insert!='')?' Receiving Entry Added Successfully.':' Unable to Add Receiving Entry.';
        }
        else
        {
          $data['msg'] = " Receiving Amount exceed the Item total Amount";
        }
      $this->load->view('inventory_management',$data);

}













else if(isset($receiving_submit)&&$receiving_submit=='Update')
{
$po_number = $this->input->post('receiving_po_number');
$item_id = $this->input->post('receiving_item');
$receiving_date = $this->input->post('date_of_receiving');
$receiving_qty = $this->input->post('receiving_qty');
$storage_location = $this->input->post('storage_location');
$receiving_remark = $this->input->post('receiving_remark');
$receiving_id = $this->input->post('receiving_id');

$db_qty=$this->Common->get_data_single('inventory_receiving','qty',array('id'=>$receiving_id));
$db_total_qty=$this->Common->get_data_single('po_transaction','quantity',array('po_number'=>$po_number,'item_id'=>$item_id));
$db_balance_qty=$this->Common->getDataSingle('inventory_receiving','sum(qty)',array('po_number'=>$po_number,'item_id'=>$item_id));
$balance_qty = ($db_total_qty - $db_balance_qty + $db_qty - $receiving_qty); 

if($balance_qty>=0)
{

$receiving = array(
      'project_id'=>$this->session->project_id,
      'po_number'=>$po_number,
      'item_id'=>$item_id,
      'date'=>$receiving_date,
      'qty'=>$receiving_qty,
      'location'=>$storage_location,
      'remark'=>$receiving_remark,
      'balance_qty'=>$balance_qty,
      // 'excess_received'=>$excess_qty,
      'created_by'=>$this->session->user_id,
      'updated_on'=>date("Y-m-d")
);
$update_all = $this->Common->update('inventory_receiving',array('balance_qty'=>$balance_qty),array('po_number'=>$po_number,'item_id'=>$item_id));
    $update = $this->Common->update('inventory_receiving' , $receiving,array('id'=>$receiving_id));
    $data['msg'] = (isset($update)&&$update!='')?' Receiving Entry Updated Successfully.':' Unable to Update Receiving Entry.';
}
else
{
    $data['msg'] = "Sum of Receiving Quantity exceed Item total Quantity";
}
    $this->load->view('inventory_management',$data);
      
}











                $this->load->view('inventory_management');
        	}
        	else
        	{
        		redirect('da_projects/login');
        	}
        }


####################################################################################################################################

        public function inventory_issuing()
        {
        	if(isset($this->session->user_id))
        	{
        		$issuing_submit = $this->input->post('issuing_submit');
        		if(isset($issuing_submit)&&$issuing_submit=='Submit')
        		{
        			$po_number = $this->input->post('issuing_po_number');
        			$item_id = $this->input->post('issuing_item');
        			$issuing_date = $this->input->post('date_of_issuing');
        			$issuing_qty = $this->input->post('issuing_qty');
        			$issuing_to = $this->input->post('issuing_to');
        			
        		   $db_total_qty=$this->Common->getDataSingle('inventory_receiving','sum(qty)',array('po_number'=>$po_number,'item_id'=>$item_id));	
                   $db_balance_qty=$this->Common->getDataSingle('inventory_issuing','sum(qty)',array('po_number'=>$po_number,'item_id'=>$item_id));
                   $balance_qty = ($db_total_qty - $db_balance_qty - $issuing_qty);
                if($balance_qty>=0)
                {    

                    if($balance_qty==0)
                    {
                       $excess_qty = (-1*$balance_qty);
                       $balance_qty = 0;
                    }
                    else
                    {
                    	$excess_qty = 0;
                    }

                   $update_all = $this->Common->update('inventory_issuing',array('balance_qty'=>$balance_qty),array('po_number'=>$po_number,'item_id'=>$item_id));
        			      $issuing = array(
                    'project_id'=>$this->session->project_id,
                    'company_id'=>$this->session->company_id,
                    'po_number'=>$po_number,
                    'item_id'=>$item_id,
                    'date'=>$issuing_date,
                    'qty'=>$issuing_qty,
                    'issuing_to'=>$issuing_to,
                    'balance_qty'=>$balance_qty,
                    'created_by'=>$this->session->user_id,
                    'created_on'=>date("Y-m-d")
        			);
                  $insert = $this->Common->insertData('inventory_issuing' , $issuing);
                  $data['msg'] = (isset($insert)&&$insert!='')?' Issuing Entry Added Successfully.':' Unable to Add Issuing Entry.';
                }
                else
                {
                  $data['msg'] = "Issuing Quantity Exceed Received Quantity";
                }
             $this->load->view('inventory_management',$data);

        		}








        		else if(isset($issuing_submit)&&$issuing_submit=='Update')
        		{
        			$po_number = $this->input->post('issuing_po_number');
        			$item_id = $this->input->post('issuing_item');
        			$issuing_date = $this->input->post('date_of_issuing');
        			$issuing_qty = $this->input->post('issuing_qty');
        			$issuing_to = $this->input->post('issuing_to');
        			$issuing_id = $this->input->post('issuing_id');

					$db_all_data=$this->Common->getData('inventory_issuing',array('id'=>$issuing_id));
				  
          $total_received_qty = $this->Common->getDataSingle('inventory_receiving','sum(qty)',array('project_id'=>$this->session->project_id,'company_id'=>$this->session->company_id,'po_number'=>$po_number,'item_id'=>$item_id));

          $total_issued_qty = $this->Common->getDataSingle('inventory_issuing','sum(qty)',array('project_id'=>$this->session->project_id,'company_id'=>$this->session->company_id,'po_number'=>$po_number,'item_id'=>$item_id));
					
          $db_qty = $db_all_data['0']['qty'];

          $balance_qty = ($total_received_qty - $total_issued_qty + $db_qty - $issuing_qty); 
    			if($balance_qty>=0)
          {

        			$issuing = array(
                    'project_id'=>$this->session->project_id,
                    'po_number'=>$po_number,
                    'item_id'=>$item_id,
                    'date'=>$issuing_date,
                    'qty'=>$issuing_qty,
                    'issuing_to'=>$issuing_to,
                    'balance_qty'=>$balance_qty,
                    // 'excess_received'=>$excess_qty,
                    'created_by'=>$this->session->user_id,
                    'updated_on'=>date("Y-m-d")
        			);
        			$update_all = $this->Common->update('inventory_issuing',array('balance_qty'=>$balance_qty),array('po_number'=>$po_number,'item_id'=>$item_id));
                  $update = $this->Common->update('inventory_issuing' , $issuing,array('id'=>$issuing_id));
                  $data['msg'] = (isset($update)&&$update!='')?' Issuing Entry Updated Successfully.':' Unable to Update Issuing Entry.';
          }
          else
          {
            $data['msg'] = "Issuing Quantity Exceed than Received Quantity";
          }

          $this->load->view('inventory_management',$data);
        }

       else
       {
       	 $this->load->view('inventory_management');
       }
	}
	else
	{
		redirect('da_projects/login');
	}
}



}
?>