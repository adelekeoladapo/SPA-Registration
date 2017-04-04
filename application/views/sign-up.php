
<!DOCTYPE html>
<html>
    
<head>
        
        <!-- Title -->
        <title>RubyScales | Sign up</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
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
    <body class="page-register">
        <main class="page-content">
            <div class="page-inner">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-3 center">
                            <div class="login-box">
                                <a href="index.html" class="logo-name text-lg text-center">RubyScales</a>
                                <p class="text-center m-t-md">Create a Modern's account</p>
                                <? echo form_open('user/registerUser', array('class' => 'm-t-md', 'method' => 'POST', 'novalidate' => true)); ?> 

                                    <div class="form-group">
                                        <input name="fullname" value="<?php echo set_value('fullname'); ?>" type="text" class="form-control" placeholder="Full Name" required>
                                        <?php echo form_error('fullname'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="phone" value="<?php echo set_value('phone'); ?>" class="form-control" placeholder="Phone No" required>
                                        <?php echo form_error('phone'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" value="<?php echo set_value('email'); ?>" class="form-control" placeholder="Email Address" required>
                                        <?php echo form_error('email'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" value="<?php echo set_value('password'); ?>" class="form-control" placeholder="Password" required>
                                        <?php echo form_error('password'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="ref-email" value="<?php echo set_value('ref-email'); ?>" class="form-control" placeholder="Referral's Email (Optional)" required>
                                    </div>
                                    <label>
                                        <input name="terms" type="checkbox"> Agree the terms and policy
                                        <br><?php echo form_error('terms'); ?>
                                    </label>
                                    <button type="submit" class="btn btn-success btn-block m-t-xs">Submit</button>
                                    <p class="text-center m-t-xs text-sm">Already have an account?</p>
                                    <a href="<? echo base_url()."sign-in" ?>" class="btn btn-default btn-block m-t-xs">Login</a>
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