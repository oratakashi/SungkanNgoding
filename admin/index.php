<?php
    session_start();//Memulai Session
    if(empty($_SESSION['userid'])){ //JIka Userid Kosong Maka
        header('location: login.php'); //Otomatis Mengarahkan ke Login //Server Side
        //echo "<script>window.location.replace('login.php')</script>"; //Client Side
    }else{
?>
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
        <!-- TinyMCE -->
        <script type="text/javascript" src="../assets/tinymce/tinymce.min.js"></script>
        <script>
            tinyMCE.init({
                selector: "#richtext",
                height: 350,
                setup: function (editor) {
                    editor.on('change', function () {
                        tinymce.triggerSave();
                    });
                },
                plugins: [
                    "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table contextmenu paste imagetools responsivefilemanager tiny_mce_wiris"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | responsivefilemanager tiny_mce_wiris_formulaEditor",

                external_filemanager_path:"../assets/filemanager/",
                filemanager_title:"Kelola Berkas" ,
                external_plugins: { "filemanager" : "../filemanager/plugin.min.js"}
            });
        </script>
    </head>
    <body>        
        
        <!-- APP WRAPPER -->
        <div class="app">           

            <!-- START APP CONTAINER -->
            <div class="app-container">
                <!-- START SIDEBAR -->
                <?php include 'left_menu.php'?>
                <!-- END SIDEBAR -->
                
                <!-- START APP CONTENT -->
                <div class="app-content app-sidebar-left">
                    <!-- START APP HEADER -->
                    
                    <!-- END APP HEADER  -->
                    <?php include 'header.php'?>
                    <!-- START PAGE HEADING -->
                    
                    <!-- END PAGE HEADING -->
                    
                    <!-- START PAGE CONTAINER -->
                    <?php 
                        error_reporting(0);

                        if($_GET['page']==""){
                            include 'assets/php/main-content.php';
                        }
                        elseif($_GET['page']=="tentang"){
                            include 'assets/php/tentang.php';
                        }
                        elseif($_GET['page']=="kategori-informasi"){
                            include 'assets/php/kategori-informasi.php';
                        }
                        elseif($_GET['page']=="informasi"){
                            include 'assets/php/informasi.php';
                        }
                        elseif($_GET['page']=="layanan"){
                            include 'assets/php/layanan.php';
                        }
                        elseif($_GET['page']=="user"){
                            include 'assets/php/user.php';
                        }
                        elseif($_GET['page']=="tambah-user"){
                            include 'assets/php/user.php';
                        }
                        elseif($_GET['page']=="edit-user"){
                            include 'assets/php/user.php';
                        }
                        elseif($_GET['page']=="tambah-kategori-informasi"){
                            include 'assets/php/kategori-informasi.php';
                        }
                        elseif($_GET['page']=="edit-kategori-informasi"){
                            include 'assets/php/kategori-informasi.php';
                        }
                        elseif($_GET['page']=="tambah-tentang"){
                            include 'assets/php/tentang.php';
                        }
                        elseif($_GET['page']=="edit-tentang"){
                            include 'assets/php/tentang.php';
                        }
                        elseif($_GET['page']=="tambah-layanan"){
                            include 'assets/php/layanan.php';
                        }
                        elseif($_GET['page']=="edit-layanan"){
                            include 'assets/php/layanan.php';
                        }
                        elseif($_GET['page']=="tambah-informasi"){
                            include 'assets/php/informasi.php';
                        }
                        elseif($_GET['page']=="edit-informasi"){
                            include 'assets/php/informasi.php';
                        }
                    ?>
                    <!-- END PAGE CONTAINER -->
                    
                </div>
                <!-- END APP CONTENT -->
                                
            </div>
            <!-- END APP CONTAINER -->
                        
            <!-- START APP FOOTER -->
            <?php include 'footer.php'?>
            <!-- END APP FOOTER -->

            <!-- START APP SIDEPANEL -->
            <?php include 'side-panel.php'?>
            <!-- END APP SIDEPANEL -->
            
            <!-- APP OVERLAY -->
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
<?php } ?>