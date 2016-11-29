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
                                <h4 class="page-title">Sensor Registration</h4>
                                
                            </div>
                        </div>

                        <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box">
                              <div class="row">
                                <div class="col-md-6">
                                  <h4 class="m-t-0 header-title"><b>Temperature</b></h4>
                                  
                      
                      <form class="form-horizontal" role="form"  method="POST" action="my.php">
                                              <div class="form-group">
                                                  <label class="col-md-2 control-label">Sensor ID</label>
                                                  <div class="col-md-10">
                                                    <input type="text" class="form-control" nanme="sensor_id" value="Some numerical and text value...">
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <label class="col-md-2 control-label">Location Id</label>
                                                  <div class="col-md-10">
                                                    <input type="text" class="form-control" name="location_id" value="Some numerical and  text value...">
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <label class="col-md-2 control-label">Manager ID</label>
                                                  <div class="col-md-10">
                                                    <input type="text" class="form-control" name="manager_id" value="Some numerical and text value...">
                                                  </div>
                                              </div>   
                                              
                                              <div class="form-group">
                                                  <label class="col-md-2 control-label">Description</label>
                                                  <div class="col-md-10">
                                                      <textarea class="form-control" name="description" rows="5"></textarea>
                                                  </div>
                                              </div> 

                                              <div class="form group">
                                                <label for="arriveddate"> Arrived Date </label>
                                                  <input ng-model="product.arrival" id="arrived_date" class="input-purple" name="arrived_data" type="date"/>
                                              </div>
                                                          
                                                      
                                                  
                                              <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                                          </form>
                                </div>
                                
                                <div class="col-md-6">
                                  <h4 class="m-t-0 header-title"><b>Humidity</b></h4>
                                  
                      
                      <form class="form-horizontal" role="form">
                                              <div class="form-group">
                                                  <label class="col-md-2 control-label">Sensor ID</label>
                                                  <div class="col-md-10">
                                                    <input type="text" class="form-control" name="sensor_id" value="Some numerical and text value...">
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <label class="col-md-2 control-label">Location ID</label>
                                                  <div class="col-md-10">
                                                    <input type="text" class="form-control" name="location_id" value="Some numerical and text value...">
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <label class="col-md-2 control-label">Manager ID</label>
                                                  <div class="col-md-10">
                                                    <input type="text" class="form-control" name="manager_id" value="Some numerical and  text value...">
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <label class="col-md-2 control-label">Description</label>
                                                  <div class="col-md-10">
                                                      <textarea class="form-control" name="description" rows="5"></textarea>
                                                  </div>
                                              </div>
                                               
                                              <div class="form group">
                                                <label for="arriveddate"> Arrived Date </label>
                                                  <input ng-model="product.arrival" id="arrived_date" name="text" class="input-purple" type="date"/>
                                              </div>
                                                    <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                                                  </div>
                                              </div>
                                          </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        
            <div class="row">
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