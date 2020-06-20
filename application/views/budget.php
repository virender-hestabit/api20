<?php include('header.php');?><?php include('sidemenu.php');?>
    <div class="content">
        
        <div class="header">
            
            <h1 class="page-title">Budget / Cost Summary</h1>
        </div>
        
        <div class="container-fluid">
            <div class="row-fluid">

	<div class="row-fluid">
	</div>
<div class="row-fluid">&nbsp;</div>
  <div class="well">
    <table class="table" border="1px">
      <thead>
      <tr>
                    <th style="text-align: center">S.No.</th>
                    <th style="text-align: center" colspan="6" >Budget Heads WBS</th> 
                    <th style="text-align: center" colspan="" class="bg-primary">Budgeted Value</th>
                    <th style="text-align: center" colspan="" class="bg-primary">Updated Budget</th>  
                    <th style="text-align: center" colspan="" class="bg-primary">Contract Value</th>           
                    <th style="text-align: center" colspan="" class="bg-primary">Contract Vendor</th>  
                    <th style="text-align: center" colspan="" class="bg-primary">Paid Amount</th>  
                  </tr>
                  </thead>
                  <tbody >

                  
                  <?php 
                   $cat_name=$sub1=$sub2=$sub3=$sub4=$sub5='';
                  if(isset($dataArr)&&sizeof($dataArr)>0)
                  {  $i=0;
                      $project_id = $this->session->project_id;
                     foreach($dataArr as $data)
                     { 
                      //this line for showing category and subcategory name in each row 
                      //$cat_name = $subcat_name1 = $subcat_name2 = $subcat_name3 = $subcat_name4 = $subcat_name5 ='';   

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
                              

                      <tr>
                      <td style="text-align: center;"><?php echo ++$i;?></td>
                      
                      



                      <td style='text-align: center;'><?php 
                       if(isset($cat_name)&&$cat_name==$data['category_name'])
                       {
                         echo "";
                       }
                       else
                       {
                        $cat_name = $data['category_name'];
                        echo $cat_name.$cost;
                       }
                       ?></td>
                     






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
                     <td></td>
                     <td></td>
                     <td style='text-align: center;'><?php echo $data['vendor_name'];?></td>
                     <td></td>
                    


  
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


  <div class="well">

    <table class="table" width="100%">
    <thead width="100%">
      <tr>
        <th width="33.3%" style="text-align: center">Category Type</th>
        <th width="33.3%" style="text-align: center">Name</th>
        <th width="33.3%" style="text-align: center">Total Price</th>
      </tr>
    </thead>







<?php $i=0;?>

   <!-- for category cost -->
<?php $category_ids = $this->Database_conn2->getallcategory('category_id');?>

<?php if(isset($category_ids))
{
foreach ($category_ids as $cat_id) 
{ 
$cat_cost = $this->Database_conn2->get_total_cost($cat_id['category_id']);
?>
<tr><th style="padding-left:60px;" colspan="3"><strong>S.No <?php echo ++$i;?> <br></strong></th></tr>
<tr>
<td width="33.3%" style="text-align: center">Category Name</td>
<td width="33.3%" style="text-align: center"><?php $cat = $this->Database_conn2->get_subcat_name('wbs_category',$cat_id['category_id']);
         if(isset($cat['0']['category_name']))
        echo $cat['0']['category_name'];
      ?></td>
<td width="33.3%" style="text-align: center"><?php echo $cat_cost['0']['sum(estimated_cost)'];?></td>
</tr>
           











   <!-- for subcat1 cost -->
<?php    
$subcategory1_ids = $this->Database_conn2->getallcategory('subcat_id1',$cat_id['category_id']);
if(isset($subcategory1_ids))
{
foreach ($subcategory1_ids as $subcat1 ) 
{
  if($subcat1['subcat_id1']!='0')
  {
$subcat1_cost = $this->Database_conn2->get_total_cost($cat_id['category_id'],$subcat1['subcat_id1']);
?>
<tr>
<td width="33.3%" style="text-align: center">Subcategory1 Name</td>
<td width="33.3%" style="text-align: center"><?php $cat1 = $this->Database_conn2->get_subcat_name('wbs_sub_category1',$subcat1['subcat_id1']);
       if(isset($cat1['0']['sub_category_name1']))
        echo $cat1['0']['sub_category_name1'];
      ?></td>
<td width="33.3%" style="text-align: center"><?php echo $subcat1_cost['0']['sum(estimated_cost)'];?></td>
</tr>












 <!-- for subcat2 cost -->              
<?php }   
$subcategory2_ids = $this->Database_conn2->getallcategory('subcat_id2',$cat_id['category_id'],$subcat1['subcat_id1']);
if(isset($subcategory2_ids))
{
foreach ($subcategory2_ids as $subcat2 ) 
{
  if($subcat2['subcat_id2']!='0')
  {
$subcat2_cost = $this->Database_conn2->get_total_cost($cat_id['category_id'],$subcat1['subcat_id1'],$subcat2['subcat_id2']);
?>

<tr>
<td width="33.3%" style="text-align: center">Subcategory2 Name</td>
<td width="33.3%" style="text-align: center"><?php $cat2 =  $this->Database_conn2->get_subcat_name('wbs_sub_category2',$subcat2['subcat_id2']);
    if(isset($cat2['0']['sub_category_name2']))
       echo $cat2['0']['sub_category_name2'];
    ?></td>
<td width="33.3%" style="text-align: center"><?php echo $subcat2_cost['0']['sum(estimated_cost)'];?></td>
</tr>                                               
















<!-- for subcat3 cost -->
<?php   } 
$subcategory3_ids = $this->Database_conn2->getallcategory('subcat_id3',$cat_id['category_id'],$subcat1['subcat_id1'],$subcat2['subcat_id2']);
if(isset($subcategory3_ids))
{
foreach ($subcategory3_ids as $subcat3 ) 
{
    if($subcat3['subcat_id3']!='0')
  {
$subcat3_cost = $this->Database_conn2->get_total_cost($cat_id['category_id'],$subcat1['subcat_id1'],$subcat2['subcat_id2'],$subcat3['subcat_id3']);

?>

<tr>
<td width="33.3%" style="text-align: center">Subcategory3 Name</td>
<td width="33.3%" style="text-align: center"><?php $cat3 = $this->Database_conn2->get_subcat_name('wbs_sub_category3',$subcat3['subcat_id3']);
      if(isset($cat3['0']['sub_category_name3']))
        echo $cat3['0']['sub_category_name3'];
      ?></td>
<td width="33.3%" style="text-align: center"><?php echo $subcat3_cost['0']['sum(estimated_cost)'];?></td>
</tr>














<!-- for subcat4 cost -->
<?php }  
$subcategory4_ids = $this->Database_conn2->getallcategory('subcat_id4',$cat_id['category_id'],$subcat1['subcat_id1'],$subcat2['subcat_id2'],$subcat3['subcat_id3']);
if(isset($subcategory4_ids))
{
foreach ($subcategory4_ids as $subcat4 ) 
{
  if($subcat4['subcat_id4']!='0')
  {
$subcat4_cost = $this->Database_conn2->get_total_cost($cat_id['category_id'],$subcat1['subcat_id1'],$subcat2['subcat_id2'],$subcat3['subcat_id3'],$subcat4['subcat_id4']);

?>

<tr>
<td width="33.3%" style="text-align: center">Subcategory4 Name</td>
<td width="33.3%" style="text-align: center"><?php $cat4 = $this->Database_conn2->get_subcat_name('wbs_sub_category4',$subcat4['subcat_id4']);
     if(isset($cat4['0']['sub_category_name4']))
      echo $cat4['0']['sub_category_name4'];
    ?></td>
<td width="33.3%" style="text-align: center"><?php echo $subcat4_cost['0']['sum(estimated_cost)'];?></td>
</tr>
















<!-- for subcat5 cost -->
<?php    }
$subcategory5_ids = $this->Database_conn2->getallcategory('subcat_id5',$cat_id['category_id'],$subcat1['subcat_id1'],$subcat2['subcat_id2'],$subcat3['subcat_id3'],$subcat4['subcat_id4']);
if(isset($subcategory5_ids))
{
foreach ($subcategory5_ids as $subcat5 ) 
{
   if($subcat5['subcat_id5']!='0')
  {
$subcat5_cost = $this->Database_conn2->get_total_cost($cat_id['category_id'],$subcat1['subcat_id1'],$subcat2['subcat_id2'],$subcat3['subcat_id3'],$subcat4['subcat_id4'],$subcat5['subcat_id5']);

?>

<tr>
<td width="33.3%" style="text-align: center">Subcategory5 Name</td>
<td width="33.3%" style="text-align: center"><?php $cat5 =  $this->Database_conn2->get_subcat_name('wbs_sub_category5',$subcat5['subcat_id5']);
     if(isset($cat5['0']['sub_category_name5']))
      echo $cat5['0']['sub_category_name5'];
    ?></td>
<td width="33.3%" style="text-align: center"><?php echo $subcat5_cost['0']['sum(estimated_cost)'];?></td>
</tr>










                 
  <?php } } } } } } } } } } } } } ?>

    </table>
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