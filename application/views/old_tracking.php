
<?php include('header.php');?><?php include('sidemenu.php');?>
<style type="text/css">
.email_notification
{
  float: right;
  margin-top: 1%;
  background-color: #5d687f !important;
}    
</style>
    <div class="content">
        
        <div class="header">
            <h1 class="page-title">Tracking & Follow up Sheeet</h1>
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
                      echo form_open('da_projects/tracking_sheet', $form);?>

  <input type="hidden" name="updt_flag" id="updt_flag" value=""/>


   <tr>
    <td><strong>Tracking Number</strong></td>
    
    <td><input type="text" name="tracking_number" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['tracking_number']:'' ;?>"/>
     </td>
     <td><strong>Noting Title</strong></td>
    
    <td><input type="text" name="noting_title" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['noting_title']:'' ;?>"/>
     </td>
   
  </tr>


  <tr>
    <td><strong> Noting Date</strong><br><br><strong>Noting Place</strong></td>
    
    <td>
     <input type="date" name="noting_date"   value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['noting_date']:'' ;?>" />
     <br>
     <input type="text" name="noting_place" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['noting_place']:'' ;?>"/>
     
    </td>
    
    <td><strong>Points</strong></td>
    <td>
      <textarea name="points" rows="4" ><?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['points']:'' ;?></textarea>
    </td>
  </tr>




  <tr>
    <td><strong> Actual Completion Date</strong></td>
    <td>
      <input type="date" name="actual_date"   value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['actual_date']:'' ;?>" />
    </td>
     <td><strong> Responsibility</strong></td>
    <td>
      <select name="responsibility" >
      <option> Assign Responsibility </option>
      <?php 
       $all_member = $this->Database_conn2->get_all_users('users');
      if(isset($all_member))
      {
        foreach ($all_member as $value) 
        {
            $selected = (isset($updateFlag)&&($edit_data['0']['responsibility']!=''))?'selected':'';
            ?>
            <option value="<?php echo $value['id'];?>" title="<?php echo $value['email_id'];?>" <?php echo $selected;?> > <?php echo $value['username'];?></option>
        <?php } } ?>
     </select>
    </td>
  </tr>


   <tr>
    <td><strong>Target date of Completion</strong></td>
    
    <td>
     <input type="date" name="target_date"  value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['target_date']:'' ;?>"/>
     
    </td>
    <td><strong>Contact Details</strong></td>
    
    <td>
     <input type="text" name="contact_no"  value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['contact_no']:'' ;?>"/>
     
    </td>
  </tr>
  


 <tr>
    
     
    
    <td><strong> Risk Category </strong></td>
    <td>
      <input type="text" name="risk"  value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['risk']:'' ;?>"/>
     
    </td>
    <td><strong>Reminder Frequency </strong></td>
    
    <td><select name="reminder_days" >
      <option>Select Reminder Frequency</option>
      <?php 
      for($i=1;$i<=30;$i++)
      { 
      $selected = (isset($updateFlag)&&($edit_data['0']['reminder_days']==$i))?'selected':'';
      ?>
      <option value="<?php echo $i;?>" <?php echo $selected;?> ><?php echo $i." "." days";?></option>
      <?php } ?>
    </select>
     
     
    </td>
  </tr>


<tr>
    
    
    <td><strong> Reminder Time</strong><br><br><strong>Completion Status</strong></td>
    <td>
      <input type="time" name="reminder_time"   value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['reminder_time']:'' ;?>" />
         <br>
     <select name="status" >
      <option> Select Status </option>
      <?php 
      $status = $this->Database_conn2->get_tracking_status('tracking_status');
      if(isset($status)&&sizeof($status)>0)
      {
        foreach ($status as $key) 
        {
         $selected = (isset($updateFlag)&&($edit_data['0']['status']==$key['id']))?'selected':'';
         ?>
         <option value="<?php echo $key['id'];?>" <?php echo $selected;?> > <?php echo  $key['name'];?></option>
       <?php  } } ?>
     </select>

    </td>
    <td><strong> Remark </strong></td>
    <td><textarea name="remark" rows="4"><?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['remark']:'' ;?></textarea></td>
  </tr>
<?php if($this->session->user_type=='admin'||$this->session->user_type=='Admin'||$this->session->user_type=='ADMIN')
{?>
<tr>
  <td><strong> Email Notification </strong></td>
  <td>
    <select name="email_notification">
      <option value="0" <?php echo (isset($updateFlag)&&($updateFlag == 1)&&$edit_data['0']['email_notification']=='0')?'selected':'' ;?> > ON </option>
      <option value="1" <?php echo (isset($updateFlag)&&($updateFlag == 1)&&$edit_data['0']['email_notification']=='1')?'selected':'' ;?> > OFF </option>
    </select>
  </td>
  <td colspan="2"></td>
</tr>
<?php } ?>
  
<tr>
    <td colspan="4">
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


<p class="block-heading">Projects List</p>
  <div class="well">
    <table class="table">
      <thead>
      <tr>
                    <th>S.No.</th>
                    <th>Project Name</th>
                    <th>Noting Title</th>
                    <th>Noting Place </th>
                    <th>Noting Date</th>
                    <th>Points</th>
                    <th>Target Date of Completion</th>
                    <th>Actual Completion Date</th>
                    <th>Responsibility</th>
                    <th>Contact Number</th>
                    <th>Risk Category</th>
                    <th>Status</th>
                    <!-- <th>View</th> -->
                    <th>Action</th>
                    <th>Assign Email</th>
      </tr>
                  </thead>
                  <tbody>

                    <?php 
                    $dataArr = $this->Database_conn2->fetch_alltracking_detail('tracking_detail');

                    if(isset($dataArr)&&sizeof($dataArr)>0)
                     {  
                      $i=0;
                     foreach($dataArr as $data)
                     { ?>
                              

                      <tr>
                      <td><?php echo ++$i;?></td>
                      <td><?php echo $data['project_name'];?></td>
                      <td><?php echo $data['noting_title'];?></td>
                      <td><?php echo $data['noting_place'];?></td>
                      <td><?php echo $data['noting_date'];?></td>
                      <td><?php echo $data['points'];?></td>
                      <td><?php echo $data['target_date'];?></td>
                      <td><?php echo $data['actual_date'];?></td>
                      <td><?php echo $data['responsibility'];?></td>
                      <td><?php echo $data['contact_no'];?></td>
                      <td><?php echo $data['risk'];?></td>
                      <td><?php echo $data['name'];?></td>
                      <!-- <td>
                      <?php 
                      echo form_open('da_projects/edit_tracking');?>
                        <input type="hidden" name="view_id" value="<?php echo $data['id'];?>" />
                        <input type="submit" class="btn btn-primary" name="view" value="View" />
                        <?php echo form_close();?>
                      </td> -->
                      <td>
                      <?php 
                      
                      $tid = $data['id'];
                      echo form_open('da_projects/edit_tracking/'.$tid);?>
                        <input type="hidden" name="edit_id" value="<?php echo $data['id'];?>" />
                        <input type="submit" class="btn btn-primary" name="edit" value="Edit" />
                        <?php echo form_close();?>
                      </td>
                      <td>
                          <?php
                          $form = array('class'=>'email_notification');
                          echo form_open('da_projects/assign_email_notification',$form);?>
                          <input type="hidden" name="edit_id" value="<?php echo $data['id'];?>" />
                          <input type="submit" class="btn btn-primary" name="assign_email" value="Assign Email">
                          <?php echo form_close();?>
                      </td>
                      </tr>
                    

                     <?php }
                  }
                  else
                  {
                   echo "<tr><td colspan='14'><h4 align='center'>No Record Found</h4></td></tr>
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