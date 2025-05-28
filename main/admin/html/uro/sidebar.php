<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="" />

    <link rel="icon" href="assets/images/favicon.ico">

    <title>Neon | Dashboard</title>

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

    <div class="page-container">
        <!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

        <div class="sidebar-menu">

            <div class="sidebar-menu-inner">

                <header class="logo-env">

                    <!-- logo -->
                    <div class="logo">
                        <a href="index.php">
                            <img src="assets/images/uro2.png" width="120" alt="" />
                        </a>
                    </div>

                    <!-- logo collapse icon -->
                    <div class="sidebar-collapse">
                        <a href="#" class="sidebar-collapse-icon">
                            <!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                            <i class="entypo-menu"></i>
                        </a>
                    </div>


                    <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
                    <div class="sidebar-mobile-menu visible-xs">
                        <a href="#" class="with-animation">
                            <!-- add class "with-animation" to support animation -->
                            <i class="entypo-menu"></i>
                        </a>
                    </div>

                </header>
                <ul id="main-menu" class="main-menu">
                    <!-- add class "multiple-expanded" to allow multiple submenus to open -->
                    <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
                    <li class="active opened active has-sub">
                        <a href="index.php">
                            <i class="entypo-gauge"></i>
                            <span class="title">Dashboard</span>
                        </a>
                        <ul class="visible">
                            <li class="active">
                                <a href="index.php">
                                    <span class="title">Dashboard</span>
                                </a>
                            </li>
                        </ul>
                    </li>


        
                    <li class="has-sub">
                        <a href="#">
                            <i class="entypo-window"></i>
                            <span class="title">Tables</span>
                        </a>
                        <ul>

                            <li>
                                <a href="ttrail.php">
                                    <span class="title">Users</span>
                                </a>
                            </li>
                            <li>
                                <a href="checkfeedback.php">
                                    <span class="title">Feedbacks</span>
                                </a>
                            </li>
                            <li>
                                <a href="orderdone.php">
                                    <span class="title">Done Orders</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="#">
                            <i class="entypo-bag"></i>
                            <span class="title">Manage</span>
                        </a>
                        <ul>

                            <li class="has-sub">
                                <a href="#">
                                    <span class="title">Home</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="managehomeal.php">
                                            <span class="title">Manage Home</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="homeman.php">
                                            <span class="title">Datatable Home</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>


                            <li class="has-sub">
                                <a href="#">
                                    <span class="title">About Team</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="manageabout.php">
                                            <span class="title">Manage Team</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="aboutman.php">
                                            <span class="title">Team DataTable</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>


                            <li class="has-sub">
                                <a href="3">
                                    <span class="title">Merchandise</span>
                                </a>
                                <ul>
                                    <li class="#">
                                        <a href="managemerch.php">
                                            <span class="title">Manage Merch</span>
                                        </a>
                                    </li>
                                    <li class="#">
                                        <a href="shopman.php">
                                            <span class="title">Merch DataTable</span>
                                        </a>
                                    </li>
                                    <li class="#">
                                        <a href="ordershere.php">
                                            <span class="title">Orders</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>


                            <li class="has-sub">
                                <a href="#">
                                    <span class="title">Discography</span>
                                </a>
                                <ul>
                                    <li class="has-sub">
                                        <a href="managealbum.php">
                                            <span class="title">Album</span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="managealbum.php">
                                                    <span class="title">Manage Album</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="albumman.php">
                                                    <span class="title">Table for Album</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>


                            <li class="has-sub">
                                <a href="#">
                                    <span class="title">Events</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="manageevents.php">
                                            <span class="title">Add Events</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="eventsman.php">
                                            <span class="title">Remove Events</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                        </ul>
                    </li>

                </ul>
                </li>

                </ul>
                </li>
                </ul>
                </li>
                </ul>
            </div>
        </div>
</body>

</html>