  
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('application/assests/lib/bootstrap/css/bootstrap.css');?>">
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('application/assests/stylesheets/theme.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('application/assests/lib/font-awesome/css/font-awesome.css');?>">

    <div class="content">
        
        
        
        <div class="container-fluid">
            <div class="row-fluid">

      
           <?php if(!isset($msg))
           {
           echo  form_open_multipart('da_projects/upload_form');?>  

              <div  style="margin:50px;">
              <div class="row">
              <input type="file" name="upload"  value=" Upload File " >
              </div>

              <div>
              <div class="row">
              <textarea  name="description" placeholder=" Description about the file "></textarea>
              </div>

              <br>

              <div class="row">
              <input type="submit" name="submit" class="btn btn-primary" value="Submit">
              </div>

              </div>
          <?php echo form_close();
          }
          else 
          { ?>
             
             
              <h3 class="alert alert-success"><?php echo $msg;?></h3>
              
             
        <?php
        echo "<script>closed();</script>";  
      } ?>
        

 <!-- <input type="button" name="submit" class="btn btn-primary" value="Submit" onclick="closed()">
 -->

            </div>
        </div>
    </div>
  
  <script src="<?php echo base_url('application/assests/lib/jquery-1.7.2.min.js');?>" type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>  

<script type="text/javascript">
  function closed(){
    //setTimeout(function(){ window.close(); }, 3000);
    //alert('sdfsdf');
   window.opener.location.reload(true);
 }
</script>


  </body>
</html>