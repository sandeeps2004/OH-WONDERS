<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<link rel="icon" href="assets/images/favicon.ico">

	<title>URO | Dashboard</title>

	<link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/neon-core.css">
	<link rel="stylesheet" href="assets/css/neon-theme.css">
	<link rel="stylesheet" href="assets/css/neon-forms.css">
	<link rel="stylesheet" href="assets/css/custom.css">

	<script src="assets/js/jquery-1.11.3.min.js"></script>

	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body class="page-body  page-fade" data-url="http://neon.dev">
<div class="main-content">

                <?php
                    include "connection.php";
                ?>
				
                <div class="row">
                
                    <!-- Profile Info and Notifications -->
                    <div class="col-md-6 col-sm-8 clearfix">
                
                        <ul class="user-info pull-left pull-none-xsm">
                
                            <!-- Profile Info -->
                            <li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->
                        
                                <a class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="assets/images/usertemp.jpg" alt="" class="img-circle" width="44" style="border-color: grey;" />
                                    <font style="font-weight: bolder ; font-size: 15px; padding-top: 20px;">ADMIN</font>
                                </a>
                
                               
                            </li>
                
                        </ul>
                        
                        <ul class="user-info pull-left pull-right-xs pull-none-xsm">
                
                            
                                </ul>
                
                            </li>
                
                        </ul>
                
                    </div>
                
                
                    <!-- Raw Links -->
                    <div class="col-md-6 col-sm-4 clearfix hidden-xs">
                
                        <ul class="list-inline links-list pull-right">
                
                            <!-- Language Selector -->
                            <li class="dropdown language-selector">
                
                                Language: &nbsp;
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
                                    <img src="assets/images/flags/india.jpg" width="20" height="20" style="border-radius:50%;"/>
                                </a>
                
                                <ul class="dropdown-menu pull-right">
                                   
                                    <li class="active">
                                        <a href="#">
                                            <img src="assets/images/flags/india.jpg" width="16" height="16" style="border-radius:50%;"/>
                                            <span>English(IN)</span>
                                        </a>
                                    </li>
                                    
                                </ul>
                
                            </li>
                
                           
                
                            <li class="sep"></li>
                
                            <li>
                                <a href="logout.php">
                                    Log Out <i class="entypo-logout right"></i>
                                </a>
                            </li>
                        </ul>
                
                    </div>
                
                </div>
                
                <hr />
            </body>
            </html>