<?php include('header.php');?><?php include('sidemenu.php');?>
    <div class="content">
        
        <div class="header">
            
            <h1 class="page-title">Create User</h1>
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
<div id="validate_user" style="color:red;text-align: center; height: 30px;"></div>

    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
          <table width="100%">
                      <?php 
                      $form=array(
                      'class'=>'form-element',
                      'role'=>'form'
                      );
                      echo form_open('admin/create_user', $form);?>

  <tr>
    <td><strong>Project</strong></td>
    <td><div align="center"></div></td>
    <td>
      <select name="project" id="" required>
       <?php 
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
    <td></td>
    <td><strong>Full Name</strong></td>
    <td><div align="center"></div></td>
    <td><input type="text" name="full_name"  value="<?php echo (isset($edit_flag)&&($edit_flag =='1'))?$edit_data['0']['full_name']:'' ;?>" required/></td>
  </tr>
  
  <tr>
    <td><strong>Login ID</strong></td>
    <td><div align="center"></div></td>
    <td>
      <div class="search-box " style="position: relative;">
      <input type="text" name="user_name"  value="<?php echo (isset($edit_flag)&&($edit_flag =='1'))?$edit_data['0']['username']:'' ;?>" required/>
      </div>
    </td>
    <td></td>
    <td><strong>Password</strong></td>
    <td><div align="center"></div></td>
    <td><input type="text" name="password"  value="<?php echo (isset($edit_flag)&&($edit_flag =='1'))?$edit_data['0']['password']:'' ;?>" required/></td>
  </tr>
  

  <tr>
    <td><strong>Company</strong></td>
    <td><div align="center"></div></td>
    <td>
      <select name="company" id="other_company_type" required onchange="get_company_name(this.value)">
    <?php $company_name = $this->Common->getData('company_master',array('is_active'=>'1','id'=>$this->session->company_id));
     if(isset($company_name))
    {
      foreach($company_name as $type)
      {
        // $selected = (isset($updateFlag)&&$updateFlag=='1'&&$type['id']==$edit_data['0']['company_id'])?'selected':'';
        if(isset($edit_flag)&&($edit_flag =='1')&&$edit_data['0']['company_type']=='other_company')
        { ?>
            <option value="other_company" >Other</option>
            <option value="<?php echo $type['id'];?>"  ><?php echo $type['company_name'];?></option>
       <?php }
        else
        { ?>
            <option value="<?php echo $type['id'];?>"  ><?php echo $type['company_name'];?></option>
            <option value="other_company" >Other</option>
        <?php } ?>
        
        

  <?php } } ?>
    </select>
    <td></td>
    <?php $none = (isset($edit_flag)&&($edit_flag =='1')&&$edit_data['0']['company_type']=='other_company')?'block':'none';?>
    <td class="other_company_tr" style="display:<?php echo $none;?>"><strong>Company Name</strong></td>
    <td><div align="center"></div></td>
    <td class="other_company_tr" style="display:<?php echo $none;?>">
    <input type="text" name="other_company_name" value="<?php echo (isset($edit_flag)&&($edit_flag =='1'))?$edit_data['0']['company']:'' ;?>" >
    </td>
  </tr>



  <tr>
    <td><strong>Department</strong></td>
    <td><div align="center"></div></td>
    <td><input type="text" name="department"  value="<?php echo (isset($edit_flag)&&($edit_flag =='1'))?$edit_data['0']['department']:'' ;?>" required/></td>
    <td></td>
    <td><strong>Email Id</strong></td>
    <td><div align="center"></div></td>
    <td><input type="text" name="email_id"  value="<?php echo (isset($edit_flag)&&($edit_flag =='1'))?$edit_data['0']['email_id']:'' ;?>" required/></td>
    
  </tr>
  

   <tr>
     <td><strong>Status</strong></td>
    <td><div align="center"></div></td>
    <td>
      <select name="is_active" id="" >
      
         <option value="1" <?php echo (isset($edit_flag)&&($edit_flag =='1')&&$edit_data['0']['is_active']=='1')?'selected':'';?> >Active</option>   
         <option value="0" <?php echo (isset($edit_flag)&&($edit_flag =='1')&&$edit_data['0']['is_active']=='0')?'selected':'';?> >Deactive</option>   
      </select>   
    </td>
    <td></td>
    <td><strong>User Type</strong></td>
    <td><div align="center"></div></td>
    <td>
      <select name="user_type" id="" required>
       <option value="" > Select User Type</option>
         <?php  $user_type = $this->Common->getUserType();
         if(isset($user_type))
         {
          foreach ($user_type as $value) 
          {
             $selected = (isset($edit_flag)&&($edit_flag =='1')&&$edit_data['0']['user_type']==$value['user_type'])?'selected':'';
             ?>
         <option value="<?php echo $value['user_type'];?>" <?php echo $selected;?> ><?php echo $value['user_type'];?></option>   
         <?php } } ?>
      </select>   
    </td>
  </tr>


  
<tr>
    <td colspan="7">
    <div align="center">
    <?php if(isset($edit_flag)&&($edit_flag =='1'))
    { ?>
    <input type="hidden"  name="update_id"  value="<?php echo (isset($edit_flag)&&($edit_flag == 1))?$edit_data['0']['id']:'' ;?>" />
    <input type="submit" class="btn btn-primary" name="update_user"  value="Update" />
    <?php  }
    else
    { ?>
    <input type="submit" class="btn btn-primary" name="submit_user" id="save" value="Submit" />
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


<p class="block-heading">User List</p>
  <div class="well">
    <table class="table">
      <thead>
      <tr>
                    <th>S.No.</th>
                    <th>Project Name </th>
                    <th>User Name </th>
                    <th>Password </th>
                    <th>Full Name </th>
                    <th>Email Id </th>
                    <th>User Type</th>
                    <th>Company</th>
                    <th>Department</th>
                    <th>Status</th>
                    <th>Action</th>
      </tr>
                  </thead>
                  <tbody>

                    <?php 

                   
                   $dataArr  = $this->Common->getUserDeatil();
                    if(isset($dataArr)&&sizeof($dataArr)>0)
                  {  $i=0;
                     foreach($dataArr as $data)
                     { $user_id = $data['id']; 
                      ?>
                              

                      <tr>
                      <td><?php echo ++$i;?></td>
                      <td><?php echo $data['project_name'];?></td>
                      <td><?php echo $data['username'];?></td>
                      <td><?php echo $data['password'];?></td>
                      <td><?php echo $data['full_name'];?></td>
                      <td><?php echo $data['email_id'];?></td>
                      <td><?php echo $data['user_type'];?></td>
                      <td><?php if($data['company_type']=='our_company')
                                 { 
                                      echo $this->Common->getDataSingle('company_master','company_name',array('id'=>$data['company_id']));
                                 }
                                 else
                                 {
                                      echo $data['company'];
                                 }  
                      ?></td>
                      <td><?php echo $data['department'];?></td>
                      <td><?php echo ($data['is_active']=='1')?'Active':'Deactive';?></td>
                      <td style="text-align: center">
                      <a href="<?php echo base_url('admin/edit_user/'.$user_id); ?>" title=" Edit "><i class="fa fa-edit"></i></a>
                      </td>
                      </tr>
                    

                     <?php }
                  }
                  else
                  {
                   echo "<tr><td colspan='11'><h4 align='center'>No Record Found</h4></td></tr>
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

$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
      
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
                  $.ajax({
                  url: "<?php echo base_url('admin/ajax_validate_username');?>",
                  method:'POST',
                  data:  { 'username':inputVal},
                  success: function(msg) {
                  $('#validate_user').html(msg);
                  }
                  });
        } 
        else{
            resultDropdown.empty();
        }
    });
});

   function get_company_name(company_type)
   {
    if(company_type=='other_company')
    {
      $(".other_company_tr").css("display","block");
    }
    else
    {
      $(".other_company_tr").css("display","none"); 
    }
   }
       

        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
  </body>
</html>