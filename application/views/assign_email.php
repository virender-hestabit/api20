
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
            <h1 class="page-title">Assign Email Notification</h1>
           </div>
        
        <div class="container-fluid">
            <div class="row-fluid">

	<div class="row-fluid">
	</div>
<div class="row-fluid">&nbsp;</div>
<div class="well">
<?php 
$all_member = $this->Database_conn2->get_all_users('users');
$tracking = $this->Database_conn2->get_tracking_ids('tracking_detail',$row_id);
$responsible_person = $tracking['0']['responsibility'];
$email_array_to =explode("," , $tracking['0']['responsibility']);
$email_array_cc =explode("," , $tracking['0']['email_cc']);
  
?>


  <?php if(isset($msg))
  { ?>
  <h4 class="alert alert-info" style="text-align: center"><?php echo $msg;?></h4>
  <?php } ?>
    
 <table width="100%">
   <form method="post" action="">
   <tr>
     <th colspan="2">Assign Email Notification (Email To) </th>
     <th colspan="2">Assign Email Notification (Email Cc) </th>
   </tr>
<tr><td colspan="4"><br></td></tr>
   <tr>
     <td align="center"><strong> Select All</strong><br><input type="checkbox"  id="checkbox"></td>
     <td align="left"><strong>User Name</strong></td>
     <td align="center"><strong> Select All</strong><br><input type="checkbox"  id="checkbox1"></td>
     <td align="left"><strong>User Name</strong></td>
   </tr>
   <tr><td colspan="4"><br></td></tr>

   <?php if(isset($all_member)&&$all_member!='')
   { 
    $show='0';
    foreach ($all_member as $value) 
    { ?>
      <tr>
        <?php 
        if($value['id']==$responsible_person)
        {  
          $show='1';
           $checked = (isset($email_array_to)&&(in_array( $value['id'] , $email_array_to)))?'checked':'';?>
        <td align="center"><input type="checkbox" name="to[]" value="<?php echo $value['id'];?>" <?php echo $checked;?>  class="ckbox">
        </td>
        <td align="left"><?php echo $value['email_id']."(".$value['full_name'].")";?></td>
      <?php } 
      else
      { ?>
        <td></td>
        <td></td>

      <?php } ?>

          
        <?php $checked1 = (isset($email_array_cc)&&(in_array( $value['id'] , $email_array_cc)))?'checked':'';?>
        <td align="center"><input type="checkbox" name="cc[]" value="<?php echo $value['id'];?>" <?php echo $checked1;?> class="ckbox1">
        </td>
        <td align="left"><?php echo $value['email_id']."(".$value['full_name'].")";?></td>
      </tr>
    <?php } } ?>
    <tr><td colspan="4"><br></td></tr>
    <tr>
      <td colspan="2" align="right"> 
        <?php if(isset($email_array_to)||isset($email_array_cc))
        {
           echo '<input type="hidden"  name="edit_id" value="'.$row_id.'">
                 <input type="submit" name="update" value=" Update ">';
        }
        else
        {
          echo '<input type="hidden"  name="edit_id" value="'.$row_id.'">
                <input type="submit" name="submit" value=" Submit ">';
        }
        ?>
        
      </td>
        <td colspan="2"></td>
    </tr>
  </form>
 </table>   
</div>
</div>
</div>
</div>
    
<?php require('footer.php'); ?>

<script src="<?php echo base_url('application/assests/lib/bootstrap/js/bootstrap.js');?>"></script>
<script type="text/javascript">

$("#checkbox").click(function(){
   if($('#checkbox').prop('checked')){
    
    $('.ckbox').prop('checked',true);

   } else{

    $('.ckbox').prop('checked',false);  
   }
});

$("#checkbox1").click(function(){
   if($('#checkbox1').prop('checked')){
    
    $('.ckbox1').prop('checked',true);

   } else{

    $('.ckbox1').prop('checked',false);  
   }
});


  $("[rel=tooltip]").tooltip();
  $(function() {
      $('.demo-cancel-click').click(function(){return false;});
  });
</script>
    
  </body>
</html>