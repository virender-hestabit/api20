<?php include('header.php');?>
<?php include('sidemenu.php');?>

    <div class="content">
        
        <div class="header">
            
            <h1 class="page-title">Project Charter</h1>
        </div>
        
        <div class="container-fluid">
            <div class="row-fluid">

<?php 
if(isset($_POST['add_project_show']))
{
   $project_charter_show = "block";
}
?>

	<div class="row-fluid">
	</div>
<div class="row-fluid">
<a href="<?php echo base_url('project');?>" class="btn btn-primary" style="float:right;margin: 10px;" >Create Project</a>
<!-- <form method="post" action="">
<input type="submit" name="add_project_show"  class="btn btn-primary" style="float:right;margin: 10px;" value="Add Project Charter">
</form> -->
 &nbsp; </div>
<?php if(isset($msg))
  { ?>
  <h4 class="alert alert-info" style="text-align: center"><?php echo $msg;?></h4>
  <?php } ?>

<div class="well" style="display:<?php echo $project_charter_show;?>">


  
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
          <table width="100%">
                      <?php 
                      $form=array(
                      'class'=>'form-element',
                      'role'=>'form'
                      );
                      echo form_open('da_projects/project_charter', $form);?>
  <tr>
    <td><strong>Project</strong></td>
    <td>
      <select name="project" id="" required>
       <?php 
       $condition = array('id'=>$this->session->project_id);
      
       if($this->session->project_id)
       {
          $project_cond_array = array('is_active'=>'1','company_id'=>$this->session->company_id,'id'=>$this->session->project_id);
       }
       else
       {
          $project_cond_array = array('is_active'=>'1','company_id'=>$this->session->company_id);
       }
       $get_project = $this->Common->getData('projects',$project_cond_array);
       if(isset($get_project)&&sizeof($get_project)>0)
       {
        foreach ($get_project as $project) 
        {
         $selected = (isset($edit_flag)&&$edit_flag=='1'&&$edit_user['project_id']==$project['id'])?'selected':'';
         ?>
         <option value="<?php echo $project['id'];?>" <?php echo $selected;?> ><?php echo $project['project_name'];?></option>
         <?php } } ?>   
      </select>
      </td>
      <td><strong>Consultants 2</strong></td>
      <td><input type="text" name="consultant2"  value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['consultants2']:'' ;?>" /></td> 
      </tr>   



  <tr>
    <td><strong>Tentative Project Cost</strong></td>
    <td><input type="text" name="proj_cost" id="proj_cost" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['tentative_project_cost']:$this->Common->getDataSingle('projects','budgeted_cost',$condition) ;?>" /></td>
     <td><strong>Consultants 3</strong></td>
      <td><input type="text" name="consultant3"  value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['consultants3']:'' ;?>" /></td>
  </tr>

  <tr>
    <td><strong>Tentative Timeline (in months)</strong></td>
    <td><input type="text" name="timeline" id="timeline" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['tentative_project_timeline']:$this->Common->getDataSingle('projects','duration',$condition) ;?>" /></td>
    <td><strong>Consultants 4</strong></td>
      <td><input type="text" name="consultant4"  value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['consultants4']:'' ;?>" /></td>
  </tr>

  <tr>
    <td><strong>Buildup Area (in sqft)</strong></td>
    <td><input type="text" name="buildup_area" id="buildup_area" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['buildup_area']:$this->Common->getDataSingle('projects','build_up_area',$condition) ;?>" /></td>
     <td><strong>Consultants 5</strong></td>
      <td><input type="text" name="consultant5"  value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['consultants5']:'' ;?>" />
       </td>
  </tr>

  <tr>
     <td><strong>Architect</strong></td>
    <td><input type="text" name="architect" id="architect" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['architects']:'' ;?>" /></td>
    <td><strong>Consultants 6</strong></td>
      <td><input type="text" name="consultant6"  value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['consultants6']:'' ;?>" />
       </td>
  </tr>

  <tr>
     <td><strong>Consultants 1</strong></td>
      <td><input type="text" name="consultant1"  value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['consultants1']:'' ;?>" /></td>
     <td><strong>Consultants 7</strong></td>
      <td><input type="text" name="consultant7"  value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['consultants7']:'' ;?>" /></td>
  </tr>

 
  <tr>
    <td><strong>Major Constraints</strong></td>
    <td colspan="3"><input type="text" name="major_constraints" id="major_constraints" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['major_constraints']:'' ;?>" /></td>
  </tr>

   <tr>
    <td><strong>Project Brief (Requirements)</strong></td>
    <td colspan="3"><textarea name="brief_requirement" id="brief_requirement" cols="30" rows="1"><?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['project_brief']:$this->Common->getDataSingle('projects','project_brief',$condition) ;?></textarea></td>
  </tr>

  <tr>
    <td colspan="3"><div align="center">
        <?php if(isset($updateFlag)&&($updateFlag == 1))
        { ?>
          <input type="hidden"  name="update_id"  value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['id']:'' ;?>" />
          <input type="submit" class="btn btn-primary" name="update"  value="Update" />
       <?php  }
        ?>
      
      </div></td>
  </tr>

<?php echo form_close();?>
</table>
          </div>
           <div class="tab-pane fade" id="profile">
      </div>
  </div>

</div>


<p class="block-heading">Project Charter List</p>
  <div class="well">
    <table class="table" style="font-size: 12px;">
      <thead>
      <tr>
                    <th>S.No.</th>
                    <th>Project Name</th>
                    <th>Tentative Project Cost</th>
                    <th>Tentative Timeline</th>
                    <th>Buildup Area</th>
                    <th>Project Brief/Requirements</th>
                    <th>Architect</th>
                    <th>Consultants 1</th>
                    <th>Major Constraints</th>
                    <th>Action</th>
      </tr>

                  </thead>
                  

                    <?php 

                    $dataArr=$this->Common->getProjectCharter();

                    if(isset($dataArr)&&sizeof($dataArr)>0)
                  {  $i=0;
                     foreach($dataArr as $data)
                     { ?>
                              

                      <tr>
                      <td><?php echo ++$i;?></td>
                      <td><?php echo $data['project_name'];?></td>
                      <td><?php echo $data['tentative_project_cost'];?></td>
                      <td><?php echo $data['tentative_project_timeline'];?></td>
                      <td><?php echo $data['buildup_area'];?></td>
                      <td><?php echo $data['project_brief'];?></td>
                      <td><?php echo $data['architects'];?></td>
                      <td><?php echo $data['consultants1'];?></td>
                      <td><?php echo $data['major_constraints'];?></td>
                      <td><?php 
                      $form=array(
                      'class'=>'form-element',
                      'role'=>'form');
                      echo form_open('da_projects/edit_project_charter', $form);?>
                        <input type="hidden" name="edit_id" value="<?php echo $data['id'];?>" />
                        <input type="submit" class="btn btn-primary" name="edit" value="Edit" />
                        <?php echo form_close();?></td>

                      </tr>

                    

                     <?php }
                  }
                  else
                  {
                    echo "<tr><td colspan='9'><h4 align='center'>No Record Found</h4></td></tr>
                    ";
                  } ?>
         
      
      
      
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


         CKEDITOR.replace( 'major_constraints' );
         CKEDITOR.replace( 'brief_requirement' );
    </script>
    

    
