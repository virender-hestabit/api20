
<?php include('header.php');?>
<?php include('sidemenu.php');?>

    <div class="content">
        
        <div class="header">
            
            <h1 class="page-title"> PO  ENTRY </h1>
        </div>
        
        <div class="container-fluid">
            <div class="row-fluid">

  <div class="row-fluid">
  </div>
<div class="row-fluid">&nbsp;</div>
<div class="well">
<style type="text/css">
.change:hover
{
    background-color: #6cb2eb73;
    width: 213px !important;
}

.product_view .modal-dialog{max-width: 800px; width: 100%;}
.pre-cost{text-decoration: line-through; color: #a5a5a5;}
.space-ten{padding: 10px 0;}  
</style>
<?php 
$category = $this->Database_conn->fetch_category('wbs_category','category_name');
$subcat1 = $this->Database_conn->fetch_category('wbs_sub_category1','sub_category_name1');
$subcat2 = $this->Database_conn->fetch_category('wbs_sub_category2','sub_category_name2');
$subcat3 = $this->Database_conn->fetch_category('wbs_sub_category3','sub_category_name3');
$subcat4 = $this->Database_conn->fetch_category('wbs_sub_category4','sub_category_name4');
$subcat5 = $this->Database_conn->fetch_category('wbs_sub_category5','sub_category_name5');
$po_number = $this->Database_conn->getNextSerialNumber('po_number');
?>
  <?php if(isset($msg))
  { ?>
  <h4 class="alert alert-info" style="text-align: center"><?php echo $msg;?></h4>
  <?php } ?>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
          <table width="100%" style="font-size: 12px">
                      <?php 
                      $form=array(
                      'class'=>'form-element',
                      'role'=>'form'
                      );
                      echo form_open('da_projects/po_entry', $form);?>


    <input type="hidden" name="id" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['id']:'';?>">
    <input type="hidden" name="supp_id" value="" id="supp_id">
   
   <tr>
          <td>Project Name</td>
          <td><div align="center"></div></td>
          <td>
          <select name="proj_name" id="proj_name">


          <?php 
          $trans = $this->Database_conn->fetch_Data('projects');
          foreach ($trans as $project) 
          {  
          $selected = ($project['id']==$edit_data['0']['project_id'])?'selected':'';
          ?>
          <option value="<?php echo $project['project_name'];?>"  <?php echo $selected;?> ><?php echo $project['project_name'];?></option>
          <?php  } ?>
          </select>
          </td>
          <td></td>
          <td>PO Number</td>
          <td><div align="center"></div></td>
          <td><input type="text" name="po_number" id="po_number" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['po_number']:$po_number;?>" readonly /></td>
  </tr> 


  <tr>
          <td>WBS Category</td>
          <td><div align="center"></div></td>
          <td>
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
                 <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#category_select" value=" Category " style="margin: -13% 0% 0% 7%;"></center>
              <?php
            }
            else
              { ?>
            <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#category_select" value=" Category " style="margin: 0% 0% 0% 16%;">
             <?php } ?>
          </td>
          <td></td>
         <td>PO Title</td>
         <td><div align="center"></div></td>
         <td><input type="text" name="po_title" id="po_title" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['po_title']:'';?>" /></td>

  </tr> 



   <tr>
          <td>Sub Category 1</td>
          <td><div align="center"></div></td>
          <td><?php if(isset($cat_array['1'])&&sizeof($cat_array)>0)
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
               } ?></td>
          <td></td>
          
        <td>Respective Budget Head</td>
        <td><div align="center"></div></td>
        <td>
         <?php 
         $cat_array_id = array(
          'category_id'=>(isset($cat_array['0']))?$cat_array['0']:0,
          'subcat_id1'=>(isset($cat_array['1']))?$cat_array['1']:0,
          'subcat_id2'=>(isset($cat_array['2']))?$cat_array['2']:0,
          'subcat_id3'=>(isset($cat_array['3']))?$cat_array['3']:0,
          'subcat_id4'=>(isset($cat_array['4']))?$cat_array['4']:0,
          'subcat_id5'=>(isset($cat_array['5']))?$cat_array['5']:0
         );
         $wbs_budget = $this->Common->getDataSingle('wbs_transaction','estimated_cost',$cat_array_id);
         
         if(isset($cat_array_id['category_id'])&&$cat_array_id['category_id']!=0&&(isset($updateFlag))&&$updateFlag!=1)
          {
            if(!sizeof($wbs_budget)>0)
            {
            echo "<script>
            var redirect =  confirm('Please add Budget first');
             if(redirect)
             {
                window.location.href ='".base_url('da_projects/budget_summary')."';
             }
            </script>";
            }
          }
         $budget = $this->Database_conn2->get_total_budget('po_master',$cat_array_id,'budget_heads');?>
          <input type="text" name="budget_heads" id="budget_heads" value="<?php echo (isset($budget['budget_heads']))?$budget['budget_heads']:$wbs_budget;?>"/></td>
  </tr> 

  <tr>
          
          <td>Sub Category 2</td>
          <td><div align="center"></div></td>
          <td><?php if(isset($cat_array['2'])&&sizeof($cat_array)>0)
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
          <td></td>
          <td>Supplier Name </td>
          <td><div align="center"></div></td>
          <td>
            <div class="search-box " style="position: relative;">
            <input type="text" name="supp_name" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['supplier_name']:'';?>"  autocomplete="off">
            <div class="result" style="position: absolute; background-color:  #fff;width:100% ; "></div>
            </div>
          </td>
  </tr> 

  <tr>
        <td>Sub Category 3 <br><br> Sub Category 4</td>
        <td><div align="center"></div></td>
        <td><?php if(isset($cat_array['3'])&&sizeof($cat_array)>0)
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
               } ?>
        <br><br>
        <?php if(isset($cat_array['4'])&&sizeof($cat_array)>0)
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
               } ?>
        </td>
        <td></td>
        <td>Supplier Address</td>
        <td><div align="center"></div></td>
        <td><textarea name="supp_address" id="supp_address" cols="45" rows="3"><?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['supplier_address']:'';?></textarea></td>
  </tr> 


  <tr>
        <td>Sub Category 5</td>
        <td><div align="center"></div></td>
        <td><?php if(isset($cat_array['5'])&&sizeof($cat_array)>0)
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
               } ?></td>
        <td></td>
        <td>Contact Person/Signing Authority </td>
        <td><div align="center"></div></td>
        <td><input type="text" name="contact_pname" id="contact_pname"   value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['po_title']:'';?>"/></td>
  </tr> 
  <tr>  

        <td>Contact Mail ID</td>
        <td><div align="center"></div></td>
        <td><input type="text" name="contact_email" id="contact_email"   value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['contact_person_email']:'';?>"/></td>
        <td></td>

        <td>Contact No.</td>
        <td><div align="center"></div></td>
        <td><input type="text" name="contact_no" id="contact_no"   value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['contact_person_name']:'';?>"/></td>



  </tr>
<!-- 
   
<?php 
if(isset($updateFlag)&&$updateFlag=='1')
{ ?>
  <tr>
      <td>Contract Value</td>
      <td><div align="center"></div></td>
      <td><input type="text" name="contract_value" id="contract_value"   value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['contract_value']:'';?>"/></td>
      <td></td>
      <td>Contract Value GST</td>
      <td><div align="center"></div></td>
      <td><input type="number" name="contract_value_gst" id="contract_value_gst"   value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['contract_value_gst']:'';?>"/></td>
  </tr>
<?php } ?>

 -->

  <tr>
    <td>Late Delivery Clause </td>
      <td><div align="center"></div></td>    
      <td><input type="text" name="late_delivery_clause" id="late_delivery_clause" value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['late_delivery_clause']:'';?>" /></td>
      <td></td>
      <td>Liquidated Damages</td>
      <td><div align="center"></div></td>
      <td><input type="text" name="liq_damages" id="liq_damages"  value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['liquidated_damages']:'';?>"/></td>
  </tr>

  <tr>
      <td>Delivery Date</td>
      <td><div align="center"></div></td>
      <td><input type="date" name="delivery_date" id="delivery_date"  value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['delivery_date']:'';?>"/></td>
      <td></td>
      <td><p>PO Issue Date</p></td>
      <td><div align="center"></div></td>
      <td><input type="date" name="issue_date" id="issue_date"  value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['po_date']:'';?>"/></td>
  </tr>


  <tr>
      <td>Billing Address</td>
      <td><div align="center"></div></td>
      <td><textarea name="billing_addr" id="billing_addr" cols="45" rows="3"> <?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['billing_address']:'';?></textarea></td>
      <td></td>
      <td>Dilivery Address</td>
      <td><div align="center"></div></td>
      <td><textarea name="delivery_addr" id="delivery_addr" cols="45" rows="3"> <?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['delivery_address']:'';?></textarea></td>
  </tr>


  <tr>
      <td>Enclosure</td>
      <td><div align="center"></div></td>
      <td><textarea name="enclosure" id="enclosure" cols="45" rows="3"> <?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['enclosure']:'';?></textarea></td>
      <td></td>
      <td>Special Condition</td>
      <td><div align="center"></div></td>
      <td><textarea name="spl_cond" id="spl_cond" cols="45" rows="3"> <?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['special_condition']:'';?></textarea></td>
  </tr>


  <tr>
      <td> Freight </td>
      <td><div align="center"></div></td>
      <td><input type="text" name="freight" id="freight"  value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['freight']:'';?>"/></td>
      <td></td>
      <td><p>Loading/Unloading</p></td>
      <td><div align="center"></div></td>
      <td><input type="text" name="loading_type" id="loading_type"  value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['loading_type']:'';?>"/></td>
  </tr>


  <tr>
      <td> Insurance </td>
      <td><div align="center"></div></td>
      <td><input type="text" name="insurance" id="insurance"  value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['insurance']:'';?>"/></td>
      <td></td>
      <td><p>Packing</p></td>
      <td><div align="center"></div></td>
      <td><input type="text" name="packing" id="packing"  value="<?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['packing']:'';?>"/></td>
  </tr>

  <tr>  
      <td>Payment Terms</td>
      <td><div align="center"></div></td>
      <td colspan="5"><textarea name="payment_term" id="payment_term"><?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['payment_term']:'';?></textarea></td>
  </tr>

  <tr>  
       <td style="width: 100px;">Warranty / Guarantee (OTHER TERMS & CONDITIONS)</td>
       <td><div align="center"></div></td>
      <td colspan="5"><textarea name="warranty_guarantee" id="warranty_guarantee"><?php echo (isset($updateFlag)&&($updateFlag == 1))?$edit_data['0']['warranty_guarantee']:'';?></textarea><br></td>
  </tr>


  <tr align="center">    
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



<p class="block-heading" style="display:<?php echo $po_list;?>">PO List</p>
  <div class="well" style="display:<?php echo $po_list;?>">
    <table class="table" style="font-size: 12px" >
      <thead>
      <tr>

          <th>S.No.</th>
          <th>Project Name </th>
          <th>PO Title</th>
          <th>PO Number</th>
          <th>Supplier Name</th>
          <th>PO Issue Date</th>
          <th>Delivery Date</th>
          <th>Billing Address</th>
          <th>Dilivery Address</th>
          <th>Action</th>
          <th>View</th>
      </tr>
                  </thead>
                  <tbody>

                    <?php if(sizeof($dataArr)>0)
                  {  $i=0;
                     foreach($dataArr as $data)
                     { 

                             if($data['temp_data']==0)
                             {
                              echo "<tr>";
                             }
                             else
                             {
                              echo '<tr style="background-color: #ff000026;">';
                             }
                      ?>
                              
                      
                      
                          <td><?php echo ++$i;?></td>
                          <td><?php echo $data['project_name'];?></td>
                          <td><?php echo $data['po_title'];?></td>
                          <td><?php echo $data['po_number'];?></td>
                          <td><?php echo $data['supplier_name'];?></td>
                          <td><?php echo $data['po_date'];?></td>
                          <td><?php echo $data['delivery_date'];?></td>
                          <td><?php echo $data['billing_address'];?></td>
                          <td><?php echo $data['delivery_address'];?></td>
                      <td>
                      <?php 
                      $id = $data['id'];
                      $form=array(
                      'class'=>'form-element',
                      'role'=>'form');
                      if($data['temp_data']==1)
                      {
                      echo form_open('da_projects/edit_po_entry/'.$id, $form);?>
                        <input type="hidden" name="edit_id" value="<?php echo $data['id'];?>" />
                        <input type="submit" class="btn btn-primary" name="edit" value="Edit" />
                        <?php echo form_close();
                      }
                      else
                        { 
                          echo '<h5> N/A </h5>';
                        } ?>
                      </td>

                      <td>
                        <a href="<?php echo base_url('project/view_purchase_order/'.$id);?>" title="View" target="_blank">
                          <i class="fa fa-eye" aria-hidden="true" style="font-size: 24px;"></i>
                        </a>
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





  <p class="block-heading" style="display:<?php echo $show_transaction;?>">PO Transaction</p>
  <a href="<?php echo base_url('da_projects/add_item'); ?>" target="_blank" class="btn btn-primary" style="font-size: 12px;float:right;margin: 10px;display:<?php echo $show_transaction;?>">Add Item</a>
  <div class="well" style="display:<?php echo $show_transaction;?>">
    <table class="table" style="font-size: 12px">
           
          <tr>
              
              <th></th>
              <th style="text-align: center;">
                Item Description
              </th>

              <th style="text-align: center;">
                Unit
              </th>

              <th style="text-align: center;">
                Item Quantity
              </th>

              <th style="text-align: center;">
                Unit Price
              </th>

              <th style="text-align: center;">
                CGST(%)
              </th>
                
              <th style="text-align: center;">
                SGST(%)
              </th>

              <th style="text-align: center;">
                IGST(%)
              </th>


              <th style="text-align: center;">
                Action
              </th>

          </tr>
       <?php  echo form_open('da_projects/po_transaction/'.$id);?>
      <tr>
        

        <td></td>

        <td>
          <input type="hidden" name="item_id" id="item_id" value="<?php echo (isset($update_transaction)&&$update_transaction!='')?$update_transaction['0']['item_id']:'';?>">
            <div class="search-box1 " style="position: relative;">
            <input type="text" name="description" placeholder="Item Description" value="<?php echo (isset($update_transaction)&&$update_transaction!='')?$update_transaction['0']['item_name']:'';?>"  autocomplete="off">
            <div class="result1" style="position: absolute; background-color:  #fff;width:100% ; "></div>
            </div>
        </td>

        <td>
          <input type="text" name="unit" placeholder="Item Unit" value="<?php echo (isset($update_transaction)&&$update_transaction!='')?$update_transaction['0']['unit']:'';?>" style="width:100%">
        </td>          

        <td>
          <input type="text" name="quantity" placeholder="Item Quantity" value="<?php echo (isset($update_transaction)&&$update_transaction!='')?$update_transaction['0']['quantity']:'';?>" style="width:100%">
        </td>

        

        <td>
          <input type="text" name="price" placeholder="Unit Price" value="<?php echo (isset($update_transaction)&&$update_transaction!='')?$update_transaction['0']['item_rate']:'';?>" style="width:100%">
        </td>



        <td>
          <input type="text" name="cgst" placeholder="CGST" value="<?php echo (isset($update_transaction)&&$update_transaction!='')?$update_transaction['0']['cgst']:'';?>" style="width:100%">
        </td>

        <td>
          <input type="text" name="sgst" placeholder="SGST" value="<?php echo (isset($update_transaction)&&$update_transaction!='')?$update_transaction['0']['sgst']:'';?>" style="width:100%">
        </td>

        <td>
          <input type="text" name="igst" placeholder="IGST" value="<?php echo (isset($update_transaction)&&$update_transaction!='')?$update_transaction['0']['igst']:'';?>" style="width:100%">
        </td>


        <td>
          <?php if(isset($update_transaction)&&$update_transaction!='')
          { ?>
              <input type="hidden" name="update_id" value="<?php echo $update_transaction['0']['id'];?>">
              <input type="submit" name="edit_transaction" value=" Update " style="width:100%">
          <?php } 
          else
          { ?>
               <input type="submit" name="add_transaction" value=" Add " style="width:100%">
          <?php } ?>
          
        </td>

          
      </tr>    
      <?php echo form_close();?>
     
      <?php if(isset($po_transaction))
      { ?>

        
         <tr>  
               <th>
                S.No
              </th>

              <th style="text-align: center;">
                Item Description
              </th>

              <th style="text-align: center;">
                Unit
              </th>


              <th style="text-align: center;">
                Item Quantity
              </th>

              <th style="text-align: center;">
                Unit Price
              </th>

              <th style="text-align: center;">
                CGST
              </th>

              <th style="text-align: center;">
                SGST
              </th>

              <th style="text-align: center;">
                IGST
              </th>

              <th style="text-align: center;">
                Action
              </th>

          </tr>
    
    <?php  
           $i=0;
        foreach ($po_transaction as $trans) 
        {
         //echo "<pre>";print_r($trans);
         ?>
            

            <tr>

              <td>
              <?php echo ++$i;?>
              </td>

              <td style="text-align: center;">
                <?php echo $trans['item_name'];?>
              </td>
              
               <td style="text-align: center;">
                <?php echo $trans['unit'];?>
              </td>

              <td style="text-align: center;">
                <?php echo $trans['quantity'];?>
              </td>

              <td style="text-align: center;">
                <?php echo $trans['item_rate'];?>
              </td>

              <td style="text-align: center;">
               <?php echo $trans['cgst'];?>
              </td>

              <td style="text-align: center;">
               <?php echo $trans['sgst'];?>
              </td>

              <td style="text-align: center;">
               <?php echo $trans['igst'];?>
              </td>



              <td style="text-align: center;">
                <?php echo form_open('da_projects/edit_po_transaction/'.$trans['id']);?>
                <input type="submit" name="edit" value="Edit">
                <?php echo form_close();?>
              </td>

          </tr>


         
      

       <?php } ?>

             <tr>
            <td colspan="9" style="text-align: center;"><br>
              <?php echo form_open('da_projects/final_submit/'.$id);?>
              <input type="submit" name="close" value=" Save & Close" onclick=" return confirm('Are you sure?  ');">
              <input type="submit" name="draft" value=" Save as Draft">
              <?php echo form_close();?>
            </td>
          </tr>

       <?php }?>
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



            <!-- popup for file comment -->
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
              <table id="folder_details" width="100%">
      
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
    $('.search-box input[type="text"]').on("keyup input", function(){
      
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("<?php echo base_url('da_projects/backend_search');?>", {name_id: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});


    function get_vendor_id( address ='' , name='' , number='' , email='' , id)
    {
      //alert(name);
      document.getElementById('supp_address').value = address;
      document.getElementById('contact_pname').value = name;
      document.getElementById('contact_no').value = number;
      document.getElementById('contact_email').value = email;
      document.getElementById('supp_id').value = id;
    }


 $(document).ready(function(){
    $('.search-box1 input[type="text"]').on("keyup input", function(){
      
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result1");
        if(inputVal.length){
            $.get("<?php echo base_url('da_projects/backend_search_item');?>", {item_id: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result1 p", function(){
        $(this).parents(".search-box1").find('input[type="text"]').val($(this).text());
        $(this).parent(".result1").empty();
    });
});


    function get_item_id(id)
    {
      //alert(id);
      document.getElementById('item_id').value = id;
    }



        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });

         CKEDITOR.replace('payment_term');
         CKEDITOR.replace('warranty_guarantee');
    </script>
    
  </body>
</html>