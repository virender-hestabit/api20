  <?php //$this->output->enable_profiler(TRUE);
?>



<?php include('header.php');?>
<?php include('sidemenu.php');?>
    <div class="content">
        
        <div class="header">
            
            <h1 class="page-title">Bugdet/Cost Summary</h1>
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
  $set_category_to_zero = array(
   'category_id'=>'0',
   'subcat_id1'=>'0',
   'subcat_id2'=>'0',
   'subcat_id3'=>'0',
   'subcat_id4'=>'0',
   'subcat_id5'=>'0',

  ); 
?>
  <div class="row-fluid"><br>
    <a href="<?php echo base_url('da_projects/wbs_sub_category'); ?>" class="btn btn-primary">Add Subcategory</a>
    
    <br><br>
  </div>

<style>
 .table tr th, .table tr td 
  {
    height:10px !important;
  }  
</style>


<!-- <p class="block-heading">WBS Bugdet/Cost Summary</p> -->
  <div  style="overflow: scroll;">
      <?php if(isset($msg))
  { ?>
  <h4 class="alert alert-info" style="text-align: center"><?php echo $msg;?></h4>
  <?php } ?>
    <?php echo form_open('da_projects/select_category');?>
    <table class="table" border="1px" style="font-size:12px;">
      <thead>
      <tr>
                  <th style="text-align: center;">S.No</th>
                  <th style="text-align: center;">Category Name</th>
                  <th style="text-align: center;">Budget/ Estimate</th>
                  <th colspan="2" style="text-align: center;">Tracking/ Monitoring</th>
                  <th colspan="3" style="text-align: center;">Awarded Value</th>
                  <th colspan="4" style="text-align: center;">Consumed Value</th>
                  </tr>
                  
                  <tr>
                  <th style="text-align: center;"></th>
                  <th style="text-align: center;"></th>
                  <th></th>
                  <th style="text-align: center;">Initial Update</th>
                  <th style="text-align: center;">Final Update</th>
                  <th style="text-align: center;">Amount</th>
                  <th style="text-align: center;">GST Amount</th>
                  <th style="text-align: center;">Po Details</th>
                  <th style="text-align: center;">Bill No</th>
                  <th style="text-align: center;">Amount</th>
                  <th style="text-align: center;">GST Amount</th>
                  <th style="text-align: center;">TDS</th>
                  </tr>
                  </thead>
                  <tbody>

                  
      <?php 
       $cat_name=$sub1=$sub2=$sub3=$sub4=$sub5='';
      if(isset($dataArr)&&sizeof($dataArr)>0)
      {  $i=0;
          $zero = floatval(0);
         foreach($dataArr as $data)
         { 
             if(in_array($data['id'],$cat_array))
             {
          $i++;
?>

          <tr style="background-color:#ccc">
              
              <td style="text-align: right;"><?php echo $i;?></td>
              

              <td style="text-align: left;"><strong>
              <?php echo $data['category_name'];?></strong></td>

              
              <td style="text-align: right; ">

              <?php 
              $con1 = array('category_id'=>$data['id']);
              $budget = $this->Database_conn2->get_total_budget('wbs_transaction',$con1,'sum(estimated_cost)');
              echo ($budget['sum(estimated_cost)'])?(number_format($budget['sum(estimated_cost)'],2,".",",")):(number_format(0,1,".",","));
              ?>
              <a href="#" data-toggle="modal" title="Add" data-target="#budget_set" onclick="get_cat_id(<?php echo $data['id'];?>);">
                <i class="fa fa-edit" style="font-size:14px; margin-left:20px;"></i>
                </a>
              </td>

              

              <td style="text-align: right;padding-right: 35px;">
              <?php  $tracking_amount = $this->Database_conn2->get_tracking_amount($con1);
              echo (number_format($tracking_amount['sum(initial_value)'],2,".",",")); ?>
              </td>

              

              <td style="text-align: right;">
              <?php   echo ($tracking_amount['sum(final_value)']!=$zero)?(number_format($tracking_amount['sum(final_value)'],2,".",",")):(number_format($tracking_amount['sum(initial_value)'],2,".",",")); ?>
              <a href="#" style="margin-left:0px;" data-toggle="modal" data-target="#tracking_set" onclick="get_cat_id(<?php echo $data['id'];?>);"> 
              <i class="fa fa-edit" style="font-size:14px; margin-left:20px;"></i>
              </a>
              
              </td>

              <?php $detail = $this->Database_conn2->get_total_detail('po_master',$con1);?>
              

              <td  style="text-align: right"><?php  $budget = $this->Database_conn2->get_total_budget('po_master',$con1,'sum(contract_value)');
              echo ($budget['sum(contract_value)'])?(number_format($budget['sum(contract_value)'],2,".",",")):(number_format(0,1,".",",")); ?></td>
              

              <td  style="text-align:right"><?php  $budget1 = $this->Database_conn2->get_total_budget('po_master',$con1,'sum(contract_value_gst)');
                echo ($budget1['sum(contract_value_gst)'])?(number_format($budget1['sum(contract_value_gst)'],2,".",",")):(number_format(0,1,".",",")); ?></td>

              <td align="center">
               <a href="#" style="margin-left:0px;" title="view" data-toggle="modal" data-target="#po_details_view" onclick="po_detail_view(<?php echo $data['id'];?>);"> 
              <i class="fa fa-eye" style="font-size:14px; margin-left:20px;"></i>
              </a>  
                </td>
              

              <td  style="text-align:right"></td>
              

              <td  style="text-align:right"></td>
              
              <td  style="text-align:right"></td>
              
              <td  style="text-align:right"></td>
          </tr>

<!-- ################################################################################################################################# -->
              <?php
              $subcat1 = $this->Database_conn2->get_subcat('wbs_sub_category1',array('category_id'=>$data['id']));
              if(isset($subcat1)&&sizeof($subcat1)>0)
              {  $j=0;
                foreach ($subcat1 as $value) 
                {
                  if(in_array($value['id'], $subcat1_array))
                  {
                   $j++;
                
                  ?>
             <tr>
                <td style="text-align: right;"><?php echo $i.".".$j; ?></td>
                

                <td style="text-align: left; padding-left: 40px">
                <?php echo $value['sub_category_name1'];?></td>
                <td style="text-align: right;">
                <?php 
                $con1 = array('category_id'=>$data['id'],'subcat_id1'=>$value['id']);
                $budget = $this->Database_conn2->get_total_budget('wbs_transaction',$con1,'sum(estimated_cost)');
                echo ($budget['sum(estimated_cost)'])?(number_format($budget['sum(estimated_cost)'],2,".",",")):(number_format(0,1,".",","));
                ?> 

                <a href="#" style="margin-left:0px;"  title="Add" data-toggle="modal" data-target="#budget_set" onclick="get_cat_id(<?php echo $data['id'];?>,<?php echo $value['id'];?>);"> 
                <i class="fa fa-edit" style="font-size:14px; margin-left:20px;"></i>
                </a>
                </td>

                
                <td style="text-align: right;padding-right: 35px;">
                <?php  $tracking_amount = $this->Database_conn2->get_tracking_amount($con1);
                echo (number_format($tracking_amount['sum(initial_value)'],2,".",",")); ?>
                </td>
                

                <td style="text-align: right;">
                <?php echo ($tracking_amount['sum(final_value)']!=$zero)?(number_format($tracking_amount['sum(final_value)'],2,".",",")):(number_format($tracking_amount['sum(initial_value)'],2,".",",")); ?> 
                 <a href="#" style="margin-left:0px;" data-toggle="modal" data-target="#tracking_set" onclick="get_cat_id(<?php echo $data['id'];?>,<?php echo $value['id'];?>);"> 
                <i class="fa fa-edit" style="font-size:14px; margin-left:20px;"></i>
                </a>
                </td>

                <?php $detail = $this->Database_conn2->get_total_detail('po_master',$con1);?>
                

                <td  style="text-align:right"><?php  $budget = $this->Database_conn2->get_total_budget('po_master',$con1,'sum(contract_value)');
                echo ($budget['sum(contract_value)'])?(number_format($budget['sum(contract_value)'],2,".",",")):(number_format(0,1,".",",")); ?></td>
                

                <td  style="text-align:right"><?php  $budget1 = $this->Database_conn2->get_total_budget('po_master',$con1,'sum(contract_value_gst)');
                echo ($budget1['sum(contract_value_gst)'])?(number_format($budget1['sum(contract_value_gst)'],2,".",",")):(number_format(0,1,".",",")); ?></td>

                <td align="center">
                <a href="#" style="margin-left:0px;" title="view" data-toggle="modal" data-target="#po_details_view" onclick="po_detail_view(<?php echo $data['id'];?>,<?php echo $value['id'];?>);"> 
                <i class="fa fa-eye" style="font-size:14px; margin-left:20px;"></i>
                </a>  
                </td>

                <td  style="text-align:right"></td>
                
                <td  style="text-align:right"></td>
                

                <td  style="text-align:right"></td>
                
                <td  style="text-align:right"></td>
            </tr>
<!-- ################################################################################################################################# -->
                          <?php
                          $con2 = array(
                          'category_id'=>$data['id'],
                          'subcat_id1' =>$value['id']
                           );
                          $subcat2 = $this->Database_conn2->get_subcat('wbs_sub_category2',$con2);
                          if(isset($subcat2)&&sizeof($subcat2)>0)
                          { $j2=0;
                          foreach ($subcat2 as $value2) 
                          { 
                            if(in_array($value2['id'], $subcat2_array))
                            {
                            $j2++;
                            ?>
              <tr>
                <td style="text-align: right;"><?php echo $i.".".$j.$j2; ?></td>
                
                <td style="text-align: left; padding-left: 80px">
                <?php echo $value2['sub_category_name2'];?></td>
                

                <td style="text-align: right;">
                <?php 
                $con = array('subcat_id2'=>$value2['id']);
                $con1 = array_merge($con2,$con);
                $budget = $this->Database_conn2->get_total_budget('wbs_transaction',$con1,'sum(estimated_cost)');
                echo ($budget['sum(estimated_cost)'])?(number_format($budget['sum(estimated_cost)'],2,".",",")):(number_format(0,1,".",","));
                ?>



               <a href="#" style="margin-left:0px;" title="Add" data-toggle="modal" data-target="#budget_set" onclick="get_cat_id(<?php echo $data['id'];?>,<?php echo $value['id'];?>,<?php echo $value2['id'];?>);"> 
                <i class="fa fa-edit" style="font-size:14px; margin-left:20px;"></i>
                </a>
              </td>
                
                
               <td style="text-align: right;padding-right: 35px;">
                <?php  $tracking_amount = $this->Database_conn2->get_tracking_amount($con1);
                echo (number_format($tracking_amount['sum(initial_value)'],2,".",",")); ?>
                </td>
                
                
                <td style="text-align: right;">
                <?php echo ($tracking_amount['sum(final_value)']!=$zero)?(number_format($tracking_amount['sum(final_value)'],2,".",",")):(number_format($tracking_amount['sum(initial_value)'],2,".",",")); ?> 
                <a href="#" style="margin-left:0px;" data-toggle="modal" data-target="#tracking_set" onclick="get_cat_id(<?php echo $data['id'];?>,<?php echo $value['id'];?>,<?php echo $value2['id'];?>);"> 
                  <i class="fa fa-edit" style="font-size:14px; margin-left:20px;"></i>
                </a>
                </td>
                

                <td  style="text-align:right"><?php  $budget = $this->Database_conn2->get_total_budget('po_master',$con1,'sum(contract_value)');
                echo ($budget['sum(contract_value)'])?(number_format($budget['sum(contract_value)'],2,".",",")):(number_format(0,1,".",",")); ?></td>
                


                <td  style="text-align:right"><?php  $budget1 = $this->Database_conn2->get_total_budget('po_master',$con1,'sum(contract_value_gst)');
                echo ($budget1['sum(contract_value_gst)'])?(number_format($budget1['sum(contract_value_gst)'],2,".",",")):(number_format(0,1,".",",")); ?></td>

                <td align="center">
                 <a href="#" style="margin-left:0px;" title="view" data-toggle="modal" data-target="#po_details_view" onclick="po_detail_view(<?php echo $data['id'];?>,<?php echo $value['id'];?>,<?php echo $value2['id'];?>);"> 
                <i class="fa fa-eye" style="font-size:14px; margin-left:20px;"></i>
                </a>  
                </td>
                
                <td  style="text-align:right"></td>
                
                <td  style="text-align:right"></td>
                
                <td  style="text-align:right"></td>
                
                <td  style="text-align:right"></td>
              </tr>
<!-- ################################################################################################################################# -->
                                       <?php
                                    $con3 = array(
                                    'category_id'=>$data['id'],
                                    'subcat_id1' =>$value['id'],
                                    'subcat_id2' =>$value2['id']
                                     );
                                    $subcat3 = $this->Database_conn2->get_subcat('wbs_sub_category3',$con3);
                                    if(isset($subcat3)&&sizeof($subcat3)>0)
                                    { $j3=0;
                                    foreach ($subcat3 as $value3) 
                                    { 
                                       if(in_array($value3['id'], $subcat3_array))
                                        {
                                      $j3++;
                                      ?>
          <tr>
              <td style="text-align: right;"><?php echo $i.".".$j.$j2.$j3;?></td>
              

              <td style="text-align: left; padding-left: 120px">

              <?php echo $value3['sub_category_name3'];?></td>
              

              <td style="text-align: right;">
              <?php 
              $con = array('subcat_id3'=>$value3['id']);
              $con1 = array_merge($con3,$con);
              $budget = $this->Database_conn2->get_total_budget('wbs_transaction',$con1,'sum(estimated_cost)');
              echo ($budget['sum(estimated_cost)'])?(number_format($budget['sum(estimated_cost)'],2,".",",")):(number_format(0,1,".",","));
              ?>

              <a href="#" style="margin-left:0px;" title="Add" data-toggle="modal" data-target="#budget_set" onclick="get_cat_id(<?php echo $data['id'];?>,<?php echo $value['id'];?>,<?php echo $value2['id'];?>,<?php echo $value3['id'];?>);">
              <i class="fa fa-edit" style="font-size:14px; margin-left:20px;"></i>
              </a>
              </td>
              


              <td style="text-align: right;padding-right: 35px;">
                <?php  $tracking_amount = $this->Database_conn2->get_tracking_amount($con1);
                echo (number_format($tracking_amount['sum(initial_value)'],2,".",",")); ?>
                </td>
              


              <td style="text-align: right;">
              <?php echo ($tracking_amount['sum(final_value)']!=$zero)?(number_format($tracking_amount['sum(final_value)'],2,".",",")):(number_format($tracking_amount['sum(initial_value)'],2,".",",")); ?> 
               <a href="#" style="margin-left:0px;" data-toggle="modal" data-target="#tracking_set" onclick="get_cat_id(<?php echo $data['id'];?>,<?php echo $value['id'];?>,<?php echo $value2['id'];?>,<?php echo $value3['id'];?>);"> 
              <i class="fa fa-edit" style="font-size:14px; margin-left:20px;"></i>
              </a></td>
              <?php $detail = $this->Database_conn2->get_total_detail('po_master',$con1);?>
              

              <td  style="text-align:right"><?php  $budget = $this->Database_conn2->get_total_budget('po_master',$con1,'sum(contract_value)');
              echo ($budget['sum(contract_value)'])?(number_format($budget['sum(contract_value)'],2,".",",")):(number_format(0,1,".",",")); ?></td>
              

              <td  style="text-align:right"><?php  $budget1 = $this->Database_conn2->get_total_budget('po_master',$con1,'sum(contract_value_gst)');
                echo ($budget1['sum(contract_value_gst)'])?(number_format($budget1['sum(contract_value_gst)'],2,".",",")):(number_format(0,1,".",",")); ?></td>

                <td align="center">
                <a href="#" style="margin-left:0px;" title="view" data-toggle="modal" data-target="#po_details_view" onclick="po_detail_view(<?php echo $data['id'];?>,<?php echo $value['id'];?>,<?php echo $value2['id'];?>,<?php echo $value3['id'];?>);"> 
                <i class="fa fa-eye" style="font-size:14px; margin-left:20px;"></i>
                </a>    
                </td>
              
              <td  style="text-align:right"></td>
              
              <td  style="text-align:right"></td>
              
              <td  style="text-align:right"></td>
              
              <td  style="text-align:right"></td>
          </tr>
                                      

<!-- ################################################################################################################################# -->
                                      <?php
                                    $con4 = array(
                                    'category_id'=>$data['id'],
                                    'subcat_id1' =>$value['id'],
                                    'subcat_id2' =>$value2['id'],
                                    'subcat_id3' =>$value3['id']
                                     );
                                    $subcat4 = $this->Database_conn2->get_subcat('wbs_sub_category4',$con4);
                                    if(isset($subcat4)&&sizeof($subcat4)>0)
                                    { $j4=0;
                                    foreach ($subcat4 as $value4) 
                                    {  
                                       if(in_array($value4['id'], $subcat4_array))
                                         {
                                      $j4++;
                                      ?>
          <tr>
            <td style="text-align: right;"><?php echo $i.".".$j.$j2.$j3.$j4;?></td>
            

            <td style="text-align: left; padding-left: 160px">
            <?php echo $value4['sub_category_name4'];?></td>
            


            <td style="text-align: right;">
            <?php 
            $con = array('subcat_id4'=>$value4['id']);
            $con1 = array_merge($con4,$con);
            $budget = $this->Database_conn2->get_total_budget('wbs_transaction',$con1,'sum(estimated_cost)');
            echo ($budget['sum(estimated_cost)'])?(number_format($budget['sum(estimated_cost)'],2,".",",")):(number_format(0,1,".",","));
            ?>


            <a href="#" style="margin-left:0px;" title="Add" data-toggle="modal" data-target="#budget_set" onclick="get_cat_id(<?php echo $data['id'];?>,<?php echo $value['id'];?>,<?php echo $value2['id'];?>,<?php echo $value3['id'];?>,<?php echo $value4['id'];?>);">
            <i class="fa fa-edit" style="font-size:14px; margin-left:20px;"></i>
            </a>
            </td>

          <td style="text-align: right;padding-right: 35px;">
          <?php  $tracking_amount = $this->Database_conn2->get_tracking_amount($con1);
          echo (number_format($tracking_amount['sum(initial_value)'],2,".",",")); ?>
          </td>                               
      

            <td style="text-align: right;">
            <?php echo ($tracking_amount['sum(final_value)']!=$zero)?(number_format($tracking_amount['sum(final_value)'],2,".",",")):(number_format($tracking_amount['sum(initial_value)'],2,".",",")); ?>
            <a href="#" style="margin-left:0px;" data-toggle="modal" data-target="#tracking_set" onclick="get_cat_id(<?php echo $data['id'];?>,<?php echo $value['id'];?>,<?php echo $value2['id'];?>,<?php echo $value3['id'];?>,<?php echo $value4['id'];?>);"> 
            <i class="fa fa-edit" style="font-size:14px; margin-left:20px;"></i>
            </a>
            </td>

            <?php $detail = $this->Database_conn2->get_total_detail('po_master',$con1);?>
            

            <td  style="text-align:right"><?php  $budget = $this->Database_conn2->get_total_budget('po_master',$con1,'sum(contract_value)');
            echo ($budget['sum(contract_value)'])?(number_format($budget['sum(contract_value)'],2,".",",")):(number_format(0,1,".",",")); ?></td>
            

            <td  style="text-align:right"><?php  $budget1 = $this->Database_conn2->get_total_budget('po_master',$con1,'sum(contract_value_gst)');
                echo ($budget1['sum(contract_value_gst)'])?(number_format($budget1['sum(contract_value_gst)'],2,".",",")):(number_format(0,1,".",",")); ?></td>

            <td align="center">
            <a href="#" style="margin-left:0px;" title="view" data-toggle="modal" data-target="#po_details_view" onclick="po_detail_view(<?php echo $data['id'];?>,<?php echo $value['id'];?>,<?php echo $value2['id'];?>,<?php echo $value3['id'];?>,<?php echo $value4['id'];?>);"> 
                <i class="fa fa-eye" style="font-size:14px; margin-left:20px;"></i>
            </a>     
            </td>

            <td  style="text-align:right"></td>
            
            <td  style="text-align:right"></td>
            
            <td  style="text-align:right"></td>
            
            <td  style="text-align:right"></td>
          
          </tr>
<!-- ################################################################################################################################# -->
                                    

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
                                    { $j5=0;
                                    foreach ($subcat5 as $value5) 
                                    { 
                                      if(in_array($value5['id'], $subcat5_array))
                                       { 
                                      $j5++;
                                      ?>
            <tr>
                <td style="text-align: right;"><?php echo $i.".".$j.$j2.$j3.$j4.$j5;?></td>
                <td style="text-align: left; padding-left: 200px">
                <?php echo $value5['sub_category_name5'];?>
         
               </td>

              <td style="text-align: right;">
               <?php 
                $con = array('subcat_id5'=>$value5['id']);
                $con1 = array_merge($con5,$con);
                $budget = $this->Database_conn2->get_total_budget('wbs_transaction',$con1,'sum(estimated_cost)');
                echo ($budget['sum(estimated_cost)'])?(number_format($budget['sum(estimated_cost)'],2,".",",")):(number_format(0,1,".",","));
                ?>


               <a href="#" style="margin-left:0px;" title="Add" data-toggle="modal" data-target="#budget_set" onclick="get_cat_id(<?php echo $data['id'];?>,<?php echo $value['id'];?>,<?php echo $value2['id'];?>,<?php echo $value3['id'];?>,<?php echo $value4['id'];?>,<?php echo $value5['id'];?>);">
                <i class="fa fa-edit" style="font-size:14px; margin-left:20px;"></i>
                </a>
                </td>

                <td style="text-align: right;">
                <?php  $tracking_amount = $this->Database_conn2->get_tracking_amount($con1);?>
                <?php echo (number_format($tracking_amount['sum(initial_value)'],2,".",",")); ?> 
                 <a href="#" data-toggle="modal" data-target="#tracking_trn" onclick="get_trn_detail(<?php echo $data['id'];?>,<?php echo $value['id'];?>,<?php echo $value2['id'];?>,<?php echo $value3['id'];?>,<?php echo $value4['id'];?>,<?php echo $value5['id'];?>);">
                   <i class="fa fa-edit" style="font-size:14px; margin-left:10px;"></i>
                 </a>
                </td>


                <td style="text-align: right;">
                <?php  echo ($tracking_amount['sum(final_value)']!=$zero)?(number_format($tracking_amount['sum(final_value)'],2,".",",")):(number_format($tracking_amount['sum(initial_value)'],2,".",",")); ?>
                <a href="#" style="margin-left:0px;" data-toggle="modal" data-target="#tracking_set" onclick="get_cat_id(<?php echo $data['id'];?>,<?php echo $value['id'];?>,<?php echo $value2['id'];?>,<?php echo $value3['id'];?>,<?php echo $value4['id'];?>,<?php echo $value5['id'];?>);">
                <i class="fa fa-edit" style="font-size:14px; margin-left:20px;"></i>
                </a>
              </td>

                <?php $detail = $this->Database_conn2->get_total_detail('po_master',$con1);?>
                <td  style="text-align:right"><?php  $budget = $this->Database_conn2->get_total_budget('po_master',$con1,'sum(contract_value)');
                echo ($budget['sum(contract_value)'])?(number_format($budget['sum(contract_value)'],2,".",",")):(number_format(0,1,".",",")); ?></td>
                

                <td  style="text-align:right"><?php  $budget1 = $this->Database_conn2->get_total_budget('po_master',$con1,'sum(contract_value_gst)');
                echo ($budget1['sum(contract_value_gst)'])?(number_format($budget1['sum(contract_value_gst)'],2,".",",")):(number_format(0,1,".",",")); ?></td>

                <td align="center">
                 <a href="#" style="margin-left:0px;" title="view" data-toggle="modal" data-target="#po_details_view" onclick="po_detail_view(<?php echo $data['id'];?>,<?php echo $value['id'];?>,<?php echo $value2['id'];?>,<?php echo $value3['id'];?>,<?php echo $value4['id'];?>,<?php echo $value5['id'];?>);"> 
                 <i class="fa fa-eye" style="font-size:14px; margin-left:20px;"></i>
                 </a>  
                </td>
                
                <td  style="text-align:right"></td>
                

                <td  style="text-align:right"></td>
                

                <td  style="text-align:right"></td>
                

                <td  style="text-align:right"></td>
            </tr>
                                   
          
             
          
        <?php } } } } } } } } } } } } } } } } }
      }
      else
      {
       echo "<tr><td colspan='11'><h4 align='center'>No Record Found</h4></td></tr>
        ";
      } ?>


      
      </tbody>
    </table>
    <?php echo form_close();?>
  </div>


                    
            </div>
        </div>
    </div>
    <div class="modal fade product_view" id="budget_set" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right" title=" CLOSE "><i class="fa fa-remove" style="font-size:30px;color:red"></i></a>
                <h3 class="modal-title"> Add Budget Detail </h3>
            </div>
            <div class="container-fluid">
            <div class="row-fluid">
             <div  style="margin: 20px 5px 20px 43px;">
              <div class="row">
   <?php echo form_open('da_projects/budget_summary');?>
  <table width="100%">
  
  <tr>
    <td style="text-align: right">Budget</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td style="text-align: left"><input type="text" name="cost" id="cost"  value=""/></td>
  </tr>

  



  <tr>
    <td style="text-align: right"><p>Vendor/Person Name</p></td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td><input type="text" name="person_name" id="person_name"  value="" />
    
    </td>

    </tr><tr>
    <td style="text-align: right">Remark</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td><textarea name="remark" id="remark" cols="45" rows="3"> </textarea></td>

  </tr>


  
  <tr align="center">    
      <td colspan="3"> 
        <div align="center">
          <input type="hidden" name="cat_id" value="" id="cat_id_value">
          <input type="hidden" name="subcat_id1" value="" id="subcat_id1_value">
          <input type="hidden" name="subcat_id2" value="" id="subcat_id2_value">
          <input type="hidden" name="subcat_id3" value="" id="subcat_id3_value">
          <input type="hidden" name="subcat_id4" value="" id="subcat_id4_value">
          <input type="hidden" name="subcat_id5" value="" id="subcat_id5_value">
          <input type="submit" class="btn btn-primary" name="save_budget" id="save" value="Submit" />
        </div>
      </td>
  </tr>



                
              </table>
   <?php echo form_close();?>
              </div>             
         </div>
       </div>
     </div>
   </div>
 </div>
</div>



<div class="modal fade product_view" id="po_details_view" style="max-height:500px;overflow: scroll;" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right" title=" CLOSE "><i class="fa fa-remove" style="font-size:24px;color:red"></i></a>
                <h3 class="modal-title"> Purchase Order Details  </h3>
            </div>
            <div class="container-fluid">
            <div class="row-fluid">
             <div  style="margin: 20px 5px 20px 43px;">
             <div class="row">
               <div id="show_po_details11">
                 
               </div>
          </div>             
         </div>
       </div>
     </div>
   </div>
 </div>
</div>





 <!-- <div class="modal fade product_view" id="tracking_set" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right" title=" CLOSE "><i class="fa fa-remove" style="font-size:30px;color:red"></i></a>
                <h3 class="modal-title"> Add Tracking Budget </h3>
            </div>
            <div class="container-fluid">
            <div class="row-fluid">
             <div  style="margin: 20px 5px 20px 43px;">
              <div class="row">
   <?php echo form_open('da_projects/budget_summary');?>
  <table width="100%">
  
  <tr>
    <td style="text-align: right">Budget</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td style="text-align: left"><input type="text" name="tracking_cost" id="cost"  value=""/></td>
  </tr>

  
  <tr align="center">    
      <td colspan="3"> 
        <div align="center">
          <input type="hidden" name="cat_id" value="" id="t_cat_id_value">
          <input type="hidden" name="subcat_id1" value="" id="t_subcat_id1_value">
          <input type="hidden" name="subcat_id2" value="" id="t_subcat_id2_value">
          <input type="hidden" name="subcat_id3" value="" id="t_subcat_id3_value">
          <input type="hidden" name="subcat_id4" value="" id="t_subcat_id4_value">
          <input type="hidden" name="subcat_id5" value="" id="t_subcat_id5_value">
          <input type="submit" class="btn btn-primary" name="tracking_budget" id="save" value="Submit" />
        </div>
      </td>
  </tr>



                
              </table>
   <?php echo form_close();?>
              </div>             
         </div>
       </div>
     </div>
   </div>
 </div>
</div> -->
<!-- <div class="modal fade product_view" id="tracking_trn" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <a href="#" data-dismiss="modal" class="class pull-right" title=" CLOSE "><i class="fa fa-remove" style="font-size:30px;color:red"></i></a>
                <h3 class="modal-title"> Trackings Updates </h3>
            </div>
            <div class="container-fluid">
            <div class="row-fluid">
             <div  style="    margin: 20px 5px 20px 43px;">
              <div class="row">
              <table id="trn_details"  width="100%">
                
              </table>
              </div>             
         </div>
       </div>
     </div>
   </div>
 </div>
</div> -->
<?php require('footer.php'); ?>
<script type="text/javascript">
  function get_cat_id(cat='',sc1='',sc2='',sc3='',sc4='',sc5='')
  {
    if(cat=='')
    {
      cat=0;
    }
    
    if(sc1=='')
    {
      sc1=0;
    }

    if(sc2=='')
    {
      sc2=0;
    }

    if(sc3=='')
    {
      sc3=0;
    }

    if(sc4=='')
    {
      sc4=0;
    }

    if(sc5=='')
    {
      sc5=0;
    }
    document.getElementById('cat_id_value').value = cat; 
    document.getElementById('subcat_id1_value').value = sc1; 
    document.getElementById('subcat_id2_value').value = sc2; 
    document.getElementById('subcat_id3_value').value = sc3; 
    document.getElementById('subcat_id4_value').value = sc4; 
    document.getElementById('subcat_id5_value').value = sc5;


    document.getElementById('t_cat_id_value').value = cat; 
    document.getElementById('t_subcat_id1_value').value = sc1; 
    document.getElementById('t_subcat_id2_value').value = sc2; 
    document.getElementById('t_subcat_id3_value').value = sc3; 
    document.getElementById('t_subcat_id4_value').value = sc4; 
    document.getElementById('t_subcat_id5_value').value = sc5; 
  
  }

   function get_trn_detail(cat='',sc1='',sc2='',sc3='',sc4='',sc5='')
  {
    if(cat=='')
    {
      cat=0;
    }
    
    if(sc1=='')
    {
      sc1=0;
    }

    if(sc2=='')
    {
      sc2=0;
    }

    if(sc3=='')
    {
      sc3=0;
    }

    if(sc4=='')
    {
      sc4=0;
    }

    if(sc5=='')
    {
      sc5=0;
    }
    //alert(cat);
    //alert('123');
        // $.ajax({
        // url: "<?php echo base_url('da_projects/trn_detail_ajax');?>",
        // method:'POST',
        // data:  {'cat':cat,'sc1':sc1,'sc2':sc2,'sc3':sc3,'sc4':sc4,'sc5':sc5},
        // success: function(msg) { alert(msg);alert('123');
        // $('#trn_details').html(msg);
        // }
        // });

  $.ajax({
  url: "<?php echo base_url('da_projects/trn_detail_ajax');?>",
  method:'POST',
  data:  { 'cat':cat,'sc1':sc1,'sc2':sc2,'sc3':sc3,'sc4':sc4,'sc5':sc5},
  success: function(msg) {
  $('#trn_details').html(msg);
}
});
 }


 function po_detail_view(cat='',sc1='',sc2='',sc3='',sc4='',sc5='')
  {
    //alert('sds');
    if(cat=='')
    {
      cat=0;
    }
    
    if(sc1=='')
    {
      sc1=0;
    }

    if(sc2=='')
    {
      sc2=0;
    }

    if(sc3=='')
    {
      sc3=0;
    }

    if(sc4=='')
    {
      sc4=0;
    }

    if(sc5=='')
    {
      sc5=0;
    }
  $.ajax({
    async: false,
  url: "<?php echo base_url('da_projects/po_bugdet_summary');?>",
  method:'POST',
  data:  { 'cat':cat,'sc1':sc1,'sc2':sc2,'sc3':sc3,'sc4':sc4,'sc5':sc5},
  
  success: function(msg) {
    
    $("#po_details_view").on('show.bs.modal', function () {
            // alert('The modal is about to be shown.');
            // console.log(msg);
            //$(this).find('#show_po_details11').html(msg);
            $('#show_po_details11').html(msg);
    });
  
}
});
 }
</script>  




  </body>
</html>
