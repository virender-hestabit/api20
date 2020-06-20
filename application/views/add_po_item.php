<?php 
if(isset($_POST['status']))
{
  $get_status = $this->Common->get_data_single('po_item_list','is_active',array('id'=>$_POST['status_id']));
  if($get_status=='1')
  {
    $get_status = '0';
  }
  else
  {
    $get_status = '1';
  }
  $update = $this->Database_conn->update('po_item_list',array('is_active'=>$get_status),'id',$_POST['status_id']);
}
if(isset($_POST['submit']))
{
  $already_exit = $this->Common->getDataSingle('po_item_list','count(*)',array('item_name'=>$_POST['item_name'],'company_id'=>$this->session->company_id));
  if(!$already_exit)
  {
      $item_insert = $this->Common->insertData('po_item_list',array('item_name'=>$_POST['item_name'],'company_id'=>$this->session->company_id,'project_id'=>$this->session->project_id));
      if($item_insert)
      {
        $msg = " Item Added Successfully";
      }
      else
      {
        $msg = " Unable To Add Item ";
      }
  }
  else
  {
    $msg = " Item Already Exist";
  }
}
?>
<?php include('header.php');?><?php include('sidemenu.php');?>
    <div class="content">
        
        <div class="header">
            
            <h1 class="page-title">Add Purchase Order Item</h1>
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
      <div class="tab-pane active in" id="home" align="center" >
                     
                  <form method="post" action=''>
                  <div class="form-group" >       
                  <label for="exampleInputEmail1" style="padding-right: 116px;">Enter Item Name</label>
                  <input type="text" class="form-control" name="item_name" style="margin: 0px;">
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                  </div>

              <!-- /.box-body -->
              <div class="box-footer">
                
              </div>
             </form>
          </div>
           <div class="tab-pane fade" id="profile">
      </div>
  </div>

</div>


<p class="block-heading">Item List</p>
  <div class="well">
    <table class="table">
      <thead>
      <tr>
                  <th style="text-align: left;" >S NO.</th>
                  <th  style="text-align: left;">Category Name</th>
                  <th style="text-align: left">Status</th>
                  </tr>
                  </thead>
                  <tbody>

                  
                  <?php 
                  $dataArr = $this->Common->getData('po_item_list',array('company_id'=>$this->session->company_id));
                  if(sizeof($dataArr)>0)
                  {  $i=0;
                     foreach($dataArr as $data)
                     { ?>
                              

                      <tr>
                      <td style="text-align: left;"><?php echo ++$i;?></td>
                      <td style="text-align: left;"><?php echo $data['item_name'];?></td>
                      <td style="text-align: left;">
                        <form method="post" action="">
                          <input type="hidden" name="status_id" value="<?php echo $data['id'];?>">
                          <input type="submit" name="status" value="<?php echo (isset($data['is_active'])&&$data['is_active']=='1')?'Active':'Deactive';?>" >
                          </form>
                        </td>
                      </tr>
                    <?php }
                  }
                  else
                  {
                   echo "<tr><td colspan='3'><h4 align='center'>No Record Found</h4></td></tr>
                    ";
                  } ?>
         
      
      
      </tbody>
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