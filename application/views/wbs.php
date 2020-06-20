<style type="text/css">
  .line_height_td
  {
    line-height: 2.6;
  } 

  .line_height_input
  {
    height:33px !important;
  } 
</style>
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
<?php 
$category = $this->Database_conn->fetch_category('wbs_category','category_name');
$subcat1 = $this->Database_conn->fetch_category('wbs_sub_category1','sub_category_name1');
$subcat2 = $this->Database_conn->fetch_category('wbs_sub_category2','sub_category_name2');
$subcat3 = $this->Database_conn->fetch_category('wbs_sub_category3','sub_category_name3');
$subcat4 = $this->Database_conn->fetch_category('wbs_sub_category4','sub_category_name4');
$subcat5 = $this->Database_conn->fetch_category('wbs_sub_category5','sub_category_name5');
?>


  <?php if(isset($msg))
  { ?>
  <h4 class="alert alert-info" style="text-align: center"><?php echo $msg;?></h4>
  <?php } ?>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
          <table width="100%" style="font-size: 13px;">
                      <?php 
                      $form=array(
                      'class'=>'form-element',
                      'role'=>'form'
                      );
                      echo form_open('da_projects/add_wbs', $form);?>

  
    
  

    <tr>
        <td class="line_height_td" style="text-align: right">WBS Category</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td style="text-align: left">
          <?php if(isset($cat_array['0'])&&sizeof($cat_array)>0)
            { $cat_name = "";
              foreach ($category as $key) 
              {

                if($cat_array['0']==$key['id'])
                {
                  $cat_name = $key['category_name'];
                  break;
                 }
              }
              echo (isset($cat_name))?$cat_name:'';
              ?> <input type="hidden" name="wbs" value="<?php echo $cat_array['0'];?>"><center>
                 <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#category_select" value=" Category " style="margin: -3% 57% 1% 7%;"></center>
              <?php
            }
            else
              { ?>
            <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#category_select" value=" Category " style="margin: 0% 0% 0% 16%;">
             <?php } ?>
        </td>
  </tr>


  <tr>
        <td class="line_height_td" style="text-align: right">Sub Category 1</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td style="text-align: left">
          <?php if(isset($cat_array['1'])&&sizeof($cat_array)>0)
            { $cat_name = "";
              foreach ($subcat1 as $key) 
              {
                if($cat_array['1']==$key['id'])
                {
                  $cat_name = $key['sub_category_name1'];
                  break;
                 }
              }
              echo (isset($cat_name))?$cat_name:'';
              ?> <input type="hidden" name="wbssub1" value="<?php echo $cat_array['1'];?>"><?php
            }
            else
              {
                echo ""; 
               } ?>
             </td>
        </tr>



  <tr>
        <td class="line_height_td" style="text-align: right">Sub Category 2</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td style="text-align: left">
          <?php if(isset($cat_array['2'])&&sizeof($cat_array)>0)
            { $cat_name = "";
              foreach ($subcat2 as $key) 
              {
                if($cat_array['2']==$key['id'])
                {
                  $cat_name = $key['sub_category_name2'];
                  break;
                 }
              }
              echo (isset($cat_name))?$cat_name:'';
              ?> <input type="hidden" name="wbssub2" value="<?php echo $cat_array['2'];?>"><?php
            }
            else
              {
                echo ""; 
               } ?></td>
  </tr>



  <tr>
    <td class="line_height_td" style="text-align: right">Sub Category 3</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

    <td style="text-align: left">
      <?php if(isset($cat_array['3'])&&sizeof($cat_array)>0)
            { $cat_name = "";
              foreach ($subcat3 as $key) 
              {
                if($cat_array['3']==$key['id'])
                {
                  $cat_name = $key['sub_category_name3'];
                  break;
                 }
              }
              echo (isset($cat_name))?$cat_name:'';
              ?> <input type="hidden" name="wbssub3" value="<?php echo $cat_array['3'];?>"><?php
            }
            else
              {
                echo ""; 
               } ?></td>
    </tr>


    <tr>

    <td class="line_height_td" style="text-align: right">Sub Category 4</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td style="text-align: left"><?php if(isset($cat_array['4'])&&sizeof($cat_array)>0)
            { $cat_name = "";
              foreach ($subcat4 as $key) 
              {
                if($cat_array['4']==$key['id'])
                {
                  $cat_name = $key['sub_category_name4'];
                  break;
                 }
              }
              echo (isset($cat_name))?$cat_name:'';
              ?> <input type="hidden" name="wbssub4" value="<?php echo $cat_array['4'];?>"><?php
            }
            else
              {
                echo ""; 
               } ?></td>
  </tr>

  <tr>
    <td class="line_height_td" style="text-align: right">Sub Category 5</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td style="text-align: left">
      <?php if(isset($cat_array['5'])&&sizeof($cat_array)>0)
            { $cat_name = "";
              foreach ($subcat5 as $key) 
              {
                if($cat_array['5']==$key['id'])
                {
                  $cat_name = $key['sub_category_name5'];
                  break;
                 }
              }
              echo (isset($cat_name))?$cat_name:'';
              ?> <input type="hidden" name="wbssub5" value="<?php echo $cat_array['5'];?>"><?php
            }
            else
              {
                echo ""; 
               } ?>

    </select></td>
    </tr>
 

 <tr>
        <td class="line_height_td" style="text-align: right">Active Project </td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td style="text-align: left">
          <select name="project1" id="" required style="width:206px">
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
         $selected = (isset($updateFlag)&&$updateFlag=='1'&&$edit_data['0']['project_id']==$project['id'])?'selected':'';
         ?>
         <option value="<?php echo $project['id'];?>" <?php echo $selected;?> ><?php echo $project['project_name'];?></option>
         <?php } } ?>   
      </select>
       </td>
        </tr>


    <tr>

    <td class="line_height_td" style="text-align: right">Cost</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td style="text-align: left"><input type="text" name="cost" id="cost"  value="<?php echo (isset($updateFlag)&&isset($edit_data['0']['estimated_cost'])&&($updateFlag == 1))?$edit_data['0']['estimated_cost']:'';?>" class="line_height_input"/></td>
  </tr>

  



  <tr>
    <td class="line_height_td" style="text-align: right"><p>Vendor/Person Name</p></td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td><input type="text" name="person_name" id="person_name"  value="<?php echo (isset($updateFlag)&&isset($edit_data['0']['vendor_name'])&&($updateFlag == 1))?$edit_data['0']['vendor_name']:'';?>" class="line_height_input" />
    
    </td>

    </tr><tr>
    <td class="line_height_td" style="text-align: right">Remark</td>
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
    <table class="table" style="font-size:12px;">
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
                      $id1 = $data['id'];
                      $form=array(
                      'class'=>'form-element',
                      'role'=>'form');
                      echo form_open('da_projects/edit_wbs/'.$id1, $form);?>
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


 <?php 

  $pre_data = $this->Database_conn2->get_all_data('user_wbd_category_subcategory');
  //echo "<pre>";print_r($pre_data);
  $cat_array = explode(",",$pre_data['category_id']);
  $subcat1_array = explode(",",$pre_data['subcat1_id']);
  $subcat2_array = explode(",",$pre_data['subcat2_id']);
  $subcat3_array = explode(",",$pre_data['subcat3_id']);
  $subcat4_array = explode(",",$pre_data['subcat4_id']);
  $subcat5_array = explode(",",$pre_data['subcat5_id']);
  $dataArr = $this->Database_conn2->get_user_category();
?>





<div class="modal fade product_view" id="category_select" style="width:800px;height:500px;left: 650.444;right: 650px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right" title=" CLOSE "><i class="fa fa-remove" style="font-size:30px;color:red"></i></a>
                <h3 class="modal-title"> Select Category  </h3>
            </div>
            <div class="container-fluid">
            <div class="row-fluid">
             <div  style="    margin: 20px 5px 20px 43px;">
              <div class="row">
                <form method="post" action="">
              <table id="folder_details" width="100%" style="font-size: 12px;">
      
                  <tbody>

                  
      <?php 
       $cat_name=$sub1=$sub2=$sub3=$sub4=$sub5='';
      if(isset($dataArr)&&sizeof($dataArr)>0)
      {  $i=0;

         foreach($dataArr as $data)
         { 
          $con = array('category_id'=>$data['id']);
          $con = implode('-',$con);
?>

           <tr style="background-color:#ccc">
            <td><strong><input type="radio" name="cat[]" value=<?php echo $con;?> class="ckbox"  style="margin-bottom: 0.5%;">
              <?php echo $data['category_name'];?></strong></td></tr>
              

              <?php
              $subcat1_str = $this->Common->getDataSingle('user_wbd_category_subcategory','subcat1_id',array('project_id'=>$this->session->project_id));
              $subcat1_array = explode(",",$subcat1_str);
              $subcat1 = $this->Database_conn2->get_user_subcat('wbs_sub_category1',array('category_id'=>$data['id']),$subcat1_array);
              if(isset($subcat1)&&sizeof($subcat1)>0)
              {
                foreach ($subcat1 as $value) 
                { 
                  $con1 = array('category_id'=>$data['id'],'subcat_id1'=>$value['id']);
                  $con = implode("-", $con1);
                  ?>
                  <tr>
                    <td>
                    <input type="radio" name="cat[]" value="<?php echo $con;?>" class="ckbox" style="margin-bottom: 0.5%; margin-left: 40px;" >
                    <?php echo $value['sub_category_name1'];?></td></tr>

                          <?php
                          $con2 = array(
                          'category_id'=>$data['id'],
                          'subcat_id1' =>$value['id']
                           );
                          $subcat2_str = $this->Common->getDataSingle('user_wbd_category_subcategory','subcat2_id',array('project_id'=>$this->session->project_id));
                          $subcat2_array = explode(",",$subcat2_str);
                          $subcat2 = $this->Database_conn2->get_user_subcat('wbs_sub_category2',$con2,$subcat2_array);
                          if(isset($subcat2)&&sizeof($subcat2)>0)
                          {
                          foreach ($subcat2 as $value2) 
                          { 
                            $con2 = array_merge($con2,array('subcat_id2'=>$value2['id']));
                            $con = implode("-", $con2);
                                      ?>
                          <tr>
                            <td>
                           <input type="radio" name="cat[]" value="<?php echo $con;?>"  class="ckbox" style="margin-bottom: 0.5%; margin-left: 80px;">
                            <?php echo $value2['sub_category_name2'];?></td></tr>
                             
                                       <?php
                                    $con3 = array(
                                    'category_id'=>$data['id'],
                                    'subcat_id1' =>$value['id'],
                                    'subcat_id2' =>$value2['id']
                                     );
                                     $subcat3_str = $this->Common->getDataSingle('user_wbd_category_subcategory','subcat3_id',array('project_id'=>$this->session->project_id));
                                    $subcat3_array = explode(",",$subcat3_str);
                                    $subcat3 = $this->Database_conn2->get_user_subcat('wbs_sub_category3',$con3,$subcat3_array);
                                    if(isset($subcat3)&&sizeof($subcat3)>0)
                                    {
                                    foreach ($subcat3 as $value3) 
                                    { 
                                      $con3 = array_merge($con3,array('subcat_id3'=>$value3['id']));
                                      $con = implode("-", $con3);
                                      ?>
                                    <tr>
                                      <td>
                                      <input type="radio" name="cat[]" value="<?php echo $con;?>"  class="ckbox" style="margin-bottom: 0.5%; margin-left: 120px;">
                                      <?php echo $value3['sub_category_name3'];?></td></tr>
                                      

                                     
                                      <?php
                                    $con4 = array(
                                    'category_id'=>$data['id'],
                                    'subcat_id1' =>$value['id'],
                                    'subcat_id2' =>$value2['id'],
                                    'subcat_id3' =>$value3['id']
                                     );
                                    $subcat4_str = $this->Common->getDataSingle('user_wbd_category_subcategory','subcat4_id',array('project_id'=>$this->session->project_id));
                                    $subcat4_array = explode(",",$subcat4_str);
                                    $subcat4 = $this->Database_conn2->get_user_subcat('wbs_sub_category4',$con4,$subcat4_array);
                                    if(isset($subcat4)&&sizeof($subcat4)>0)
                                    {
                                    foreach ($subcat4 as $value4) 
                                    { 
                                      $con4 = array_merge($con4,array('subcat_id4'=>$value4['id']));
                                      $con = implode("-", $con4);
                                      ?>
                                    <tr>
                                      <td>
                                      <input type="radio" name="cat[]" value="<?php echo $con;?>"  class="ckbox" style="margin-bottom: 0.5%; margin-left: 160px;">
                                      <?php echo $value4['sub_category_name4'];?></td></tr>
                                    
                                    

                                     <?php
                                    $con5 = array(
                                    'category_id'=>$data['id'],
                                    'subcat_id1' =>$value['id'],
                                    'subcat_id2' =>$value2['id'],
                                    'subcat_id3' =>$value3['id'],
                                    'subcat_id4' =>$value4['id']
                                     );
                                     $subcat5_str = $this->Common->getDataSingle('user_wbd_category_subcategory','subcat5_id',array('project_id'=>$this->session->project_id));
                                    $subcat5_array = explode(",",$subcat5_str);
                                    $subcat5 = $this->Database_conn2->get_user_subcat('wbs_sub_category5',$con5,$subcat5_array);
                                    if(isset($subcat5)&&sizeof($subcat5)>0)
                                    {
                                    foreach ($subcat5 as $value5) 
                                    {  
                                      $con5 = array_merge($con5,array('subcat_id5'=>$value5['id']));
                                      $con = implode("-", $con5);
                                      ?>
                                    <tr>
                                      <td>
                                     
                                      <input type="radio" name="cat[]" value="<?php echo $con;?>"  class="ckbox" style="margin-bottom: 0.5%; margin-left: 200px;">
                                      <?php echo $value5['sub_category_name5'];?></td></tr>
                                    <?php  }
                                    } 
                                    ?>



                                    <?php  }
                                    } 
                                    ?>








                                    <?php  }
                                    } 
                                    ?>
                          <?php  }
                          } 
                          ?>
              <?php  }
              } 
              ?>
          
             
          
        <?php }
        ?>              <tr><td style="text-align: center;">

          
              <input type="submit" name="select_category" value=" Submit " class="btn btn-primary">
         </td></tr>
 <?php
      }
      ?>


      
      </tbody>
    </table>
  </form>
              </div>             
         </div>
       </div>
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