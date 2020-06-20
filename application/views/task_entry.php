<?php //$this->output->enable_profiler(TRUE);

$project_id = $this->session->project_id;
if(isset($_POST['upload_csv'])){
    if(isset($_FILES['csv_data']['name']))
    {
      
      $arrFileName = explode('.',$_FILES['csv_data']['name']);
      if($arrFileName[1] == 'csv')
      {
         $i=0;
         $fail="";
        $handle = fopen($_FILES['csv_data']['tmp_name'], "r");
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) 
        {
          $i++;
          $activity_name = $data[0];
          $responsibility = $data[1];
          $target_start_date = $data[2];
          $actual_start_date = $data[3];
          $target_completion_date = $data[4];
          $actual_completion_date = $data[5];
          $status = $data[6];
          $remark = $data[7];

          //echo "<pre>";print_r($data);exit;
          $already_exit = $this->Common->get_data_single('activity_management','id',array('project_id'=>$project_id,'activity_name'=>$activity_name,'target_start_date'=>$target_start_date,'target_completion_date'=>$target_completion_date));
          if(isset($already_exit))
          {
            $fail = $fail.",".$i;
            continue;
          }
          else
          {
              $insert_array = array(
              'activity_name'=>$activity_name,
              'project_id'=>$project_id,
              'responsibility'=>$responsibility,
              'target_start_date'=>$target_start_date,
              'actual_start_date'=>$actual_start_date,
              'target_completion_date'=>$target_completion_date,
              'actual_completion_date'=>$actual_completion_date,
              'status'=>$status,
              'remark'=>$remark,
              'is_active'=>'1',
              'created_by'=>$this->session->user_id,
              'created_on'=>date("Y-m-d H:i:s")
              );
              $insert = $this->Common->insertData('activity_management',$insert_array);
          }
        }
        $msg = "File Imported Successfully.";
        if(isset($fail)&&$fail!='')
        {

          $msg = $msg." Except Row ".substr($fail,1)." are not imported. Please check the Activity Name ,Target Start and Target Complete Dates in the Excel File. ";
        }
        fclose($handle);
      }
    }
  }
  ?>

<?php include('header.php');?><?php include('sidemenu.php');?>

  <div class="content">
   <div class="header">
     <h1 class="page-title">Add Task </h1>
   </div>

    <div class="container-fluid">
      <div class="row">
        <a href="<?php echo base_url('Task_Planner/task_status'); ?>" class="btn btn-primary" style="font-size: 12px;margin: 10px 10px 10px 50px;">View All Task </a>
      </div>
      <div class="row-fluid">
         <div class="row-fluid">
         </div>
         <div class="row-fluid">&nbsp;
          <form method='POST' enctype='multipart/form-data'>
      <strong>Upload CSV:</strong> 
      <input type='file' name='csv_data' /> 
      <input type='submit' class="btn btn-primary" name='upload_csv' value='Upload Activity CSV' />
      </form>
         </div>
           <div class="well">


  <?php if(isset($msg))
  { ?>
  <h4 class="alert alert-info" style="text-align: center"><?php echo $msg;?></h4>
  <?php } ?>
            <div id="myTabContent" class="tab-content">
             <div class="tab-pane active in" id="home">

                     <table width="100%" style="text-align: left">
                      <?php 
                      $form=array(
                      'class'=>'form-element',
                      'role'=>'form'
                      );
                      echo form_open('Task_Planner/create_task', $form);?>

                   <input type="hidden" name="updt_flag" id="updt_flag" value=""/>

  


<tr>
<td><strong>Activity Name</strong></td>
<td><input type="text" name="activity_name" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['activity_name']:'' ;?>"/></td>
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
<td><strong>Target Start Date</strong></td> 
<td>
<input type="date" name="target_start_date"  value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['target_start_date']:'' ;?>"/>
</td>
<td><strong>Actual Start Date</strong></td>
<td>
<input type="date" name="actual_start_date"   value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['actual_start_date']:'' ;?>" /></td>
</tr> 


<tr>
<td><strong>Target Completion Date</strong></td> 
<td>
<input type="date" name="target_completion_date"  value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['target_completion_date']:'' ;?>"/>
</td>
<td><strong>Actual Completion Date</strong></td>
<td>
<input type="date" name="actual_completion_date"   value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['actual_completion_date']:'' ;?>" /></td>
</tr> 


<tr>
<td><strong>Completion Status</strong></td>
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
<td><strong>Remark</strong></td>
<td><textarea name="remark" rows="3" ></textarea></td>
</tr>

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
<input type="submit" class="btn btn-primary" name="submit" id="save" value="Submit" />
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





                    
            </div>
        </div>
    </div>
    
<?php require('footer.php'); ?>

  
  </body>
</html>                                               