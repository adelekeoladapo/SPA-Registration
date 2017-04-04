<!DOCTYPE html>
<html>
    
<head>
        
        <!-- Title -->
        <title>Solution</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        
        <!-- Styles -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link href="<? echo base_url();  ?>assets/theme/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="<? echo base_url();  ?>assets/theme/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
        <link href="<? echo base_url();  ?>assets/theme/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<? echo base_url();  ?>assets/theme/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="<? echo base_url();  ?>assets/theme/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>	
        <link href="<? echo base_url();  ?>assets/theme/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>	
        <link href="<? echo base_url();  ?>assets/theme/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>	
        <link href="<? echo base_url();  ?>assets/theme/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="<? echo base_url();  ?>assets/theme/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>	
        <link href="<? echo base_url();  ?>assets/theme/plugins/toastr/toastr.min.css" rel="stylesheet">
        <link href="<? echo base_url();  ?>assets/theme/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/>
        
        <link type="text/css" rel="stylesheet" media="all" href="<? echo base_url(); ?>assets/lib/datatables/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css">
        <link type="text/css" rel="stylesheet" media="all" href="<? echo base_url(); ?>assets/lib/datatables/datatables-responsive/css/dataTables.responsive.css">
        
        
        <!-- Theme Styles -->
        <link href="<? echo base_url();  ?>assets/theme/css/modern.min.css" rel="stylesheet" type="text/css"/>
        <link href="<? echo base_url();  ?>assets/theme/css/themes/green.css" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="<? echo base_url();  ?>assets/theme/css/custom.css" rel="stylesheet" type="text/css"/>
        
        <script src="<? echo base_url();  ?>assets/theme/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <script src="<? echo base_url();  ?>assets/theme/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        
        
        
        <!-- Base url -->
        <script>
            var base_url = "<? echo base_url(); ?>";
            var user_id = "<? echo $user_id; ?>";
        </script>
        <!-- End Base url -->

        <!-- JS Links -->
        <!--<script src="<? echo base_url(); ?>assets/lib/jquery/jquery-2.2.1.min.js"></script> -->


        
        
        
    </head>
    <body class="page-header-fixed  ng-scope pace-done page-sidebar-fixed" ng-app="mainApp" ng-controller="mainCtrl">
        <div class="overlay"></div>
        
        <form class="search-form" action="#" method="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control search-input" placeholder="Search...">
                <span class="input-group-btn">
                    <button class="btn btn-default close-search waves-effect waves-button waves-classic" type="button"><i class="fa fa-times"></i></button>
                </span>
            </div><!-- Input Group -->
        </form><!-- Search Form -->
        <main class="page-content content-wrap">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="sidebar-pusher">
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <div class="logo-box">
                        <a href="#" class="logo-text"><span>Solution</span></a>
                    </div><!-- Logo Box -->
                    <div class="search-button">
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
                    </div>
                    <div class="topmenu-outer">
                        <div class="top-menu">
                            <ul class="nav navbar-nav navbar-left">
                                <li>		
                                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic sidebar-toggle"><i class="fa fa-bars"></i></a>
                                </li>
                                <li>		
                                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic toggle-fullscreen"><i class="fa fa-expand"></i></a>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                        <span class="user-name">{{ app_data.user.fullname }}<i class="fa fa-angle-down"></i></span>
                                        <img ng-if="app_data.user.photo" class="img-circle avatar" ng-src="assets/images/uploads/{{ app_data.user.photo }}" width="40" height="40" alt="">
                                        <img ng-if="!app_data.user.photo" class="img-circle avatar" ng-src="assets/images/system-images/avatar_1.png" width="40" height="40" alt="">
                                    </a>
                                    <ul class="dropdown-menu dropdown-list" role="menu">
                                        <li role="presentation"><a ui-sref="manage-profile"><i class="fa fa-user"></i>Profile</a></li>
                                        <li role="presentation" class="divider"></li>
                                        <li role="presentation"><a href="<? echo base_url().'user/logout' ?>"><i class="fa fa-sign-out m-r-xs"></i>Log out</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="<? echo base_url().'user/logout' ?>" class="log-out waves-effect waves-button waves-classic">
                                        <span><i class="fa fa-sign-out m-r-xs"></i>Log out</span>
                                    </a>
                                </li>
                            </ul><!-- Nav -->
                        </div><!-- Top Menu -->
                    </div>
                </div>
            </div><!-- Navbar -->
            <div class="page-sidebar sidebar">
                <div class="page-sidebar-inner slimscroll">
                    <div class="sidebar-header">
                        <div class="sidebar-profile">
                            <a href="javascript:void(0);" id="profile-menu-link">
                                <div class="sidebar-profile-image">
                                    <img ng-if="app_data.user.photo" class="img-circle img-responsive" ng-src="assets/images/uploads/{{ app_data.user.photo }}">
                                    <img ng-if="!app_data.user.photo" class="img-circle img-responsive" ng-src="assets/images/system-images/avatar_1.png">
                                </div>
                                <div class="sidebar-profile-details">
                                    <span>{{ app_data.user.fullname }}<br><small>Administrator</small></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <ul class="menu accordion-menu">
                        <li class=""><a ui-sref="dashboard" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-th-large"></span><p>Dashboard</p></a></li>
                        <li ng-if="app_data.user.level == 0" class=""><a ui-sref="all-users" class="waves-effect waves-button"><span class="menu-icon icon-users"></span><p>Depositors</p></a></li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-user"></span><p>My Profile</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a ui-sref="manage-profile">Manage Profile</a></li>
                                <li><a ui-sref="change-password">Change Password</a></li>
                            </ul>
                        </li>
                    </ul>
                    
                </div><!-- Page Sidebar Inner -->
            </div><!-- Page Sidebar -->
            <div class="page-inner">
                
                <!-- Page Content -->
                <div ui-view>
                    
                    
                    
                </div>
                <!--/ Page Content -->
                
                <div class="page-footer">
                    <p class="no-s">2017 &copy; Powered by <strong>&LT;/&GT;</strong>CodeLab.</p>
                </div>
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
        <nav class="cd-nav-container" id="cd-nav">
            <header>
                <h3>Navigation</h3>
                <a href="#0" class="cd-close-nav">Close</a>
            </header>
            <ul class="cd-nav list-unstyled">
                <li class="cd-selected" data-menu="index">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-home"></i>
                        </span>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li data-menu="profile">
                    <a href="javsacript:void(0);"  ui-sref="profile">
                        <span>
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                        <p>Profile</p>
                    </a>
                </li>
                <li data-menu="inbox">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-envelope"></i>
                        </span>
                        <p>Mailbox</p>
                    </a>
                </li>
                <li data-menu="#">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-tasks"></i>
                        </span>
                        <p>Tasks</p>
                    </a>
                </li>
                <li data-menu="#">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-cog"></i>
                        </span>
                        <p>Settings</p>
                    </a>
                </li>
                <li data-menu="calendar">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-calendar"></i>
                        </span>
                        <p>Calendar</p>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="cd-overlay"></div>
        
        
        
        <!-- loading overlay -->
        <div class="transparent-overlay" id="loading-overlay">
            <div class="loading-img">
                <img src="<? echo base_url(); ?>assets/images/system-images/loading.gif">
            </div>
        </div>
        <!--/ loading overlay -->
	

        <!-- Javascripts -->
        <script src="<? echo base_url();  ?>assets/theme/plugins/jquery/jquery-2.1.4.min.js"></script>
        <script src="<? echo base_url();  ?>assets/theme/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="<? echo base_url();  ?>assets/theme/plugins/pace-master/pace.min.js"></script>
        <script src="<? echo base_url();  ?>assets/theme/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="<? echo base_url();  ?>assets/theme/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="<? echo base_url();  ?>assets/theme/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<? echo base_url();  ?>assets/theme/plugins/switchery/switchery.min.js"></script>
        <script src="<? echo base_url();  ?>assets/theme/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="<? echo base_url();  ?>assets/theme/plugins/offcanvasmenueffects/js/classie.js"></script>
        <script src="<? echo base_url();  ?>assets/theme/plugins/offcanvasmenueffects/js/main.js"></script>
        <script src="<? echo base_url();  ?>assets/theme/plugins/waves/waves.min.js"></script>
        <script src="<? echo base_url();  ?>assets/theme/plugins/3d-bold-navigation/js/main.js"></script>
        <script src="<? echo base_url();  ?>assets/theme/plugins/toastr/toastr.min.js"></script>
        <script src="<? echo base_url();  ?>assets/theme/js/modern.min.js"></script>
        
        
        
        
        
        
        <script type="text/javascript" src="<? echo base_url(); ?>assets/lib/datatables/media/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<? echo base_url(); ?>assets/lib/datatables/media/js/dataTables.bootstrap.min.js"></script>



        <!--<script src="<? echo base_url(); ?>assets/lib/bootstrap/js/bootstrap.min.js"></script>-->
        <script src="<? echo base_url(); ?>assets/lib/smoke/js/smoke.min.js"></script>

        <script src="<? echo base_url(); ?>assets/lib/bootstrap/bootstrap-datepicker-1.6.4-dist/js/bootstrap-datepicker.min.js"></script>

        <script src="<? echo base_url(); ?>assets/lib/imagepreview/src/imagepreview.js"></script>
        <script src="<? echo base_url(); ?>assets/lib/angular/angular.min.js"></script>
        <script src="<? echo base_url(); ?>assets/lib/angular/angular-ui-router.min.js"></script>
        <script src="<? echo base_url(); ?>assets/lib/angular/angular-cookies.js"></script>
        <script src="<? echo base_url(); ?>assets/lib/angular-datatables-master/dist/angular-datatables.js"></script>
        <script src="<? echo base_url(); ?>assets/theme/js/ui.js"></script>
        
        
        <script src="<? echo base_url(); ?>assets/themeX/assets/js/ui.js"></script>
        <script src="<? echo base_url(); ?>assets/app/controllers/Jedupa.js"></script>
        <script src="<? echo base_url(); ?>assets/app/controllers/User.js"></script>
        
        
        
    </body>

</html>