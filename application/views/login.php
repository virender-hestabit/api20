<!DOCTYPE html>
<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url('application/assests/bootstrap/css/custom.css');?>" rel="stylesheet" type="text/css" />
        
        <script src="fileinput-master/js/plugins/sortable.js" type="text/javascript"></script>
        <script src="fileinput-master/js/fileinput.js" type="text/javascript"></script>
        <script src="fileinput-master/js/fileinput_locale_fr.js" type="text/javascript"></script>
        <script src="fileinput-master/js/fileinput_locale_es.js" type="text/javascript"></script>
        <script src="fileinput-master/themes/explorer/theme.js" type="text/javascript"></script>
        
        <!-- jQuery library -->
        <script src="../bootstrap/js/jquery-3.1.1.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="js/jquery.form.js" type="text/javascript"></script>
        <script src="js/functions.js" type="text/javascript"></script>
        <script src="js/populate.js" type="text/javascript"></script>
        <script src="js/validations.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <title>Admin Panel Login</title>
        <style>
        /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
.row.content {height: 1500px}

/* Set gray background color and 100% height */
.sidenav {
background-color: #f1f1f1;
height: 100%;
}

/* Set black background color, white text and some padding */
footer {
background-color: #555;
color: white;
padding: 15px;
}

/* On small screens, set height to 'auto' for sidenav and grid */
@media screen and (max-width: 767px) {
.sidenav {
height: auto;
padding: 15px;
}
.row.content {height: auto;}
}
div#login-page-uid {
    min-height: 81vh;
}
.container1 {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 16px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default radio button */
.container1 input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container1:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container1 input:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the indicator (dot/circle) when checked */
.container1 input:checked ~ .checkmark:after {
    display: block;
}

/* Style the indicator (dot/circle) */
.container1 .checkmark:after {
    top: 9px;
    left: 9px;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: white;
}
        </style>
    </head>
    <body >
       
        <div id="wrap-all">
            <div id="header-main">
                <nav >
                    <div >
                        
                        <a class = "" href = "?page=index"><img src="<?php echo base_url('application/assests/images/dummy.png');?>" alt="" class="logo"  /></a>
                    </div>
                    
                </nav>
            </div>
            <div class="container " id='login-page-uid'>
                <div id="loginbox" style="margin-top: 70px;"  class=" mti-container mainbox col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1">
                    <div class="panel pt-page pt-page-1" >
                        <div class="heading-signin">
                            <div style="text-align: center;"><h2><span>Login</span></h2></div>
                            
                        </div>
                        <div style="padding-top:30px" class="panel-body" >
                    <?php if(isset($msg)){
                                $display = "block" ;
                            } else{
                                $display = "none" ;
                            } ?>
                            <div style="display:<?php echo $display?>" id="login-alert" class="alert alert-danger col-sm-12 text-center"><?php echo $msg?></div>
                          

                                <?php 
                                     $form=array('id'=>'loginform','class'=>'form-horizontal','role'=>'form');
                                   echo form_open('admin/login', $form);?>
                                   
                                  <div class="col-md-12">

                                <div><label for="username">UserName</label></div>
                                <div style="margin-bottom: 25px" class="input-group">
                                    
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input  id="username" type="text" class="form-control" name="username" value="" placeholder="Enter Username">
                                </div>
                                <div><label for="password">Password</label></div>
                                <div style="margin-bottom: 25px" class="input-group">
                                    
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Enter password">
                                </div>

                                
                                <div style="margin-top:10px" class="form-group text-center">
                                    <!-- Button -->
                                    <div class="col-sm-12 controls">
                                        <input type="submit" id="btn-login"  class="btn btn-primary col-md-12 btn-lg" value="Login" name="login" />
                                        <!--<a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>-->
                                    </div>
                                    
                                </div>
                            </div>
                           <?php echo form_close();?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>