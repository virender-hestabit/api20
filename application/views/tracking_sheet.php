
<?php include('header.php');?>
<?php include('sidemenu.php');?>
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
            <h1 class="page-title">Tracking & Follow up Sheet</h1>
           </div>
        
        <div class="container-fluid">
            <div class="row-fluid">

  <div class="row-fluid">
  </div>
  <?php 
   $tracking_number_unique = $this->Database_conn->getNextSerialNumber('tracking_number');
  if(isset($_POST['vertical_form'])||isset($_POST['horizontal_form']))
  {
     if(isset($_POST['vertical_form']))
     {
       $horizontal_form = "list_form";
     }
     else
     {
       $horizontal_form = "inline_form";
     }
  }
  ?>
<div class="row-fluid">&nbsp;</div>
<form method="post" action="">
  <input type="submit" name="vertical_form" value=" List Form " class="btn btn-primary">
  <input type="submit" name="horizontal_form" value=" Inline Form " class="btn btn-primary">
</form>
<div class="well">


  <?php if(isset($msg))
  { ?>
  <h4 class="alert alert-info" style="text-align: center"><?php echo $msg;?></h4>
  <?php } ?>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">


        <?php 
        if(isset($horizontal_form)&&$horizontal_form=='inline_form')
          { ?>
          <table width="100%" style="text-align: center;">
                      <?php 
                      $form=array(
                      'class'=>'form-element',
                      'role'=>'form'
                      );
                      echo form_open('da_projects/tracking_sheet/'.$horizontal_form, $form);
                      ?>
        

  <input type="hidden" name="updt_flag" id="updt_flag" value=""/>

   <tr>
        <td><strong>Tracking Number</strong></td>
        <td><strong>Noting Title</strong></td>
        <td><strong> Noting Date</strong></td>
        <td><strong>Noting Place</strong></td>
        <td><strong>Points</strong></td>
        <td><strong> Actual Completion Date</strong></td>
        <td><strong> Responsibility</strong></td>
        <td><strong>Target date of Completion</strong></td>
        <td><strong>Email Id</strong></td>
        <td><strong> Risk Category </strong></td>
        <td><strong>Reminder Frequency </strong></td>
        <td><strong> Reminder Time</strong></td>
        <td><strong>Completion Status</strong></td>
        <td><strong> Remark </strong></td>
        <?php if($this->session->user_type=='admin'||$this->session->user_type=='Admin'||$this->session->user_type=='ADMIN')
        {?>
          <td><strong> Email Notification </strong></td>
        <?php } ?>
       
        <td><strong>Action</strong></td>
    </tr>




    <tr>
        <td><input type="text" name="tracking_number" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['tracking_number']:$tracking_number_unique ;?>" readonly />
        </td>


        





        <td><input type="text" name="noting_title" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['noting_title']:'' ;?>" />
        </td>

        <td>
        <input type="date" name="noting_date"   value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['noting_date']:'' ;?>" />
        </td>

        <td>
        <input type="text" name="noting_place" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['noting_place']:'' ;?>" />
        </td>


        <td>
        <textarea name="points" rows="1" ><?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['points']:'' ;?></textarea>
        </td>

        <td>
        <input type="date" name="actual_date"   value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['actual_date']:'' ;?>" />
        </td>

        <td>
        <select name="responsibility" onchange="get_user_id1(this.value)">
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

        <td>
          <?php if(isset($edit_data['0'])&&$updateFlag==1)
          {
          $email_id = $this->Common->getDataSingle('users','email_id',array('id'=>$edit_data['0']['responsibility']));
          } ?>
        <input type="date" name="target_date"  value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['target_date']:'' ;?>" />     
        </td>

        <td>
        <input type="text" name="email_id" id="email_id_show1"  value="<?php echo (isset($email_id)&&($email_id !=''))?$email_id:'' ;?>" readonly/>
        </td>

        <td>
        <input type="text" name="risk"  value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['risk']:'' ;?>" />

        </td>

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

        <td>
        <input type="time" name="reminder_time"   value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['reminder_time']:'' ;?>" />
        </td>
        <td>
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

        <td><textarea name="remark" rows="1"><?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['remark']:'' ;?></textarea>
        </td>
  
<?php if($this->session->user_type=='admin'||$this->session->user_type=='Admin'||$this->session->user_type=='ADMIN')
{?>

 
  <td>
    <select name="email_notification" >
      <option value="0" <?php echo (isset($updateFlag)&&($updateFlag == 1)&&$edit_data['0']['email_notification']=='0')?'selected':'' ;?> > ON </option>
      <option value="1" <?php echo (isset($updateFlag)&&($updateFlag == 1)&&$edit_data['0']['email_notification']=='1')?'selected':'' ;?> > OFF </option>
    </select>
  </td>
  
<?php } ?>
      <td>
    
    <?php if(isset($updateFlag)&&($updateFlag == 1))
    { ?>
    <input type="hidden"  name="update_id"  value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['id']:'' ;?>" />
    <input type="submit" class="btn btn-primary" name="update"  value="Update" style="margin-bottom: 10px;"/>
    <?php  }
    else
    { ?>
    <input type="submit" class="btn btn-primary" name="save" id="save" value="Submit" style="margin-bottom: 10px;" />
    <?php } ?>

    </td>
  </tr>

<?php echo form_close();?>
</table>
<?php } 
else
{ ?> 

<table width="100%" style="text-align: left">
                      <?php 
                      $form=array(
                      'class'=>'form-element',
                      'role'=>'form'
                      );
                      echo form_open('da_projects/tracking_sheet/'.$horizontal_form, $form);?>

  <input type="hidden" name="updt_flag" id="updt_flag" value=""/>

  <tr>
          <td><strong>Tracking Number</strong></td>
    
    <td><input type="text" name="tracking_number" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['tracking_number']:$tracking_number_unique ;?>" readonly/>
     </td>
          <td><strong>Noting Title</strong></td>
    
    <td><input type="text" name="noting_title" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['noting_title']:'' ;?>"/>
     </td>
  </tr> 


  <tr>
        <td><strong>Noting Place</strong></td>
    
          <td><input type="text" name="noting_place" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['noting_place']:'' ;?>"/></td>
         
        <td><strong> Noting Date</strong></td>
        <td><input type="date" name="noting_date"   value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['noting_date']:'' ;?>" /></td>

  </tr> 


  <tr>
          
          <td><strong>Target date of Completion<br><br> Actual Completion Date</strong></td>
          <td>
            <input type="date" name="target_date"  value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['target_date']:'' ;?>"/>
            <br>
            <input type="date" name="actual_date"   value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['actual_date']:'' ;?>" />
        </td>
          <td><strong>Points</strong></td>
        <td><textarea name="points" rows="4" ><?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['points']:'' ;?></textarea></td>
           
  </tr>

  <tr>
    
     <td><strong>Assign Responsibility</strong></td>
    <td>
      <select name="responsibility"  onchange="get_user_id(this.value)">
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
    <?php if(isset($edit_data['0'])&&$updateFlag==1)
    {
      $email_id = $this->Common->getDataSingle('users','email_id',array('id'=>$edit_data['0']['responsibility']));
    } ?>
    
    <td><strong>Email Id</strong></td>
    
    <td>
     <input type="text" name="email_id" id="email_id_show2"  value="<?php echo (isset($email_id)&&($email_id !=''))?$email_id:'' ;?>" readonly/>
     
    </td>
  </tr>
  


 <tr>
    
     
  
     
  
     
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
    <td><strong> Reminder Time</strong></td>
    <td>
      <input type="time" name="reminder_time"   value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['reminder_time']:'' ;?>" />
     
    </td>
  </tr>


<tr>
    
    
    <td><strong> Risk Category </strong><br><br><strong>Completion Status</strong></td>
    <td>
       <input type="text" name="risk"  value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['risk']:'' ;?>"/>
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
 
</tr>
<?php }
?>
  
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
<?php } ?>



          </div>
           <div class="tab-pane fade" id="profile">
      </div>
  </div>

</div>


<p class="block-heading">Projects List</p>
  <div class="well" style="overflow-x:auto ">
    <table class="table" style="font-size: 12px;">
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
                      <td><?php echo ($data['noting_date']!='0000-00-00')?(date("d-M-Y",strtotime($data['noting_date']))):'';?></td>
                      <td><a href="" data-toggle="modal" data-target="#product_view" title="<?php echo $data['points'];?>" onclick="show_mesg(this.title);"><?php echo read_more($data['points'],25);?></a></td>
                      <td><?php echo ($data['target_date']!='0000-00-00')?(date("d-M-Y",strtotime($data['target_date']))):'';?></td>
                      <td><?php echo ($data['actual_date']!='0000-00-00')?(date("d-M-Y",strtotime($data['actual_date']))):'';?></td>
                      <td align="center"><?php echo $this->Common->getDataSingle('users','username',array('id'=>$data['responsibility']));?></td>
                      <td><?php echo $this->Common->getDataSingle('users','email_id',array('id'=>$data['responsibility']));?></td>
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
                      echo form_open('da_projects/edit_tracking/'.$tid.'/'.$horizontal_form);?>
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


<div class="modal fade " id="product_view" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right" title=" CLOSE "><i class="fa fa-remove" style="font-size:30px;color:red"></i></a>
                <h3 class="modal-title"> Points </h3>
            </div>
            <div class="container-fluid">
            <div class="row-fluid">
             <div  style="    margin: 20px 5px 20px 43px;">
              <div class="row">
                <p id="show_task_points"></p>
              </div>             
         </div>
       </div>
     </div>
   </div>
 </div>
</div>    
    
<?php require('footer.php'); ?>

    
    <script type="text/javascript">
 
  function show_mesg(mesg)
  {
     document.getElementById('show_task_points').innerHTML = mesg;
  }
  function get_user_id(user_id)
  { //alert(user_id);

     $.ajax({
    url: "<?php echo base_url('da_projects/ajax_show_email');?>",
    method:'POST',
    data:  { 'user_id':user_id},
    success: function(msg) {
    document.getElementById("email_id_show2").value = msg;
    }
    });
  }

   function get_user_id1(user_id)
  { //alert(user_id);

     $.ajax({
    url: "<?php echo base_url('da_projects/ajax_show_email');?>",
    method:'POST',
    data:  { 'user_id':user_id},
    success: function(msg) {
    document.getElementById("email_id_show1").value = msg;
    }
    });
  }

 $(document).ready(function(){
    $(".").click(function(){
        $(".Work").toggle();
    });
});



        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
  </body>
</html>