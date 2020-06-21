<?php include('header.php');?>
<?php include('sidemenu.php');?>
    <div class="content">
        
        <div class="header">
            
            <h1 class="page-title">Manage Disease</h1>
        </div>
        
        <div class="container-fluid">
            <div class="row-fluid">

	<div class="row-fluid">
	</div>
<div class="row-fluid">&nbsp;</div>
<div class="well">
  <?php if(isset($msg) && !empty($msg)){ ?>
  <h4 class="alert alert-info" style="text-align: center"><?php echo $msg;?></h4>
  <?php } ?>

    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home" >
                  <?php if(isset($edit_disease) && $edit_disease[0]['id']!=''){
                          $form=array('class'=>'form-element','role'=>'form');echo form_open('admin/editDisease', $form);
                        }else{
                          $form=array('class'=>'form-element','role'=>'form');echo form_open('admin/manageDisease', $form);
                        } ?>
          <div class="form-group" align="center" >
            <select class="form-control" name="category" required>
              <option value="" >Select Disease Category</option>
              <?php 
                foreach ($category_detail as $cat_data){
                  $select = (isset($edit_disease) && $edit_disease[0]['category']==$cat_data['id'])?'selected':'';
                  echo "<option value='".$cat_data['id']."' $select >".$cat_data['category_name']."</option>";
                }
              ?>
            </select>
          </div>
          <div class="form-group" align="center" >       
            <input type="text" class="form-control" name="disease_name" placeholder="Enter Disease" value="<?php echo (isset($edit_disease) && $edit_disease[0]['id']!='')?$edit_disease[0]['disease_name']:''; ?>" required>
          </div>
          <div class="form-group" align="center" >
            <input type="hidden" name="disease_id" value="<?php echo (isset($edit_disease) && $edit_disease[0]['id']!='')?$edit_disease[0]['id']:''; ?>">
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


<p class="block-heading">Disease List</p>
  <div class="well">
    <table class="table">
      <thead>
      <tr>
                  <th width="10%">S NO.</th>
                  <th width="20%">Disease category</th>
                  <th width="20%">Disease Name</th>
                  <th width="20%">Created By</th>
                  <th width="15%">Created on</th>
                  <th width="15%" style="text-align: center;">Action</th>
                  </tr>
                  </thead>
                  <tbody>

                  
                  <?php if(sizeof($dataArr)>0){  
                    $i=0;
                    foreach($dataArr as $data){ ?>
                      <tr>
                      <td width="10%"><?php echo ++$i;?></td>
                      <td width="20%"><?php echo $data['category_name'];?></td>
                      <td width="20%"><?php echo $data['disease_name'];?></td>
                      <td width="20%"><?php echo $data['username'];?></td>
                      <td width="15%"><?php echo $data['created_on'];?></td>
                      <td width="15%" style="text-align: center;"><a href="<?php echo base_url('admin/editDisease/'.$data['id']); ?>" title="Edit" ><i class="fa fa-edit" style="font-size:14px; margin-left:20px;"></i></a>
                        <a href="<?php echo base_url('admin/deleteDisease/'.$data['id']); ?>" title="Delete" onclick="return confirm('Are you want to delete!');"><i class="fa fa-trash" style="font-size:14px; margin-left:20px;"></i></a>
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