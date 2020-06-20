<?php ////$this->output->enable_profiler(TRUE);?>
<?php include('header.php');?>
<?php if(isset($this->session->project_id))
{
  include('sidemenu.php');
}
?>
<style type="text/css">
.full_screen
{
  margin:0px !important;
}  
</style>
    <?php if(isset($this->session->project_id))
    {
      echo '<div class="content">';
    }
    else
    {
      echo '<div class="content" style="margin:0px !important;">';
    } ?>
        
        <div class="header" >
            
            <h1 class="page-title">List of Project</h1>
        </div>
        
        <div class="container-fluid">
            <div class="row-fluid">

	<div class="row-fluid">
<a href="<?php echo base_url('project');?>" class="btn btn-primary" style="float:right;margin: 10px;" >Create Project</a>

 &nbsp; </div>

<p class="block-heading">Projects List</p>
  <div class="well">
    <table class="table" width="100%">
      <thead>
      <tr>
                  <th style="text-align: center;" >S NO.</th>
                  <th style="text-align: center;">Project Name</th>
                  <th style="text-align: center;">Project Location</th>
                  <th style="text-align: center;">Type of Project</th>
                  <th style="text-align: center;">Date</th>
                  <th style="text-align: center;">Action</th>
                  </tr>
                  </thead>
                  <tbody>

                  
                  <?php if(sizeof($projects)>0)
                  {  $i=0;
                     foreach($projects as $data)
                     { ?>
                              

                      <tr>
                      <td style="text-align: center;"><?php echo ++$i;?></td>
                      <td style="text-align: center;"><?php echo $data['project_name'];?></td>
                      <td style="text-align: center;"><?php echo $data['location'];?></td>
                      <td style="text-align: center;"><?php echo $data['project_type'];?></td>
                      <td style="text-align: center;"><?php echo date("d-M-Y",strtotime($data['start_date']));?></td>
                      <td style="text-align: center;">
                      <?php 
                       $superadmin = $this->Common->getDataSingle('user_type','user_type',array('user_level'=>'3'));
                       if($this->session->user_type!=$superadmin)
                       {
                           $project_access = $this->Common->getDataSingle('users','project_id',array('id'=>$this->session->user_id));
                           if($project_access==$data['id'])
                           {
                                echo form_open('da_projects/project_list');?>
                                <input type="submit" name="login_project" value="Log In">
                                <input type="hidden" name="project_id" value="<?php echo $data['id'];?>">
                                <?php echo form_close();
                           }
                           else
                           { ?>
                                <input type="submit" name="login_project" value="Log In" Disabled>
                                
                          <?php }
                       }
                       else{

                          echo form_open('da_projects/project_list');?>
                      <input type="submit" name="login_project" value="Log In">
                      <input type="hidden" name="project_id" value="<?php echo $data['id'];?>">
                      <?php echo form_close();
                       }  ?>
                      </td>
                      </tr>
                    <?php }
                  }
                  else
                  {
                   echo "<tr><td colspan='6'><h4 align='center'>No Record Found</h4></td></tr>
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