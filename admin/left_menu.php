<div class="app-sidebar app-navigation app-navigation-style-default app-navigation-open-hover dir-left" data-type="close-other">
                    <a href="index.php" class="app-navigation-logo">
                        Boooya - Revolution Admin Template 
                        
                    </a>
                    <nav>
                        <ul>
                            <li class="title">Menu</li>
                            <li><a href="index.php" id="<?php if(empty($_GET['page'])){echo "simbah";} ?>"><span class="icon-laptop-phone" id="<?php if(empty($_GET['page'])){echo "simbah";} ?>"></span> Dashboard</a></li>
                            <li>
                                <a href="#" id="<?php if($_GET['page']!='user'&&$_GET['page']!='tambah-user'&&$_GET['page']!='edit-user'){echo "simbah";} ?>"><span class="icon-files" id="<?php if($_GET['page']!='user'&&$_GET['page']!='tambah-user'&&$_GET['page']!='edit-user'){echo "simbah";} ?>"></span> Pages</a>
                                <ul>                                
                                    <li><a href="index.php?page=tentang" id="<?php if($_GET['page']=='tentang'){echo "simbah";} ?>"><span class="fa fa-exclamation-circle" id="<?php if($_GET['page']=='tentang'){echo "simbah";} ?>"></span> Tentang</a></li>
                                    <li><a href="index.php?page=kategori-informasi" id="<?php if($_GET['page']=='kategori-informasi'){echo "simbah";}elseif($_GET['page']=='tambah-kategori-informasi'){echo "simbah";}elseif($_GET['page']=='edit-kategori-informasi'){echo "simbah";} ?>"><span class="fa fa-newspaper-o" id="<?php if($_GET['page']=='kategori-informasi'){echo "simbah";}elseif($_GET['page']=='tambah-kategori-informasi'){echo "simbah";}elseif($_GET['page']=='edit-kategori-informasi'){echo "simbah";} ?>"></span> Kategori Informasi</a></li>
                                    <li><a href="index.php?page=informasi" id="<?php if($_GET['page']=='informasi'){echo "simbah";} ?>"><span class="fa fa-newspaper-o" id="<?php if($_GET['page']=='informasi'){echo "simbah";} ?>"></span> Informasi</a></li>
                                    <li><a href="index.php?page=layanan" id="<?php if($_GET['page']=='layanan'){echo "simbah";} ?>"><span class="fa fa-comments" id="<?php if($_GET['page']=='layanan'){echo "simbah";} ?>"></span> Layanan</a></li>
                                    
                                </ul>
                            </li>                
                            <?php if($_SESSION['level']=='Administrator'){ ?>
                            <li><a href="index.php?page=user" id="<?php if($_GET['page']=='user'){echo "simbah";}elseif($_GET['page']=='tambah-user'){echo "simbah";}elseif($_GET['page']=='edit-user'){echo "simbah";} ?>"><span class="fa fa-users" id="<?php if($_GET['page']=='user'){echo "simbah";}elseif($_GET['page']=='tambah-user'){echo "simbah";}elseif($_GET['page']=='edit-user'){echo "simbah";} ?>"></span>Users</a></li>
                            <?php } ?>
                        </ul>
                    </nav>
                </div>

                <!--
                    index.php?page=tentang
                    page = nama parameter (dalam pendefinisian nama bebas, yang penting pakai huruf)
                    tentang = nilai parameter
                -->