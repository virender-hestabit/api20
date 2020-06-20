
<html>
<head>
	<title>Invoice Number</title>
	<!-- <meta http-equiv="refresh" content="1" > -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">

*{
  /*text-transform: uppercase;*/
  font-size: 13px;
  margin-top: 1px;
  margin-bottom: 1px;
  font-family: sans-serif;
}
/*.left
{
  padding-left:0px;
  margin-left: 0px;
}
.more-left
{
  margin-left:-30px !important;
}*/
.box {
   /* width: auto;*/
    box-shadow: 1px 1px 12px 0px;
   /* padding-top: 40px;
    padding-bottom: 40px;*/
    padding-right: 40px;
}
 
</style>	
</head>
<body>
	<?php $purchase_no = $po_id;
        $po_details = $this->Common->getData('po_master',array('project_id'=>$this->session->project_id,'company_id'=>$this->session->company_id,'id'=>$purchase_no));
        $po_detail  = $po_details['0'];
  ?>
    <br>
    <div class="container">
    <div class="container box">
    <div class="row">
      <div class="col-md-12 text-center">
        <h3>PURCHASE ORDER</h3>
      </div>
    </div>

    <!-- <div class="row">
      <div class="col-md-12 text-center">
        <h4> PURCHASE ORDER </h4><br>
      </div>
    </div> -->
  


  <div class="row">
  <div class="col-md-12">
    <div class="col-md-2" style="font-weight: 600;">Purchase Order No:</div>
    <div class="col-md-6" style="font-weight: 600;"><?php echo $po_detail['po_number'];?></div>
    <strong style="float:right;">Date : <?php echo date('d-M-Y');?></strong>
  </div>
</div>



<div class="row">
<div class="col-md-12">  
    <div class="col-md-2"><strong>Supplier Name : </strong></div>
    <div class="col-md-4"><?php echo $po_detail['supplier_name'];?></div>  
</div>
</div>



<div class="row">
<div class="col-md-12">
    <div class="col-md-2 left"><strong>Supplier Address: </strong></div>
    <div class="col-md-4 left more-left"><?php echo $po_detail['supplier_address'];?></div>
</div>
</div>
<br>


<div class="row">
<div class="col-md-12">
    <div class="col-md-2 left"><strong>Kind Attention : </strong></div>
    <div class="col-md-6 left more-left"><?php echo $po_detail['contact_person_name']." (".$po_detail['contact_person_phone']." , ".$po_detail['contact_person_email'].")";?></div>
</div>
</div>
<br>


<div class="row">
<div class="col-md-12">
    <div class="col-md-2 left"><strong>Subject : </strong></div>
    <div class="col-md-8 left more-left"><strong style="margin-left: 0px"> <?php echo $po_detail['po_title'];?></strong></div>
</div>
</div>


<div class="row">
  <div class="col-md-12">
  <h5 style="font-weight: 600;padding-left:50px">Dear Sir ,</h5>
  <div class="col-md-push-1 col-md-10">
    <p style="text-align: justify-all;">
      This has reference to Your Final quote dated <span style="font-weight: 600;"><?php echo date("d-M-Y",strtotime($po_detail['po_date']));?></span> Design quotation no.: <span style="font-weight: 600;">KR/VS/PI - 00140/2016-17</span> , we are pleased to place our detailed Purchase order for <span style="font-weight: 600;">Rs <?php echo number_format(($po_detail['contract_value'] + $po_detail['contract_value_gst']),2,".",",") ;?></span> (<span style="font-weight: 600"><?php echo numberTowords($po_detail['contract_value'] + $po_detail['contract_value_gst'])."Only";?></span>) for the above mentioned subject as per the terms & Conditions given below :
    </p>
  </div>
</div>
</div>




<div class="container">
<div class="row">
  <div class="col-md-12">
   <table width="100%" class="table" style="font-size: 12px;padding-right: 20px;">

   <tr>
   	<th  align="left"> S No. </th>
   	<th  align="left"> Description </th>
   	<th  style="text-align: right;"> Unit </th>
   	<th  style="text-align: right;"> Qty </th>
    <th  style="text-align: right;"> Unit Price </th>
   	<th  style="text-align: right;"> GST Amount </th>
   	<th  style="text-align: right;padding-right: 35px;"> Item Amount </th>
   </tr>


  <?php 
  $po_trn = $this->Common->getData('po_transaction',array('project_id'=>$this->session->project_id,'company_id'=>$this->session->company_id,'po_number'=>$po_detail['po_number']));
    if(isset($po_trn)&&sizeof($po_trn)>0)
    { 
      $i=0;
      $total_amount = $total_gst_amount = $grand_total_amount = 0; 
    foreach ($po_trn as $data) 
    { 
       $total_amount = $total_amount + ($data['item_rate']*$data['quantity']);
       $total_gst_amount = $total_gst_amount + $data['cgst_total'] + $data['sgst_total'] + $data['igst_total'];
       $grand_total_amount = $grand_total_amount + $data['grand_total'];
      ?>
  <tr>
    <td  align="left"> <?php echo ++$i;?> </td>
    <td  align="left"> <?php echo $this->Common->getDataSingle('po_item_list','item_name',array('company_id'=>$this->session->company_id,'id'=>$data['item_id']));?> </td>
    <td  style="text-align: right;"> <?php echo $data['unit'];?> </td>
    <td  style="text-align: right;"> <?php echo $data['quantity'];?> </td>
    <td  style="text-align: right;"> <?php echo number_format(($data['item_rate']),2,".",",") ;?> </td>
    <td  style="text-align: right;"> <?php echo number_format(($data['cgst_total'] + $data['sgst_total'] + $data['igst_total']),2,".",",") ;?> </td>
    <td  style="text-align: right;padding-right: 35px;"> <?php echo number_format(($data['grand_total']),2,".",",") ;?> </td>
   </tr>
   <?php } ?>

   <tr>
   	<td colspan="5" style="text-align: left;font-weight: 600;"> Total : </td>
    <td style="text-align: right;"> <?php echo number_format(($total_gst_amount),2,".",",") ;?> </td>
   	<td style="text-align: right;padding-right: 35px;"> <?php echo number_format(($total_amount),2,".",",") ;?> </td>
   </tr>


   <tr>
    <td colspan="6" style="text-align: left">Freight</td>
    <td style="text-align: right;padding-right: 35px;"> <?php echo number_format(($po_detail['freight']),2,".",",") ;?> </td>
   </tr>

   <tr>
    <td colspan="6" style="text-align: left">Insurance</td>
    <td style="text-align: right;padding-right: 35px;"> <?php echo number_format(($po_detail['insurance']),2,".",",") ;?> </td>
   </tr>

   <tr>
    <td colspan="6" style="text-align: left">Loading & Unloading</td>
    <td style="text-align: right;padding-right: 35px;"> <?php echo number_format(($po_detail['loading_type']),2,".",",") ;?> </td>
   </tr>


   <tr>
    <td colspan="6" style="text-align: left">Any other Tax/ Duty</td>
    <td style="text-align: right;padding-right: 35px;"> <?php echo number_format(($po_detail['packing']),2,".",",") ;?> </td>
   </tr>

   <tr>
    <td colspan="6" style="text-align:left;font-weight: 800;"> Grand Total : </td>
    <td style="text-align: right;padding-right: 35px;"> <?php echo number_format(($grand_total_amount + $po_detail['freight'] + $po_detail['insurance'] +$po_detail['loading_type'] + $po_detail['packing']),2,".",",") ;?> </td>
   </tr>
   <?php } ?>
   </table>
   <div class="row">
     <div class="col-md-push-2 col-md-8" style="text-align: center">
       <strong>Total Amount Rupees <?php echo numberTowords($po_detail['contract_value'] + $po_detail['contract_value_gst'])  ;?> only</strong>
     </div>
   </div>
  
</div>
</div>
</div>
<br>

<div class="row">
<div class="col-md-12">
    <div class="col-md-2 left"><strong>Delivery Date : </strong></div>
    <div class="col-md-6 left more-left"><?php echo date("d-M-Y",strtotime($po_detail['delivery_date']));?></div>
</div>
</div>

<div class="row">
<div class="col-md-12">
    <div class="col-md-2 left"><strong>Delivery Address : </strong></div>
    <div class="col-md-6 left more-left"><?php echo $po_detail['delivery_address'];?></div>
</div>
</div>
<br>

<div class="row">
<div class="col-md-12">
    <div class="col-md-push-2 col-md-8" style="text-align: center;">For any queries please contact <span style="font-weight: 600;"><?php 
     $name = $this->Common->getDataSingle('users','full_name',array('id'=>$po_detail['created_by']));
     $email = $this->Common->getDataSingle('users','email_id',array('id'=>$po_detail['created_by']));
    echo $name." (".$email.")" ;?></span></div>
</div>
</div>

<div class="row">
<div class="col-md-12">
    <div class="col-md-4 text-left" style="font-weight: 600;"  ><p>Payment Terms : </p></div>
</div>
</div>



<div class="row">
<div class="col-md-12">
    <div class="col-md-12" style="font-weight:400;"><?php echo $po_detail['payment_term'];?>
</div>
</div>
</div>
<br><br>

<div class="row">
<div class="col-md-12">
    <div class="col-md-4 text-left" style="font-weight: 600;"><p>Other Terms & Conditions : </p></div>
</div>
</div>


<div class="row">
<div class="col-md-12">
    <div class="col-md-12 " style="font-weight: 400;"><?php echo $po_detail['warranty_guarantee'];?> 
</div>
</div>
</div>

<br><br><br>
</div>

</div>

	
<br><br>
</body>
</html>