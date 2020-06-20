<?php include('header.php');?>
<?php include('sidemenu.php');?>
    <div class="content">
        
        <div class="header">
            
            <h1 class="page-title">Add Category</h1>
        </div>
        
        <div class="container-fluid">
            <div class="row-fluid">

	<div class="row-fluid">
	</div>
<div class="row-fluid">&nbsp;</div>
<div class="well">
  <?php if(isset($msg)){ ?>
  <h4 class="alert alert-info" style="text-align: center"><?php echo $msg;?></h4>
  <?php } ?>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home" align="center" >
                      <?php $form=array('class'=>'form-element','role'=>'form');
                      echo form_open('admin/addCategory', $form);?>

                  
                  <div class="form-group" >       
                  <label for="exampleInputEmail1" style="padding-right: 116px;">Enter Category</label>
                  <input type="text" class="form-control" name="category" placeholder="Enter Category" style="margin: 0px;">
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
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


<p class="block-heading">Cagegory List</p>
  <div class="well">
    <table class="table">
      <thead>
      <tr>
                  <th width="20%" style="text-align: center;" >S NO.</th>
                  <th width="20%"  style="text-align: center;">Category Name</th>
                  <th width="20%"  style="text-align: center;">Created By</th>
                  <th width="20%"  style="text-align: center;">Created on</th>
                  <th width="20%"  style="text-align: center;">Action</th>
                  </tr>
                  </thead>
                  <tbody>

                  
                  <?php if(sizeof($dataArr)>0){  
                    $i=0;
                    foreach($dataArr as $data){ ?>
                      <tr>
                      <td width="20%" style="text-align: center;"><?php echo ++$i;?></td>
                      <td width="20%" style="text-align: center;"><?php echo $data['category_name'];?></td>
                      <td width="20%" style="text-align: center;"><?php echo $data['created_by'];?></td>
                      <td width="20%" style="text-align: center;"><?php echo $data['created_on'];?></td>
                      <td width="20%" style="text-align: center;"><a href="#" title="Edit" ><i class="fa fa-edit" style="font-size:14px; margin-left:20px;"></i></a>
                      </td>
                      </tr>
                    <?php } } else{
                   echo "<tr><td colspan='5'><h4 align='center'>No Record Found</h4></td></tr>";
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