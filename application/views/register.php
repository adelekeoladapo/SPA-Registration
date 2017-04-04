
<!DOCTYPE html>
<html>
    
<head>
        
        <!-- Title -->
        <title>Solution</title>
        
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
        
        <link href="<? echo base_url();  ?>assets/theme/plugins/toastr/toastr.min.css" rel="stylesheet">
        
        <script src="<? echo base_url(); ?>assets/theme/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <script src="<? echo base_url(); ?>assets/theme/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>
        
        <!-- Base url -->
        <script>
            var base_url = "<? echo base_url(); ?>";
        </script>
        <!-- End Base url -->
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body class="page-lock-scree">
        <main class="page-content">
            <div class="page-inner hero">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-5">
                            <div class="hero-captions">
                                <h2 class="hero-title">jQuery driven registration page. </h2>
                                <p class="hero-text">Adeleke Oladapo | adelekeoladapo@gmail.com | +2348020803585  </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="login-box">
                                <div class="user-box m-t-lg row">
                                    <div class="col-md-12">
                                        <!-- progressbar -->
                                        <ul id="progressbar">
                                                <li id="li-form-basic">Basic Details</li>
                                                <li id="li-form-contact">Contact Details</li>
                                                <li id="li-form-others">Other Info</li>
                                        </ul>
                                        <!--/ progressbar -->
                                        <form class="form text-center form-div-container" id="form-add-depositor">
                                            <div class="form-div active" id="form-basic">
                                                <p class="lead no-m text-center">Basic Details</p> <p></p>
                                        
                                                <div class="form-group">
                                                    <input type="text" name="firstname" class="form-control" placeholder="Firstname (required)" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="lastname"  class="form-control" placeholder="Lastname (required)" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="othernames" class="form-control" placeholder="Other Names">
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" name="email" class="form-control" placeholder="Email Address (required)" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="number" name="phone" class="form-control" placeholder="Phone No. (required)" required>
                                                </div>
                                                <div class="form-group form-btns">
                                                    <button type="button" class="btn btn-default">Cancel</button>
                                                    <button type="button" onclick="move_next('form-basic', 'form-contact')" class="btn btn-success">Next</button>
                                                </div>
                                            </div>
                                            <div class="form-div" id="form-contact">
                                                <p class="lead no-m text-center">Contact Details</p> <p></p>
                                        
                                                <div class="form-group">
                                                    <select class="form-control" required name="country-id">
                                                        <option value="">--select country--</option>
                                                        <option value="1">Nigeria</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-control" name="state-id" required>
                                                        <option value="">--select state--</option>
                                                        <option value="1">Ondo</option>
                                                        <option value="1">Osun</option>
                                                        <option value="1">Lagos</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="city" class="form-control" placeholder="City" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="address" class="form-control" placeholder="Address" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="number" name="post-code" class="form-control" placeholder="Post Code" required>
                                                </div>
                                                <div class="form-group form-btns">
                                                    <button type="button" onclick="move_previous('form-contact','form-basic')" class="btn btn-default">Previous</button>
                                                    <button type="button" onclick="move_next('form-contact', 'form-others')" class="btn btn-success">Next</button>
                                                </div>
                                            </div>
                                            <div class="form-div" id="form-others">
                                                <p class="lead no-m text-center">Other Information</p> <p></p>
                                        
                                                <div class="form-group">
                                                    <div class="img-placeholder" id="img-placeholder">
                                                        <img src="assets/images/system-images/placeholder.png">
                                                    </div>
                                                    <div class="select-btn-container">
                                                        <input type="file" class="custom-file-input" accept="image/*" id="photo" name="photo">
                                                        <span class="select-image-btn" onclick="$('.custom-file-input').click();">Select Image</span>
                                                        <!--<span class="photo-spec">Accepted formats: .jpg, .gif and .jpeg</span>-->
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-control" name="gender" required>
                                                        <option value="">--select gender--</option>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>
                                                </div>
                                                <div class="form-group" name="dob">
                                                    <input type="date" class="form-control" name="dob" placeholder="Date of Birth" required>
                                                </div>
                                                <div class="form-group form-btns">
                                                    <button type="button" onclick="move_previous('form-others','form-contact')" class="btn btn-default">Previous</button>
                                                    <button type="button" class="btn btn-success" onclick="registerDepositor()">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
        
        
        <!-- loading overlay -->
        <div class="transparent-overlay" id="loading-overlay">
            <div class="loading-img">
                <img src="<? echo base_url(); ?>assets/images/system-images/loading.gif">
            </div>
        </div>
        <!--/ loading overlay -->
	

        <!-- Javascripts -->
        <script src="<? echo base_url(); ?>assets/theme/plugins/jquery/jquery-2.1.4.min.js"></script>
        <script src="<? echo base_url(); ?>assets/theme/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="<? echo base_url(); ?>assets/theme/plugins/pace-master/pace.min.js"></script>
        <script src="<? echo base_url(); ?>assets/theme/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="<? echo base_url(); ?>assets/theme/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="<? echo base_url(); ?>assets/lib/smoke/js/smoke.min.js"></script>
        <script src="<? echo base_url(); ?>assets/lib/imagepreview/src/imagepreview.js"></script>
        <script src="<? echo base_url(); ?>assets/theme/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<? echo base_url(); ?>assets/theme/plugins/switchery/switchery.min.js"></script>
        <script src="<? echo base_url(); ?>assets/theme/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="<? echo base_url(); ?>assets/theme/plugins/offcanvasmenueffects/js/classie.js"></script>
        <script src="<? echo base_url(); ?>assets/theme/plugins/waves/waves.min.js"></script>
        <script src="<? echo base_url(); ?>assets/theme/js/modern.min.js"></script>
        <script src="<? echo base_url();  ?>assets/theme/plugins/toastr/toastr.min.js"></script>
        <script src="<? echo base_url(); ?>assets/theme/js/ui.js"></script>
        
        
        <script>
            $(function(){
                $('#img-placeholder').imagepreview({
                    input: '[name="photo"]',
                    reset: '',
                    preview: '#img-placeholder'
                });
            });
        </script>
        
    </body>

</html>