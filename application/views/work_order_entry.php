<?php include('header.php');?>
<?php include('sidemenu.php');?>
    <div class="content">
        
        <div class="header">
            
            <h1 class="page-title"> WORK  ORDER  ENTRY </h1>
        </div>
        
        <div class="container-fluid">
            <div class="row-fluid">

	<div class="row-fluid">
	</div>
<div class="row-fluid">&nbsp;</div>
<div class="well">
<?php $wo_number = $this->Database_conn->getNextSerialNumber('wo_number');?>

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
                      echo form_open('da_projects/work_order', $form);?>

  
    <input type="hidden" name="project_id" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['project_id']:'';?>">
  <tr>
        <td>Project Name</td>
          <td><div align="center"></div></td>
          <td>
          <select name="proj_name" id="proj_name">


          <?php 
          $trans = $this->Database_conn->fetch_Data('projects');
          foreach ($trans as $project) 
          {  
          $selected = ($project['id']==$updateFlag['0']['project_id'])?'selected':'';
          ?>
          <option value="<?php echo $project['project_name'];?>"  <?php echo $selected;?> ><?php echo $project['project_name'];?></option>
          <?php  } ?>
          </select>
          </td>
    <td></td>
    <td>Work Order Title</td>
    <td><div align="center"></div></td>
    <td><input type="text" name="wo_title" id="wo_title" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['wo_title']:'';?>" /></td>
  </tr>


  <tr>
    <td>Work Order Number</td>
    <td><div align="center"></div></td>
    <td><input type="text" name="wo_number" id="wo_number" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['wo_number']:'';?>" /></td>
    <td></td>
    <td>Respective Budget Head</td>
    <td><div align="center"></div></td>
    <td><input type="text" name="budgt_heads" id="budgt_heads" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['budget_heads']:'';?>"/></td>
  </tr>



  <tr>
    <td>Contractor Name </td>
    <td><div align="center"></div></td>

    <td><input type="text" name="contractor_name" id="contractor_name" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['contractor_name']:'';?>"/></td>
    <td></td>

    <td>Contractor Address</td>
    <td><div align="center"></div></td>
    <td><textarea name="contractor_address" id="contractor_address" cols="45" rows="3"><?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['contractor_address']:'';?></textarea></td>
  </tr>

  <tr>
    <td>Contact Person/Signing Authority </td>
    <td><div align="center"></div></td>
    <td><input type="text" name="contact_pname" id="contact_pname"   value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['contact_person_name']:'';?>"/></td>
    <td></td>

    <td>Contact No.</td>
    <td><div align="center"></div></td>
    <td><input type="text" name="contact_no" id="contact_no"   value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['contact_person_phone']:'';?>"/></td>
  </tr>

  <tr>

    <td>Contact Mail ID</td>
    <td><div align="center"></div></td>
    <td><input type="text" name="contact_email" id="contact_email"   value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['contact_person_email']:'';?>"/></td>
    <td></td>

    <td>Contract Value</td>
    <td><div align="center"></div></td>
    <td><input type="text" name="contract_value" id="contract_value"   value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['contract_value']:'';?>"/></td>
  </tr>

  <tr>
    <td>Payment Terms</td>
    <td><div align="center"></div></td>
    <td><input type="text" name="payment_terms" id="payment_terms"  value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['payment_term']:'';?>" /></td>
    <td></td>

    <td>Liquidated Damages</td>
    <td><div align="center"></div></td>
    <td><input type="text" name="liq_damages" id="liq_damages"  value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['liquidated_damages']:'';?>"/></td>
  </tr>

  <tr>
    <td>Defect Liability Period </td>
    <td><div align="center"></div></td>    
    <td><input type="text" name="defect_liability_period" id="defect_liability_period" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['defect_liability_period']:'';?>" /></td>
    <td></td>

    <td>Completion Date</td>
    <td><div align="center"></div></td>
    <td><input type="date" name="completion_date" id="completion_date"  value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['completion_date']:'';?>"/></td>
  </tr>


  <tr>
    <td><p>WO Issue Date</p><p>Late Delivery Clause</p></td>
    <td><div align="center"></div></td>
    <td><input type="date" name="wo_issue_date" id="wo_issue_date"  value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['wo_issue_date']:'';?>"/><br>
        <input type="text" name="late_delivery_clause" id="late_delivery_clause"  value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['late_delivery_clause']:'';?>"/>
    </td>

    <td></td>
    <td>Enclosure</td>
    <td><div align="center"></div></td>
    <td><textarea name="enclosure" id="enclosure" cols="45" rows="3"> <?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['enclosure']:'';?></textarea></td>

  </tr>


  <tr>
    <td>Special Condition</td>
    <td><div align="center"></div></td>
    <td><textarea name="spl_cond" id="spl_cond" cols="45" rows="3"> <?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['special_condition']:'';?></textarea></td>
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


<p class="block-heading">Work Order List</p>
  <div class="well">
    <table class="table">
      <thead>
      <tr>

            <th>S.No.</th>
            <th>Project Name </th>
            <th>WO Title</th>
            <th>WO Number</th>
            <th>Budget Heads</th>
            <th>Supplier Name</th>
            <th>WO Completion Date</th>
            <th>WO Issue Date</th>
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
                          <td><?php echo $data['wo_title'];?></td>
                          <td><?php echo $data['wo_number'];?></td>
                          <td><?php echo $data['budget_heads'];?></td>
                          <td><?php echo $data['contractor_name'];?></td>
                          <td><?php echo $data['completion_date'];?></td>
                          <td><?php echo $data['wo_issue_date'];?></td>
                      <td>
                      <?php 
                      $form=array(
                      'class'=>'form-element',
                      'role'=>'form');
                      echo form_open('da_projects/edit_work_order', $form);?>
                        <input type="hidden" name="edit_id" value="<?php echo $data['id'];?>" />
                        <input type="submit" class="btn btn-primary" name="edit" value="Edit" />
                        <?php echo form_close();?>
                      </td>
                      </tr>
                    

                     <?php }
                  }
                  else
                  {
                    echo "<tr><td colspan='10'><h4 align='center'>No Record Found</h4></td></tr>
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