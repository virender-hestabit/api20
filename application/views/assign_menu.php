
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
            <h1 class="page-title">Assign Role To User</h1>
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

<?php 
if(isset($_POST['users']))
{
  $user_id = $_POST['users'];
}
else if(!isset($user_id))
{
  //$user_id = $this->session->user_id;
}
?>

<table width="100%" class="table" >
<tr>
      <td> Select User </td>
      <td>
        <form action="" method="post" name="payuForm" onchange="submit_user_form()">
        <select name="users" id="selected_user_id">
          <option value="">Select User</option>
          <?php $all_user = $this->Common->get_user_list();
          if(isset($all_user)&&sizeof($all_user)>0)
          {
            foreach ($all_user as $data) 
            {
            $selected  = (isset($user_id)&&$user_id!=''&&$user_id==$data['id'])?'selected':'';?>
            <option value="<?php echo $data['id'];?>" <?php echo $selected;?> title="<?php echo $data['full_name'];?>" ><?php echo $data['username'];?></option>
       <?php } } ?>
       </select>
       </form>     
      </td>
    </tr>
</table>


    
 <table width="100%" class="table" >

<?php echo form_open('admin/assign_menu');?>
   <tr>
     <th align="left" style="width:100px;"><input type="checkbox"  id="checkbox">&nbsp;&nbsp;Select All</th>
     <th align="left">Page To Assign </th>
   </tr>

   
   <?php 
    
    $page_names = $this->Common->get_all_page();
    //$user_id = $this->session->user_id;
    $get_all_assign_page_id = $this->Common->get_all_assign_page_id($user_id);
   if(isset($page_names)&&$page_names!='')
   {
    foreach ($page_names as $value) 
    { ?>
      <tr>
        <?php $checked = (isset($get_all_assign_page_id)&&(in_array( $value['id'] , $get_all_assign_page_id)))?'checked':'';?>
        <td align="left"><input type="checkbox" name="menu_id[]" value="<?php echo $value['id'];?>" <?php echo $checked;?>  class="ckbox">
        </td>
        <td align="left">
          <?php 
          if($value['parent_id']=='0')
          {
             echo "<strong>".$value['menu_name']." Section </strong>";
          }
          else
          {
             echo $value['menu_name'];
          }
           ?>
        </td>
      </tr>
    <?php } } ?>
    <tr>
      <td></td>
      <td align="left"> 
        <?php if(isset($get_all_assign_page_id)&&sizeof($get_all_assign_page_id)>0)
        {
           echo '<input type="hidden"  name="edit_id" value="'.$user_id.'">
                 <input type="submit" name="update" value=" Update ">';
        }
        else
        {
          echo '<input type="hidden"  name="edit_id" value="'.$user_id.'">
                <input type="submit" name="submit" value=" Submit ">';
        }
        ?>
        
      </td>
        <td colspan="2"></td>
    </tr>
  <?php echo form_close();?>
 </table>   
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