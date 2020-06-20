<?php //$this->output->enable_profiler(TRUE);
?>
<style>
.display_anchor
{
  color:#548ea5 !important;
  font-size: 17px;
  font-weight: 550;
}
.display_anchor:hover
{
  color: #f31414 !important;
}
.product_view .modal-dialog{max-width: 800px; width: 100%;}
.pre-cost{text-decoration: line-through; color: #a5a5a5;}
.space-ten{padding: 10px 0;}
</style>  


<?php include('header.php');?><?php include('sidemenu.php');?>



    <div class="content">
    <div class="header">
    <h1 class="page-title">Comment</h1>
    </div>
    <div class="container-fluid">
    <div class="row-fluid">
    
     <div class="well">
    <div class="col-md-12" class='alert alert-info' style='text-align: center'><h4>Select a Existing Folder</h4></div></br>

<div class="container-fluid">
            <div class="row-fluid">
              <div  style="margin:50px;">
                <?php 
               echo  form_open('da_projects/comment');?>
              <div class="row" align="center">
              <label align="left" style="width:50%;">Comment : </label>
              <textarea  name="add_comment" placeholder="Add Comment " rows="3" cols="20" style="width:50%"></textarea>
              <input type="hidden" name="file_id" value="<?php echo $file_id;?>">
              
              </div>

              <br>

              <div class="row" align="center">
              <input type="submit" name="submit" class="btn btn-primary" value="Submit" >
              </div>

             
          <?php echo form_close(); ?>
              <div class="row">
              <table width="100%">
               <?php echo $table;?>
              </table>
              </div>
               
           
 <!-- <input type="button" name="submit" class="btn btn-primary" value="Submit" onclick="closed()">
 -->

         </div>
       </div>
     </div>


</div>
          
        

 

</div>
</div>
</div>

      
<?php require('footer.php'); ?>



  </body>
</html>