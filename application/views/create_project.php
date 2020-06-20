
<?php include('header.php');?>

<?php if(isset($this->session->project_id))
{
  include('sidemenu.php');
}
?>

<style>
.full_screen
{
  margin:0px !important;
}
.display_anchor
{
  color:#548ea5 !important;
  font-size: 17px;
  font-weight: 550;
}
.display_anchor:hover
{
  color: #f31414 !important;
}

.product_view .modal-dialog{max-width: 800px; width: 100%;}
.pre-cost{text-decoration: line-through; color: #a5a5a5;}
.space-ten{padding: 10px 0;}
</style>  
<?php 
if(isset($_POST['add_project_show']))
{
   $display_project = "block";
}
?>

    <?php if(isset($this->session->project_id))
    {
      echo '<div class="content">';
    }
    else
    {
      echo '<div class="content" style="margin:0px !important;">';
    } ?>
        
        <div class="header">
            
            <h1 class="page-title">Create Project</h1>
        </div>
        
        <div class="container-fluid">
            <div class="row-fluid">

	<div class="row-fluid">
    <h4 align="center" style="color:red">You Can Create Maximum 5 Project</h4>
	</div>
<div class="row-fluid">
<a href="<?php echo base_url('da_projects/project_list');?>" class="btn btn-primary" style="float:right;margin: 10px;" >Project Login</a>
<form method="post" action="">
<input type="submit" name="add_project_show"  class="btn btn-primary" style="float:right;margin: 10px;" value="Add Project">
</form>
 &nbsp; </div>

<?php if(isset($msg))
  { ?>
  <h4 class="alert alert-info" style="text-align: center"><?php echo $msg;?></h4>
  <?php } ?>


<div class="well" style="display:<?php echo $display_project;?>">


  
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
          <table width="100%" >
                      <?php 
                      $form=array(
                      'class'=>'form-element',
                      'role'=>'form'
                      );
                      echo form_open('project', $form);?>

  <input type="hidden" name="updt_flag" id="updt_flag" value=""/>
  <tr>
    <td><strong>Name of Project <span style='color:red;'>*</span></strong></td>
    <td><div align="center"></div></td>
    <td><input type="text" name="project_name" id="project_name" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['project_name']:'' ;?>" required/></td>
    <td></td>
    <td><strong>Project Location <span style='color:red;'>*</span></strong></td>
    <td><div align="center"></div></td>
    <td><input type="text" name="location" id="location" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['location']:'' ;?>" required/></td>
  </tr>
  
  <tr>
    <td><strong>Type of Project <span style='color:red;'>*</span></strong></td>
    <td><div align="center"></div></td>
    <td><select name="project_type" id="project_type" required>
    <option value="">Select</option>
    <?php $project_type = $this->Common->getData('project_type',array('is_active'=>'1'));
     //$alter_table = $this->Common->get_all_table();
     //echo "<pre>";print_r($alter_table);
    if(isset($project_type))
    {
      foreach($project_type as $type)
      {
        $selected = (isset($updateFlag)&&$updateFlag=='1'&&$type['id']==$edit_data['0']['type_of_project'])?'selected':'';?>
        <option value="<?php echo $type['id'];?>" <?php echo $selected;?> ><?php echo $type['project_type'];?></option>

  <?php } } ?>
    </select></td>
    <td></td>
    <td><strong>Address <span style='color:red;'>*</span></strong></td>
    <td><div align="center"></div></td>
    <td>
      <textarea name="address" id="address" rows="2" required> <?php echo (isset($updateFlag)&&$updateFlag=='1')?$edit_data['0']['address']:'' ;?></textarea>
    </td>
  </tr>
  
  <tr>
    <td><strong>Company Name<span style='color:red;'>*</span></strong></td>
    <td><div align="center"></div></td>
    <td>
      <select name="company" id="company" required>
    <?php $company_name = $this->Common->getData('company_master',array('is_active'=>'1','id'=>$this->session->company_id));
     if(isset($company_name))
    {
      foreach($company_name as $type)
      {
        $selected = (isset($updateFlag)&&$updateFlag=='1'&&$type['id']==$edit_data['0']['company_id'])?'selected':'';?>
        <option value="<?php echo $type['id'];?>" <?php echo $selected;?> ><?php echo $type['company_name'];?></option>

  <?php } } ?>
    </select>
     </td>
    <td></td>
    <td><strong>TIN Number</strong></td>
    <td><div align="center"></div></td>
    <td><input type="text" name="tin_no" id="tin_no" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['tin_no']:'' ;?>" /></td>
  </tr>
 
 <tr>
    <td><strong>GST Number <span style='color:red;'>*</span></strong></td>
    <td><div align="center"></div></td>
    <td><input type="text" name="gst_no" id="gst_no" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['gst_no']:'' ;?>" required/></td>
    <td></td>
    <td><strong>Total Build Up Area(in Sqft) <span style='color:red;'>*</span></strong></td>
    <td><div align="center"></div></td>
    <td><input type="text" name="build_up_area" id="build_up_area" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['build_up_area']:'' ;?>" required/></td>
  </tr>
  
  <tr>
    <td><strong>Project Start Date</strong></td>
    <td><div align="center"></div></td>
    <td><input type="date" name="start_date" id="start_date" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['start_date']:'' ;?>" /></td>
    <td></td>
    <td><strong>Total Project Duration (in month)</strong></td>
    <td><div align="center"></div></td>
    <td><input type="text" name="duration" id="duration" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['duration']:'' ;?>" /></td>
</tr>
<tr>
    <td><strong>Budgeted Cost</strong></td>
    <td><div align="center"></div></td>
    <td><input type="text" name="budgeted_cost" id="budgeted_cost" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['budgeted_cost']:'' ;?>" /></td>
    <td></td>
    <td><strong>Project Brief</strong></td>
    <td><div align="center"></div></td>
    <td><textarea name="project_brief" id="project_brief"><?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['project_brief']:'' ;?></textarea></td>
  </tr>

<tr>
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


<p class="block-heading">Projects List</p>
  <div class="well">
    <table class="table" style="font-size: 13px;">
      <thead>
      <tr>
                    <th style="width:10%">S.No.</th>
                    <th style="width:10%">Project Name </th>
                    <th style="width:10%">Project Type</th>
                    <th style="width:10%">Company</th>
                    <th style="width:10%">Project Location</th>
                    <th style="width:10%">Address</th>
                    <th style="width:10%">Project Start Date</th>
                    <th style="width:10%">Project Duration (in Month)</th>
                    <th style="width:10%">Project Budget</th>
                    <th style="width:10%">Build Up Area(in Sqft)</th>
                    <th style="width:10%">Project Brief</th>
                    <th style="width:10%">Action</th>
      </tr>
                  </thead>
                  <tbody>

                    <?php 
                     $dataArr=$this->Common->get_all_project(array('projects.company_id'=>$this->session->company_id));
                    if(sizeof($dataArr)>0)
                     {  $i=0;
                     foreach($dataArr as $data)
                     { ?>
                              

                      <tr>
                      <td><?php echo ++$i;?></td>
                      <td><?php echo $data['project_name'];?></td>
                      
                      <td><?php echo $data['project_type'];?></td>
                      
                      <td><?php echo $this->Common->getDataSingle('company_master','company_name',array('id'=>$this->session->company_id));?></td>
                      
                      <td><a  title="<?php echo $data['location'];?>" data-toggle="modal" data-target="#product_view" onclick='getdesc(this.title,"Location");'><?php echo read_more($data['location'],'15');?></a></td>
                      
                      <td><a  title="<?php echo $data['address'];?>" data-toggle="modal" data-target="#product_view" onclick='getdesc(this.title,"Address");' ><?php echo read_more($data['address'],'15');?></a></td>
                      
                      <td><?php echo date("d-M-Y" , strtotime($data['start_date']));?></td>
                      
                      <td><?php echo $data['duration'];?></td>
                      
                      <td><?php echo $data['budgeted_cost'];?></td>
                      
                      <td><?php echo $data['build_up_area'];?></td>
                      
                      <td>
                        <a  title="<?php echo $data['project_brief'];?>" data-toggle="modal" data-target="#product_view" onclick='getdesc(this.title,"Project Brief");' >
                        <?php echo read_more($data['project_brief'],15);?></a>
                      </td>
                      
                      <td>
                      <?php 
                      $form=array(
                      'class'=>'form-element',
                      'role'=>'form');
                      echo form_open('project/edit_project', $form);?>
                        <input type="hidden" name="edit_id" value="<?php echo $data['id'];?>" />
                        <input type="submit" class="btn btn-primary" name="edit" value="Edit" />
                        <?php echo form_close();?>
                      </td>
                      
                      </tr>
                    

                     <?php }
                  }
                  else
                  {
                   echo "<tr><td colspan='12'><h4 align='center'>No Record Found</h4></td></tr>";
                  } ?>
         
      
      
      </tbody>
    </table>
  </div>


                    
            </div>
        </div>
    </div>


 <div class="modal fade product_view" id="product_view">
    <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
                 <a href="#" data-dismiss="modal" class="class pull-right" title=" CLOSE "><i class="fa fa-remove" style="font-size:30px;color:red"></i></a>
                <h3 class="modal-title" id="heading-model">  </h3>
            </div>
            <div class="container-fluid">
            <div class="row-fluid">

      
           <?php
           echo  form_open_multipart('da_projects/upload_form');?>  

              <div  style="margin:50px;">
              <div class="row">
              <p id="text_show"></p>



              </div>
            

             
     
         </div>
       </div>
     </div>
   </div>
 </div>
</div>
    
<?php require('footer.php'); ?>

 <script type="text/javascript">
   function getdesc(text,txt)
   {

      document.getElementById('text_show').innerHTML = text;
      document.getElementById('heading-model').innerHTML = txt;
   }
 </script>