<!DOCTYPE html>
<html lang="en">
    <head>                        
        <title>SungkanNgoding.com - Admin Panel</title>            
        
        <!-- META SECTION -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <!-- END META SECTION -->
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" href="css/styles.css">
        <!-- EOF CSS INCLUDE -->
    </head>
    <body>        
        
        <!-- APP WRAPPER -->
        <div class="app">           

            <!-- START APP CONTAINER -->
            <div class="app-container">

                    <?php 
                        error_reporting(0);

                        if($_GET['error']=='true'){
                            include 'assets/php/login-error.php';
                        }else{
                            include 'assets/php/login.php';
                        }
                    ?>
                    <!-- END PAGE CONTAINER -->
                        
                </div>
                <!-- END APP CONTENT -->
                                
            </div>
            <div class="app-overlay"></div>
            <!-- END APP OVERLAY -->
        </div>        
        <!-- END APP WRAPPER -->                
        
        <script type="text/javascript" src="js/vendor/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/vendor/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/vendor/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/vendor/moment/moment.min.js"></script>       
        
        <script type="text/javascript" src="js/vendor/customscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/vendor/bootstrap-select/bootstrap-select.js"></script>
        <script type="text/javascript" src="js/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script>
        
        <script type="text/javascript" src="js/vendor/maskedinput/jquery.maskedinput.min.js"></script>
        <script type="text/javascript" src="js/vendor/form-validator/jquery.form-validator.min.js"></script>
        
        <script type="text/javascript" src="js/vendor/noty/jquery.noty.packaged.js"></script>
        
        <script type="text/javascript" src="js/vendor/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="js/vendor/datatables/dataTables.bootstrap.min.js"></script>
        
        <script type="text/javascript" src="js/vendor/sweetalert/sweetalert.min.js"></script>
        <script type="text/javascript" src="js/vendor/knob/jquery.knob.min.js"></script>
        
        <script type="text/javascript" src="js/vendor/jvectormap/jquery-jvectormap.min.js"></script>
        <script type="text/javascript" src="js/vendor/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script type="text/javascript" src="js/vendor/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
        
        <script type="text/javascript" src="js/vendor/sparkline/jquery.sparkline.min.js"></script>
        
        <script type="text/javascript" src="js/vendor/morris/raphael.min.js"></script>
        <script type="text/javascript" src="js/vendor/morris/morris.min.js"></script>
        
        <script type="text/javascript" src="js/vendor/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="js/vendor/rickshaw/rickshaw.min.js"></script>
        
        <script type="text/javascript" src="js/vendor/isotope/isotope.pkgd.min.js"></script>
        
        <script type="text/javascript" src="js/app.js"></script>
        <script type="text/javascript" src="js/app_plugins.js"></script>
        <script type="text/javascript" src="js/app_demo.js"></script>
        <!-- END SCRIPTS -->
        <script type="text/javascript" src="js/app_demo_dashboard.js"></script>
    </body>
</html>