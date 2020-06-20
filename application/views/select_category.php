<?php include('header.php');?><?php include('sidemenu.php');?>
    <div class="content">
        
        <div class="header">
            
            <h1 class="page-title">Select WBS Category And Subcategory</h1>
        </div>
        
        <div class="container-fluid">
            <div class="row-fluid">

<?php 
  $pre_data = $this->Database_conn2->get_all_data('user_wbd_category_subcategory');
  //echo "<pre>";print_r($pre_data);
  $cat_array = explode(",",$pre_data['category_id']);
  $subcat1_array = explode(",",$pre_data['subcat1_id']);
  $subcat2_array = explode(",",$pre_data['subcat2_id']);
  $subcat3_array = explode(",",$pre_data['subcat3_id']);
  $subcat4_array = explode(",",$pre_data['subcat4_id']);
  $subcat5_array = explode(",",$pre_data['subcat5_id']);
  $dataArr = $this->Database_conn2->get_category();
?>
  <div class="row-fluid"><br>
    <a href="<?php echo base_url('da_projects/budget_summary'); ?>" class="btn btn-primary">Budget Summary</a><br><br>
  </div>




<!-- <p class="block-heading">WBS Cagegory And Subcategory List</p>
 -->  <div class="well">
      <?php if(isset($msg))
  { ?>
  <h4 class="alert alert-info" style="text-align: center"><?php echo $msg;?></h4>
  <?php } ?>
    <?php echo form_open('da_projects/select_category');?>
    <table class="table">
      <thead>
      <tr>
                  
                  <th style="text-align: left;">
                    <input type="checkbox" name="all_check" id="checkbox" style="margin-bottom: 0.5%;">   Select All Category Name</th>
                  </tr>
                  </thead>
                  <tbody>

                  
      <?php 
       $cat_name=$sub1=$sub2=$sub3=$sub4=$sub5='';
      if(isset($dataArr)&&sizeof($dataArr)>0)
      {  $i=0;
         $j=$j1=$j2=$j3=$j4=$j5=0;
         foreach($dataArr as $data)
         { 
          $j=rand(1,9999999);
          
?>

           <tr style="background-color:#ccc">
            <td><strong><input type="checkbox" name="cat[]" value="<?php echo $data['id'];?>" class="ckbox class<?php echo $j;?> " <?php echo (in_array($data['id'],$cat_array))?'checked':'';?> style="margin-bottom: 0.5%;" onclick="check_all(0,<?php echo $j;?>)">
              <?php echo $data['category_name'];?></strong></td></tr>
              

              <?php
              $subcat1 = $this->Database_conn2->get_subcat('wbs_sub_category1',array('category_id'=>$data['id']));
              if(isset($subcat1)&&sizeof($subcat1)>0)
              {
                foreach ($subcat1 as $value) 
                { $j1=rand(1,9999999);
          
                  ?>
                  <tr>
                    <td>
                    <input style="margin-left:40px;" type="checkbox" name="subcat1[]" value="<?php echo $value['id'];?>" <?php echo (in_array($value['id'],$subcat1_array))?'checked':'';?> class="ckbox class<?php echo $j;?> class<?php echo $j1;?>" style="margin-bottom: 0.5%;" onclick="check_all(1,<?php echo $j;?>,<?php echo $j1;?>)">
                    <?php echo $value['sub_category_name1'];?></td></tr>

                          <?php
                          $con2 = array(
                          'category_id'=>$data['id'],
                          'subcat_id1' =>$value['id']
                           );
                          $subcat2 = $this->Database_conn2->get_subcat('wbs_sub_category2',$con2);
                          if(isset($subcat2)&&sizeof($subcat2)>0)
                          {
                          foreach ($subcat2 as $value2) 
                          { $j2=rand(1,9999999);
          
                            ?>
                          <tr>
                            <td>
                           <input style="margin-left:80px;" type="checkbox" name="subcat2[]" value="<?php echo $value2['id'];?>" <?php echo (in_array($value2['id'],$subcat2_array))?'checked':'';?> class="ckbox class<?php echo $j;?> class<?php echo $j1;?> class<?php echo $j2;?>" style="margin-bottom: 0.5%;" onclick="check_all(2,<?php echo $j;?>,<?php echo $j1;?>,<?php echo $j2;?>)">
                            <?php echo $value2['sub_category_name2'];?></td></tr>
                             
                                       <?php
                                    $con3 = array(
                                    'category_id'=>$data['id'],
                                    'subcat_id1' =>$value['id'],
                                    'subcat_id2' =>$value2['id']
                                     );
                                    $subcat3 = $this->Database_conn2->get_subcat('wbs_sub_category3',$con3);
                                    if(isset($subcat3)&&sizeof($subcat3)>0)
                                    {
                                    foreach ($subcat3 as $value3) 
                                    { 
                                      $j3=rand(1,9999999);
          
                                      ?>
                                    <tr>
                                      <td>
                                      <input style="margin-left:120px;" type="checkbox" name="subcat3[]" value="<?php echo $value3['id'];?>" <?php echo (in_array($value3['id'],$subcat3_array))?'checked':'';?> class="ckbox class<?php echo $j;?> class<?php echo $j1;?> class<?php echo $j2;?> class<?php echo $j3;?>" style="margin-bottom: 0.5%;" onclick="check_all(3,<?php echo $j;?>,<?php echo $j1;?>,<?php echo $j2;?>,<?php echo $j3;?>)">
                                      <?php echo $value3['sub_category_name3'];?></td></tr>
                                      

                                     
                                      <?php
                                    $con4 = array(
                                    'category_id'=>$data['id'],
                                    'subcat_id1' =>$value['id'],
                                    'subcat_id2' =>$value2['id'],
                                    'subcat_id3' =>$value3['id']
                                     );
                                    $subcat4 = $this->Database_conn2->get_subcat('wbs_sub_category4',$con4);
                                    if(isset($subcat4)&&sizeof($subcat4)>0)
                                    {
                                    foreach ($subcat4 as $value4) 
                                    { 
                                      $j4=rand(1,9999999);
                                      ?>
                                    <tr>
                                      <td>
                                      <input style="margin-left:160px;" type="checkbox" name="subcat4[]" value="<?php echo $value4['id'];?>" <?php echo (in_array($value4['id'],$subcat4_array))?'checked':'';?> class="ckbox class<?php echo $j;?> class<?php echo $j1;?> class<?php echo $j2;?> class<?php echo $j3;?> class<?php echo $j4;?>" style="margin-bottom: 0.5%;" onclick="check_all(4,<?php echo $j;?>,<?php echo $j1;?>,<?php echo $j2;?>,<?php echo $j3;?>,<?php echo $j4;?>)">
                                      <?php echo $value4['sub_category_name4'];?></td></tr>
                                    
                                    

                                     <?php
                                    $con5 = array(
                                    'category_id'=>$data['id'],
                                    'subcat_id1' =>$value['id'],
                                    'subcat_id2' =>$value2['id'],
                                    'subcat_id3' =>$value3['id'],
                                    'subcat_id4' =>$value4['id']
                                     );
                                    $subcat5 = $this->Database_conn2->get_subcat('wbs_sub_category5',$con5);
                                    if(isset($subcat5)&&sizeof($subcat5)>0)
                                    {
                                    foreach ($subcat5 as $value5) 
                                    { 
                                      $j5=rand(1,99999999);
                                      ?>
                                    <tr>
                                      <td>
                                      <input style="margin-left:200px;" type="checkbox" name="subcat5[]" value="<?php echo $value5['id'];?>" <?php echo (in_array($value5['id'],$subcat5_array))?'checked':'';?> class="ckbox class<?php echo $j;?> class<?php echo $j1;?> class<?php echo $j2;?> class<?php echo $j3;?> class<?php echo $j4;?>" style="margin-bottom: 0.5%;" onclick="check_all(5,<?php echo $j;?>,<?php echo $j1;?>,<?php echo $j2;?>,<?php echo $j3;?>,<?php echo $j4;?>,<?php echo $j5;?>)">
                                      <?php echo $value5['sub_category_name5'];?></td></tr>
                                   <?php } } ?>
          <?php } } ?>
          <?php } } ?>
          <?php } } ?>
          <?php } } ?>
         
          
             
          
       
<script type="text/javascript">

  function check_all(no_of_cat,j='',j1='',j2='',j3='',j4='',j5='')
  {
     //alert(select);
    if(no_of_cat==0)
    {
      select = j;

          if($(".class"+select).prop('checked')){

          $(".class"+select).prop('checked',true);

          } else{

          $(".class"+select).prop('checked',false);  
          } 
    }
    else if(no_of_cat==1)
    {
      select = j1;
          if($(".class"+select).prop('checked')){

          $(".class"+select).prop('checked',true);
          $(".class"+j).prop('checked',true);

          } else{

          $(".class"+select).prop('checked',false);  
          } 
    }
    else if(no_of_cat==2)
    {
      select = j2;
          if($(".class"+select).prop('checked')){

          $(".class"+select).prop('checked',true);
          $(".class"+j).prop('checked',true);
          $(".class"+j1+" "+".class"+select).prop('checked',true);

          } else{

          $(".class"+select).prop('checked',false);  
          } 
    }
    else if(no_of_cat==3)
    {
      select = j3; 
    }
    else if(no_of_cat==4)
    {
      select = j4; 
    }
    
    else if(no_of_cat==5)
    {
      select = j5; 
    }
    
       // /(select);
    
  }
</script>

<?php }  ?>
                 <tr><td style="text-align: center;">

          <?php if(isset($pre_data)&&sizeof($pre_data)>0)
          { ?>
             <input type="submit" name="update_category" value=" Update " class="btn btn-primary">
         <?php }
          else
            { ?>
              <input type="submit" name="select_category" value=" Submit " class="btn btn-primary">
         <?php } ?>
        </td></tr>
 <?php
      }
      else
      {
       echo "<tr><td colspan='1'><h4 align='center'>No Record Found</h4></td></tr>
        ";
      } ?>


      
      </tbody>
    </table>
    <?php echo form_close();?>
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

$("[rel=tooltip]").tooltip();
$(function() {
$('.demo-cancel-click').click(function(){return false;});
});
</script>

  </body>
</html>
