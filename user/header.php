<header >
            <!-- xxx Logo And Navigation xxx -->
            <div class="nav-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="logo">
                                <a href=""><img src="images/logo.png" alt="Amagon Logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <ul id="jetmenu" class="jetmenu">
                                <li class="<?php if(empty($_GET['page'])){echo "active";} ?>"><a href="index.php">Beranda</a></li>
                                
                                <li class="circle <?php if(isset($_GET['page'])){echo "active";} ?>"><a href="index.php?page=blog">Informasi</a>
                                    
                                </li>
                                
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- xxx Logo and Navigation End xxx -->        
        </header>