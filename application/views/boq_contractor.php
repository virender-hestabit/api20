<?php
$project_id = $this->session->project_id;
if(isset($_POST['submit'])){
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
          $unit = $data[1];
          $quantity = $data[2];
          $rate = $data[3];
          $item_name = $data[0];

          $item_id = $this->Common->get_data_single('po_item_list','id',array('project_id'=>$project_id,'item_name'=>$item_name));
          if($item_id)
          {
            $fail = $fail.",".$i;
            continue;
          }
          else
          {
              $insert_array = array(
              'boq_number'=>rand(1,1000),
              'project_id'=>$project_id,
              'item_id'=>$item_id,
              'unit'=>$unit,
              'quantity'=>$quantity,
              'rate'=>$rate,
              'amount'=>($rate*$quantity),
              'created_by'=>$this->session->user_id,
              'created_on'=>date("Y-m-d H:i:s"),
              'updated_on'=>date("Y-m-d H:i:s")
              );
              $insert = $this->Database_conn->insert_data('boq_master',$insert_array);
          }
        }
        $msg = "File Imported Successfully.";
        if(isset($fail)&&$fail!='')
        {

          $msg = $msg." Except Row ".substr($fail,1)." are not imported. Please check the Item Name in the Uploaded File. ";
        }
        fclose($handle);
      }
    }
  }
  ?>



<?php include('header.php');?><?php include('sidemenu.php');?>
    <div class="content">
        
        <div class="header">
            
            <h1 class="page-title">Add BOQ Contract With Client</h1>
        </div>
        
        <div class="container-fluid">
            <div class="row-fluid">

	<div class="row-fluid">
	</div>
<div class="row-fluid">&nbsp;
      <form method='POST' enctype='multipart/form-data'>
      <strong>Upload CSV:</strong> 
      <input type='file' name='csv_data' /> 
      <input type='submit' class="btn btn-primary" name='submit' value='Upload BOQ CSV' />
      </form>
</div>
<div class="well">


  <?php if(isset($msg))
  { ?>
  <h5 class="alert alert-info" style="text-align: center"><?php echo $msg;?></h5>
  <?php } ?>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
<?php 
 if(isset($edit_id)&&$edit_id!='')
 {
    $updateFlag = 1;
    $edit_data = $this->Common->getData('boq_master',array('id'=>$edit_id,'project_id'=>$this->session->project_id));
 }
 ?>

          <table width="100%">
                      <?php 
                      $form=array(
                      'class'=>'form-element',
                      'role'=>'form'
                      );
                      echo form_open('BOQ/add_boq_contractor', $form);?>

  <input type="hidden" name="updt_flag" id="updt_flag" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['id']:'' ;?>"/>
  <tr>
    <td align="left"><strong>BOQ Number</strong></td>
    
    <td align="left"><input type="text" name="boq_number" id="boq_number" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['boq_number']:'' ;?>"/></td>
  </tr>
  
  <tr>
    <td align="left"><strong>Item Name</strong></td>
    
    <td align="left"><select name="item_id" id="item_id">
    <option value="">Select Item</option>
    <?php 
      $get_item = $this->Common->getData('po_item_list',array('project_id'=>$this->session->project_id));
      if(isset($get_item)&&sizeof($get_item)>0)
      {
        foreach ($get_item as $value) 
        {
          $selected = (isset($updateFlag)&&$updateFlag==1&&$value['id']==$edit_data['0']['item_id'])?'selected':''; ?>
          <option value="<?php echo $value['id'];?>" <?php echo $selected;?>><?php echo $value['item_name'];?></option>
       <?php } } ?>
    </select></td>
  <tr>
    <td align="left"><strong>Unit</strong></td>
    
    <td align="left"><input type="text" name="unit" id="unit" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['unit']:'' ;?>" /></td>
  </tr>
 
 <tr>
    <td align="left"><strong>Quantity</strong></td>
    
    <td align="left"><input type="text" name="quantity" id="quantity" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['quantity']:'' ;?>" /></td>
    </tr>
  
  <tr>
    <td align="left"><strong>Rate</strong></td>
    
    <td align="left"><input type="text" name="rate" id="rate" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['rate']:'' ;?>" /></td>
</tr>

<tr>
    <td></td><td>
    <div align="left">
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