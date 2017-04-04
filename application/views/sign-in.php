
<!DOCTYPE html>
<html>
    
<head>
        
        <!-- Title -->
        <title>Solution | Sign in</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        
        <!-- Styles -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link href="<? echo base_url(); ?>assets/theme/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="<? echo base_url(); ?>assets/theme/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
        <link href="<? echo base_url(); ?>assets/theme/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<? echo base_url(); ?>assets/theme/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="<? echo base_url(); ?>assets/theme/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>	
        <link href="<? echo base_url(); ?>assets/theme/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>	
        <link href="<? echo base_url(); ?>assets/theme/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>	
        <link href="<? echo base_url(); ?>assets/theme/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="<? echo base_url(); ?>assets/theme/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>	
        
        <!-- Theme Styles -->
        <link href="<? echo base_url(); ?>assets/theme/css/modern.min.css" rel="stylesheet" type="text/css"/>
        <link href="<? echo base_url(); ?>assets/theme/css/themes/green.css" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="<? echo base_url(); ?>assets/theme/css/custom.css" rel="stylesheet" type="text/css"/>
        
        <script src="<? echo base_url(); ?>assets/theme/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <script src="<? echo base_url(); ?>assets/theme/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body class="page-login">
        <main class="page-content">
            <div class="page-inner">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-3 center">
                            <div class="login-box">
                                <a href="<? echo base_url(); ?>" class="logo-name text-lg text-center">Solution</a>
                                <?
                                    $d = $this->input->get('ref_contr');
                                    if($d){
                                        echo '<div class="alert alert-info alert-dismissible" role="alert" style="margin-top: 15px">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                Your account was <strong>successfully created</strong>. Kindly check your email for account verification.
                                            </div>';
                                    }
                                    
                                    if($error){
                                        echo '<div class="alert alert-danger alert-dismissible" role="alert" style="margin-top: 15px">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                '.$error.'
                                            </div>';
                                    }
                                ?>
                                <p class="text-center m-t-md">Please login into your account.</p>
                                <? echo form_open('user/doLogin', array('class' => 'm-t-md', 'method' => 'POST', 'novalidate' => true)); ?> 
                                    <div class="form-group">
                                        <input type="email" name="email" value="<?php echo set_value('email'); ?>" class="form-control" placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-block">Login</button>
                                </form>
                                <? include 'copyright.php'; ?>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
	

        <!-- Javascripts -->
        <script src="<? echo base_url(); ?>assets/theme/plugins/jquery/jquery-2.1.4.min.js"></script>
        <script src="<? echo base_url(); ?>assets/theme/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="<? echo base_url(); ?>assets/theme/plugins/pace-master/pace.min.js"></script>
        <script src="<? echo base_url(); ?>assets/theme/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="<? echo base_url(); ?>assets/theme/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="<? echo base_url(); ?>assets/theme/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<? echo base_url(); ?>assets/theme/plugins/switchery/switchery.min.js"></script>
        <script src="<? echo base_url(); ?>assets/theme/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="<? echo base_url(); ?>assets/theme/plugins/offcanvasmenueffects/js/classie.js"></script>
        <script src="<? echo base_url(); ?>assets/theme/plugins/waves/waves.min.js"></script>
        <script src="<? echo base_url(); ?>assets/theme/js/modern.min.js"></script>
        
    </body>

</html>