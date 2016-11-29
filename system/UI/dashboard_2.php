<?php 


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <title>Ubold - Admin Dashboard</title>
        
        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="assets/plugins/morris/morris.css">
        <link href="assets/plugins/sweetalert/dist/sweetalert.css" rel="stylesheet" type="text/css">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />



        <script src="assets/js/modernizr.min.js"></script>
        
    </head>


    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">

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
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="page-title">Admin Dashboard</h4>
                                <p class="text-muted page-title-alt">Welcome to THS System admin panel !</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="widget-panel widget-style-2 bg-white">
                                    <i class="md  md-place"></i>
                                    <h2 class="m-0 text-dark counter font-600">50568</h2>
                                    <div class="text-muted m-t-5">Number of</br> Locations</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="widget-panel widget-style-2 bg-white">
                                    <i class="md md-account-circle text-custom"></i>
                                    <h2 class="m-0 text-dark counter font-600">1256</h2>
                                    <div class="text-muted m-t-5">Number of </br>Location Managers</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="widget-panel widget-style-2 bg-white">
                                    <i class="md  md-whatshot text-pink"></i>
                                    <h2 class="m-0 text-dark counter font-600">18</h2>
                                    <div class="text-muted m-t-5">Number of </br>Temparature Sensors</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="widget-panel widget-style-2 bg-white">
                                    <i class="md  md-invert-colors-on text-primary"></i>
                                    <h2 class="m-0 text-dark counter font-600">8564</h2>
                                    <div class="text-muted m-t-5">Number of </br>Humidity Sensors</div>
                                </div>
                            </div>
                        </div>


                        

                        
                        <div class="row">
                          <div id="gmaps-basic" class="gmaps" style="display:none;"></div>
                        	<div class="col-lg-12">
                        		<div class="card-box">
                        			<h4 class="m-t-0 m-b-20 header-title"><b>Markers</b></h4>
                        			 <div id="gmaps-markers" class="gmaps"></div>
                        		</div> 
                          </div>
                        </div>
                        <!-- end row -->




                        
                        

                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    2016 © THS System.
                </footer>

            </div>
            
            
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->


    
        <script>
            var resizefunc = [];
        </script>

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
        <!-- jQuery  -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
        <!--For google -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="assets/plugins/gmaps/gmaps.min.js"></script>
        <script src="assets/pages/jquery.gmaps.js"></script>


        <script src="assets/plugins/moment/moment.js"></script>


        <script src="assets/plugins/morris/morris.min.js"></script>
        <script src="assets/plugins/raphael/raphael-min.js"></script>

         <script src="assets/plugins/sweetalert/dist/sweetalert.min.js"></script>

        <!-- Todojs  -->
        <script src="assets/pages/jquery.todo.js"></script>

        <!-- chatjs  -->
        <script src="assets/pages/jquery.chat.js"></script>

        <script src="assets/plugins/peity/jquery.peity.min.js"></script>
		


		    <script src="assets/pages/jquery.dashboard_2.js"></script>
		

    </body>
</html>