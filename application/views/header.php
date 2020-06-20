<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('application/assests/lib/bootstrap/css/bootstrap.css');?>">
    
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('application/assests/stylesheets/theme.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('application/assests/lib/font-awesome/css/font-awesome.css');?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <!-- <script src="<?php echo base_url('application/assests/lib/jquery-1.7.2.min.js');?>" type="text/javascript"></script> -->
    
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <!-- Demo page code -->
  <script src="<?php echo BASE_URL();?>application/assests/ckeditor/ckeditor.js"></script>


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
        .popover-on-modal {
            display: none;
            position: absolute;
            z-index: 99999998;
            background-color: #fff;
            width: 58%;
            margin-left: -10%;
            height: 20vh;
            padding: 20px;
            cursor: all-scroll;
            border: 1px solid #eaeaea;
        }

        .table tr th, .table tr td 
        {
          border:1px solid #cccccc26;
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
                    
                    <li><a href="#" class="hidden-phone visible-tablet visible-desktop" role="button" style="text-transform: uppercase;"><?php echo (isset($this->session->project_id)&&$this->session->project_id!='')?$this->Common->getDataSingle('projects','project_name',array('id'=>$this->session->project_id)):'';?></a></li>

                    <li><a href="#" class="hidden-phone visible-tablet visible-desktop" role="button" ><?php echo ucfirst(isset($this->session->user_id)&&$this->session->user_id!='')?$this->Common->getDataSingle('users','username',array('id'=>$this->session->user_id)):'';?></a></li>
                    <li id="fat-menu" class="dropdown">
                        <a href="<?php echo base_url('da_projects/logout');?>"  >
                            <i class="icon-user"></i>Logout  
                        </a>

                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="<?php echo base_url('da_projects/change_password');?>">Change Password</a></li>
                            <li class="divider"></li>
                            <li><a tabindex="-1" class="visible-phone" href="#">Settings</a></li>
                            <li class="divider visible-phone"></li>
                            <li><a tabindex="-1" href="<?php echo base_url('da_projects/logout');?>">Logout</a></li>
                        </ul>
                    </li>
                    
                </ul>
                <a class="brand" href="index.php"><span class="first">Admin</span> <span class="second">Panel</span></a>
        </div>
    </div>
    


    
    
