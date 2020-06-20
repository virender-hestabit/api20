<?php include('header.php');?><?php include('sidemenu.php');?>
    <div class="content">
        
        <div class="header">
            
            <h1 class="page-title">Register Vendor</h1>
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
          <table width="100%" style="font-size: 12px;">
                      <?php 
                      $form=array(
                      'class'=>'form-element',
                      'role'=>'form'
                      );
                      echo form_open('da_projects/vendor_registeration', $form);?>

  <input type="hidden" name="updt_flag" id="updt_flag" value=""/>
  <tr>
    <td><strong> Name </strong></td>
    <td><div align="center"></div></td>
    <td><input type="text" name="vendor_name" id="vendor_name" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['vendor_name']:'' ;?>"/></td>
    <td></td>
    <td><strong>Nature of Business</strong></td>
    <td><div align="center"></div></td>
    <td><input type="text" name="business_nature" id="business_nature" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['business_nature']:'' ;?>" /></td>
  </tr>
  
  <tr>
    <td><strong>Contact No(Office)<br><br>GST No.</strong></td>
    <td><div align="center"></div></td>
    <td>
      <input type="text" name="contact_no_office" id="contact_no_office" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['contact_no_office']:'' ;?>" />
      <br>
      <input type="text" name="gst_no" id="gst_no" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['gst_no']:'' ;?>" />
    </td>
    <td></td>
    <td><strong>Address</strong></td>
    <td><div align="center"></div></td>
    <td>
      <textarea name="vendor_add" id="vendor_add" row="2"><?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['vendor_add']:'' ;?></textarea>
    </td>
  </tr>
  
  <tr>
    <td><strong>Contact Person-1(Name)</strong></td>
    <td><div align="center"></div></td>
    <td><input type="text" name="contact_name1" id="contact_name1" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['contact_name1']:'' ;?>" /></td>
    <td></td>
    <td><strong>Contact Person-2(Name)</strong></td>
    <td><div align="center"></div></td>
    <td><input type="text" name="contact_name2" id="contact_name2" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['contact_name2']:'' ;?>" /></td>
  </tr>
 
 <tr>
    <td><strong>Contact Person-1(Mobile)</strong></td>
    <td><div align="center"></div></td>
    <td><input type="text" name="contact_mobile1" id="contact_mobile1" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['contact_mobile1']:'' ;?>" /></td>
    <td></td>
    <td><strong>Contact Person-2(Mobile)</strong></td>
    <td><div align="center"></div></td>
    <td><input type="text" name="contact_mobile2" id="contact_mobile2" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['contact_mobile2']:'' ;?>" /></td>
  </tr>

  <tr>
    <td><strong>Contact Person-1(Email)</strong></td>
    <td><div align="center"></div></td>
    <td><input type="text" name="contact_email1" id="contact_email1" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['contact_email1']:'' ;?>" /></td>
    <td></td>
    <td><strong>Contact Person-2(Email)</strong></td>
    <td><div align="center"></div></td>
    <td><input type="text" name="contact_email2" id="contact_email2" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['contact_mobile2']:'' ;?>" /></td>
  </tr>

   <tr>
    <td><strong>Contact Person-3(Name)</strong></td>
    <td><div align="center"></div></td>
    <td><input type="text" name="contact_name3" id="contact_name3" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['contact_name3']:'' ;?>" /></td>
    <td></td>
   <td><strong>Contact Person-3(Mobile)</strong></td>
    <td><div align="center"></div></td>
    <td><input type="text" name="contact_mobile3" id="contact_mobile3" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['contact_mobile3']:'' ;?>" /></td>
  </tr>

  <tr>
    <td><strong>Contact Person-3(Email)</strong></td>
    <td><div align="center"></div></td>
    <td><input type="text" name="contact_email3" id="contact_email3" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['contact_email3']:'' ;?>" /></td>
    <td></td>
     <td><strong>Preferred Contact Person</strong></td>
    <td><div align="center"></div></td>
    <td>
      <select name="Preferred_contact_person" id="Preferred_contact_person" >
      <option value="1" <?php echo (isset($updateFlag)&&($updateFlag == 1)&&$edit_data['0']['Preferred_contact_person']=='1')?'selected':'';?> >Contact Person 1</option> 
      <option value="2" <?php echo (isset($updateFlag)&&($updateFlag == 1)&&$edit_data['0']['Preferred_contact_person']=='2')?'selected':'';?> >Contact Person 2</option> 
      <option value="3" <?php echo (isset($updateFlag)&&($updateFlag == 1)&&$edit_data['0']['Preferred_contact_person']=='3')?'selected':'';?> >Contact Person 3</option> 
    </td>
    
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


<p class="block-heading">Vendor List</p>
  <div class="well">
    <table class="table" style="font-size: 12px;">
      <thead>
      <tr>
                    <th>S.No.</th>
                    <th>Vendor Name </th>
                    <th>Nature of Business</th>
                    <th>Contact No(office) </th>
                    <th>Contact Person 1(Name)</th>
                    <th>Contact Person 1(Number)</th>
                    <th>Contact Person 1(Email)</th>
                    <th>Contact Person 2(Name)</th>
                    <th>Contact Person 2(Number)</th>
                    <th>Contact Person 2(Email)</th>
                    <th>Action</th>
      </tr>
                  </thead>
                  <tbody>

                    <?php 
                   $dataArr=$this->Common->getData('vendor_detail',array('company_id'=>$this->session->company_id));
                    if(sizeof($dataArr)>0)
                    {  $i=0;
                     foreach($dataArr as $data)
                     { ?>
                              

                      <tr>
                      <td><?php echo ++$i;?></td>
                      <td><?php echo $data['vendor_name'];?></td>
                      <td><?php echo $data['business_nature'];?></td>
                      <td><?php echo $data['contact_no_office'];?></td>
                      <td><?php echo $data['contact_name1'];?></td>
                      <td><?php echo $data['contact_mobile1'];?></td>
                      <td><?php echo $data['contact_email1'];?></td>
                      <td><?php echo $data['contact_name2'];?></td>
                      <td><?php echo $data['contact_mobile2'];?></td>
                      <td><?php echo $data['contact_email2'];?></td>
                      <td>
                      <?php 
                      $form=array(
                      'class'=>'form-element',
                      'role'=>'form');
                      echo form_open('da_projects/edit_vendor', $form);?>
                        <input type="hidden" name="edit_id" value="<?php echo $data['id'];?>" />
                        <input type="submit" class="btn btn-primary" name="edit" value="Edit" />
                        <?php echo form_close();?>
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
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
  </body>
</html>