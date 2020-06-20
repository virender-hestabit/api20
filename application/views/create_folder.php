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
tr
{
  border-top: 1px solid #ccc;
}
th
{
  height: 37px;
    background-color: #f4f4f4ee;
}
.product_view .modal-dialog{max-width: 800px; width: 100%;}
.pre-cost{text-decoration: line-through; color: #a5a5a5;}
.space-ten{padding: 10px 0;}
</style>  
   

<?php include('header.php');?><?php include('sidemenu.php');?>



    <div class="content">
    <div class="header">
    <h1 class="page-title">Directory Structure</h1>
    </div>
    <div class="container-fluid">
    <div class="row-fluid">
    <div class="row-fluid">
    </div>
    <div class="row-fluid">&nbsp;</div>

<input type="button" class="btn btn-primary"  data-toggle="modal" data-target="#folder-view"  value="Create Folder">
<input type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view" value=" Upload File">

<?php 
// $atts = array(
//     'width'       => 300,
//     'height'      => 200,
//     'scrollbars'  => 'no',
//     'status'      => 'yes',
//     'resizable'   => 'yes',
//     'screenx'     => 500,
//     'screeny'     => 200,
//     'window_name' => '_blank',
//     'class'       => 'btn btn-primary'
//        );
// echo anchor_popup('da_projects/upload_form', ' Upload File ', $atts);
?>





<?php 
$show = $showall = $home = $homename = "";
$flag = 0;
if($this->session->parent_id)
{
  $this->session->set_userdata('parent_id2',$this->session->parent_id);
do {

$con = array(
'id' => $this->session->parent_id2,
'type' => 'dir'
);  
$name = $this->Database_conn->fetch_edit('directory','', $con);
if(isset($name)&&sizeof($name)>0)
{
$this->session->set_userdata('parent_id2',$name['0']['parent_id']);
$id = $name['0']['id']; 
$show = '<a href="'.base_url('da_projects/access_folder/'.$id).'" class="display_anchor" >'.$name['0']['name'].'<strong style="margin-left:2px;margin-right:2px;"><bold>/</bold</strong></a>';
$home = $name['0']['name'];
if($flag!=0)
{
  $showall = $show.$showall;
}
else
{
  $flag = 1;
  $link = base_url('da_projects/access_folder/'.$id);
  //var_dump($link);
  $this->session->set_userdata('comment_file_link',$link);
  $homename = '<a href="" class="display_anchor" >'.$home.'<strong style="margin-left:2px;margin-right:2px;"><bold>/</bold></strong></a>';
}
}
}
while(isset($name)&&$name['0']['parent_id']!=0);
}
if((isset($showall)&&$showall!='')||(isset($homename)&&$homename!=''))
{
$home_link = "<a href='".base_url('da_projects/create_folder/root')."' class='display_anchor'>Home<strong style='margin-left:2px;margin-right:2px;'><bold>/</bold></strong></a>";
}
else
{
 $home_link = "<a href='".base_url('da_projects/create_folder/root')."' class='display_anchor'>Home</a>"; 
}
?>
<span style="margin-left: 100px;"><?php echo $home_link.$showall.$homename;?></span>



<?php if($this->session->parent_id!=0)
{ 
echo form_open('da_projects/create_folder','style="float:right;display: inline-block;"');?> 
<input type="submit" class="btn btn-primary"  value=" Go Back " style="float:right; ">
<input type="hidden" name="go_back" value="1">
 <?php echo form_close(); } ?>




<?php if(isset($msg)&&$msg!="")
{
echo '<h3 class="alert alert-success" style="text-align: center;">'.$msg.'</h3>';
}?>




<div class="row-fluid">&nbsp;</div>

  
  <div id="demo1"> </div>
 
   
     <div class="">
    <div class="col-md-12" class='alert alert-info' style='text-align: center'><h4>Select a Existing Folder</h4></div></br>
    


    <table width="100%" style="font-size: 13px;">
      

      <thead>
        <th align="left" style="padding-left: 60px;">Name</th>
        <th align="center">Type</th>
        <th align="center">Description</th>
        <th align="center">Created By</th>
        <th align="center">Created On</th>
        <!-- <th>Modify On</th> -->
        <th align="center">Action</th>
      </thead>
       
       
       <tbody>
       
    
    <?php
    if(isset($dataArrfolder)&&sizeof($dataArrfolder)>0)
    {
      $x = 0;
    foreach ($dataArrfolder as $data ) 
    { $id = $data['id'];
      $condition2 = array(
      'parent_id' =>$id,
      'type'      =>'file',
      'directory.project_id'=>$this->session->project_id
      );
       $files = $this->Database_conn->fetch_data_id('directory',$condition2,'name','asc');
        $p='';
        $id1 = $data['id'];
       do {
          
          $con = array(
                     'parent_id' => $id1,
                     'type' => 'dir',
                     'directory.project_id'=>$this->session->project_id
          );  
          $name = $this->Database_conn->fetch_edit('directory','', $con);
            if(sizeof($name)>0)
            {
            $p .= ($p=='')?$name['0']['id']:",".$name['0']['id'];
            $id1 = $name['0']['id'];
              }
          } while(sizeof($name)>0&&$name['0']['id']!=0);
          $p =($p!='')?$p.",".$id:$id;
          $parent_array = explode(",", $p);
          $total_files = $this->Database_conn2->get_total_file('directory', $parent_array);
          $no_of_file = (int)$total_files;
          $total_files = (isset($total_files)&&$total_files>0)?($total_files.' File Found '):' No File Found';
          // var_dump($p);
          $x = rand(1,100000000);
    ?>

       <!--   //delete option folder delete
       
       <?php echo form_open('da_projects/delete');?>
        <input type="submit" name="delete" value=" Delete " class="btn-primary" style="float:right;margin-top: 10px;" onclick="return confirm('Are you sure?')">
        <input type="hidden" name="delete_id" value="<?php echo $id;?>">
        <input type="hidden" name="type" value="dir">
        <?php echo form_close();?> -->

       
   
        <tr>
          <td align="left" style="width:240px;"> 
              <?php echo form_open('da_projects/create_folder',"style='margin:0px;'");?>
              <i class="fa fa-plus-square <?php echo $x;?>" id="<?php echo $x.'plus';?>" style="font-size:15px;display:none; "></i>
              
              <i class="fa fa-minus-square <?php echo $x;?>" id="<?php echo $x.'minus';?>"  style="font-size:15px;display:none; "></i>
              <a  title="<?php echo $total_files;?>">
              <button name="prefolder" style="background-color: #ffffff;border-color: #bee0f1;border: 0px;margin: 0px 0px 0px 20px;padding: 0px;text-align: left;">
              <img src="<?php echo base_url('application/assests/images/open-folder.png');?>" style="width:30px;height:30px;"><?php echo $data['name'];?></button></a>
              <input type="hidden" name="id" value="<?php echo $data['id'] ;?>">
              <input type="hidden" name="type" value="dir">
              <?php echo form_close();?>
          </td>
         
         <td></td>

       
          <td align="left" style="width:375px;padding-left: 100px;" title="<?php echo $data['description'];?>">  
        <?php echo read_more($data['description'],50);?>
          </td>
        


     
          <td align="center">  
        <?php echo $data['username'];?>
          </td>
        

        
          <td align="center">  
        <?php echo $data['date_created'];?>
          </td>
        

       
      
          <td align="center">  
          <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#desc_view" value=" View All" onclick="view_all_files('<?php echo $data['id']?>')" style="width:98.44px;height:30px; margin:5px;">
          </td>
        </tr>

        <?php if(isset($files)&&sizeof($files)>0)
             {
             
             foreach($files as $file)
             {?>
               
                <tr style="border: 0px;" class="<?php echo $x;?>">

            <td align="left" style="padding-left: 60px;width: 180px;">
            <a href="<?php echo base_url().'application/upload/'.$data['name'];?> " title="<?php echo $data['description'];?>" download>
            <button name="prefolder" style="background-color: #ffffff;border-color: #bee0f1;border: 0px;margin: 0px 0px 0px 10px;padding: 0px;text-align: left;">
            
            <img src="<?php echo base_url('application/assests/images/files.png');?>" style="width:20px;height:20px;" title="<?php echo $file['name'];?>"><span title="<?php echo $file['name'];?>"><?php echo findfilename($file['name'],'15');?></span></button>

            <input type="hidden" name="id" value="<?php echo $data['id'] ;?>"></a>
            </td>

            <td><strong><?php echo findExtension($file['name']);?></strong></td>



                <td align="left" style="width:375px;padding-left: 100px;" title="<?php echo $file['description'];?>">  
                <?php echo read_more($file['description'],50);?>
                </td>




                <td align="center">  
                <?php echo $file['username'];?>
                </td>



                <td align="center">  
                <?php echo $file['date_created'];?>
                </td>


             

                <td align="center">  
               <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#comment" value=" Comment " id="comment_block" onclick="recent_comment('<?php echo $file['id'];?>');" style="margin:5px;">
                </td>

              </tr>

             
        
<?php } } 

if($no_of_file>0)
  { ?>

    <script type="text/javascript">
       $("#<?php echo $x.'minus';?>").hide();//hide minus font
       $(".<?php echo $x;?>").hide();//hide all row of files
       $("#<?php echo $x.'plus';?>").show();//show plus font
      
      $(".<?php echo $x;?>").click(function(){//for triggering event onclick
        $(".<?php echo $x;?>").toggle();//for hidding and showing all rows of files
    });
   </script>
 
 <?php }
 else
{ ?>
  
    <script type="text/javascript">
    $("#<?php echo $x.'minus';?>").show();
    </script>
 
 <?php } } }
else
{
  echo "<tr><td colspan='6' align='center'><h3>No Folder Found</h3></td></tr>";
} ?>
</tbody>
</table>
</div>
          
        

 


   
    <div class="">
    <div class="col-md-12" class='alert alert-info' style='text-align: center'><h4> All Files Present In This Folder</h4></div>
   

<table width="100%" style="font-size: 13px;" >
  

  <thead>
    <th align="left" style="padding-left:60px;">Name</th>
    <th align="center">File Type</th>
    <th align="center">Description</th>
    <th align="center">Created By</th>
    <th align="center">Created On</th>
    <th align="center">Comment</th>
   
  </thead>
   
   
   <tbody>
 
    <?php
    if(isset($dataArrfile)&&sizeof($dataArrfile)>0)
    {
    foreach ($dataArrfile as $data ) 
    { $id = $data['id'];
    ?>





       
          
    <tr>
      <td align="left" style="padding-left: 60px;width: 175px;">
        <a href="<?php echo base_url().'application/upload/'.$data['name'];?> " title="<?php echo $data['name'];?>" download>
        
        <button name="prefolder" style="background-color: #ffffff;border-color: #bee0f1;border: 0px;margin: 0px 0px 0px 10px;padding: 0px;text-align: left;">
        
        <img src="<?php echo base_url('application/assests/images/files.png');?>" style="width:20px;height:20px;"><?php echo findfilename($data['name'],'15');?></button>
        
        <input type="hidden" name="id" value="<?php echo $data['id'] ;?>"></a>
      </td>

      <td align="center"><strong><?php echo findExtension($data['name']);?></strong></td>
   
     <td align="left" style="width:375px;padding-left: 65px;" title="<?php echo $data['description'];?>">  
        <?php echo read_more($data['description'],50);?>
          </td>
        


     
          <td align="center">  
        <?php echo $data['full_name'];?>
          </td>
        

        
          <td align="center">  
        <?php echo $data['date_created'];?>
          </td>
        
          
          <td align="center">  
          <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#comment" value=" Comment " id="comment_block" onclick="recent_comment('<?php echo $id;?>');" style="margin:5px;">
         
          </td>
      
         
        </tr>

   
 <?php } }
else
{
  echo "<tr><td colspan='6' align='center'><h3>No File Found</h3></td></tr>";
}
  ?>

</tbody>
</table>
</div>



    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home" align="center" >
       </div>
     </div>
    </div>
  </div>
</div>


      <!-- popup for creating folder -->
<div class="modal fade folder-view" id="folder-view">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <a href="#" data-dismiss="modal" class="class pull-right" title=" CLOSE "><i class="fa fa-remove" style="font-size:30px;color:red"></i></a> -->
                <h3 class="modal-title"> Create Folder </h3>
            </div>
            <div class="container-fluid">
            <div class="row-fluid">

      
           <?php
           echo  form_open_multipart('da_projects/folder');?>  

              <div  style="margin:50px;">
              <div class="row">
              <label>Folder Name : </label>
              <input type="text" name="dir"  value="New Folder" style="width:200px;height:35px;"  required >
              </div>
               
              <div class="row">
              <label>Folder Description : </label>             
              <textarea  name="description" placeholder=" Description about the Folder" rows="5" cols="20" style="width:400px;"></textarea>
              </div>

              <br>

              <div class="row" align="right" style="padding-right:50px;">
              <input type="submit" name="submit" class="btn btn-primary" value="Submit">
              <button data-dismiss="modal" class="btn btn-primary"> CLOSE </button>
              </div>

             
          <?php echo form_close(); ?>
             
 <!-- <input type="button" name="submit" class="btn btn-primary" value="Submit" onclick="closed()">
 -->

         </div>
       </div>
       
     </div>
   </div>
 </div>
</div>






           <!--  popup for uploading file  -->
<div class="modal fade product_view" id="product_view">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                 <a href="#" data-dismiss="modal" class="class pull-right" title=" CLOSE "><i data-dismiss="modal" class="fa fa-remove" style="font-size:30px;color:red"></i></a>
                <h3 class="modal-title"> Upload File </h3>
            </div>
            <div class="container-fluid">
            <div class="row-fluid">

      
           <?php
           echo  form_open_multipart('da_projects/upload_form');?>  

              <div  style="margin:50px;">
              <div class="row">
              <label>Select File to Upload</label>
              <input type="file" name="upload"  value=" Upload File ">
              </div>
              <div class="row">
              <label>File Description : </label>
              <textarea  name="description" placeholder=" Description about the file " rows="5" cols="20" style="width:400px;"></textarea>
              </div>

              <br>

              <div class="row" align="right" style="padding-right:50px;">
              <input type="submit" name="submit" class="btn btn-primary" value="Submit">
              <button data-dismiss="modal" class="btn btn-primary"> CLOSE </button>
              </div>

             
          <?php echo form_close(); ?>
             
 <!-- <input type="button" name="submit" class="btn btn-primary" value="Submit" onclick="closed()">
 -->

         </div>
       </div>
       
     </div>
   </div>
 </div>
</div>










            <!-- popup for file comment -->
<div class="modal fade product_view" id="comment" align="center" style="width:800px;height:500px;left: 650.444;right: 650px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
               <!-- <a href="#" data-dismiss="modal" class="class pull-right" title=" CLOSE "><i class="fa fa-remove" style="font-size:30px;color:red"></i></a> -->
                <h3 class="modal-title"> Comment </h3>
            </div>
            <div class="container-fluid">
            <div class="row-fluid">


              <div  style="margin:50px;">
                <?php
               echo  form_open_multipart('da_projects/comment');?>
              <div class="row">
              <label>Comment  </label>
              <textarea  name="add_comment" placeholder="Add Comment " rows="3" cols="20" style="width:50%"></textarea>
              <input type="hidden" name="file_id" id="commentbox">
              </div>

              <br>

              <div class="row" align="center">
              <input type="submit" name="submit" class="btn btn-primary" value="Submit" >
              </div>

             
          <?php echo form_close(); ?>
              <div class="row">
              <table id="show_comment">
               
              </table width="100%">
              </div>
               
             
 <!-- <input type="button" name="submit" class="btn btn-primary" value="Submit" onclick="closed()">
 -->

         </div>
       </div>
       
     </div>
   </div>
 </div>
</div>








             <!-- for viewing folder details -->
<div class="modal fade product_view" id="desc_view" style="width:800px;height:500px;left: 650.444;right: 650px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <a href="#" data-dismiss="modal" class="class pull-right" title=" CLOSE "><i class="fa fa-remove" style="font-size:30px;color:red"></i></a> -->
                <h3 class="modal-title"> Folder Details </h3>
            </div>
            <div class="container-fluid">
            <div class="row-fluid">
             <div  style="    margin: 20px 5px 20px 43px;">
              <div class="row">
              <table id="folder_details" width="100%">
                
              </table>
              </div>             
         </div>
       </div>
     </div>
   </div>
 </div>
</div>


 
<?php require('footer.php'); ?>

   
<script type="text/javascript">
  function recent_comment(value)
  {
    
    var file_id = value;
    //alert(file_id);
    $.ajax({
    url: "<?php echo base_url('da_projects/comment_ajax');?>",
    method:'POST',
    data:  { 'file_id':file_id},
    success: function(msg) {
    $('#show_comment').html(msg);
    }
    });
   
    document.getElementById("commentbox").value = file_id;
  }

  function view_all_files(id)
  {
    var folder_id = id;
    //alert(folder_id);
    $.ajax({
    url: "<?php echo base_url('da_projects/folder_fetch_ajax');?>",
    method:'POST',
    data:  { 'folder_id':folder_id},
    success: function(msg) {
    $('#folder_details').html(msg);
    }
    });
    document.getElementById("folder_file").value = folder_id;
  }

  


     


</script>

  </body>
</html>