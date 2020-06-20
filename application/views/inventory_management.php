<?php include('header.php');?>
<?php include('sidemenu.php');?>
    <div class="content">
        
        <div class="header">
            
            <h1 class="page-title">Purchase Order Inventory Management</h1>
        </div>
        
        <div class="container-fluid">
            <div class="row-fluid">




<!-- <p class="block-heading">WBS Bugdet/Cost Summary</p> -->
  <div class="well">
      <?php if(isset($msg))
  { ?>
  <h4 class="alert alert-info" style="text-align: center"><?php echo $msg;?></h4>
  <?php } ?>
  <div style="overflow-x:scroll;">
    <table class="table" border="1px" style="font-size: 12px;">
      <thead>
      <tr>
                  <th rowspan="2">S.No</th>
                  <th colspan="4" style="text-align: center;">Item Detail</th>
                  <th colspan="5" style="text-align: center;">Receiving details</th>
                  <th colspan="4" style="text-align: center;">Issuing details</th>
                  <th rowspan="2">Balance Qty</th>
                  </tr>
                  
                  <tr>
                  <th>PO No</th>
                  <th>Date of Issue</th>
                  <th>Items</th>
                  <th>Qty</th>
                  <th>Date of receiving</th>
                  <th>Received qty</th>
                  <th>Storage Location</th>
                  <th>Remarks if any</th>
                  <th>Action</th>
                  <th>Date of issuing</th>
                  <th>Issuing qty</th>
                  <th>Issue To</th>
                  <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                  
      <?php 
      $dataArr = $this->Common->inventoryFromPo();
       
       if(isset($dataArr)&&sizeof($dataArr)>0)
      {  
        $i=0;
          foreach($dataArr as $data)
         {
           


           $total_received_item = $total_item_amount = $total_issued_item = 0;
           
           $total_received_item = $this->Common->getDataSingle('inventory_receiving','sum(qty)',array('project_id'=>$this->session->project_id,'company_id'=>$this->session->company_id,'po_number'=>$data['po_number'],'item_id'=>$data['item_id'],'is_active'=>'1'));

            $total_issued_item = $this->Common->getDataSingle('inventory_issuing','sum(qty)',array('project_id'=>$this->session->project_id,'company_id'=>$this->session->company_id,'po_number'=>$data['po_number'],'item_id'=>$data['item_id'],'is_active'=>'1')); 

           $total_item_amount = $this->Common->getDataSingle('po_transaction','quantity',array('project_id'=>$this->session->project_id,'company_id'=>$this->session->company_id,'po_number'=>$data['po_number'],'item_id'=>$data['item_id'])); 
           
           $total_received_item = ($total_received_item=='')?'0':$total_received_item;
           $total_issued_item = ($total_issued_item=='')?'0':$total_issued_item;
           $total_item_amount   = ($total_item_amount=='')?'0':$total_item_amount;
          





          ?>
          <tr>
          <td><?php echo ++$i;?></td>
          <td><?php echo $data['po_number'];?></td>
          <td style="width:85px;padding-left: 5px;"><?php echo date("d-M-Y",strtotime($data['po_date']));?></td>
          <td><?php echo $data['item_name'];?></td>
          <td><?php echo $data['quantity'];?></td>
          




          <td colspan="5" style="padding:0px;">
            <?php
                $get_receiving_detail = $this->Common->getData('inventory_receiving',array('project_id'=>$this->session->project_id,'po_number'=>$data['po_number'],'item_id'=>$data['item_id'],'is_active'=>'1'));
              ?>
              <table style="border:0px;width:100%;padding-right:0px;" >
                <?php
                if(isset($get_receiving_detail)&&sizeof($get_receiving_detail)>0)
                {
                  foreach ($get_receiving_detail as $rvalue) 
                  { ?>
                     <tr>
                      <td style="border-top: 0px"><?php echo date("d-M-Y",strtotime($rvalue['date']));?></td>
                      <td style="border-top: 0px" ><?php echo $rvalue['qty'];?></td>
                      <td style="border-top: 0px" ><?php echo $rvalue['location'];?></td>
                      <td style="border-top: 0px" ><?php echo read_more($rvalue['remark'],50);?></td>
                      <td style="border-top: 0px" >
                      <a href="#" title=" Add new "  data-toggle="modal" data-target="#receiving"  value="Add" onclick="getPO('<?php echo $data['po_number'];?>' , '<?php echo $data['item_id'];?>');"><i class="fa fa-plus"></i></a>
                      <a href="#" title=" Edit " data-toggle="modal" data-target="#receiving"  value="Edit" onclick="editPO('<?php echo $data['po_number'];?>' , '<?php echo $data['item_id'];?>', '<?php echo $rvalue['date'];?>', '<?php echo $rvalue['qty'];?>', '<?php echo $rvalue['location'];?>', '<?php echo $rvalue['remark'];?>' , '<?php echo $rvalue['id'];?>');"><i class="fa fa-edit"></i></a></td>
                     </tr> 
                  <?php } 
                    ?>
                    <tr><td colspan="5" style="color:red;text-align: center">Total Item Received <strong><?php echo $total_received_item." Out of ".$total_item_amount;?></strong> </td></tr>  
                  <?php }
                  else
                  { 
                ?><tr>
                <td colspan="4" style="border-top: 0px;color:red;text-align: center">Total Item Received <strong><?php echo $total_received_item." Out of ".$total_item_amount;?></strong> </td>
                <td style="border-top: 0px;"><a href="#"  data-toggle="modal" data-target="#receiving"  value="Add" onclick="getPO('<?php echo $data['po_number'];?>' , '<?php echo $data['item_id'];?>');"><i class="fa fa-plus"></i></a></td>
                <?php } ?>
              </tr>
              </table>
          </td>
          




          <td style="border-top: 0px;padding:0px;" colspan="4">
            <?php
                $get_issuing_detail = $this->Common->getData('inventory_issuing',array('project_id'=>$this->session->project_id,'po_number'=>$data['po_number'],'item_id'=>$data['item_id'],'is_active'=>'1'));
              ?>
            <table style="border:0px;width:100%;padding-right:0px" >
                <?php
                if(isset($get_issuing_detail)&&sizeof($get_issuing_detail)>0)
                {
                  foreach ($get_issuing_detail as $rvalue) 
                  { ?>
                     <tr>
                      <td style="border-top: 0px"><?php echo date("d-M-Y",strtotime($rvalue['date']));?></td>
                      <td style="border-top: 0px" ><?php echo $rvalue['qty'];?></td>
                      <td style="border-top: 0px" ><?php echo $rvalue['issuing_to'];?></td>
                      <td style="border-top: 0px;" >
                      <a href="#" title=" Add New "  data-toggle="modal" data-target="#issuing"  value="Add" onclick="getissuing('<?php echo $data['po_number'];?>' , '<?php echo $data['item_id'];?>');"><i class="fa fa-plus"></i></a>
                      <a href="#" title=" Edit " data-toggle="modal" data-target="#issuing"  value="Edit" onclick="editissuing('<?php echo $data['po_number'];?>' , '<?php echo $data['item_id'];?>', '<?php echo $rvalue['date'];?>', '<?php echo $rvalue['qty'];?>', '<?php echo $rvalue['issuing_to'];?>', '<?php echo $rvalue['id'];?>');"><i class="fa fa-edit"></i></a></td>
                     </tr> 
                  <?php } ?>
                       <tr><td colspan="4" style="color:red;text-align: center">Total Item Issued <strong><?php echo $total_issued_item." Out of ".$total_received_item;?></strong> </td></tr>  
              <?php } 
                  else
                  { 
                ?><tr>
                <td colspan="4" style="border-top: 0px;color:red;text-align: center">Total Item Issued <strong><?php echo $total_received_item." Out of ".$total_item_amount;?></strong> </td>
                <td style="border-top: 0px;">
                 <a href="#"  data-toggle="modal" data-target="#issuing"  value="Add" style="float:right" onclick="getissuing('<?php echo $data['po_number'];?>' , '<?php echo $data['item_id'];?>');"><i class="fa fa-plus"></i></a>
                </td>
                <?php } ?>
              </tr>
              </table>
          
        </td>
        



          <td>
            <?php  
                $sum_received_qty = $this->Common->getDataSingle('inventory_receiving','sum(qty)',array('project_id'=>$this->session->project_id,'po_number'=>$data['po_number'],'item_id'=>$data['item_id'],'is_active'=>'1'));

                $sum_issue_qty = $this->Common->getDataSingle('inventory_issuing','sum(qty)',array('project_id'=>$this->session->project_id,'po_number'=>$data['po_number'],'item_id'=>$data['item_id'],'is_active'=>'1'));

                $final_sum_qty = ($sum_received_qty-$sum_issue_qty);

                if(isset($final_sum_qty)&&$final_sum_qty>0)
                {
                   echo $final_sum_qty;
                } 
                else
                {
                  echo "0";
                }
            ?>
          </td>
        </tr>
        <?php }
       }
      else
      {
       echo "<tr><td colspan='15'><h4 align='center'>No Record Found</h4></td></tr>
        ";
      } ?>


      
      </tbody>
    </table>
    <?php echo form_close();?>
  </div>
</div>


                    
            </div>
        </div>
    </div>


<div class="modal fade product_view" id="receiving" style="width:500px;height:350px;left: 650.444;right: 650px;">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <a href="#" data-dismiss="modal" class="class pull-right" title=" CLOSE "><i class="fa fa-remove" style="font-size:30px;color:red"></i></a>
            <h3 class="modal-title"> Add Received Detail </h3>
        </div>
        <div class="container-fluid">
        <div class="row-fluid">
         <div  style="margin: 20px 5px 20px 43px;">
          <div class="row">
<?php echo form_open('Project_inventory/inventory_receiving');?>
<table width="100%">

<tr>
<td style="text-align: right">Date of Receiving</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td style="text-align: left">
<input type="hidden" name="receiving_po_number" id="receiving_po_number"  value=""/>
<input type="hidden" name="receiving_item" id="receiving_item"  value=""/>
<input type="date" name="date_of_receiving" id="date_of_receiving" value=""/>
</td>
</tr>


<tr>
<td style="text-align: right"><p>Received Qty</p></td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><input type="text" name="receiving_qty" id="receiving_qty"  value="" />
</td>
</tr>

<tr>
<td style="text-align: right"><p>Storage Location</p></td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><input type="text" name="storage_location" id="storage_location"  value="" />
</td>
</tr>

<tr>
<td style="text-align: right">Remark</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>
  <textarea name="receiving_remark" id="receiving_remark" cols="45" rows="3"></textarea>
</td>
</tr>

<tr>
  <td colspan="3" align="center">
    <input type="hidden" name="receiving_id" id="receiving_id" value="0">
    <input type="submit" name="receiving_submit" id="receiving_submit" value="Submit" class="btn btn-primary"></td>
</tr>




                
              </table>
   <?php echo form_close();?>
              </div>             
         </div>
       </div>
     </div>
   </div>
 </div>
</div>

 <div class="modal fade product_view" id="issuing" style="width:400px;height:300px;margin-left:-8%;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right" title=" CLOSE "><i class="fa fa-remove" style="font-size:30px;color:red"></i></a>
                <h3 class="modal-title"> Add Issuing Detail </h3>
            </div>
            <div class="container-fluid">
            <div class="row-fluid">
             <div  style="margin: 20px 5px 20px 43px;">
              <div class="row">
   <?php echo form_open('Project_inventory/inventory_issuing');?>
<table width="100%">

<tr>
<td style="text-align: right">Date of Issuing</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td style="text-align: left">
<input type="hidden" name="issuing_po_number" id="issuing_po_number"  value=""/>
<input type="hidden" name="issuing_item" id="issuing_item"  value=""/>
<input type="date" name="date_of_issuing" id="date_of_issuing" value=""/>
</td>
</tr>


<tr>
<td style="text-align: right"><p>Issuing Qty</p></td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><input type="text" name="issuing_qty" id="issuing_qty"  value="" />
</td>
</tr>

<tr>
<td style="text-align: right"><p>Issuing To</p></td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><input type="text" name="issuing_to" id="issuing_to"  value="" />
</td>
</tr>

<tr>
  <td colspan="3" align="center">
    <input type="hidden" name="issuing_id" id="issuing_id" value="0">
    <input type="submit" name="issuing_submit" id="issuing_submit" value="Submit" class="btn btn-primary"></td>
</tr>




                
              </table>
   <?php echo form_close();?>
              </div>             
         </div>
       </div>
     </div>
   </div>
 </div>
</div>
<div class="modal fade product_view" id="desc_view" style="width:800px;height:500px;left: 650.444;right: 650px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right" title=" CLOSE "><i class="fa fa-remove" style="font-size:30px;color:red"></i></a>
                <h3 class="modal-title"> Folder Details </h3>
            </div>
            <div class="container-fluid">
            <div class="row-fluid">
             <div  style="margin: 20px 5px 20px 43px;">
              <div class="row">
              <table id="folder_details" width="100%">
                
              </table>
              </div>             
         </div>
       </div>
     </div>
   </div>
 </div>
</div>
<?php require('footer.php'); ?>


<script type="text/javascript">
  
  function getPO( po_number = '' , item_id = '')
  {
    document.getElementById('receiving_po_number').value = po_number; 
    document.getElementById('receiving_item').value = item_id; 
  }

   function editPO( po_number = '' , item_id = '' , date = '' , qty = '' , location = '' , remark = '' , id='')
  {
    document.getElementById('receiving_po_number').value = po_number; 
    document.getElementById('receiving_item').value = item_id; 
    document.getElementById('date_of_receiving').value = date; 
    document.getElementById('receiving_qty').value = qty; 
    document.getElementById('storage_location').value = location; 
    document.getElementById('receiving_remark').value = remark; 
    document.getElementById('receiving_id').value = id; 
    document.getElementById('receiving_submit').value = "Update"; 
  }

  function getissuing( po_number = '' , item_id = '')
  {
    document.getElementById('issuing_po_number').value = po_number; 
    document.getElementById('issuing_item').value = item_id; 
  }

   function editissuing( po_number = '' , item_id = '' , date = '' , qty = '' ,to = '' , id='')
  {
    document.getElementById('issuing_po_number').value = po_number; 
    document.getElementById('issuing_item').value = item_id; 
    document.getElementById('date_of_issuing').value = date; 
    document.getElementById('issuing_qty').value = qty; 
    document.getElementById('issuing_to').value = to; 
    document.getElementById('issuing_id').value = id; 
    document.getElementById('issuing_submit').value = "Update"; 
  }
</script>
  </body>
</html>
