
<?php include('header.php');?><?php include('sidemenu.php');?>
    <div class="content">
        
        <div class="header">
            
            <h1 class="page-title">Add WBS</h1>
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
          <table width="100%">
                      <?php 
                      $form=array(
                      'class'=>'form-element',
                      'role'=>'form'
                      );
                      echo form_open('da_projects/add_wbs', $form);?>

  
    
  <tr>
        <td style="text-align: right">Active Project </td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td style="text-align: left"><select name="project" id="project1">
          <option>Select Project</option>
          <?php foreach ($trans as $project) 
          {  
            $selected = ($project['id']==$edit_data['0']['project_id'])?'selected':'';
            ?>
             <option value="<?php echo $project['id'];?>"  <?php echo $selected;?> ><?php echo $project['project_name'];?></option>
         <?php  } ?>
        </select></td>
        </tr><tr>
        <td style="text-align: right">WBS Category</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td style="text-align: left"><select name="wbs" id="wbs" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['wo_title']:'';?>">
        <option value="" selected disabled>Select WBS Category</option>
        <?php if(isset($category)&&sizeof($category)>0)
        { //echo "<pre>";print_r($category);
        foreach($category as $wbs_category)
        { 
            $selected = ($wbs_category['id']==$edit_data['0']['category_id'])?'selected':''; 
          ?>

        <option value="<?php echo $wbs_category['id'];?>" <?php echo $selected;?> ><?php echo $wbs_category['category_name'];?></option>
        <?php } }?>
        </select>
        </td>
  </tr>


  <tr>
        <td style="text-align: right">Sub Category 1</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td style="text-align: left"><select name="wbssub1" id="wbssub1">
        <option value="">Select Sub Category 1</option>
        <?php if(isset($subcat2)&&sizeof($subcat1)>0)
        { //echo "<pre>";print_r($subcat1);
        foreach($subcat1 as $wbs_subcat1)
        { 
            $selected = (isset($edit_data['0']['subcat_id1'])&&$wbs_subcat1['id']==$edit_data['0']['subcat_id1'])?'selected':''; 
          ?>

        <option value="<?php echo $wbs_subcat1['id'];?>" <?php echo $selected;?> ><?php echo $wbs_subcat1['sub_category_name1'];?></option>
        <?php } }?>

        </select></td>
        </tr><tr>
        <td style="text-align: right">Sub Category 2</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td style="text-align: left"><select name="wbssub2" id="wbssub2">
        <option value="">Select Sub Category 2</option>
        
        <?php if(isset($subcat2)&&sizeof($subcat2)>0)
        { //echo "<pre>";print_r($subcat2);
        foreach($subcat2 as $wbs_subcat2)
        { 
            $selected = (isset($edit_data['0']['subcat_id2'])&&$wbs_subcat2['id']==$edit_data['0']['subcat_id2'])?'selected':''; 
          ?>

        <option value="<?php echo $wbs_subcat2['id'];?>" <?php echo $selected;?> ><?php echo $wbs_subcat2['sub_category_name2'];?></option>
        <?php } }?>

        </select></td>
  </tr>



  <tr>
    <td style="text-align: right">Sub Category 3</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

    <td style="text-align: left"><select name="wbssub3" id="wbssub3">
     <option value="">Select Sub Category 3</option>
     
     <?php if(isset($subcat3)&&sizeof($subcat3)>0)
        { //echo "<pre>";print_r($subcat3);
        foreach($subcat3 as $wbs_subcat3)
        { 
            $selected = (isset($edit_data['0']['subcat_id3'])&&$wbs_subcat3['id']==$edit_data['0']['subcat_id3'])?'selected':''; 
          ?>

        <option value="<?php echo $wbs_subcat3['id'];?>" <?php echo $selected;?> ><?php echo $wbs_subcat3['sub_category_name3'];?></option>
        <?php } }?>

    </select></td>
    </tr><tr>

    <td style="text-align: right">Sub Category 4</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td style="text-align: left"><select name="wbssub4" id="wbssub4">
     <option value="">Select Sub Category 4</option>

      <?php if(isset($subcat4)&&sizeof($subcat4)>0)
        { //echo "<pre>";print_r($subcat4);
        foreach($subcat4 as $wbs_subcat4)
        { 
            $selected = (isset($edit_data['0']['subcat_id4'])&&$wbs_subcat4['id']==$edit_data['0']['subcat_id4'])?'selected':''; 
          ?>

        <option value="<?php echo $wbs_subcat4['id'];?>" <?php echo $selected;?> ><?php echo $wbs_subcat4['sub_category_name4'];?></option>
        <?php } }?>

    </select></td>
  </tr>

  <tr>
    <td style="text-align: right">Sub Category 5</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td style="text-align: left"><select name="wbssub5" id="wbssub5">
     <option value="">Select Sub Category 5</option>

      <?php if(isset($subcat5)&&sizeof($subcat5)>0)
        { //echo "<pre>";print_r($subcat5);
        foreach($subcat5 as $wbs_subcat5)
        { 
            $selected = (isset($edit_data['0']['subcat_id5'])&&$wbs_subcat5['id']==$edit_data['0']['subcat_id5'])?'selected':''; 
          ?>

        <option value="<?php echo $wbs_subcat5['id'];?>" <?php echo $selected;?> ><?php echo $wbs_subcat5['sub_category_name5'];?></option>
        <?php } }?>

    </select></td>
    </tr><tr>

    <td style="text-align: right">Cost</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td style="text-align: left"><input type="text" name="cost" id="cost"  value="<?php echo (isset($updateFlag)&&isset($edit_data['0']['estimated_cost'])&&($updateFlag == 1))?$edit_data['0']['estimated_cost']:'';?>"/></td>
  </tr>

  



  <tr>
    <td style="text-align: right"><p>Vendor/Person Name</p></td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td><input type="text" name="person_name" id="person_name"  value="<?php echo (isset($updateFlag)&&isset($edit_data['0']['vendor_name'])&&($updateFlag == 1))?$edit_data['0']['vendor_name']:'';?>"/>
    
    </td>

    </tr><tr>
    <td style="text-align: right">Remark</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td><textarea name="remark" id="remark" cols="45" rows="3"> <?php echo (isset($updateFlag)&&isset($edit_data['0']['remark'])&&($updateFlag == 1))?$edit_data['0']['remark']:'';?></textarea></td>

  </tr>


  
  <tr align="center">    
      <td colspan="3"> 
        <div align="center">
          <?php if(isset($updateFlag)&&($updateFlag == 1))
          { ?>
          <input type="hidden"  name="update_id"  value="<?php echo (isset($updateFlag)&&isset($edit_data['0']['id'])&&($updateFlag == 1))?$edit_data['0']['id']:'' ;?>" />
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


<p class="block-heading">WBS List </p>
  <div class="well">
    <table class="table">
      <thead>
      <tr>
          <th>S.No.</th>
          <th colspan="" class="bg-primary">Project Name</th>   
          <th colspan="" class="bg-primary">Category Name</th>   
          <th colspan="" class="bg-primary">Sub Category1</th>  
          <th colspan="" class="bg-primary">Sub Category2</th> 
          <th colspan="" class="bg-primary">Sub Category3</th> 
          <th colspan="" class="bg-primary">Sub Category4</th> 
          <th colspan="" class="bg-primary">Sub Category5</th>  
          <th colspan="" class="bg-primary">Cost</th>
          <th colspan="" class="bg-primary">Vendor Name</th>
          <th colspan="" class="bg-primary">Remark</th>


          <th>Action</th>
      </tr>
                  </thead>
                  <tbody>

                    <?php 
                    //echo "<pre>";print_r($dataArr);exit();
                    if(isset($dataArr)&&sizeof($dataArr)>0)
                  {  $i=0;
                     //echo "<pre>";print_r($dataArr);
                      $j=$h=0; 
                      $class = $class1 = $hide_id = $name = '';
                      $project_id = $this->session->project_id;
                     foreach($dataArr as $data)
                     { 
                      //this line for showing category and subcategory name in each row 
                     //$cat_name = $subcat_name1 = $subcat_name2 = $subcat_name3 = $subcat_name4 = $subcat_name5 ='';
                     
                      
                     if($j==0)
                     {
                      $j=2;
                      $h=1;
                      $name = $data['category_name'];
                      $class = ($class=="")?($j):$class." ".$j;
                      $hide_id = ($hide_id=='')?($h):$hide_id." ".$h; 
                     }
                     else if($name == $data['category_name'])
                     {
                         $j++;
                         $h++;
                         $class = ($class=="")?($j):$class." ".$j;
                         $hide_id = ($hide_id=='')?($h):$hide_id." ".$h; 
                     }
                     else
                     {
                       $name = $data['category_name'];
                       $j=201;
                       $h=200;
                       $class = $hide_id ="";
                     }
                     $cat_cost = $subcat1_cost = $subcat2_cost = $subcat3_cost = $subcat4_cost = $subcat5_cost = '';
                     $cost1 = $cost2 = $cost3 = $cost4  = $cost5 = $cost = ''; 
                     if($data['category_id']!=0)
                     {
                      $cat_cost = $this->Database_conn2->get_total_cost($data['category_id']);
                      if(isset($cat_cost))
                      {
                        $cost = " (".$cat_cost['0']['sum(estimated_cost)'].")";
                      }
                     }

                     if($data['subcat_id1']!=0)
                     {
                      $subcat1_cost = $this->Database_conn2->get_total_cost($data['category_id'],$data['subcat_id1']);
                      if(isset($subcat1_cost))
                      {
                        $cost1 = " (".$subcat1_cost['0']['sum(estimated_cost)'].")";
                      }
                     }


                     if($data['subcat_id2']!=0)
                     {
                      $subcat2_cost = $this->Database_conn2->get_total_cost($data['category_id'],$data['subcat_id1'],$data['subcat_id2']);
                      if(isset($subcat2_cost))
                      {
                        $cost2 = " (".$subcat2_cost['0']['sum(estimated_cost)'].")";
                      }
                     }


                     if($data['subcat_id3']!=0)
                     {
                      $subcat3_cost = $this->Database_conn2->get_total_cost($data['category_id'],$data['subcat_id1'],$data['subcat_id2'],$data['subcat_id3']);
                      if(isset($subcat3_cost))
                      {
                        $cost3 = " (".$subcat3_cost['0']['sum(estimated_cost)'].")";
                      }
                     }
                      



                      if($data['subcat_id4']!=0)
                     {
                      $subcat4_cost = $this->Database_conn2->get_total_cost($data['category_id'],$data['subcat_id1'],$data['subcat_id2'],$data['subcat_id3'],$data['subcat_id4']);
                      if(isset($subcat4_cost))
                      {
                        $cost4 = " (".$subcat4_cost['0']['sum(estimated_cost)'].")";
                      }
                     }
                      


                      if($data['subcat_id5']!=0)
                     {
                      $subcat5_cost = $this->Database_conn2->get_total_cost($data['category_id'],$data['subcat_id1'],$data['subcat_id2'],$data['subcat_id3'],$data['subcat_id4'],$data['subcat_id5']);
                      if(isset($subcat5_cost))
                      {
                        $cost5 = " (".$subcat5_cost['0']['sum(estimated_cost)'].")";
                      }
                     }
                     
                      
                     
                      ?>
                      
                      <tr class="<?php echo $class;?>">
                     <td class="<?php echo $class;?>"><?php echo ++$i;?></td>
                     <td style='text-align: center;'><?php echo $data['project_name'];?></td>
                     




                     <td style='text-align: center;'><div class="<?php echo $class ;?>" id="<?php echo $hide_id;?>"><?php 
                       if(isset($cat_name)&&$cat_name==$data['category_name'])
                       {
                         echo "";
                       }
                       else
                       {
                        $cat_name = $data['category_name'];
                        echo $cat_name.$cost;
                       }
                       ?></div></td>
                     






                     <td style='text-align: center;'><?php
                      if(isset($subcat_name1)&&$subcat_name1==$data['sub_category_name1'])
                       {
                         echo "";
                       }
                       else
                       {
                        $subcat_name1 = $data['sub_category_name1'];
                        echo $subcat_name1.$cost1;
                       }
                       ?></td>
                     







                     <td style='text-align: center;'><?php
                      if(isset($subcat_name2)&&$subcat_name2==$data['sub_category_name2'])
                       {
                         echo "";
                       }
                       else
                       {
                        $subcat_name2 = $data['sub_category_name2'];
                        echo $subcat_name2.$cost2;
                       }
                       ?></td>
                     










                     <td style='text-align: center;'><?php 
                     if(isset($subcat_name3)&&$subcat_name3==$data['sub_category_name3'])
                       {
                         echo "";
                       }
                       else
                       {
                        $subcat_name3 = $data['sub_category_name3'];
                        echo $subcat_name3.$cost3;
                       }
                       ?></td>
                     












                     <td style='text-align: center;'><?php 
                      if(isset($subcat_name4)&&$subcat_name4==$data['sub_category_name4'])
                       {
                         echo "";
                       }
                       else
                       {
                        $subcat_name4 = $data['sub_category_name4'];
                        echo $subcat_name4.$cost4;
                       }
                        ?></td>
                     









                     <td style='text-align: center;'><?php 
                     if(isset($subcat_name5)&&$subcat_name5==$data['sub_category_name5'])
                       {
                         echo "";
                       }
                       else
                       {
                        $subcat_name5 = $data['sub_category_name5'];
                        echo $subcat_name5.$cost5;
                       }
                       ?></td>
                     








                     <td style='text-align: center;'><?php echo $data['estimated_cost'];?></td>
                     <td style='text-align: center;'><?php echo $data['vendor_name'];?></td>
                     <td style='text-align: center;'><?php echo $data['remark'];?></td>
                     



                      


                      <td>
                      <?php 
                      $form=array(
                      'class'=>'form-element',
                      'role'=>'form');
                      echo form_open('da_projects/edit_wbs', $form);?>
                        <input type="hidden" name="edit_id" value="<?php echo $data['id'];?>" />
                        <input type="submit" class="btn btn-primary" name="edit" value="Edit" />
                        <?php echo form_close();?>
                      </td>
                      </tr>
      <?php }
                  }
                  else
                  {
                    echo "<tr><td colspan='12'><h4 align='center'>No Record Found</h4></td></tr>
                    ";
                  } ?>
         
      
      
      </tbody>
    </table>
  </div>



  
 

            </div>
        </div>
    </div>
    
<?php require('footer.php'); ?>

    
    <script type="text/javascript">
 
 $(document).ready(function(){
    $(".").click(function(){
        $(".Work").toggle();
    });
});

 $("#wbs").on('change',function(){
  cat = $(this).val();
  $.ajax({
  url: "<?php echo base_url('da_projects/ajax');?>",
  method:'POST',
  data:  { 'category':cat},
  success: function(msg) {
  $('#wbssub1').html(msg);
}
});
});

$("#wbssub1").on('change',function(){
  sub = $(this).val();
  $.ajax({
  url: "<?php echo base_url('da_projects/ajax');?>",
  method:'POST',
  data:  { 'sub1':sub},
  success: function(msg) {
  $('#wbssub2').html(msg);
}
});
});


$("#wbssub2").on('change',function(){
  sub = $(this).val();
  $.ajax({
  url: "<?php echo base_url('da_projects/ajax');?>",
  method:'POST',
  data:  { 'sub2':sub},
  success: function(msg) {
  $('#wbssub3').html(msg);
}
});
});


$("#wbssub3").on('change',function(){
  sub = $(this).val();
  $.ajax({
  url: "<?php echo base_url('da_projects/ajax');?>",
  method:'POST',
  data:  { 'sub3':sub},
  success: function(msg) {
  $('#wbssub4').html(msg);
}
});
});


$("#wbssub4").on('change',function(){
  sub = $(this).val();
  $.ajax({
  url: "<?php echo base_url('da_projects/ajax');?>",
  method:'POST',
  data:  { 'sub4':sub},
  success: function(msg) {
  $('#wbssub5').html(msg);
}
});
});


        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
  </body>
</html>