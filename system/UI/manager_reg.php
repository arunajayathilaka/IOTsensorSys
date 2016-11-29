<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <title>THS System-Manager Registration</title>

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/js/modernizr.min.js"></script>
        
    </head>


    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">

             <!-- Top Bar Start -->
          <div class="topbar">
            <?php include 'template/headnav.php';?>
          </div> 


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
              <?php include 'template/Sidebar.php';?>
            </div>
            <!-- Left Sidebar End --> 


            


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row" style="padding-bottom:15px;">
                            <div class="col-sm-12">
                                <h4 class="page-title">Manager Registration</h4>
                                
                            </div>
                        </div>
                        
            <div class="row">
            <form action="#" data-parsley-validate novalidate>
                <div class="col-lg-6">
                  <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Basic Information</b></h4>
                    <p class="text-muted font-13 m-b-30">
                                        Enter basic employee deatils here. All details are required!
                                    </p>
                                              
                    
                      <div class="form-group">
                        <label for="userName">Employee First Name*</label>
                        <input type="text" name="firstName" parsley-trigger="change" required placeholder="Enter user name" class="form-control" id="firstName">
                      </div>
                      <div class="form-group">
                        <label for="userName">Employee Last Name*</label>
                        <input type="text" name="lastName" parsley-trigger="change" required placeholder="Enter user name" class="form-control" id="lastName">
                      </div>
                      <div class="form-group">
                        <label for="userName">Employee Number*</label>
                        <input type="text" name="empNumber" parsley-trigger="change" required placeholder="Enter user name" class="form-control" id="empNUmber">
                      </div>
                      <div class="form-group">
                        <label for="userName">Employee Contact NUmber*</label>
                        <input type="text" name="contactNumber" parsley-trigger="change" required placeholder="Enter user name" class="form-control" id="contactNumber">
                      </div>
                      <div class="form-group">
                        <label for="emailAddress">Email address*</label>
                        <input type="email" name="email" parsley-trigger="change" required placeholder="Enter email" class="form-control" id="emailAddress">
                      </div>
                  </div>
                </div>
                
                <div class="col-lg-6" style="height:">
                  <div class="card-box" style="padding-bottom:50px;">
                    <h4 class="m-t-0 header-title"><b>Assign Password</b></h4>
                    <p class="text-muted font-13 m-b-30">
                                        Enter a password for the employee to access the system.
                                    </p>
                                    
                    
                      <div class="form-group">
                        <label for="pass1">Password*</label>
                        <input id="pass1" type="password" placeholder="Password" required class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="passWord2">Confirm Password *</label>
                        <input data-parsley-equalto="#pass1" type="password" required placeholder="Password" class="form-control" id="passWord2">
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-7 col-sm-8" style="">
                          <button type="submit" class="btn btn-primary waves-effect waves-light" style="">
                            Registrer
                          </button>
                          <button type="reset" class="btn btn-default waves-effect waves-light m-l-5" style="">
                            Cancel
                          </button>
                        </div>
                      </div>
                    
                  </div>
                </div>
              </form>
              <!-- Form end-->
            </div>
          </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    2015 © Ubold.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            

        </div>
        <!-- END wrapper -->
    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>


        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script src="assets/plugins/flot-chart/jquery.flot.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.time.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.resize.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.pie.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.selection.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.stack.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.orderBars.min.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.crosshair.js"></script>
        <script src="assets/pages/jquery.flot.init.js"></script>
	
	</body>
</html>