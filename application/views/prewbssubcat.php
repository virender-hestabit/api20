  
    <?php
    
   
  
    ?>


<?php include('header.php');?><?php include('sidemenu.php');?>
    <div class="content">
        
        <div class="header">
            
            <h1 class="page-title">Manage WBS Category</h1>
        </div>
        
        <div class="container-fluid">
            <div class="row-fluid">
<div class="row-fluid">
  </div>
  <div class="row-fluid">&nbsp;</div>

	
  <a href="<?php echo base_url('da_projects/select_category'); ?>" class="btn btn-primary">Manage Category</a>
   <div class="row-fluid">&nbsp;</div>


<p class="block-heading" id="category_list_show">WBS Cagegory And Subcategories List</p>
  <div class="well" style="display:block" id="category_list">
    <table class="table">
      <thead>
      <tr>
                  <th style="text-align: center;" >S NO.</th>
                  <th style="text-align: center;">Category Name</th>
                  <th style="text-align: center;">Sub Category1</th>
                  <th style="text-align: center;">Sub Category2</th>
                  <th style="text-align: center;">Sub Category3</th>
                  <th style="text-align: center;">Sub Category4</th>
                  <th style="text-align: center;">Sub Category5</th>
                  </tr>
                  </thead>
                  <tbody>

                  
                  <?php
                   $user_cat_id = $this->Common->getData('user_wbd_category_subcategory',array('project_id'=>$this->session->project_id)); 
                   $cat_name=$sub1=$sub2=$sub3=$sub4=$sub5='';
                  if(isset($dataArr)&&sizeof($dataArr)>0)
                  {  $i=1;

                     foreach($dataArr as $data)
                     { 
                      $user_cat_id_array = explode(',',$user_cat_id['0']['category_id']);
                      $user_subcat_id_array1 = explode(',',$user_cat_id['0']['subcat1_id']);
                      $user_subcat_id_array2 = explode(',',$user_cat_id['0']['subcat2_id']);
                      $user_subcat_id_array3 = explode(',',$user_cat_id['0']['subcat3_id']);
                      $user_subcat_id_array4 = explode(',',$user_cat_id['0']['subcat4_id']);
                      $user_subcat_id_array5 = explode(',',$user_cat_id['0']['subcat5_id']);
                      //var_dump($data['id']);echo "<br>";
                      //echo "<pre>"; print_r($data);echo "<br>";
                      if(in_array($data['wbs_cat_id'], $user_cat_id_array))
                      { 
                      

                      ?>
                              
                        
                      <tr>
                      
                      <?php 
                      if($cat_name==$data['category_name'])
                      {
                        echo "<td></td><td></td>";
                      }
                      else
                      { $cat_name=$data['category_name'];   ?>
                         <td style="text-align: center;"><?php echo $i;?></td>
                         <td style="text-align: center;"><?php echo $data['category_name'];?></td>
                      <?php $i++; } ?>




                      <?php 
                      if(in_array($data['wbs_sub_cat1'], $user_subcat_id_array1))
                      { 
                      if($sub1==$data['sub_category_name1'])
                      {
                        echo "<td></td>";
                      }
                      else
                      { $sub1=$data['sub_category_name1'] ;   ?>
                         <td style="text-align: center;"><?php echo $data['sub_category_name1'];?></td>
                      <?php } ?>






                      <?php 
                      if($sub2==$data['sub_category_name2'])
                      {
                        echo "<td></td>";
                      }
                      else
                      { $sub2=$data['sub_category_name2'] ;   ?>
                         <td style="text-align: center;"><?php echo $data['sub_category_name2'];?></td>
                      <?php } ?>




                      <?php 
                      if($sub3==$data['sub_category_name3'])
                      {
                        echo "<td></td>";
                      }
                      else
                      { $sub3=$data['sub_category_name3'] ;   ?>
                         <td style="text-align: center;"><?php echo $data['sub_category_name3'];?></td>
                      <?php } ?>




                      <?php 
                      if($sub4==$data['sub_category_name4'])
                      {
                        echo "<td></td>";
                      }
                      else
                      { $sub4=$data['sub_category_name4'] ;   ?>
                         <td style="text-align: center;"><?php echo $data['sub_category_name4'];?></td>
                      <?php } ?>
                      
                     
                      <?php 
                      if($sub5==$data['sub_category_name5'])
                      {
                        echo "<td></td>";
                      }
                      else
                      { $sub5=$data['sub_category_name5'] ;   ?>
                         <td style="text-align: center;"><?php echo $data['sub_category_name5'];?></td>
                      <?php } ?>
                      
                      
                      
                      </tr>
                    <?php } } }
                  }
                  else
                  {
                   echo "<tr><td colspan='7'><h4 align='center'>No Record Found</h4></td></tr>
                    ";
                  } ?>
         
      
      
      </tbody>
    </table>
  </div>

<br>

  <p class="block-heading" id="add_category_show">Add wbs Category</p>
<div class="well" id="add_category" style="display:none">
  <?php if(isset($msg))
  { ?>
  <h4 class="alert alert-info" style="text-align: center"><?php echo $msg;?></h4>
  <?php } ?>
  
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home" align="center" >
                      <?php 
                      $form=array(
                      'class'=>'form-element',
                      'role'=>'form'
                      );
                      echo form_open('da_projects/wbs_sub_category', $form);?>

                  
                  <div class="form-group" >       
                  <label for="exampleInputEmail1" style="padding-right: 116px;">Enter WBS Category</label>
                  <input type="text" class="form-control" name="wbs" placeholder="Enter WBS Category" style="margin: 0px;">
                  <button type="submit" class="btn btn-primary" name="submit">Add</button>
                  </div>

              <!-- /.box-body -->
              <div class="box-footer">
                
              </div>
         <?php echo form_close();?>
          </div>
           <div class="tab-pane fade" id="profile">
      </div>
  </div>

</div>
<br>
<p class="block-heading" id="add_subcategory_show">Add wbs sub Categories</p>
  <div class="well" id="add_subcategory" style="display:block;">

    <table width="100%">
      <tr>
        <td>
              <?php echo form_open('da_projects/wbs_sub_category');?>
              <div class="form-group" >       
              <label for="exampleInputEmail1" style="padding-right: 116px;">Select WBS Category</label>
              <select class="form-control" name="wbss1" style="margin: 0px;">
              <option value="">Select Category</option>
              <?php if(isset($category)&&sizeof($category)>0)
              { //echo "<pre>";print_r($category);
              foreach($category as $wbs_category)
              { ?>

              <option value="<?php echo $wbs_category['id'];?>"><?php echo $wbs_category['category_name'];?></option>
              <?php } }?>
              </select>      
              </div>
              <br>
              <div class="form-group" >       
              <label for="exampleInputEmail1" style="padding-right: 116px;">Enter WBS Sub Category</label>
              <input type="text" class="form-control" name="wbs1"  style="margin: 0px;">
              <button type="submit" class="btn btn-primary" name="submit1">Add</button>
              </div>
              
</td>


<td>
             
              <div class="form-group" >       
              <label for="exampleInputEmail1" style="padding-right: 116px;">Select WBS Sub Category1</label>
              <select class="form-control" name="wbss2" style="margin: 0px;">
              <option value="">Select Sub Category</option>
              <?php if(isset($subcategory1)&&sizeof($subcategory1)>0)
              { //echo "<pre>";print_r($subcategory1);
              foreach($subcategory1 as $wbs_subcategory1)
              { ?>

              <option value="<?php echo $wbs_subcategory1['id'];?>"><?php echo $wbs_subcategory1['sub_category_name1'];?></option>
              <?php } }?>
              </select>      
              </div>
              <br>
              <div class="form-group" >       
              <label for="exampleInputEmail1" style="padding-right: 116px;">Enter WBS Sub Category2</label>
              <input type="text" class="form-control" name="wbs2"  style="margin: 0px;">
              <button type="submit" class="btn btn-primary" name="submit2">Add</button>
              </div>
              
</td>



<td>
             
              <div class="form-group" >       
              <label for="exampleInputEmail1" style="padding-right: 116px;">Select WBS Sub Category2</label>
              <select class="form-control" name="wbss3" style="margin: 0px;">
              <option value="">Select Sub Category 2</option>
              <?php if(isset($subcategory2)&&sizeof($subcategory2)>0)
              { //echo "<pre>";print_r($subcategory1);
              foreach($subcategory2 as $wbs_subcategory2)
              { ?>

              <option value="<?php echo $wbs_subcategory2['id'];?>"><?php echo $wbs_subcategory2['sub_category_name2'];?></option>
              <?php } }?>
              </select>      
              </div>
              <br>
              <div class="form-group" >       
              <label for="exampleInputEmail1" style="padding-right: 116px;">Enter WBS Sub Category3</label>
              <input type="text" class="form-control" name="wbs3"  style="margin: 0px;">
              <button type="submit" class="btn btn-primary" name="submit3">Add</button>
              </div>
              


</td></tr>
<tr><td colspan="3"><hr></td></tr>
<tr>

 
    <td>
             
              <div class="form-group" >       
              <label for="exampleInputEmail1" style="padding-right: 116px;">Select WBS Sub Category3</label>
              <select class="form-control" name="wbss4" style="margin: 0px;">
              <option value="">Select Sub Category3</option>
              <?php if(isset($subcategory3)&&sizeof($subcategory3)>0)
              { //echo "<pre>";print_r($subcategory1);
              foreach($subcategory3 as $wbs_subcategory3)
              { ?>

              <option value="<?php echo $wbs_subcategory3['id'];?>" ><?php echo $wbs_subcategory3['sub_category_name3'];?></option>
              <?php } }?>
              </select>      
              </div>
              <br>
              <div class="form-group" >       
              <label for="exampleInputEmail1" style="padding-right: 116px;">Enter WBS Sub Category 4</label>
              <input type="text" class="form-control" name="wbs4"  style="margin: 0px;">
              <button type="submit" class="btn btn-primary" name="submit4">Add</button>
              </div>
             
</td>



<td>
             
              <div class="form-group" >       
              <label for="exampleInputEmail1" style="padding-right: 116px;">Select WBS Sub Category4</label>
              <select class="form-control" name="wbss5" style="margin: 0px;">
              <option value="">Select Sub Category4</option>
              <?php if(isset($subcategory4)&&sizeof($subcategory4)>0)
              { //echo "<pre>";print_r($subcategory1);
              foreach($subcategory4 as $wbs_subcategory4)
              { ?>

              <option value="<?php echo $wbs_subcategory4['id'];?>"><?php echo $wbs_subcategory4['sub_category_name4'];?></option>
              <?php } }?>
              </select>      
              </div>
              <br>
              <div class="form-group" >       
              <label for="exampleInputEmail1" style="padding-right: 116px;">Enter WBS Sub Category5</label>
              <input type="text" class="form-control" name="wbs5"  style="margin: 0px;">
              <button type="submit" class="btn btn-primary" name="submit5">Add</button>
              </div>
              <?php echo form_close();?>
 </td>


</tr>

</table>


  </div>



<br>
                    
            </div>
        </div>
    </div>
    
<?php require('footer.php'); ?>


<script type="text/javascript">
$("#category_list_show").click(function(){
    $("#category_list").toggle();
});

$("#add_category_show").click(function(){
    $("#add_category").toggle();
});

$("#add_subcategory_show").click(function(){
    $("#add_subcategory").toggle();
});

$("[rel=tooltip]").tooltip();
$(function() {
$('.demo-cancel-click').click(function(){return false;});
});
</script>

  </body>
</html>