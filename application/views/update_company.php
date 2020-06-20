
<?php include('header.php');?><?php include('sidemenu.php');?>
<style type="text/css">
   *{
    font-family: 'Quattrocento', serif;
   }
    .section{
          display: inline-block;
      background-color: #f7f7f9;
      padding: 30px 30px;
      margin-top: 30px;
      margin-bottom: 30px;
      box-shadow: 2px 2px 14px 0px #888888;
    }
    .section h1{
      font-size: 40px;
      color: #772539; 
      font-weight: 600;
    }
   .form-section{
    margin-top: 30px;
   }
   form{
    padding: 5px 10px;
   }
   .clear{
    clear: both;
   }
   hr{
    border-top: 1px solid #9e9497;
    width: 80%;
   }
   .check-section{
    margin-top: 30px;
   }
   .pay-button{
     background-color: #772539;
    border: none;
    color: white;
    padding: 10px 24px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 30px 2px;
    cursor: pointer;
   
   }

   .pay-button:hover{
  /*#7d2c40*/
  box-shadow: 0px 2px 10px 1px #7d2c40;
}

@media only screen and (max-width: 767px) {
    .check-select {
        margin: 20px 0px;
    }
}
.text-on-pannel {
  background: #fff none repeat scroll 0 0;
  height: auto;
  margin-left: 20px;
  padding: 3px 5px;
  position: absolute;
  margin-top: -47px;
  border: 1px solid #772539;
  border-radius: 8px;
}

.panel {
  /* for text on pannel */
  margin-top: 27px !important;
}

.panel-body {
  padding-top: 30px !important;
}
.panel-primary {
    border-color: #772539!important;
}
  </style>
  <?php if(isset($_POST['submit']))
  {
      extract($_POST);
      $company_array = array(
              'company_name' => $company_name,
              'gst_no' => $company_gst,
              'tin_no' => $company_tin,
              'company_address' => $company_address,
              'phone1' => $company_phone1,
              'phone2' => $company_phone2,
              'email1' => $company_email1,
              'email2' => $company_email2
              );

          $insert = $this->Common->update('company_master',$company_array,array('user_id'=>$this->session->user_id));
          if($insert)
          {
            $msg = " Updated Successfully ";
          }
  }
  ?>
    <div class="content">
        
        <div class="header">
            <h1 class="page-title">COMPANY PROFILE</h1>
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
<?php $get_company = $this->Common->getData('company_master',array('user_id'=>$this->session->user_id)); ?> 
 
<div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
          <table width="100%">
                      <?php 
                      $form=array(
                      'class'=>'form-element',
                      'role'=>'form'
                      );
                      echo form_open('admin/update_company', $form);?>

        <tr>
          <td>Copmany Name</td>
          <td><input type="text" name="company_name" value="<?php echo (isset($get_company)&&sizeof($get_company)>0)?$get_company['0']['company_name']:'';?>"></td>
        </tr>

         <tr>
          <td>Copmany GST Number</td>
          <td><input type="text" name="company_gst" value="<?php echo (isset($get_company)&&sizeof($get_company)>0)?$get_company['0']['gst_no']:'';?>"></td>
        </tr> 
         
        <tr>
          <td>Copmany Tin Number</td>
          <td><input type="text" name="company_tin" value="<?php echo (isset($get_company)&&sizeof($get_company)>0)?$get_company['0']['tin_no']:'';?>"></td>
        </tr>

         <tr>
          <td>Copmany Address</td>
          <td><textarea type="text" name="company_address"><?php echo (isset($get_company)&&sizeof($get_company)>0)?$get_company['0']['company_address']:'';?></textarea></td>
        </tr>

         <tr>
          <td>Copmany Phone Number1</td>
          <td><input type="text" name="company_phone1" value="<?php echo (isset($get_company)&&sizeof($get_company)>0)?$get_company['0']['phone1']:'';?>"></td>
        </tr>

         <tr>
          <td>Copmany Phone Number2</td>
          <td><input type="text" name="company_phone2" value="<?php echo (isset($get_company)&&sizeof($get_company)>0)?$get_company['0']['phone2']:'';?>"></td>
        </tr>

         <tr>
          <td>Copmany Email 1</td>
          <td><input type="text" name="company_email1" value="<?php echo (isset($get_company)&&sizeof($get_company)>0)?$get_company['0']['email1']:'';?>"></td>
        </tr>

         <tr>
          <td>Copmany Email 2</td>
          <td><input type="text" name="company_email2" value="<?php echo (isset($get_company)&&sizeof($get_company)>0)?$get_company['0']['email2']:'';?>"></td>
        </tr>

         
         <tr>
          <td></td>
          <td align="left">
          <input type="submit" name="submit" value="Update Company" class="btn btn-primary">
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

  function submit_user_form()
  {
    var payuForm = document.forms.payuForm;
    payuForm.submit();
  }

$("#checkbox").click(function(){
   if($('#checkbox').prop('checked')){
    
    $('.ckbox').prop('checked',true);

   } else{

    $('.ckbox').prop('checked',false);  
   }
});

  $("[rel=tooltip]").tooltip();
  $(function() {
      $('.demo-cancel-click').click(function(){return false;});
  });
</script>
    
  </body>
</html>