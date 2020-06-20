
    <div class="content">
        
        <div class="header">
            
            <h1 class="page-title">Add Package Dates</h1>
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
<form method="post" action="">
<table >

  






</table>
</form>
</div>


<p class="block-heading">All Package Dates</p>
  <div class="well">
    <table class="table">
      <thead>
      <tr>
                  <th style="text-align: center;" >S NO.</th>
                  <th style="text-align: center;">Package Name</th>
                  <th style="text-align: center;">Package Number</th>
                  <th style="text-align: center;">Date</th>
                  <th style="text-align: center;">Status</th>
                  <th style="text-align: center;">Edit</th>
                  </tr>
                  </thead>
                  <tbody>

                  
                  <?php if(sizeof($dataArr)>0)
                  {  $i=0;
                     foreach($dataArr as $data)
                     { ?>
                              

                      <tr>
                      <td width="50%" style="text-align: center;"><?php echo ++$i;?></td>
                      <td width="50%" style="text-align: center;"><?php echo $data['category_name'];?></td>
                      </tr>
                    <?php }
                  }
                  else
                  {
                   echo "<tr><td colspan='2'><h4 align='center'>No Record Found</h4></td></tr>
                    ";
                  } ?>
         
      
      
      </tbody>
    </table>
  </div>


                    
            </div>
        </div>
    </div>
    
   
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
 