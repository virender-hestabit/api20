
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
   


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="http://[::1]/ci_da_project/application/assests/lib/bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" type="text/css" href="http://[::1]/ci_da_project/application/assests/stylesheets/theme.css">
    <link rel="stylesheet" href="http://[::1]/ci_da_project/application/assests/lib/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/5AB36C66-6F1C-AD4B-8EC2-B4E31EB4BE00/main.js" charset="UTF-8"></script><script src="http://[::1]/ci_da_project/application/assests/lib/jquery-1.7.2.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
   <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- Demo page code -->

    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .brand { font-family: georgia, serif; }
        .brand .first {
            color: #ccc;
            font-style: italic;
        }
        .brand .second {
            color: #fff;
            font-weight: bold;
        }
        
    </style>

    <!---- CKEDITOR ----->
    <script src="ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" href="ckeditor/sample.css">


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
  <body> 
  <!--<![endif]-->
    
    <div class="navbar">
        <div class="navbar-inner">
                <ul class="nav pull-right">
                    
                    <li><a href="#" class="hidden-phone visible-tablet visible-desktop" role="button">Settings</a></li>
                    <li id="fat-menu" class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i> Hello 
                            <i class="icon-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="http://[::1]/ci_da_project/da_projects/change_password">Change Password</a></li>
                            <li class="divider"></li>
                            <li><a tabindex="-1" class="visible-phone" href="#">Settings</a></li>
                            <li class="divider visible-phone"></li>
                            <li><a tabindex="-1" href="http://[::1]/ci_da_project/da_projects/logout">Logout</a></li>
                        </ul>
                    </li>
                    
                </ul>
                <a class="brand" href="index.php"><span class="first">Admin</span> <span class="second">Panel</span></a>
        </div>
    </div>
    


    
    <div class="sidebar-nav">
         <!-- <a href="http://[::1]/ci_da_project/da_projects/dashboard" class="nav-header" ><i class="icon-question-sign"></i>Dashboard</a>
      

        <a href="#error-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-exclamation-sign"></i>WBS Section <i class="icon-chevron-up"></i></a>
        <ul id="error-menu" class="nav nav-list collapse">
           <!--  <li><a href="http://[::1]/ci_da_project/da_projects/wbs_category">Add WBS Category</a></li> -->
            <!-- <li ><a href="http://[::1]/ci_da_project/da_projects/wbs_sub_category">Add WBS Sub Category</a></li>
            <li ><a href="http://[::1]/ci_da_project/da_projects/add_wbs">Add WBS </a></li>
        </ul>
        
        <a href="#legal-menu" class="nav-header nav-header collapsed" data-toggle="collapse"><i class="icon-legal"></i>Project Section<i class="icon-chevron-up"></i></a>
        <ul id="legal-menu" class="nav nav-list collapse">
            <li><a href="http://[::1]/ci_da_project/da_projects/create_project">Create Project</a></li>
            <li><a href="http://[::1]/ci_da_project/da_projects/project_charter">Project Charter</a></li>
        </ul>

        <a href="#legal-menu2" class="nav-header collapsed" data-toggle="collapse"><i class="icon-legal"></i>Entry Section<i class="icon-chevron-up"></i></a>
        <ul id="legal-menu2" class="nav nav-list collapse">
            <li><a href="http://[::1]/ci_da_project/da_projects/po_entry">PO Entry</a></li>
            <li><a href="http://[::1]/ci_da_project/da_projects/work_order">Work Order Entry</a></li>
            <li><a href="http://[::1]/ci_da_project/da_projects/cop_entry">COP Entry</a></li>
        </ul>
        
        <a href="#legal-menu3" class="nav-header collapsed" data-toggle="collapse"><i class="icon-legal"></i>Budget/Cost Section<i class="icon-chevron-up"></i></a>
        <ul id="legal-menu3" class="nav nav-list collapse">
            <li><a href="http://[::1]/ci_da_project/da_projects/budget">Budget/Cost </a></li>
        </ul>


         <a href="#legal-menu4" class="nav-header collapsed" data-toggle="collapse"><i class="icon-legal"></i>Directory Structure<i class="icon-chevron-up"></i></a>
        <ul id="legal-menu4" class="nav nav-list collapse">
            <li><a href="http://[::1]/ci_da_project/da_projects/create_folder/root">Create Folder</a></li>
        </ul>

        <a href="#accounts-menu" class="nav-header nav-header collapsed" data-toggle="collapse"><i class="icon-briefcase"></i>Account<i class="icon-chevron-up"></i></a>
        <ul id="accounts-menu" class="nav nav-list collapse">
            <li ><a href="http://[::1]/ci_da_project/da_projects/change_password">Change Password</a></li>
            <li ><a href="http://[::1]/ci_da_project/da_projects/logout">Logout</a></li>
        </ul>

         -->
        <a href="#error-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-exclamation-sign"></i>Dashboard<i class="icon-chevron-up"></i></a>
               <ul id="error-menu" class="nav nav-list collapse"><li><a href="http://[::1]/ci_da_project/da_projects/dashboard">Dashboard</a></li></ul><a href="#error-menu1" class="nav-header collapsed" data-toggle="collapse"><i class="icon-exclamation-sign"></i>WBS Section <i class="icon-chevron-up"></i></a>
               <ul id="error-menu1" class="nav nav-list collapse"><li><a href="http://[::1]/ci_da_project/da_projects/wbs_sub_category">Add WBS Sub Category</a></li><li><a href="http://[::1]/ci_da_project/da_projects/add_wbs">Add WBS </a></li></ul><a href="#legal-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-exclamation-sign"></i>Project Section<i class="icon-chevron-up"></i></a>
               <ul id="legal-menu" class="nav nav-list collapse"><li><a href="http://[::1]/ci_da_project/da_projects/create_project">Create Project</a></li><li><a href="http://[::1]/ci_da_project/da_projects/project_charter">Project Charter</a></li></ul><a href="#legal-menu1" class="nav-header collapsed" data-toggle="collapse"><i class="icon-exclamation-sign"></i>Tracking & Follow up Sheet<i class="icon-chevron-up"></i></a>
               <ul id="legal-menu1" class="nav nav-list collapse"><li><a href="http://[::1]/ci_da_project/da_projects/tracking_sheet">Tracking & Follow up Sheet</a></li></ul><a href="#legal-menu2" class="nav-header collapsed" data-toggle="collapse"><i class="icon-exclamation-sign"></i>Entry Section<i class="icon-chevron-up"></i></a>
               <ul id="legal-menu2" class="nav nav-list collapse"><li><a href="http://[::1]/ci_da_project/da_projects/po_entry">PO Entry</a></li><li><a href="http://[::1]/ci_da_project/da_projects/work_order">Work Order Entry</a></li><li><a href="http://[::1]/ci_da_project/da_projects/cop_entry">COP Entry</a></li></ul><a href="#legal-menu3" class="nav-header collapsed" data-toggle="collapse"><i class="icon-exclamation-sign"></i>Budget/Cost Section<i class="icon-chevron-up"></i></a>
               <ul id="legal-menu3" class="nav nav-list collapse"><li><a href="http://[::1]/ci_da_project/da_projects/budget">Budget/Cost</a></li></ul><a href="#legal-menu4" class="nav-header collapsed" data-toggle="collapse"><i class="icon-exclamation-sign"></i>Directory Structure<i class="icon-chevron-up"></i></a>
               <ul id="legal-menu4" class="nav nav-list collapse"><li><a href="http://[::1]/ci_da_project/da_projects/create_folder/root">Directory</a></li></ul><a href="#legal-menu5" class="nav-header collapsed" data-toggle="collapse"><i class="icon-exclamation-sign"></i>List of project<i class="icon-chevron-up"></i></a>
               <ul id="legal-menu5" class="nav nav-list collapse"><li><a href="http://[::1]/ci_da_project/da_projects/project_list">Projects</a></li></ul><a href="#legal-menu6" class="nav-header collapsed" data-toggle="collapse"><i class="icon-exclamation-sign"></i>Account<i class="icon-chevron-up"></i></a>
               <ul id="legal-menu6" class="nav nav-list collapse"><li><a href="http://[::1]/ci_da_project/da_projects/change_password">Change Password</a></li><li><a href="http://[::1]/ci_da_project/da_projects/logout">Logout</a></li></ul>
    </div>



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








<span style="margin-left: 100px;"></span>











<div class="row-fluid">&nbsp;</div>

  
  <div id="demo1"> </div>
 
         <div class="">
    <div class="col-md-12" class='alert alert-info' style='text-align: center'><h4>Select a Existing Folder</h4></div></br>
    


    <table width="100%" style="font-size: 13px;">
      

      <thead>
        <th align="left" style="padding-left: 60px;">Name</th>
        <th align="center">Description</th>
        <th align="center">Created By</th>
        <th align="center">Created On</th>
        <!-- <th>Modify On</th> -->
        <th align="center">Action</th>
      </thead>
       
       
       <tbody>
       
        
       <!--   //delete option folder delete
       
       <form action="http://[::1]/ci_da_project/index.php/da_projects/delete" method="post" accept-charset="utf-8">
        <input type="submit" name="delete" value=" Delete " class="btn-primary" style="float:right;margin-top: 10px;" onclick="return confirm('Are you sure?')">
        <input type="hidden" name="delete_id" value="146">
        <input type="hidden" name="type" value="dir">
        </form> -->

       
   
        <tr>
          <td align="left"> 
              <form action="http://[::1]/ci_da_project/index.php/da_projects/create_folder" style='margin:0px;' method="post" accept-charset="utf-8">
              <i class="fa fa-plus-square 51565552" style="font-size:15px;display:none; "></i>
              <i class="fa fa-minus-square 51565552"  style="font-size:15px;display:none; "></i>
              <a  title="1 File Found ">
              <button name="prefolder" style="background-color: #ffffff;border-color: #bee0f1;border: 0px;margin: 0px 0px 0px 20px;padding: 0px;text-align: left;">
              <img src="http://[::1]/ci_da_project/application/assests/images/open-folder.png" style="width:30px;height:30px;">New Folder</button></a>
              <input type="hidden" name="id" value="146">
              <input type="hidden" name="type" value="dir">
              </form>          </td>
         
         

       
          <td align="left" style="width:375px;padding-left: 100px;" title="Lorem Ipsum has been the industry's standard dummy text">  
        Lorem Ipsum has been the industry's standard dummy..          </td>
        


     
          <td align="center">  
        admin          </td>
        

        
          <td align="center">  
        2018-06-23 12:40:57          </td>
        

       
      
          <td align="center">  
          <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#desc_view" value=" View All" onclick="view_all_files('146')" style="width:98.44px;height:30px; margin:5px;">
          </td>
        </tr>

                       
                <tr style="border: 0px;" class="51565552">

            <td align="left" style="padding-left: 60px;width: 198px;">
            <a href="http://[::1]/ci_da_project/application/upload/New Folder " title="Lorem Ipsum has been the industry's standard dummy text" download>
            <button name="prefolder" style="background-color: #ffffff;border-color: #bee0f1;border: 0px;margin: 0px 0px 0px 10px;padding: 0px;text-align: left;">
            
            <img src="http://[::1]/ci_da_project/application/assests/images/files.png" style="width:20px;height:20px;" title="Chrysa.jpg"><span title="Chrysa.jpg">Chrysa.jpg</span></button>

            <input type="hidden" name="id" value="146"></a>
            </td>



                <td align="left" style="width:375px;padding-left: 100px;" title="Lorem Ipsum has been the industry's standard dummy text">  
                Lorem Ipsum has been the industry's standard dummy..                </td>




                <td align="center">  
                admin                </td>



                <td align="center">  
                2018-06-25 11:39:03                </td>


             

                <td align="center">  
               <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#comment" value=" Comment " id="comment_block" onclick="recent_comment('147');" style="margin:5px;">
                </td>

              </tr>

             
        
bool(true)
string(1) "1"
1<br>
    <script type="text/javascript">
      $(".fa-plus-square").show();
      $(".fa-minus-square").hide();
      $(".51565552").hide();
      
      $(".51565552").click(function(){
        $(".51565552").toggle();
    });
   </script>
 
 
       <!--   //delete option folder delete
       
       <form action="http://[::1]/ci_da_project/index.php/da_projects/delete" method="post" accept-charset="utf-8">
        <input type="submit" name="delete" value=" Delete " class="btn-primary" style="float:right;margin-top: 10px;" onclick="return confirm('Are you sure?')">
        <input type="hidden" name="delete_id" value="127">
        <input type="hidden" name="type" value="dir">
        </form> -->

       
   
        <tr>
          <td align="left"> 
              <form action="http://[::1]/ci_da_project/index.php/da_projects/create_folder" style='margin:0px;' method="post" accept-charset="utf-8">
              <i class="fa fa-plus-square 19256592" style="font-size:15px;display:none; "></i>
              <i class="fa fa-minus-square 19256592"  style="font-size:15px;display:none; "></i>
              <a  title=" No File Found">
              <button name="prefolder" style="background-color: #ffffff;border-color: #bee0f1;border: 0px;margin: 0px 0px 0px 20px;padding: 0px;text-align: left;">
              <img src="http://[::1]/ci_da_project/application/assests/images/open-folder.png" style="width:30px;height:30px;">New Folder1</button></a>
              <input type="hidden" name="id" value="127">
              <input type="hidden" name="type" value="dir">
              </form>          </td>
         
         

       
          <td align="left" style="width:375px;padding-left: 100px;" title="Lorem Ipsum has been the industry's standard dummy text">  
        Lorem Ipsum has been the industry's standard dummy..          </td>
        


     
          <td align="center">  
        admin          </td>
        

        
          <td align="center">  
        2018-06-23 12:46:58          </td>
        

       
      
          <td align="center">  
          <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#desc_view" value=" View All" onclick="view_all_files('127')" style="width:98.44px;height:30px; margin:5px;">
          </td>
        </tr>

        bool(false)
string(1) "0"
2<br>  
    <script type="text/javascript">
    $(".fa-plus-square").hide();
    $(".fa-minus-square").hide();
    </script>
 
 
       <!--   //delete option folder delete
       
       <form action="http://[::1]/ci_da_project/index.php/da_projects/delete" method="post" accept-charset="utf-8">
        <input type="submit" name="delete" value=" Delete " class="btn-primary" style="float:right;margin-top: 10px;" onclick="return confirm('Are you sure?')">
        <input type="hidden" name="delete_id" value="135">
        <input type="hidden" name="type" value="dir">
        </form> -->

       
   
        <tr>
          <td align="left"> 
              <form action="http://[::1]/ci_da_project/index.php/da_projects/create_folder" style='margin:0px;' method="post" accept-charset="utf-8">
              <i class="fa fa-plus-square 52267457" style="font-size:15px;display:none; "></i>
              <i class="fa fa-minus-square 52267457"  style="font-size:15px;display:none; "></i>
              <a  title="8 File Found ">
              <button name="prefolder" style="background-color: #ffffff;border-color: #bee0f1;border: 0px;margin: 0px 0px 0px 20px;padding: 0px;text-align: left;">
              <img src="http://[::1]/ci_da_project/application/assests/images/open-folder.png" style="width:30px;height:30px;">New Folder123</button></a>
              <input type="hidden" name="id" value="135">
              <input type="hidden" name="type" value="dir">
              </form>          </td>
         
         

       
          <td align="left" style="width:375px;padding-left: 100px;" title="Lorem Ipsum has been the industry's standard dummy text">  
        Lorem Ipsum has been the industry's standard dummy..          </td>
        


     
          <td align="center">  
        admin          </td>
        

        
          <td align="center">  
        2018-06-16 15:34:57          </td>
        

       
      
          <td align="center">  
          <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#desc_view" value=" View All" onclick="view_all_files('135')" style="width:98.44px;height:30px; margin:5px;">
          </td>
        </tr>

                       
                <tr style="border: 0px;" class="52267457">

            <td align="left" style="padding-left: 60px;width: 198px;">
            <a href="http://[::1]/ci_da_project/application/upload/New Folder123 " title="Lorem Ipsum has been the industry's standard dummy text" download>
            <button name="prefolder" style="background-color: #ffffff;border-color: #bee0f1;border: 0px;margin: 0px 0px 0px 10px;padding: 0px;text-align: left;">
            
            <img src="http://[::1]/ci_da_project/application/assests/images/files.png" style="width:20px;height:20px;" title="ctutorial.pdf"><span title="ctutorial.pdf">ctutorial.pdf</span></button>

            <input type="hidden" name="id" value="135"></a>
            </td>



                <td align="left" style="width:375px;padding-left: 100px;" title="Lorem Ipsum has been the industry's standard dummy text">  
                Lorem Ipsum has been the industry's standard dummy..                </td>




                <td align="center">  
                admin                </td>



                <td align="center">  
                2018-06-16 15:34:57                </td>


             

                <td align="center">  
               <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#comment" value=" Comment " id="comment_block" onclick="recent_comment('136');" style="margin:5px;">
                </td>

              </tr>

             
        
               
                <tr style="border: 0px;" class="52267457">

            <td align="left" style="padding-left: 60px;width: 198px;">
            <a href="http://[::1]/ci_da_project/application/upload/New Folder123 " title="Lorem Ipsum has been the industry's standard dummy text" download>
            <button name="prefolder" style="background-color: #ffffff;border-color: #bee0f1;border: 0px;margin: 0px 0px 0px 10px;padding: 0px;text-align: left;">
            
            <img src="http://[::1]/ci_da_project/application/assests/images/files.png" style="width:20px;height:20px;" title="Koala.jpg"><span title="Koala.jpg">Koala.jpg</span></button>

            <input type="hidden" name="id" value="135"></a>
            </td>



                <td align="left" style="width:375px;padding-left: 100px;" title="Lorem Ipsum has been the industry's standard dummy text2">  
                Lorem Ipsum has been the industry's standard dummy..                </td>




                <td align="center">  
                admin                </td>



                <td align="center">  
                2018-06-16 15:39:19                </td>


             

                <td align="center">  
               <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#comment" value=" Comment " id="comment_block" onclick="recent_comment('150');" style="margin:5px;">
                </td>

              </tr>

             
        
               
                <tr style="border: 0px;" class="52267457">

            <td align="left" style="padding-left: 60px;width: 198px;">
            <a href="http://[::1]/ci_da_project/application/upload/New Folder123 " title="Lorem Ipsum has been the industry's standard dummy text" download>
            <button name="prefolder" style="background-color: #ffffff;border-color: #bee0f1;border: 0px;margin: 0px 0px 0px 10px;padding: 0px;text-align: left;">
            
            <img src="http://[::1]/ci_da_project/application/assests/images/files.png" style="width:20px;height:20px;" title="Tulips.jpg"><span title="Tulips.jpg">Tulips.jpg</span></button>

            <input type="hidden" name="id" value="135"></a>
            </td>



                <td align="left" style="width:375px;padding-left: 100px;" title="Lorem Ipsum has been the industry's standard dummy text2">  
                Lorem Ipsum has been the industry's standard dummy..                </td>




                <td align="center">  
                admin                </td>



                <td align="center">  
                2018-06-16 15:36:53                </td>


             

                <td align="center">  
               <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#comment" value=" Comment " id="comment_block" onclick="recent_comment('149');" style="margin:5px;">
                </td>

              </tr>

             
        
bool(true)
string(1) "8"
1<br>
    <script type="text/javascript">
      $(".fa-plus-square").show();
      $(".fa-minus-square").hide();
      $(".52267457").hide();
      
      $(".52267457").click(function(){
        $(".52267457").toggle();
    });
   </script>
 
 
       <!--   //delete option folder delete
       
       <form action="http://[::1]/ci_da_project/index.php/da_projects/delete" method="post" accept-charset="utf-8">
        <input type="submit" name="delete" value=" Delete " class="btn-primary" style="float:right;margin-top: 10px;" onclick="return confirm('Are you sure?')">
        <input type="hidden" name="delete_id" value="128">
        <input type="hidden" name="type" value="dir">
        </form> -->

       
   
        <tr>
          <td align="left"> 
              <form action="http://[::1]/ci_da_project/index.php/da_projects/create_folder" style='margin:0px;' method="post" accept-charset="utf-8">
              <i class="fa fa-plus-square 11389161" style="font-size:15px;display:none; "></i>
              <i class="fa fa-minus-square 11389161"  style="font-size:15px;display:none; "></i>
              <a  title=" No File Found">
              <button name="prefolder" style="background-color: #ffffff;border-color: #bee0f1;border: 0px;margin: 0px 0px 0px 20px;padding: 0px;text-align: left;">
              <img src="http://[::1]/ci_da_project/application/assests/images/open-folder.png" style="width:30px;height:30px;">New Folder2</button></a>
              <input type="hidden" name="id" value="128">
              <input type="hidden" name="type" value="dir">
              </form>          </td>
         
         

       
          <td align="left" style="width:375px;padding-left: 100px;" title="Lorem Ipsum has been the industry's standard dummy text">  
        Lorem Ipsum has been the industry's standard dummy..          </td>
        


     
          <td align="center">  
        admin          </td>
        

        
          <td align="center">  
        2018-06-16 15:34:57          </td>
        

       
      
          <td align="center">  
          <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#desc_view" value=" View All" onclick="view_all_files('128')" style="width:98.44px;height:30px; margin:5px;">
          </td>
        </tr>

        bool(false)
string(1) "0"
2<br>  
    <script type="text/javascript">
    $(".fa-plus-square").hide();
    $(".fa-minus-square").hide();
    </script>
 
 
       <!--   //delete option folder delete
       
       <form action="http://[::1]/ci_da_project/index.php/da_projects/delete" method="post" accept-charset="utf-8">
        <input type="submit" name="delete" value=" Delete " class="btn-primary" style="float:right;margin-top: 10px;" onclick="return confirm('Are you sure?')">
        <input type="hidden" name="delete_id" value="134">
        <input type="hidden" name="type" value="dir">
        </form> -->

       
   
        <tr>
          <td align="left"> 
              <form action="http://[::1]/ci_da_project/index.php/da_projects/create_folder" style='margin:0px;' method="post" accept-charset="utf-8">
              <i class="fa fa-plus-square 97842408" style="font-size:15px;display:none; "></i>
              <i class="fa fa-minus-square 97842408"  style="font-size:15px;display:none; "></i>
              <a  title=" No File Found">
              <button name="prefolder" style="background-color: #ffffff;border-color: #bee0f1;border: 0px;margin: 0px 0px 0px 20px;padding: 0px;text-align: left;">
              <img src="http://[::1]/ci_da_project/application/assests/images/open-folder.png" style="width:30px;height:30px;">New Folder21</button></a>
              <input type="hidden" name="id" value="134">
              <input type="hidden" name="type" value="dir">
              </form>          </td>
         
         

       
          <td align="left" style="width:375px;padding-left: 100px;" title="Lorem Ipsum has been the industry's standard dummy text">  
        Lorem Ipsum has been the industry's standard dummy..          </td>
        


     
          <td align="center">  
        admin          </td>
        

        
          <td align="center">  
        2018-06-16 15:34:57          </td>
        

       
      
          <td align="center">  
          <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#desc_view" value=" View All" onclick="view_all_files('134')" style="width:98.44px;height:30px; margin:5px;">
          </td>
        </tr>

        bool(false)
string(1) "0"
2<br>  
    <script type="text/javascript">
    $(".fa-plus-square").hide();
    $(".fa-minus-square").hide();
    </script>
 
 
       <!--   //delete option folder delete
       
       <form action="http://[::1]/ci_da_project/index.php/da_projects/delete" method="post" accept-charset="utf-8">
        <input type="submit" name="delete" value=" Delete " class="btn-primary" style="float:right;margin-top: 10px;" onclick="return confirm('Are you sure?')">
        <input type="hidden" name="delete_id" value="132">
        <input type="hidden" name="type" value="dir">
        </form> -->

       
   
        <tr>
          <td align="left"> 
              <form action="http://[::1]/ci_da_project/index.php/da_projects/create_folder" style='margin:0px;' method="post" accept-charset="utf-8">
              <i class="fa fa-plus-square 19683838" style="font-size:15px;display:none; "></i>
              <i class="fa fa-minus-square 19683838"  style="font-size:15px;display:none; "></i>
              <a  title=" No File Found">
              <button name="prefolder" style="background-color: #ffffff;border-color: #bee0f1;border: 0px;margin: 0px 0px 0px 20px;padding: 0px;text-align: left;">
              <img src="http://[::1]/ci_da_project/application/assests/images/open-folder.png" style="width:30px;height:30px;">New Folder3</button></a>
              <input type="hidden" name="id" value="132">
              <input type="hidden" name="type" value="dir">
              </form>          </td>
         
         

       
          <td align="left" style="width:375px;padding-left: 100px;" title="Lorem Ipsum has been the industry's standard dummy text">  
        Lorem Ipsum has been the industry's standard dummy..          </td>
        


     
          <td align="center">  
        admin          </td>
        

        
          <td align="center">  
        2018-06-16 15:34:57          </td>
        

       
      
          <td align="center">  
          <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#desc_view" value=" View All" onclick="view_all_files('132')" style="width:98.44px;height:30px; margin:5px;">
          </td>
        </tr>

        bool(false)
string(1) "0"
2<br>  
    <script type="text/javascript">
    $(".fa-plus-square").hide();
    $(".fa-minus-square").hide();
    </script>
 
 
       <!--   //delete option folder delete
       
       <form action="http://[::1]/ci_da_project/index.php/da_projects/delete" method="post" accept-charset="utf-8">
        <input type="submit" name="delete" value=" Delete " class="btn-primary" style="float:right;margin-top: 10px;" onclick="return confirm('Are you sure?')">
        <input type="hidden" name="delete_id" value="133">
        <input type="hidden" name="type" value="dir">
        </form> -->

       
   
        <tr>
          <td align="left"> 
              <form action="http://[::1]/ci_da_project/index.php/da_projects/create_folder" style='margin:0px;' method="post" accept-charset="utf-8">
              <i class="fa fa-plus-square 30087281" style="font-size:15px;display:none; "></i>
              <i class="fa fa-minus-square 30087281"  style="font-size:15px;display:none; "></i>
              <a  title="2 File Found ">
              <button name="prefolder" style="background-color: #ffffff;border-color: #bee0f1;border: 0px;margin: 0px 0px 0px 20px;padding: 0px;text-align: left;">
              <img src="http://[::1]/ci_da_project/application/assests/images/open-folder.png" style="width:30px;height:30px;">New Folder4</button></a>
              <input type="hidden" name="id" value="133">
              <input type="hidden" name="type" value="dir">
              </form>          </td>
         
         

       
          <td align="left" style="width:375px;padding-left: 100px;" title="Lorem Ipsum has been the industry's standard dummy text">  
        Lorem Ipsum has been the industry's standard dummy..          </td>
        


     
          <td align="center">  
        admin          </td>
        

        
          <td align="center">  
        2018-06-16 15:34:57          </td>
        

       
      
          <td align="center">  
          <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#desc_view" value=" View All" onclick="view_all_files('133')" style="width:98.44px;height:30px; margin:5px;">
          </td>
        </tr>

                       
                <tr style="border: 0px;" class="30087281">

            <td align="left" style="padding-left: 60px;width: 198px;">
            <a href="http://[::1]/ci_da_project/application/upload/New Folder4 " title="Lorem Ipsum has been the industry's standard dummy text" download>
            <button name="prefolder" style="background-color: #ffffff;border-color: #bee0f1;border: 0px;margin: 0px 0px 0px 10px;padding: 0px;text-align: left;">
            
            <img src="http://[::1]/ci_da_project/application/assests/images/files.png" style="width:20px;height:20px;" title="Hydrangeas.jpg"><span title="Hydrangeas.jpg">Hydrangeas.jpg</span></button>

            <input type="hidden" name="id" value="133"></a>
            </td>



                <td align="left" style="width:375px;padding-left: 100px;" title="dfgdfg">  
                dfgdfg                </td>




                <td align="center">  
                vipin                </td>



                <td align="center">  
                2018-06-22 15:28:15                </td>


             

                <td align="center">  
               <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#comment" value=" Comment " id="comment_block" onclick="recent_comment('160');" style="margin:5px;">
                </td>

              </tr>

             
        
               
                <tr style="border: 0px;" class="30087281">

            <td align="left" style="padding-left: 60px;width: 198px;">
            <a href="http://[::1]/ci_da_project/application/upload/New Folder4 " title="Lorem Ipsum has been the industry's standard dummy text" download>
            <button name="prefolder" style="background-color: #ffffff;border-color: #bee0f1;border: 0px;margin: 0px 0px 0px 10px;padding: 0px;text-align: left;">
            
            <img src="http://[::1]/ci_da_project/application/assests/images/files.png" style="width:20px;height:20px;" title="Jellyfish.jpg"><span title="Jellyfish.jpg">Jellyfish.jpg</span></button>

            <input type="hidden" name="id" value="133"></a>
            </td>



                <td align="left" style="width:375px;padding-left: 100px;" title="adsddsa">  
                adsddsa                </td>




                <td align="center">  
                vipin                </td>



                <td align="center">  
                2018-06-22 15:25:20                </td>


             

                <td align="center">  
               <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#comment" value=" Comment " id="comment_block" onclick="recent_comment('159');" style="margin:5px;">
                </td>

              </tr>

             
        
bool(true)
string(1) "2"
1<br>
    <script type="text/javascript">
      $(".fa-plus-square").show();
      $(".fa-minus-square").hide();
      $(".30087281").hide();
      
      $(".30087281").click(function(){
        $(".30087281").toggle();
    });
   </script>
 
 
       <!--   //delete option folder delete
       
       <form action="http://[::1]/ci_da_project/index.php/da_projects/delete" method="post" accept-charset="utf-8">
        <input type="submit" name="delete" value=" Delete " class="btn-primary" style="float:right;margin-top: 10px;" onclick="return confirm('Are you sure?')">
        <input type="hidden" name="delete_id" value="154">
        <input type="hidden" name="type" value="dir">
        </form> -->

       
   
        <tr>
          <td align="left"> 
              <form action="http://[::1]/ci_da_project/index.php/da_projects/create_folder" style='margin:0px;' method="post" accept-charset="utf-8">
              <i class="fa fa-plus-square 1" style="font-size:15px;display:none; "></i>
              <i class="fa fa-minus-square 1"  style="font-size:15px;display:none; "></i>
              <a  title=" No File Found">
              <button name="prefolder" style="background-color: #ffffff;border-color: #bee0f1;border: 0px;margin: 0px 0px 0px 20px;padding: 0px;text-align: left;">
              <img src="http://[::1]/ci_da_project/application/assests/images/open-folder.png" style="width:30px;height:30px;">store</button></a>
              <input type="hidden" name="id" value="154">
              <input type="hidden" name="type" value="dir">
              </form>          </td>
         
         

       
          <td align="left" style="width:375px;padding-left: 100px;" title="store some file">  
        store some file          </td>
        


     
          <td align="center">  
        admin          </td>
        

        
          <td align="center">  
        2018-06-16 15:49:38          </td>
        

       
      
          <td align="center">  
          <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#desc_view" value=" View All" onclick="view_all_files('154')" style="width:98.44px;height:30px; margin:5px;">
          </td>
        </tr>

        bool(false)
string(1) "0"
2<br>  
    <script type="text/javascript">
    $(".fa-plus-square").hide();
    $(".fa-minus-square").hide();
    </script>
 
 
       <!--   //delete option folder delete
       
       <form action="http://[::1]/ci_da_project/index.php/da_projects/delete" method="post" accept-charset="utf-8">
        <input type="submit" name="delete" value=" Delete " class="btn-primary" style="float:right;margin-top: 10px;" onclick="return confirm('Are you sure?')">
        <input type="hidden" name="delete_id" value="144">
        <input type="hidden" name="type" value="dir">
        </form> -->

       
   
        <tr>
          <td align="left"> 
              <form action="http://[::1]/ci_da_project/index.php/da_projects/create_folder" style='margin:0px;' method="post" accept-charset="utf-8">
              <i class="fa fa-plus-square 37673951" style="font-size:15px;display:none; "></i>
              <i class="fa fa-minus-square 37673951"  style="font-size:15px;display:none; "></i>
              <a  title="4 File Found ">
              <button name="prefolder" style="background-color: #ffffff;border-color: #bee0f1;border: 0px;margin: 0px 0px 0px 20px;padding: 0px;text-align: left;">
              <img src="http://[::1]/ci_da_project/application/assests/images/open-folder.png" style="width:30px;height:30px;">Test</button></a>
              <input type="hidden" name="id" value="144">
              <input type="hidden" name="type" value="dir">
              </form>          </td>
         
         

       
          <td align="left" style="width:375px;padding-left: 100px;" title="Lorem Ipsum has been the industry's standard dummy text">  
        Lorem Ipsum has been the industry's standard dummy..          </td>
        


     
          <td align="center">  
        admin          </td>
        

        
          <td align="center">  
        2018-06-22 17:31:43          </td>
        

       
      
          <td align="center">  
          <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#desc_view" value=" View All" onclick="view_all_files('144')" style="width:98.44px;height:30px; margin:5px;">
          </td>
        </tr>

                       
                <tr style="border: 0px;" class="37673951">

            <td align="left" style="padding-left: 60px;width: 198px;">
            <a href="http://[::1]/ci_da_project/application/upload/Test " title="Lorem Ipsum has been the industry's standard dummy text" download>
            <button name="prefolder" style="background-color: #ffffff;border-color: #bee0f1;border: 0px;margin: 0px 0px 0px 10px;padding: 0px;text-align: left;">
            
            <img src="http://[::1]/ci_da_project/application/assests/images/files.png" style="width:20px;height:20px;" title="Book1_(1).xlsx"><span title="Book1_(1).xlsx">Book1_(1).xlsx</span></button>

            <input type="hidden" name="id" value="144"></a>
            </td>



                <td align="left" style="width:375px;padding-left: 100px;" title="Lorem Ipsum has been the industry's standard dummy text">  
                Lorem Ipsum has been the industry's standard dummy..                </td>




                <td align="center">  
                admin                </td>



                <td align="center">  
                2018-06-23 10:25:20                </td>


             

                <td align="center">  
               <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#comment" value=" Comment " id="comment_block" onclick="recent_comment('145');" style="margin:5px;">
                </td>

              </tr>

             
        
               
                <tr style="border: 0px;" class="37673951">

            <td align="left" style="padding-left: 60px;width: 198px;">
            <a href="http://[::1]/ci_da_project/application/upload/Test " title="Lorem Ipsum has been the industry's standard dummy text" download>
            <button name="prefolder" style="background-color: #ffffff;border-color: #bee0f1;border: 0px;margin: 0px 0px 0px 10px;padding: 0px;text-align: left;">
            
            <img src="http://[::1]/ci_da_project/application/assests/images/files.png" style="width:20px;height:20px;" title="Desert.jpg"><span title="Desert.jpg">Desert.jpg</span></button>

            <input type="hidden" name="id" value="144"></a>
            </td>



                <td align="left" style="width:375px;padding-left: 100px;" title="Lorem Ipsum has been the industry's standard dummy text23">  
                Lorem Ipsum has been the industry's standard dummy..                </td>




                <td align="center">  
                admin                </td>



                <td align="center">  
                2018-06-16 15:42:45                </td>


             

                <td align="center">  
               <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#comment" value=" Comment " id="comment_block" onclick="recent_comment('152');" style="margin:5px;">
                </td>

              </tr>

             
        
               
                <tr style="border: 0px;" class="37673951">

            <td align="left" style="padding-left: 60px;width: 198px;">
            <a href="http://[::1]/ci_da_project/application/upload/Test " title="Lorem Ipsum has been the industry's standard dummy text" download>
            <button name="prefolder" style="background-color: #ffffff;border-color: #bee0f1;border: 0px;margin: 0px 0px 0px 10px;padding: 0px;text-align: left;">
            
            <img src="http://[::1]/ci_da_project/application/assests/images/files.png" style="width:20px;height:20px;" title="Hydrangeas.jpg"><span title="Hydrangeas.jpg">Hydrangeas.jpg</span></button>

            <input type="hidden" name="id" value="144"></a>
            </td>



                <td align="left" style="width:375px;padding-left: 100px;" title="ads">  
                ads                </td>




                <td align="center">  
                admin                </td>



                <td align="center">  
                2018-06-22 11:31:02                </td>


             

                <td align="center">  
               <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#comment" value=" Comment " id="comment_block" onclick="recent_comment('157');" style="margin:5px;">
                </td>

              </tr>

             
        
               
                <tr style="border: 0px;" class="37673951">

            <td align="left" style="padding-left: 60px;width: 198px;">
            <a href="http://[::1]/ci_da_project/application/upload/Test " title="Lorem Ipsum has been the industry's standard dummy text" download>
            <button name="prefolder" style="background-color: #ffffff;border-color: #bee0f1;border: 0px;margin: 0px 0px 0px 10px;padding: 0px;text-align: left;">
            
            <img src="http://[::1]/ci_da_project/application/assests/images/files.png" style="width:20px;height:20px;" title="Lighthouse.jpg"><span title="Lighthouse.jpg">Lighthouse.jpg</span></button>

            <input type="hidden" name="id" value="144"></a>
            </td>



                <td align="left" style="width:375px;padding-left: 100px;" title="Lorem Ipsum has been the industry's standard dummy text34234">  
                Lorem Ipsum has been the industry's standard dummy..                </td>




                <td align="center">  
                admin                </td>



                <td align="center">  
                2018-06-16 15:43:24                </td>


             

                <td align="center">  
               <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#comment" value=" Comment " id="comment_block" onclick="recent_comment('153');" style="margin:5px;">
                </td>

              </tr>

             
        
bool(true)
string(1) "4"
1<br>
    <script type="text/javascript">
      $(".fa-plus-square").show();
      $(".fa-minus-square").hide();
      $(".37673951").hide();
      
      $(".37673951").click(function(){
        $(".37673951").toggle();
    });
   </script>
 
 </tbody>
</table>
</div>
          
        

 


        <div class="">
    <div class="col-md-12" class='alert alert-info' style='text-align: center'><h4> All Files Present In This Folder</h4></div>
   

<table width="100%" style="font-size: 13px;" >
  

  <thead>
    <th align="left" style="padding-left: 60px;">Name</th>
    <th align="center">Description</th>
    <th align="center">Created By</th>
    <th align="center">Created On</th>
    <th align="center">Comment</th>
   
  </thead>
   
   
   <tbody>
 
         




       
          
    <tr>
      <td align="left" style="padding-left: 60px;">
        <a href="http://[::1]/ci_da_project/application/upload/Book1.xlsx " title="Book1.xlsx" download>
        
        <button name="prefolder" style="background-color: #ffffff;border-color: #bee0f1;border: 0px;margin: 0px 0px 0px 10px;padding: 0px;text-align: left;">
        
        <img src="http://[::1]/ci_da_project/application/assests/images/files.png" style="width:20px;height:20px;">Book1.xlsx</button>
        
        <input type="hidden" name="id" value="148"></a>
      </td>
   
     <td align="left" style="width:375px;padding-left: 100px;" title="Lorem Ipsum has been the industry's standard dummy text">  
        Lorem Ipsum has been the industry's standard dummy..          </td>
        


     
          <td align="center">  
        Admin          </td>
        

        
          <td align="center">  
        2018-06-23 10:26:44          </td>
        
          
          <td align="center">  
          <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#comment" value=" Comment " id="comment_block" onclick="recent_comment('148');" style="margin:5px;">
         
          </td>
      
         
        </tr>

   
 




       
          
    <tr>
      <td align="left" style="padding-left: 60px;">
        <a href="http://[::1]/ci_da_project/application/upload/Chrysanthemum.jpg " title="Chrysanthemum.jpg" download>
        
        <button name="prefolder" style="background-color: #ffffff;border-color: #bee0f1;border: 0px;margin: 0px 0px 0px 10px;padding: 0px;text-align: left;">
        
        <img src="http://[::1]/ci_da_project/application/assests/images/files.png" style="width:20px;height:20px;">Chrysanthemum.jpg</button>
        
        <input type="hidden" name="id" value="155"></a>
      </td>
   
     <td align="left" style="width:375px;padding-left: 100px;" title="xcv">  
        xcv          </td>
        


     
          <td align="center">  
        Admin          </td>
        

        
          <td align="center">  
        2018-06-21 19:04:03          </td>
        
          
          <td align="center">  
          <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#comment" value=" Comment " id="comment_block" onclick="recent_comment('155');" style="margin:5px;">
         
          </td>
      
         
        </tr>

   
 




       
          
    <tr>
      <td align="left" style="padding-left: 60px;">
        <a href="http://[::1]/ci_da_project/application/upload/Desert.jpg " title="Desert.jpg" download>
        
        <button name="prefolder" style="background-color: #ffffff;border-color: #bee0f1;border: 0px;margin: 0px 0px 0px 10px;padding: 0px;text-align: left;">
        
        <img src="http://[::1]/ci_da_project/application/assests/images/files.png" style="width:20px;height:20px;">Desert.jpg</button>
        
        <input type="hidden" name="id" value="129"></a>
      </td>
   
     <td align="left" style="width:375px;padding-left: 100px;" title="Lorem Ipsum has been the industry's standard dummy text">  
        Lorem Ipsum has been the industry's standard dummy..          </td>
        


     
          <td align="center">  
        Admin          </td>
        

        
          <td align="center">  
        2018-06-16 15:34:57          </td>
        
          
          <td align="center">  
          <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#comment" value=" Comment " id="comment_block" onclick="recent_comment('129');" style="margin:5px;">
         
          </td>
      
         
        </tr>

   
 




       
          
    <tr>
      <td align="left" style="padding-left: 60px;">
        <a href="http://[::1]/ci_da_project/application/upload/Jellyfish.jpg " title="Jellyfish.jpg" download>
        
        <button name="prefolder" style="background-color: #ffffff;border-color: #bee0f1;border: 0px;margin: 0px 0px 0px 10px;padding: 0px;text-align: left;">
        
        <img src="http://[::1]/ci_da_project/application/assests/images/files.png" style="width:20px;height:20px;">Jellyfish.jpg</button>
        
        <input type="hidden" name="id" value="151"></a>
      </td>
   
     <td align="left" style="width:375px;padding-left: 100px;" title="Lorem Ipsum has been the industry's standard dummy text1">  
        Lorem Ipsum has been the industry's standard dummy..          </td>
        


     
          <td align="center">  
        Admin          </td>
        

        
          <td align="center">  
        2018-06-16 15:40:54          </td>
        
          
          <td align="center">  
          <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#comment" value=" Comment " id="comment_block" onclick="recent_comment('151');" style="margin:5px;">
         
          </td>
      
         
        </tr>

   
 




       
          
    <tr>
      <td align="left" style="padding-left: 60px;">
        <a href="http://[::1]/ci_da_project/application/upload/Penguins.jpg " title="Penguins.jpg" download>
        
        <button name="prefolder" style="background-color: #ffffff;border-color: #bee0f1;border: 0px;margin: 0px 0px 0px 10px;padding: 0px;text-align: left;">
        
        <img src="http://[::1]/ci_da_project/application/assests/images/files.png" style="width:20px;height:20px;">Penguins.jpg</button>
        
        <input type="hidden" name="id" value="131"></a>
      </td>
   
     <td align="left" style="width:375px;padding-left: 100px;" title="Lorem Ipsum has been the industry's standard dummy text">  
        Lorem Ipsum has been the industry's standard dummy..          </td>
        


     
          <td align="center">  
        Admin          </td>
        

        
          <td align="center">  
        2018-06-16 15:34:57          </td>
        
          
          <td align="center">  
          <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#comment" value=" Comment " id="comment_block" onclick="recent_comment('131');" style="margin:5px;">
         
          </td>
      
         
        </tr>

   
 
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
                <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                <h3 class="modal-title"> Create Folder </h3>
            </div>
            <div class="container-fluid">
            <div class="row-fluid">

      
           <form action="http://[::1]/ci_da_project/index.php/da_projects/folder" enctype="multipart/form-data" method="post" accept-charset="utf-8">
  

              <div  style="margin:50px;">
              <div class="row">
              <label>Folder Name : </label>
              <input type="text" name="dir"  value="New Folder" style="width:200px;height:35px;">
              </div>
               
              <div class="row">
              <label>Folder Description : </label>             
              <textarea  name="description" placeholder=" Description about the Folder" rows="5" cols="20" style="width:400px;"></textarea>
              </div>

              <br>

              <div class="row">
              <input type="submit" name="submit" class="btn btn-primary" value="Submit">
              </div>

             
          </form>             
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
                <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                <h3 class="modal-title"> Upload File </h3>
            </div>
            <div class="container-fluid">
            <div class="row-fluid">

      
           <form action="http://[::1]/ci_da_project/index.php/da_projects/upload_form" enctype="multipart/form-data" method="post" accept-charset="utf-8">
  

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

              <div class="row">
              <input type="submit" name="submit" class="btn btn-primary" value="Submit">
              </div>

             
          </form>             
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
                <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                <h3 class="modal-title"> Comment </h3>
            </div>
            <div class="container-fluid">
            <div class="row-fluid">


              <div  style="margin:50px;">
                <form action="http://[::1]/ci_da_project/index.php/da_projects/comment" enctype="multipart/form-data" method="post" accept-charset="utf-8">
              <div class="row">
              <label>Comment  </label>
              <textarea  name="add_comment" placeholder="Add Comment " rows="3" cols="20" style="width:50%"></textarea>
              <input type="hidden" name="file_id" id="commentbox">
              </div>

              <br>

              <div class="row" align="center">
              <input type="submit" name="submit" class="btn btn-primary" value="Submit" >
              </div>

             
          </form>              <div class="row">
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
                <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                <h3 class="modal-title"> Folder Details </h3>
            </div>
            <div class="container-fluid">
            <div class="row-fluid">
             <div  style="margin:50px;">
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



    
<script src="http://[::1]/ci_da_project/application/assests/bootstrap/js/jquery.js"></script>
    <script src="http://[::1]/ci_da_project/application/assests/lib/bootstrap/js/bootstrap.js"></script>
                    
                    <footer>
                        <hr>

                      
                        <p class="pull-right">Bootstrap <a href="http://www.ipageindia.com" target="_blank">Admin Panel</a> by <a href="http://www.ipageindia.com" target="_blank"><strong>i</strong>page Technology</a></p>

                        <p>&copy; 2018 <a href="http://www.ipageindia.com" target="_blank"><strong>i</strong>page Technology</a></p>
                    </footer>

<script type="text/javascript">
  function recent_comment(value)
  {
    
    var file_id = value;
    //alert(file_id);
    $.ajax({
    url: "http://[::1]/ci_da_project/da_projects/comment_ajax",
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
    url: "http://[::1]/ci_da_project/da_projects/folder_fetch_ajax",
    method:'POST',
    data:  { 'folder_id':folder_id},
    success: function(msg) {
    $('#folder_details').html(msg);
    }
    });
    document.getElementById("folder_file").value = folder_id;
  }


// $(document).ready(function(){
//     $('[data-toggle="popover1"]').popover();   
// });

</script>

  <div id="codeigniter_profiler" style="clear:both;background-color:#fff;padding:10px;">

<fieldset id="ci_profiler_benchmarks" style="border:1px solid #900;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#900;">&nbsp;&nbsp;BENCHMARKS&nbsp;&nbsp;</legend>


<table style="width:100%;">
<tr><td style="padding:5px;width:50%;color:#000;font-weight:bold;background-color:#ddd;">Loading Time: Base Classes&nbsp;&nbsp;</td><td style="padding:5px;width:50%;color:#900;font-weight:normal;background-color:#ddd;">0.0210</td></tr>
<tr><td style="padding:5px;width:50%;color:#000;font-weight:bold;background-color:#ddd;">Controller Execution Time ( Da Projects / Create Folder )&nbsp;&nbsp;</td><td style="padding:5px;width:50%;color:#900;font-weight:normal;background-color:#ddd;">0.2120</td></tr>
<tr><td style="padding:5px;width:50%;color:#000;font-weight:bold;background-color:#ddd;">Total Execution Time&nbsp;&nbsp;</td><td style="padding:5px;width:50%;color:#900;font-weight:normal;background-color:#ddd;">0.2380</td></tr>
</table>
</fieldset>

<fieldset id="ci_profiler_get" style="border:1px solid #cd6e00;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#cd6e00;">&nbsp;&nbsp;GET DATA&nbsp;&nbsp;</legend>
<div style="color:#cd6e00;font-weight:normal;padding:4px 0 4px 0;">No GET data exists</div></fieldset>

<fieldset id="ci_profiler_memory_usage" style="border:1px solid #5a0099;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#5a0099;">&nbsp;&nbsp;MEMORY USAGE&nbsp;&nbsp;</legend>
<div style="color:#5a0099;font-weight:normal;padding:4px 0 4px 0;">2,709,936 bytes</div></fieldset>

<fieldset id="ci_profiler_post" style="border:1px solid #009900;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#009900;">&nbsp;&nbsp;POST DATA&nbsp;&nbsp;</legend>
<div style="color:#009900;font-weight:normal;padding:4px 0 4px 0;">No POST data exists</div></fieldset>

<fieldset id="ci_profiler_uri_string" style="border:1px solid #000;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#000;">&nbsp;&nbsp;URI STRING&nbsp;&nbsp;</legend>
<div style="color:#000;font-weight:normal;padding:4px 0 4px 0;">da_projects/create_folder/root</div></fieldset>

<fieldset id="ci_profiler_controller_info" style="border:1px solid #995300;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#995300;">&nbsp;&nbsp;CLASS/METHOD&nbsp;&nbsp;</legend>
<div style="color:#995300;font-weight:normal;padding:4px 0 4px 0;">da_projects/create_folder</div></fieldset>

<fieldset style="border:1px solid #0000FF;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#0000FF;">&nbsp;&nbsp;DATABASE:&nbsp; da_projects_db (da_projects:$db)&nbsp;&nbsp;&nbsp;QUERIES: 81 (0.0870 seconds)&nbsp;&nbsp;(<span style="cursor: pointer;" onclick="var s=document.getElementById('ci_profiler_queries_db_0').style;s.display=s.display=='none'?'':'none';this.innerHTML=this.innerHTML=='Show'?'Hide':'Show';">Show</span>)</legend>


<table style="width:100%; display:none" id="ci_profiler_queries_db_0">
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">username</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">project_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">full_name</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">user_type</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">company_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">department_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">email_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`.*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>LEFT&nbsp;JO<strong>IN</strong></strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">users</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>ON</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`.`</span><span style="color: #DD0000">created_by</span><span style="color: #007700">`&nbsp;=&nbsp;`</span><span style="color: #DD0000">users</span><span style="color: #007700">`.`</span><span style="color: #DD0000">id</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #0000BB">0<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">type</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'file'<br /></span><span style="color: #0000BB"><strong>ORDER&nbsp;BY</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">name</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>AS</strong>C&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0060&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">username</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">project_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">full_name</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">user_type</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">company_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">department_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">email_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`.*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>LEFT&nbsp;JO<strong>IN</strong></strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">users</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>ON</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`.`</span><span style="color: #DD0000">created_by</span><span style="color: #007700">`&nbsp;=&nbsp;`</span><span style="color: #DD0000">users</span><span style="color: #007700">`.`</span><span style="color: #DD0000">id</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #0000BB">0<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">type</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'dir'<br /></span><span style="color: #0000BB"><strong>ORDER&nbsp;BY</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">name</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>AS</strong>C&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">comma_seperated_menu_ids</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">menu_user</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">user_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'6'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">sidemenu</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">is_active</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'1'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #0000BB">0<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">id</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>IN</strong></span><span style="color: #007700"><strong>(</strong></span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'4'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'5'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'6'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'7'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'8'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'9'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'10'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'11'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'12'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'13'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'14'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'15'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'16'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'17'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'18'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'19'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'20'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'21'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'22'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'23'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'24'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'25'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'26'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'27'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'28'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'29'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'30'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'31'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'32'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'33'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'34'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'35'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'36'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'37'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'38'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'39'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'40'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'41'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'42'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'43'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'44'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'45'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'46'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'47'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'48'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'49'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'50'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'51'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'52'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'53'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'54'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'55'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'56'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'57'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'58'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'59'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'60'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'61'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'62'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'63'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'64'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'65'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'66'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'67'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'68'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'69'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'70'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'71'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'72'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'73'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'74'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'75'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'76'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'77'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'78'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'79'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'80'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'81'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'82'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'83'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'84'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'85'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'86'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'87'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'88'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'89'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'90'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'91'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'92'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'93'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'94'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'95'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'96'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'97'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'98'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'99'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'100'</span><span style="color: #007700"><strong>)</strong>&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">comma_seperated_menu_ids</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">menu_user</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">user_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'6'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0030&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">sidemenu</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">is_active</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'1'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'1'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">id</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>IN</strong></span><span style="color: #007700"><strong>(</strong></span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'4'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'5'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'6'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'7'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'8'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'9'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'10'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'11'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'12'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'13'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'14'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'15'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'16'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'17'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'18'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'19'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'20'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'21'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'22'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'23'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'24'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'25'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'26'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'27'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'28'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'29'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'30'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'31'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'32'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'33'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'34'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'35'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'36'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'37'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'38'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'39'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'40'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'41'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'42'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'43'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'44'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'45'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'46'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'47'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'48'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'49'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'50'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'51'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'52'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'53'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'54'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'55'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'56'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'57'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'58'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'59'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'60'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'61'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'62'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'63'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'64'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'65'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'66'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'67'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'68'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'69'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'70'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'71'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'72'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'73'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'74'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'75'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'76'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'77'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'78'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'79'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'80'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'81'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'82'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'83'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'84'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'85'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'86'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'87'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'88'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'89'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'90'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'91'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'92'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'93'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'94'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'95'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'96'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'97'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'98'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'99'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'100'</span><span style="color: #007700"><strong>)</strong>&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0040&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">comma_seperated_menu_ids</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">menu_user</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">user_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'6'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">sidemenu</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">is_active</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'1'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'2'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">id</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>IN</strong></span><span style="color: #007700"><strong>(</strong></span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'4'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'5'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'6'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'7'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'8'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'9'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'10'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'11'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'12'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'13'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'14'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'15'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'16'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'17'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'18'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'19'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'20'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'21'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'22'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'23'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'24'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'25'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'26'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'27'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'28'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'29'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'30'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'31'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'32'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'33'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'34'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'35'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'36'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'37'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'38'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'39'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'40'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'41'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'42'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'43'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'44'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'45'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'46'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'47'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'48'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'49'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'50'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'51'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'52'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'53'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'54'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'55'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'56'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'57'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'58'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'59'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'60'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'61'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'62'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'63'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'64'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'65'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'66'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'67'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'68'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'69'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'70'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'71'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'72'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'73'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'74'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'75'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'76'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'77'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'78'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'79'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'80'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'81'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'82'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'83'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'84'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'85'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'86'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'87'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'88'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'89'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'90'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'91'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'92'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'93'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'94'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'95'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'96'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'97'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'98'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'99'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'100'</span><span style="color: #007700"><strong>)</strong>&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">comma_seperated_menu_ids</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">menu_user</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">user_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'6'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">sidemenu</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">is_active</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'1'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'20'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">id</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>IN</strong></span><span style="color: #007700"><strong>(</strong></span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'4'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'5'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'6'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'7'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'8'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'9'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'10'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'11'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'12'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'13'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'14'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'15'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'16'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'17'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'18'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'19'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'20'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'21'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'22'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'23'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'24'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'25'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'26'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'27'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'28'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'29'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'30'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'31'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'32'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'33'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'34'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'35'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'36'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'37'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'38'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'39'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'40'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'41'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'42'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'43'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'44'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'45'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'46'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'47'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'48'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'49'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'50'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'51'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'52'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'53'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'54'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'55'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'56'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'57'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'58'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'59'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'60'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'61'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'62'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'63'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'64'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'65'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'66'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'67'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'68'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'69'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'70'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'71'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'72'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'73'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'74'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'75'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'76'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'77'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'78'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'79'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'80'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'81'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'82'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'83'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'84'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'85'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'86'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'87'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'88'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'89'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'90'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'91'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'92'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'93'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'94'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'95'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'96'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'97'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'98'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'99'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'100'</span><span style="color: #007700"><strong>)</strong>&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">comma_seperated_menu_ids</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">menu_user</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">user_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'6'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">sidemenu</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">is_active</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'1'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'21'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">id</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>IN</strong></span><span style="color: #007700"><strong>(</strong></span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'4'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'5'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'6'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'7'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'8'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'9'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'10'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'11'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'12'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'13'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'14'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'15'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'16'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'17'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'18'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'19'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'20'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'21'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'22'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'23'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'24'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'25'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'26'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'27'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'28'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'29'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'30'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'31'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'32'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'33'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'34'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'35'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'36'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'37'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'38'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'39'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'40'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'41'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'42'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'43'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'44'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'45'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'46'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'47'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'48'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'49'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'50'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'51'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'52'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'53'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'54'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'55'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'56'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'57'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'58'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'59'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'60'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'61'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'62'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'63'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'64'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'65'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'66'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'67'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'68'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'69'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'70'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'71'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'72'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'73'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'74'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'75'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'76'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'77'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'78'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'79'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'80'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'81'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'82'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'83'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'84'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'85'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'86'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'87'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'88'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'89'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'90'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'91'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'92'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'93'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'94'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'95'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'96'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'97'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'98'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'99'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'100'</span><span style="color: #007700"><strong>)</strong>&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">comma_seperated_menu_ids</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">menu_user</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">user_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'6'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">sidemenu</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">is_active</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'1'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'22'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">id</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>IN</strong></span><span style="color: #007700"><strong>(</strong></span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'4'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'5'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'6'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'7'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'8'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'9'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'10'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'11'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'12'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'13'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'14'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'15'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'16'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'17'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'18'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'19'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'20'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'21'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'22'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'23'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'24'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'25'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'26'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'27'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'28'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'29'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'30'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'31'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'32'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'33'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'34'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'35'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'36'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'37'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'38'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'39'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'40'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'41'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'42'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'43'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'44'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'45'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'46'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'47'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'48'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'49'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'50'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'51'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'52'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'53'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'54'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'55'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'56'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'57'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'58'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'59'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'60'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'61'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'62'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'63'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'64'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'65'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'66'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'67'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'68'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'69'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'70'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'71'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'72'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'73'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'74'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'75'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'76'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'77'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'78'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'79'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'80'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'81'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'82'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'83'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'84'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'85'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'86'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'87'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'88'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'89'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'90'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'91'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'92'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'93'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'94'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'95'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'96'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'97'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'98'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'99'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'100'</span><span style="color: #007700"><strong>)</strong>&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">comma_seperated_menu_ids</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">menu_user</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">user_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'6'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">sidemenu</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">is_active</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'1'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'25'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">id</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>IN</strong></span><span style="color: #007700"><strong>(</strong></span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'4'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'5'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'6'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'7'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'8'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'9'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'10'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'11'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'12'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'13'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'14'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'15'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'16'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'17'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'18'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'19'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'20'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'21'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'22'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'23'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'24'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'25'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'26'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'27'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'28'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'29'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'30'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'31'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'32'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'33'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'34'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'35'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'36'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'37'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'38'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'39'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'40'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'41'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'42'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'43'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'44'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'45'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'46'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'47'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'48'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'49'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'50'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'51'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'52'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'53'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'54'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'55'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'56'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'57'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'58'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'59'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'60'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'61'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'62'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'63'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'64'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'65'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'66'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'67'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'68'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'69'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'70'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'71'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'72'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'73'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'74'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'75'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'76'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'77'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'78'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'79'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'80'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'81'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'82'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'83'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'84'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'85'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'86'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'87'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'88'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'89'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'90'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'91'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'92'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'93'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'94'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'95'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'96'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'97'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'98'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'99'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'100'</span><span style="color: #007700"><strong>)</strong>&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">comma_seperated_menu_ids</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">menu_user</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">user_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'6'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">sidemenu</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">is_active</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'1'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'26'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">id</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>IN</strong></span><span style="color: #007700"><strong>(</strong></span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'4'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'5'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'6'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'7'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'8'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'9'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'10'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'11'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'12'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'13'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'14'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'15'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'16'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'17'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'18'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'19'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'20'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'21'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'22'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'23'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'24'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'25'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'26'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'27'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'28'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'29'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'30'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'31'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'32'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'33'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'34'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'35'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'36'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'37'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'38'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'39'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'40'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'41'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'42'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'43'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'44'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'45'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'46'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'47'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'48'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'49'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'50'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'51'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'52'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'53'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'54'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'55'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'56'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'57'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'58'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'59'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'60'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'61'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'62'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'63'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'64'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'65'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'66'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'67'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'68'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'69'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'70'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'71'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'72'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'73'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'74'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'75'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'76'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'77'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'78'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'79'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'80'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'81'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'82'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'83'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'84'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'85'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'86'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'87'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'88'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'89'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'90'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'91'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'92'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'93'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'94'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'95'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'96'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'97'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'98'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'99'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'100'</span><span style="color: #007700"><strong>)</strong>&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">comma_seperated_menu_ids</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">menu_user</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">user_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'6'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">sidemenu</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">is_active</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'1'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'27'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">id</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>IN</strong></span><span style="color: #007700"><strong>(</strong></span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'4'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'5'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'6'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'7'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'8'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'9'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'10'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'11'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'12'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'13'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'14'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'15'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'16'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'17'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'18'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'19'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'20'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'21'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'22'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'23'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'24'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'25'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'26'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'27'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'28'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'29'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'30'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'31'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'32'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'33'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'34'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'35'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'36'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'37'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'38'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'39'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'40'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'41'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'42'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'43'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'44'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'45'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'46'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'47'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'48'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'49'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'50'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'51'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'52'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'53'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'54'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'55'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'56'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'57'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'58'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'59'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'60'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'61'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'62'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'63'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'64'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'65'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'66'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'67'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'68'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'69'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'70'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'71'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'72'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'73'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'74'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'75'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'76'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'77'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'78'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'79'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'80'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'81'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'82'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'83'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'84'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'85'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'86'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'87'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'88'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'89'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'90'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'91'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'92'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'93'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'94'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'95'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'96'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'97'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'98'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'99'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'100'</span><span style="color: #007700"><strong>)</strong>&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0020&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">comma_seperated_menu_ids</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">menu_user</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">user_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'6'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">sidemenu</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">is_active</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'1'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'30'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">id</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>IN</strong></span><span style="color: #007700"><strong>(</strong></span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'4'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'5'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'6'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'7'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'8'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'9'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'10'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'11'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'12'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'13'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'14'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'15'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'16'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'17'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'18'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'19'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'20'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'21'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'22'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'23'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'24'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'25'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'26'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'27'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'28'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'29'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'30'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'31'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'32'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'33'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'34'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'35'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'36'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'37'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'38'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'39'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'40'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'41'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'42'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'43'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'44'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'45'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'46'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'47'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'48'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'49'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'50'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'51'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'52'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'53'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'54'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'55'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'56'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'57'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'58'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'59'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'60'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'61'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'62'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'63'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'64'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'65'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'66'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'67'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'68'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'69'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'70'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'71'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'72'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'73'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'74'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'75'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'76'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'77'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'78'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'79'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'80'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'81'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'82'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'83'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'84'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'85'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'86'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'87'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'88'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'89'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'90'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'91'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'92'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'93'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'94'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'95'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'96'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'97'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'98'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'99'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'100'</span><span style="color: #007700"><strong>)</strong>&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">comma_seperated_menu_ids</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">menu_user</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">user_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'6'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">sidemenu</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">is_active</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'1'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'31'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">id</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>IN</strong></span><span style="color: #007700"><strong>(</strong></span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'4'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'5'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'6'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'7'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'8'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'9'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'10'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'11'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'12'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'13'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'14'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'15'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'16'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'17'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'18'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'19'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'20'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'21'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'22'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'23'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'24'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'25'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'26'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'27'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'28'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'29'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'30'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'31'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'32'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'33'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'34'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'35'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'36'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'37'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'38'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'39'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'40'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'41'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'42'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'43'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'44'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'45'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'46'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'47'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'48'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'49'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'50'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'51'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'52'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'53'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'54'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'55'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'56'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'57'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'58'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'59'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'60'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'61'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'62'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'63'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'64'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'65'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'66'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'67'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'68'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'69'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'70'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'71'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'72'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'73'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'74'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'75'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'76'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'77'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'78'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'79'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'80'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'81'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'82'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'83'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'84'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'85'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'86'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'87'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'88'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'89'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'90'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'91'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'92'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'93'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'94'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'95'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'96'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'97'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'98'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'99'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'100'</span><span style="color: #007700"><strong>)</strong>&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">comma_seperated_menu_ids</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">menu_user</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">user_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'6'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">sidemenu</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">is_active</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'1'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'35'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">id</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>IN</strong></span><span style="color: #007700"><strong>(</strong></span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'4'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'5'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'6'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'7'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'8'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'9'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'10'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'11'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'12'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'13'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'14'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'15'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'16'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'17'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'18'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'19'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'20'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'21'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'22'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'23'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'24'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'25'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'26'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'27'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'28'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'29'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'30'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'31'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'32'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'33'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'34'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'35'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'36'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'37'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'38'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'39'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'40'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'41'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'42'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'43'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'44'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'45'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'46'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'47'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'48'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'49'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'50'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'51'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'52'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'53'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'54'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'55'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'56'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'57'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'58'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'59'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'60'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'61'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'62'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'63'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'64'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'65'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'66'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'67'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'68'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'69'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'70'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'71'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'72'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'73'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'74'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'75'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'76'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'77'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'78'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'79'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'80'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'81'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'82'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'83'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'84'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'85'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'86'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'87'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'88'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'89'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'90'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'91'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'92'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'93'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'94'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'95'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'96'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'97'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'98'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'99'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'100'</span><span style="color: #007700"><strong>)</strong>&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">comma_seperated_menu_ids</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">menu_user</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">user_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'6'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">sidemenu</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">is_active</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'1'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'36'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">id</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>IN</strong></span><span style="color: #007700"><strong>(</strong></span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'4'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'5'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'6'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'7'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'8'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'9'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'10'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'11'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'12'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'13'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'14'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'15'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'16'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'17'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'18'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'19'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'20'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'21'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'22'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'23'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'24'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'25'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'26'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'27'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'28'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'29'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'30'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'31'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'32'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'33'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'34'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'35'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'36'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'37'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'38'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'39'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'40'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'41'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'42'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'43'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'44'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'45'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'46'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'47'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'48'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'49'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'50'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'51'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'52'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'53'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'54'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'55'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'56'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'57'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'58'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'59'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'60'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'61'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'62'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'63'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'64'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'65'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'66'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'67'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'68'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'69'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'70'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'71'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'72'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'73'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'74'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'75'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'76'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'77'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'78'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'79'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'80'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'81'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'82'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'83'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'84'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'85'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'86'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'87'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'88'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'89'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'90'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'91'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'92'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'93'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'94'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'95'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'96'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'97'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'98'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'99'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'100'</span><span style="color: #007700"><strong>)</strong>&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">comma_seperated_menu_ids</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">menu_user</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">user_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'6'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0020&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">sidemenu</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">is_active</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'1'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'37'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">id</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>IN</strong></span><span style="color: #007700"><strong>(</strong></span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'4'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'5'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'6'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'7'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'8'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'9'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'10'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'11'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'12'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'13'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'14'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'15'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'16'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'17'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'18'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'19'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'20'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'21'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'22'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'23'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'24'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'25'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'26'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'27'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'28'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'29'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'30'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'31'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'32'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'33'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'34'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'35'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'36'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'37'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'38'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'39'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'40'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'41'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'42'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'43'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'44'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'45'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'46'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'47'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'48'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'49'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'50'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'51'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'52'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'53'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'54'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'55'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'56'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'57'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'58'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'59'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'60'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'61'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'62'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'63'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'64'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'65'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'66'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'67'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'68'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'69'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'70'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'71'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'72'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'73'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'74'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'75'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'76'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'77'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'78'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'79'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'80'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'81'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'82'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'83'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'84'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'85'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'86'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'87'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'88'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'89'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'90'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'91'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'92'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'93'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'94'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'95'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'96'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'97'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'98'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'99'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'100'</span><span style="color: #007700"><strong>)</strong>&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">comma_seperated_menu_ids</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">menu_user</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">user_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'6'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">sidemenu</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">is_active</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'1'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'38'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">id</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>IN</strong></span><span style="color: #007700"><strong>(</strong></span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'4'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'5'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'6'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'7'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'8'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'9'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'10'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'11'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'12'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'13'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'14'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'15'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'16'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'17'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'18'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'19'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'20'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'21'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'22'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'23'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'24'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'25'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'26'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'27'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'28'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'29'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'30'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'31'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'32'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'33'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'34'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'35'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'36'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'37'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'38'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'39'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'40'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'41'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'42'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'43'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'44'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'45'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'46'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'47'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'48'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'49'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'50'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'51'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'52'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'53'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'54'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'55'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'56'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'57'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'58'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'59'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'60'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'61'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'62'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'63'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'64'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'65'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'66'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'67'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'68'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'69'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'70'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'71'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'72'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'73'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'74'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'75'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'76'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'77'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'78'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'79'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'80'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'81'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'82'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'83'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'84'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'85'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'86'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'87'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'88'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'89'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'90'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'91'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'92'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'93'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'94'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'95'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'96'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'97'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'98'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'99'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'100'</span><span style="color: #007700"><strong>)</strong>&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">comma_seperated_menu_ids</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">menu_user</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">user_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'6'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">sidemenu</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">is_active</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'1'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'40'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">id</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>IN</strong></span><span style="color: #007700"><strong>(</strong></span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'4'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'5'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'6'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'7'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'8'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'9'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'10'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'11'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'12'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'13'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'14'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'15'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'16'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'17'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'18'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'19'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'20'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'21'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'22'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'23'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'24'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'25'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'26'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'27'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'28'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'29'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'30'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'31'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'32'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'33'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'34'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'35'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'36'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'37'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'38'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'39'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'40'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'41'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'42'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'43'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'44'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'45'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'46'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'47'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'48'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'49'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'50'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'51'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'52'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'53'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'54'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'55'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'56'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'57'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'58'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'59'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'60'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'61'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'62'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'63'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'64'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'65'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'66'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'67'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'68'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'69'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'70'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'71'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'72'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'73'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'74'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'75'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'76'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'77'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'78'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'79'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'80'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'81'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'82'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'83'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'84'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'85'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'86'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'87'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'88'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'89'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'90'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'91'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'92'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'93'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'94'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'95'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'96'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'97'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'98'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'99'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'100'</span><span style="color: #007700"><strong>)</strong>&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">comma_seperated_menu_ids</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">menu_user</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">user_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'6'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">sidemenu</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">is_active</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'1'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'41'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">id</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>IN</strong></span><span style="color: #007700"><strong>(</strong></span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'4'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'5'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'6'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'7'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'8'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'9'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'10'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'11'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'12'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'13'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'14'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'15'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'16'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'17'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'18'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'19'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'20'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'21'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'22'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'23'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'24'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'25'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'26'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'27'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'28'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'29'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'30'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'31'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'32'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'33'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'34'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'35'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'36'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'37'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'38'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'39'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'40'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'41'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'42'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'43'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'44'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'45'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'46'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'47'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'48'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'49'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'50'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'51'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'52'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'53'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'54'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'55'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'56'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'57'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'58'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'59'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'60'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'61'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'62'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'63'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'64'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'65'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'66'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'67'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'68'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'69'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'70'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'71'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'72'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'73'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'74'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'75'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'76'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'77'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'78'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'79'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'80'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'81'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'82'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'83'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'84'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'85'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'86'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'87'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'88'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'89'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'90'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'91'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'92'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'93'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'94'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'95'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'96'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'97'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'98'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'99'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'100'</span><span style="color: #007700"><strong>)</strong>&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">comma_seperated_menu_ids</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">menu_user</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">user_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'6'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">sidemenu</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">is_active</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'1'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'45'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">id</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>IN</strong></span><span style="color: #007700"><strong>(</strong></span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'4'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'5'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'6'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'7'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'8'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'9'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'10'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'11'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'12'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'13'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'14'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'15'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'16'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'17'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'18'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'19'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'20'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'21'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'22'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'23'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'24'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'25'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'26'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'27'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'28'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'29'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'30'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'31'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'32'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'33'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'34'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'35'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'36'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'37'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'38'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'39'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'40'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'41'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'42'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'43'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'44'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'45'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'46'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'47'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'48'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'49'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'50'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'51'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'52'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'53'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'54'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'55'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'56'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'57'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'58'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'59'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'60'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'61'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'62'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'63'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'64'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'65'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'66'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'67'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'68'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'69'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'70'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'71'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'72'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'73'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'74'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'75'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'76'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'77'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'78'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'79'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'80'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'81'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'82'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'83'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'84'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'85'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'86'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'87'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'88'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'89'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'90'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'91'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'92'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'93'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'94'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'95'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'96'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'97'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'98'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'99'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'100'</span><span style="color: #007700"><strong>)</strong>&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">comma_seperated_menu_ids</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">menu_user</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">user_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'6'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0030&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">sidemenu</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">is_active</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'1'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'46'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">id</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>IN</strong></span><span style="color: #007700"><strong>(</strong></span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'4'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'5'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'6'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'7'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'8'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'9'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'10'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'11'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'12'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'13'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'14'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'15'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'16'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'17'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'18'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'19'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'20'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'21'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'22'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'23'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'24'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'25'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'26'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'27'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'28'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'29'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'30'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'31'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'32'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'33'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'34'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'35'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'36'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'37'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'38'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'39'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'40'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'41'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'42'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'43'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'44'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'45'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'46'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'47'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'48'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'49'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'50'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'51'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'52'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'53'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'54'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'55'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'56'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'57'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'58'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'59'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'60'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'61'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'62'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'63'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'64'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'65'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'66'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'67'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'68'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'69'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'70'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'71'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'72'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'73'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'74'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'75'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'76'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'77'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'78'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'79'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'80'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'81'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'82'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'83'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'84'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'85'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'86'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'87'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'88'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'89'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'90'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'91'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'92'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'93'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'94'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'95'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'96'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'97'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'98'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'99'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'100'</span><span style="color: #007700"><strong>)</strong>&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0020&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">comma_seperated_menu_ids</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">menu_user</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">user_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'6'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0070&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">sidemenu</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">is_active</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'1'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'50'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">id</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>IN</strong></span><span style="color: #007700"><strong>(</strong></span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'4'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'5'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'6'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'7'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'8'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'9'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'10'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'11'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'12'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'13'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'14'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'15'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'16'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'17'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'18'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'19'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'20'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'21'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'22'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'23'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'24'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'25'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'26'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'27'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'28'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'29'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'30'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'31'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'32'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'33'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'34'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'35'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'36'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'37'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'38'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'39'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'40'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'41'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'42'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'43'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'44'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'45'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'46'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'47'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'48'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'49'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'50'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'51'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'52'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'53'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'54'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'55'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'56'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'57'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'58'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'59'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'60'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'61'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'62'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'63'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'64'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'65'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'66'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'67'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'68'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'69'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'70'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'71'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'72'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'73'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'74'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'75'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'76'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'77'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'78'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'79'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'80'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'81'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'82'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'83'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'84'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'85'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'86'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'87'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'88'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'89'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'90'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'91'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'92'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'93'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'94'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'95'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'96'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'97'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'98'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'99'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'100'</span><span style="color: #007700"><strong>)</strong>&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">comma_seperated_menu_ids</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">menu_user</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">user_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'6'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">sidemenu</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">is_active</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'1'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'51'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">id</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>IN</strong></span><span style="color: #007700"><strong>(</strong></span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'4'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'5'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'6'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'7'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'8'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'9'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'10'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'11'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'12'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'13'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'14'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'15'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'16'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'17'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'18'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'19'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'20'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'21'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'22'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'23'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'24'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'25'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'26'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'27'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'28'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'29'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'30'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'31'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'32'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'33'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'34'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'35'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'36'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'37'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'38'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'39'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'40'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'41'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'42'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'43'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'44'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'45'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'46'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'47'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'48'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'49'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'50'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'51'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'52'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'53'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'54'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'55'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'56'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'57'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'58'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'59'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'60'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'61'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'62'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'63'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'64'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'65'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'66'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'67'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'68'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'69'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'70'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'71'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'72'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'73'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'74'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'75'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'76'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'77'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'78'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'79'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'80'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'81'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'82'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'83'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'84'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'85'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'86'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'87'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'88'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'89'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'90'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'91'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'92'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'93'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'94'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'95'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'96'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'97'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'98'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'99'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'100'</span><span style="color: #007700"><strong>)</strong>&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">comma_seperated_menu_ids</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">menu_user</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">user_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'6'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0020&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">sidemenu</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">is_active</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'1'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'55'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">id</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>IN</strong></span><span style="color: #007700"><strong>(</strong></span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'4'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'5'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'6'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'7'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'8'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'9'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'10'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'11'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'12'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'13'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'14'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'15'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'16'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'17'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'18'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'19'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'20'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'21'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'22'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'23'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'24'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'25'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'26'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'27'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'28'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'29'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'30'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'31'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'32'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'33'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'34'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'35'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'36'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'37'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'38'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'39'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'40'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'41'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'42'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'43'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'44'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'45'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'46'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'47'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'48'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'49'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'50'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'51'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'52'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'53'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'54'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'55'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'56'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'57'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'58'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'59'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'60'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'61'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'62'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'63'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'64'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'65'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'66'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'67'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'68'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'69'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'70'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'71'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'72'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'73'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'74'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'75'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'76'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'77'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'78'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'79'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'80'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'81'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'82'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'83'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'84'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'85'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'86'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'87'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'88'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'89'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'90'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'91'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'92'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'93'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'94'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'95'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'96'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'97'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'98'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'99'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'100'</span><span style="color: #007700"><strong>)</strong>&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">comma_seperated_menu_ids</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">menu_user</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">user_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'6'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0080&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">sidemenu</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">is_active</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'1'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'56'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">id</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>IN</strong></span><span style="color: #007700"><strong>(</strong></span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'4'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'5'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'6'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'7'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'8'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'9'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'10'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'11'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'12'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'13'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'14'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'15'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'16'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'17'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'18'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'19'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'20'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'21'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'22'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'23'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'24'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'25'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'26'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'27'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'28'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'29'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'30'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'31'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'32'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'33'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'34'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'35'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'36'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'37'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'38'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'39'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'40'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'41'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'42'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'43'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'44'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'45'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'46'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'47'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'48'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'49'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'50'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'51'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'52'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'53'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'54'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'55'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'56'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'57'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'58'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'59'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'60'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'61'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'62'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'63'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'64'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'65'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'66'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'67'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'68'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'69'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'70'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'71'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'72'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'73'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'74'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'75'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'76'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'77'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'78'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'79'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'80'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'81'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'82'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'83'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'84'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'85'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'86'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'87'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'88'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'89'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'90'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'91'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'92'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'93'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'94'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'95'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'96'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'97'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'98'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'99'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'100'</span><span style="color: #007700"><strong>)</strong>&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0040&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">comma_seperated_menu_ids</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">menu_user</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">user_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'6'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">sidemenu</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">is_active</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'1'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'57'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">id</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>IN</strong></span><span style="color: #007700"><strong>(</strong></span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'4'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'5'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'6'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'7'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'8'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'9'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'10'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'11'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'12'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'13'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'14'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'15'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'16'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'17'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'18'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'19'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'20'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'21'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'22'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'23'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'24'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'25'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'26'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'27'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'28'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'29'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'30'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'31'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'32'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'33'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'34'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'35'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'36'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'37'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'38'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'39'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'40'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'41'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'42'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'43'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'44'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'45'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'46'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'47'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'48'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'49'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'50'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'51'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'52'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'53'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'54'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'55'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'56'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'57'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'58'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'59'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'60'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'61'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'62'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'63'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'64'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'65'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'66'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'67'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'68'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'69'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'70'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'71'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'72'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'73'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'74'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'75'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'76'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'77'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'78'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'79'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'80'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'81'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'82'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'83'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'84'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'85'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'86'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'87'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'88'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'89'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'90'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'91'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'92'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'93'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'94'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'95'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'96'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'97'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'98'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'99'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'100'</span><span style="color: #007700"><strong>)</strong>&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">username</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">project_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">full_name</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">user_type</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">company_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">department_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">email_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`.*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>LEFT&nbsp;JO<strong>IN</strong></strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">users</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>ON</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`.`</span><span style="color: #DD0000">created_by</span><span style="color: #007700">`&nbsp;=&nbsp;`</span><span style="color: #DD0000">users</span><span style="color: #007700">`.`</span><span style="color: #DD0000">id</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'146'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">type</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'file'<br /></span><span style="color: #0000BB"><strong>ORDER&nbsp;BY</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">name</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>AS</strong>C&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'146'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">type</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'dir'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;count</span><span style="color: #007700"><strong>(</strong></span><span style="color: #0000BB">id</span><span style="color: #007700"><strong>)</strong><br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>IN</strong></span><span style="color: #007700"><strong>(</strong></span><span style="color: #DD0000">'146'</span><span style="color: #007700"><strong>)</strong><br /><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">type</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'file'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">username</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">project_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">full_name</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">user_type</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">company_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">department_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">email_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`.*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>LEFT&nbsp;JO<strong>IN</strong></strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">users</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>ON</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`.`</span><span style="color: #DD0000">created_by</span><span style="color: #007700">`&nbsp;=&nbsp;`</span><span style="color: #DD0000">users</span><span style="color: #007700">`.`</span><span style="color: #DD0000">id</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'127'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">type</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'file'<br /></span><span style="color: #0000BB"><strong>ORDER&nbsp;BY</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">name</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>AS</strong>C&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'127'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">type</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'dir'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;count</span><span style="color: #007700"><strong>(</strong></span><span style="color: #0000BB">id</span><span style="color: #007700"><strong>)</strong><br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>IN</strong></span><span style="color: #007700"><strong>(</strong></span><span style="color: #DD0000">'127'</span><span style="color: #007700"><strong>)</strong><br /><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">type</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'file'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">username</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">project_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">full_name</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">user_type</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">company_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">department_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">email_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`.*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>LEFT&nbsp;JO<strong>IN</strong></strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">users</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>ON</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`.`</span><span style="color: #DD0000">created_by</span><span style="color: #007700">`&nbsp;=&nbsp;`</span><span style="color: #DD0000">users</span><span style="color: #007700">`.`</span><span style="color: #DD0000">id</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'135'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">type</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'file'<br /></span><span style="color: #0000BB"><strong>ORDER&nbsp;BY</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">name</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>AS</strong>C&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'135'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">type</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'dir'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'138'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">type</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'dir'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'140'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">type</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'dir'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'141'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">type</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'dir'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'143'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">type</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'dir'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;count</span><span style="color: #007700"><strong>(</strong></span><span style="color: #0000BB">id</span><span style="color: #007700"><strong>)</strong><br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>IN</strong></span><span style="color: #007700"><strong>(</strong></span><span style="color: #DD0000">'138'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'140'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'141'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'143'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'135'</span><span style="color: #007700"><strong>)</strong><br /><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">type</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'file'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">username</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">project_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">full_name</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">user_type</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">company_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">department_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">email_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`.*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>LEFT&nbsp;JO<strong>IN</strong></strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">users</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>ON</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`.`</span><span style="color: #DD0000">created_by</span><span style="color: #007700">`&nbsp;=&nbsp;`</span><span style="color: #DD0000">users</span><span style="color: #007700">`.`</span><span style="color: #DD0000">id</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'128'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">type</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'file'<br /></span><span style="color: #0000BB"><strong>ORDER&nbsp;BY</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">name</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>AS</strong>C&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'128'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">type</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'dir'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;count</span><span style="color: #007700"><strong>(</strong></span><span style="color: #0000BB">id</span><span style="color: #007700"><strong>)</strong><br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>IN</strong></span><span style="color: #007700"><strong>(</strong></span><span style="color: #DD0000">'128'</span><span style="color: #007700"><strong>)</strong><br /><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">type</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'file'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">username</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">project_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">full_name</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">user_type</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">company_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">department_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">email_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`.*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>LEFT&nbsp;JO<strong>IN</strong></strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">users</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>ON</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`.`</span><span style="color: #DD0000">created_by</span><span style="color: #007700">`&nbsp;=&nbsp;`</span><span style="color: #DD0000">users</span><span style="color: #007700">`.`</span><span style="color: #DD0000">id</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'134'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">type</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'file'<br /></span><span style="color: #0000BB"><strong>ORDER&nbsp;BY</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">name</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>AS</strong>C&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'134'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">type</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'dir'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;count</span><span style="color: #007700"><strong>(</strong></span><span style="color: #0000BB">id</span><span style="color: #007700"><strong>)</strong><br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>IN</strong></span><span style="color: #007700"><strong>(</strong></span><span style="color: #DD0000">'134'</span><span style="color: #007700"><strong>)</strong><br /><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">type</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'file'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">username</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">project_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">full_name</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">user_type</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">company_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">department_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">email_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`.*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>LEFT&nbsp;JO<strong>IN</strong></strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">users</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>ON</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`.`</span><span style="color: #DD0000">created_by</span><span style="color: #007700">`&nbsp;=&nbsp;`</span><span style="color: #DD0000">users</span><span style="color: #007700">`.`</span><span style="color: #DD0000">id</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'132'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">type</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'file'<br /></span><span style="color: #0000BB"><strong>ORDER&nbsp;BY</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">name</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>AS</strong>C&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'132'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">type</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'dir'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;count</span><span style="color: #007700"><strong>(</strong></span><span style="color: #0000BB">id</span><span style="color: #007700"><strong>)</strong><br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>IN</strong></span><span style="color: #007700"><strong>(</strong></span><span style="color: #DD0000">'132'</span><span style="color: #007700"><strong>)</strong><br /><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">type</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'file'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">username</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">project_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">full_name</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">user_type</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">company_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">department_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">email_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`.*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>LEFT&nbsp;JO<strong>IN</strong></strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">users</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>ON</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`.`</span><span style="color: #DD0000">created_by</span><span style="color: #007700">`&nbsp;=&nbsp;`</span><span style="color: #DD0000">users</span><span style="color: #007700">`.`</span><span style="color: #DD0000">id</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'133'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">type</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'file'<br /></span><span style="color: #0000BB"><strong>ORDER&nbsp;BY</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">name</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>AS</strong>C&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'133'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">type</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'dir'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;count</span><span style="color: #007700"><strong>(</strong></span><span style="color: #0000BB">id</span><span style="color: #007700"><strong>)</strong><br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>IN</strong></span><span style="color: #007700"><strong>(</strong></span><span style="color: #DD0000">'133'</span><span style="color: #007700"><strong>)</strong><br /><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">type</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'file'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">username</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">project_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">full_name</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">user_type</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">company_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">department_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">email_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`.*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>LEFT&nbsp;JO<strong>IN</strong></strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">users</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>ON</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`.`</span><span style="color: #DD0000">created_by</span><span style="color: #007700">`&nbsp;=&nbsp;`</span><span style="color: #DD0000">users</span><span style="color: #007700">`.`</span><span style="color: #DD0000">id</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'154'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">type</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'file'<br /></span><span style="color: #0000BB"><strong>ORDER&nbsp;BY</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">name</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>AS</strong>C&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'154'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">type</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'dir'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;count</span><span style="color: #007700"><strong>(</strong></span><span style="color: #0000BB">id</span><span style="color: #007700"><strong>)</strong><br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>IN</strong></span><span style="color: #007700"><strong>(</strong></span><span style="color: #DD0000">'154'</span><span style="color: #007700"><strong>)</strong><br /><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">type</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'file'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">username</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">project_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">full_name</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">user_type</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">company_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">department_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">email_id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`.*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>LEFT&nbsp;JO<strong>IN</strong></strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">users</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>ON</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`.`</span><span style="color: #DD0000">created_by</span><span style="color: #007700">`&nbsp;=&nbsp;`</span><span style="color: #DD0000">users</span><span style="color: #007700">`.`</span><span style="color: #DD0000">id</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'144'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">type</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'file'<br /></span><span style="color: #0000BB"><strong>ORDER&nbsp;BY</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">name</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>AS</strong>C&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'144'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">type</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'dir'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;count</span><span style="color: #007700"><strong>(</strong></span><span style="color: #0000BB">id</span><span style="color: #007700"><strong>)</strong><br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">directory</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">parent_id</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>IN</strong></span><span style="color: #007700"><strong>(</strong></span><span style="color: #DD0000">'144'</span><span style="color: #007700"><strong>)</strong><br /><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">type</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'file'&nbsp;</span>
</span>
</code></td></tr>
</table>
</fieldset>

<fieldset id="ci_profiler_http_headers" style="border:1px solid #000;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#000;">&nbsp;&nbsp;HTTP HEADERS&nbsp;&nbsp;(<span style="cursor: pointer;" onclick="var s=document.getElementById('ci_profiler_httpheaders_table').style;s.display=s.display=='none'?'':'none';this.innerHTML=this.innerHTML=='Show'?'Hide':'Show';">Show</span>)</legend>


<table style="width:100%;display:none;" id="ci_profiler_httpheaders_table">
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">HTTP_ACCEPT&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">HTTP_USER_AGENT&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">HTTP_CONNECTION&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">keep-alive</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">SERVER_PORT&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">80</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">SERVER_NAME&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">[::1]</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">REMOTE_ADDR&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">::1</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">SERVER_SOFTWARE&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">Apache/2.4.33 (Win32) OpenSSL/1.0.2n PHP/5.6.35</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">HTTP_ACCEPT_LANGUAGE&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">en-US,en;q=0.9</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">SCRIPT_NAME&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">/ci_da_project/index.php</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">REQUEST_METHOD&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">GET</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;"> HTTP_HOST&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">REMOTE_HOST&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">CONTENT_TYPE&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">SERVER_PROTOCOL&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">HTTP/1.1</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">QUERY_STRING&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">HTTP_ACCEPT_ENCODING&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">gzip, deflate, br</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">HTTP_X_FORWARDED_FOR&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">HTTP_DNT&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;"></td></tr>
</table>
</fieldset><fieldset id="ci_profiler_csession" style="border:1px solid #000;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;"><legend style="color:#000;">&nbsp;&nbsp;SESSION DATA&nbsp;&nbsp;(<span style="cursor: pointer;" onclick="var s=document.getElementById('ci_profiler_session_data').style;s.display=s.display=='none'?'':'none';this.innerHTML=this.innerHTML=='Show'?'Hide':'Show';">Show</span>)</legend><table style="width:100%;display:none;" id="ci_profiler_session_data"><tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">__ci_last_regenerate&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1529909709</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">username&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">admin</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">user_id&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">6</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">user_type&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">admin</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">project_id&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">4</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">parent_id&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">0</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">parent_id2&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">0</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">comment_file_link&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">http://[::1]/ci_da_project/da_projects/access_folder/144</td></tr>
</table>
</fieldset>

<fieldset id="ci_profiler_config" style="border:1px solid #000;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#000;">&nbsp;&nbsp;CONFIG VARIABLES&nbsp;&nbsp;(<span style="cursor: pointer;" onclick="var s=document.getElementById('ci_profiler_config_table').style;s.display=s.display=='none'?'':'none';this.innerHTML=this.innerHTML=='Show'?'Hide':'Show';">Show</span>)</legend>


<table style="width:100%;display:none;" id="ci_profiler_config_table">
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">base_url&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">http://[::1]/ci_da_project/</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">index_page&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">index.php</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">uri_protocol&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">REQUEST_URI</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">url_suffix&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">language&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">english</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">charset&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">UTF-8</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">enable_hooks&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">subclass_prefix&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">MY_</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">composer_autoload&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">permitted_uri_chars&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">a-z 0-9~%.:_\-</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">enable_query_strings&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">controller_trigger&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">c</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">function_trigger&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">m</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">directory_trigger&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">d</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">allow_get_array&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">log_threshold&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">0</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">log_path&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">log_file_extension&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">log_file_permissions&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">420</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">log_date_format&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">Y-m-d H:i:s</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">error_views_path&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">cache_path&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">cache_query_string&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">encryption_key&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">ipageindiaencryption</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_driver&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">files</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_cookie_name&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">ci_session</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_expiration&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">7200</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_save_path&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_match_ip&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_time_to_update&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">300</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_regenerate_destroy&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">cookie_prefix&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">cookie_domain&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">cookie_path&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">/</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">cookie_secure&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">cookie_httponly&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">standardize_newlines&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">global_xss_filtering&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">csrf_protection&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">csrf_token_name&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">csrf_test_name</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">csrf_cookie_name&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">csrf_cookie_name</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">csrf_expire&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">7200</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">csrf_regenerate&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">csrf_exclude_uris&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"><pre>Array
(
)
</pre></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">compress_output&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">time_reference&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">local</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">rewrite_short_tags&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">proxy_ips&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
</table>
</fieldset></div></body></html>