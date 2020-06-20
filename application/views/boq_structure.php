  <?php //$this->output->enable_profiler(TRUE);
?>



<?php include('header.php');?><?php include('sidemenu.php');?>
    <div class="content">
        
        <div class="header">
            
            <h1 class="page-title">BOQ Management(<small style="font-size: 15px;color:#000;font-weight:550">BOQ as finalised with Client</small>)</h1>
            <p></p>
        </div>

        
        <div class="container-fluid">
          <div class="row">
            <a href="<?php echo base_url('BOQ/edit_client_boq'); ?>" target="_blank" class="btn btn-primary" style="font-size: 12px;margin: 10px 10px 10px 50px;">Add Client Contract BOQ  </a>
          </div>
            <div class="row-fluid">




<!-- <p class="block-heading">WBS Bugdet/Cost Summary</p> -->
  <div class="well">
    <div style="overflow-x:auto">
      <?php if(isset($msg))
  { ?>
  <h4 class="alert alert-info" style="text-align: center"><?php echo $msg;?></h4>
  <?php } ?>
    <table class="table" style="border: 1px solid #cccccc1f; font-size: 12px;">
      <thead>
      <tr>
                  <th>S.No</th>
                  <th colspan="7" style="text-align: center;">Contract BOQ with client</th>
                  <th colspan="6" style="text-align: center;">Contract with Subcontractor </th>
                  <th colspan="5" style="text-align: center;">Purchase of Material</th>
                  <th rowspan="1">Planned Profit</th>
                  </tr>
                  
                  <tr>
                  <td></td>
                  <th>BOQ No</th>
                  <th>Items</th>
                  <th>Unit</th>
                  <th>Quantity</th>
                  <th>Rate</th>
                  <th>Amount</th>
                  <th>Action</th>
                  <th>Work</th>
                  <th>Quantity</th>
                  <th>Rate</th>
                  <th>Gst</th>
                  <th>Amount</th>
                  <th>Action</th>
                  <th>Material</th>
                  <th>Unit</th>
                  <th>Rate</th>
                  <th>GST</th>
                  <th>Amount</th>
                  <th>Profit</th>
                  </tr>
                  </thead>
                  <tbody>

                  
      <?php 
      $dataArr = $this->Common->getBoqClient();
       
       if(isset($dataArr)&&sizeof($dataArr)>0)
      {  
        $i=0;
          foreach($dataArr as $data)
         {?>
          <tr>
          <td><?php echo ++$i;?></td>
          <td><?php echo $data['boq_number'];?></td>
          <td><?php echo $data['item_name'];?></td>
          <td><?php echo $data['unit'];?></td>
          <td><?php echo $data['quantity'];?></td>
          <td><?php echo $data['rate'];?></td>
          <td><?php echo $data['amount'];?></td>
          <td>
            <?php $id= $data['id'];?>
            <!-- <?php echo form_open('');?> -->
            <div style="width:40px">
          <!-- <i class="fa fa-eye" style="font-size:18px; cursor: pointer;" title="Add"></i> -->
          <a href="<?php echo base_url('BOQ/edit_client_boq/'.$id);?>">
          <i class="fa fa-edit" style="font-size:18px; cursor: pointer;float:left" title="Edit"></i></a>
          <a href="<?php echo base_url('BOQ/delete_client_boq/'.$id);?>">
          <i class="fa fa-trash-o" style="font-size:18px; cursor: pointer;float:right" title="Delete" ></i></a>
            </div>
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <?php }
       }
      else
      {
       echo "<tr><td colspan='20'><h4 align='center'>No Record Found</h4></td></tr>
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
    <div class="modal fade product_view" id="budget_set" style="width:500px;height:300px;left: 650.444;right: 650px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right" title=" CLOSE "><i class="fa fa-remove" style="font-size:30px;color:red"></i></a>
                <h3 class="modal-title"> Add Budget Detail </h3>
            </div>
            <div class="container-fluid">
            <div class="row-fluid">
             <div  style="margin: 20px 5px 20px 43px;">
              <div class="row">
   <?php echo form_open('BOQ/budget_summary');?>
  <table width="100%">
  
  <tr>
    <td style="text-align: right">Budget</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td style="text-align: left"><input type="text" name="cost" id="cost"  value=""/></td>
  </tr>

  



  <tr>
    <td style="text-align: right"><p>Vendor/Person Name</p></td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td><input type="text" name="person_name" id="person_name"  value="" />
    
    </td>

    </tr><tr>
    <td style="text-align: right">Remark</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td><textarea name="remark" id="remark" cols="45" rows="3"> </textarea></td>

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

 <div class="modal fade product_view" id="tracking_set" style="width:400px;height:200px;margin-left:-8%;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right" title=" CLOSE "><i class="fa fa-remove" style="font-size:30px;color:red"></i></a>
                <h3 class="modal-title"> Add Tracking Budget </h3>
            </div>
            <div class="container-fluid">
            <div class="row-fluid">
             <div  style="margin: 20px 5px 20px 43px;">
              <div class="row">
   <?php echo form_open('BOQ/budget_summary');?>
  <table width="100%">
  
  <tr>
    <td style="text-align: right">Budget</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td style="text-align: left"><input type="text" name="tracking_cost" id="cost"  value=""/></td>
  </tr>

  
  <tr align="center">    
      <td colspan="3"> 
        <div align="center">
          <input type="hidden" name="cat_id" value="" id="t_cat_id_value">
          <input type="hidden" name="subcat_id1" value="" id="t_subcat_id1_value">
          <input type="hidden" name="subcat_id2" value="" id="t_subcat_id2_value">
          <input type="hidden" name="subcat_id3" value="" id="t_subcat_id3_value">
          <input type="hidden" name="subcat_id4" value="" id="t_subcat_id4_value">
          <input type="hidden" name="subcat_id5" value="" id="t_subcat_id5_value">
          <input type="submit" class="btn btn-primary" name="tracking_budget" id="save" value="Submit" />
        </div>
      </td>
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
             <div  style="    margin: 20px 5px 20px 43px;">
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


  </body>
</html>
