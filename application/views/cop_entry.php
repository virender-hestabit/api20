<?php include('header.php');?><?php include('sidemenu.php');?>
    <div class="content">
        
        <div class="header">
            
            <h1 class="page-title"> COP  ENTRY </h1>
        </div>
        
        <div class="container-fluid">
            <div class="row-fluid">

	<div class="row-fluid">
	</div>
<div class="row-fluid">&nbsp;</div>
<div class="well">


  <?php if(isset($msg))
  { ?>
  <h4 class="alert alert-info" style="text-align: center"><?php echo $msg;?></h4>
  <?php } ?>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
          <table width="100%">
                      <?php 
                      $form=array(
                      'class'=>'form-element',
                      'role'=>'form'
                      );
                      echo form_open('da_projects/cop_entry', $form);?>

  
    <input type="hidden" name="project_id" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['project_id']:'';?>">
  <tr>
    <td>Project Name</td>
    <td><div align="center"></div></td>
    <td><input type="text" name="proj_name" id="proj_name" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['project_name']:'';?>"/></td>
    <td></td>
    <td>COP Title</td>
    <td><div align="center"></div></td>
    <td><input type="text" name="cop_title" id="cop_title" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['cop_title']:'';?>" /></td>
  </tr> 


  <tr>
    <td>COP Number</td>
    <td><div align="center"></div></td>
    <td><input type="text" name="cop_number" id="cop_number" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['cop_number']:'';?>" /></td>
    <td></td>
    <td>Contractor Name </td>
    <td><div align="center"></div></td>
    <td><input type="text" name="contractor_name" id="contractor_name" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['contractor_name']:'';?>"/></td>
  </tr>


  <tr>
    <td>Contractor Address</td>
    <td><div align="center"></div></td>
    <td><textarea name="contractor_address" id="contractor_address" cols="45" rows="3"><?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['contractor_address']:'';?></textarea></td>
    <td></td>
    <td>Contact Person/Signing Authority </td>
    <td><div align="center"></div></td>
    <td><input type="text" name="contact_pname" id="contact_pname"   value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['contact_person_name']:'';?>"/></td>
  </tr>


  <tr>
    <td>Contact No.</td>
    <td><div align="center"></div></td>
    <td><input type="text" name="contact_no" id="contact_no"   value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['contact_person_phone']:'';?>"/></td>
    <td></td>
    <td>Contact Mail ID</td>
    <td><div align="center"></div></td>
    <td><input type="text" name="contact_email" id="contact_email"   value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['contact_person_email']:'';?>"/></td>
  </tr>


  <tr>
    <td>PO/WO Work</td>
    <td><div align="center"></div></td>
    <td><input type="text" name="po_cop_work" id="po_cop_work"   value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['po_cop_work']:'';?>"/></td>
    <td></td>
    <td>Extr Work</td>
    <td><div align="center"></div></td>
    <td><input type="text" name="extra_work" id="extra_work"  value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['extra_work']:'';?>" /></td>
  </tr>


  <tr>
    <td>Deduction</td>
    <td><div align="center"></div></td>
    <td><input type="text" name="deduction" id="deduction"  value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['deduction']:'';?>"/></td>
    <td></td>
    <td>Advance</td>
    <td><div align="center"></div></td>    
    <td><input type="text" name="advance" id="advance" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['advance']:'';?>" /></td>
  </tr>


  <tr>
    <td>Retention</td>
    <td><div align="center"></div></td>
    <td><input type="text" name="retention" id="retention"  value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['retention']:'';?>"/></td>
    <td></td>
    <td><p>COP Issue Date</p></td>
    <td><div align="center"></div></td>
    <td><input type="text" name="cop_issue_date" id="cop_issue_date"  value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['cop_issue_date']:'';?>"/></td>
  </tr>
 
  
  <tr>
    <td>Any Other payment (to be specified)
    </td>
    <td><div align="center"></div></td>
    <td><textarea name="other_payments" id="other_payments" cols="45" rows="3"> <?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['other_payments']:'';?></textarea></td>
    <td></td>
    <td>Net Payment
    </td>
    <td><div align="center"></div></td>
    <td><textarea name="net_payment" id="net_payment" cols="45" rows="3"> <?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['net_payment']:'';?></textarea></td>
  </tr>


  <tr>
    <td>Cummulative Payment Till Date
    </td>
    <td><div align="center"></div></td>
    <td><textarea name="cumulative_payment" id="cumulative_payment" cols="45" rows="3"> <?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['cumulative_payment']:'';?></textarea></td>
    <td></td>
    <td>Remarks
    </td>
    <td><div align="center"></div></td>
    <td><textarea name="remark" id="remark" cols="45" rows="3"> <?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['remark']:'';?></textarea></td>
 </tr>


  <tr>
    <td>Special Condition:-
    </td>
    <td><div align="center"></div></td>
    <td><textarea name="special_condition" id="special_condition" cols="45" rows="3"> <?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['special_condition']:'';?></textarea></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>



  <tr align="center">    
      <td colspan="7"> 
        <div align="center">
          <?php if(isset($updateFlag)&&($updateFlag == 1))
          { ?>
          <input type="hidden"  name="update_id"  value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['id']:'' ;?>" />
          <input type="submit" class="btn btn-primary" name="update"  value="Update" />
          <?php  }
          else
          { ?>
          <input type="submit" class="btn btn-primary" name="save" id="save" value="Submit" />
          <?php } ?>

        </div>
      </td>
  </tr>



<?php echo form_close();?>
</table>
          </div>
           <div class="tab-pane fade" id="profile">
      </div>
  </div>

</div>


<p class="block-heading">COP List</p>
  <div class="well">
    <table class="table">
      <thead>
      <tr>
        <th>S.No.</th>
        <th>Project Name</th>
        <th>COP Title</th>
        <th>COP Number</th>
        <th>Supplier Name</th>
        <th>COP Issue Date</th>
        <th>Action</th>
      </tr>
                  </thead>
                  <tbody>

                    <?php if(sizeof($dataArr)>0)
                  {  $i=0;
                     foreach($dataArr as $data)
                     { ?>
                              

                      <tr>
                          <td><?php echo ++$i;?></td>
                          <td><?php echo $data['project_name'];?></td>
                          <td><?php echo $data['cop_title'];?></td>
                          <td><?php echo $data['cop_number'];?></td>
                          <td><?php echo $data['contractor_name'];?></td>
                          <td><?php echo $data['cop_issue_date'];?></td>
                      <td>
                      <?php 
                      $form=array(
                      'class'=>'form-element',
                      'role'=>'form');
                      echo form_open('da_projects/edit_po_entry', $form);?>
                        <input type="hidden" name="edit_id" value="<?php echo $data['id'];?>" />
                        <input type="submit" class="btn btn-primary" name="edit" value="Edit" />
                        <?php echo form_close();?>
                      </td>
                      </tr>
                    

                     <?php }
                  }
                  else
                  {
                    echo "<tr><td colspan='7'><h4 align='center'>No Record Found</h4></td></tr>
                    ";
                  } ?>
         
      
      
      </tbody>
    </table>
  </div>


                    
            </div>
        </div>
    </div>
    
<?php require('footer.php'); ?>

    <script src="<?php echo base_url('application/assests/lib/bootstrap/js/bootstrap.js');?>"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
  </body>
</html>