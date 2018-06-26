                    <div class="app-heading app-heading-bordered app-heading-page">
                        <div class="icon icon-lg">
                            <span class="icon-laptop-phone"></span>
                        </div>
                        <div class="title">
                            <h1>Dashboard - Admin Panel</h1>
                            <p>Akademi Komunitas Negeri Kajen</p>
                        </div>               
                        <!--<div class="heading-elements">
                            <a href="#" class="btn btn-danger" id="page-like"><span class="app-spinner loading"></span> loading...</a>
                        </div>-->
                    </div>
                    <div class="app-heading-container app-heading-bordered bottom">
                        <ul class="breadcrumb">
                            <li><a href="#">System</a></li>                                                     
                            <li class="active">Dashboard</li>
                        </ul>
                    </div>
                    <div class="container">
                                                
                        <div class="row">
                            <div class="col-md-12">
                                
                                <ul class="app-feature-gallery app-feature-gallery-noshadow margin-bottom-0">
                                    <li>
                                        <?php
                                            require "../pdo/koneksi.php";
                                            $sql = "SELECT Count(*) from tbpost";
                                            $result=$db->prepare($sql);
                                            $result->execute();
                                            foreach($result as $post){}
                                        ?>
                                        <!-- START WIDGET -->
                                        <div class="app-widget-tile">
                                            <div class="line">
                                                <div class="title">Jumlah Post</div>
                                            </div>                                        
                                            <div class="intval"><?= $post[0] ?></div>                                        
                                        </div>                                                                        
                                        <!-- END WIDGET -->
                                    </li>
                                    <li>
                                        <?php
                                            $sql = "SELECT Count(*) from tbkategori";
                                            $result=$db->prepare($sql);
                                            $result->execute();
                                            foreach($result as $kat){}
                                        ?>
                                        <!-- START WIDGET -->
                                        <div class="app-widget-tile">
                                            <div class="line">
                                                <div class="title">Jumlah Kategori</div>
                                            </div>                                        
                                            <div class="intval"><?= $kat[0] ?></div>                                            
                                        </div>                                                                        
                                        <!-- END WIDGET -->
                                    </li>
                                    <li>
                                        <?php
                                            $sql = "SELECT Count(*) from tblayanan";
                                            $result=$db->prepare($sql);
                                            $result->execute();
                                            foreach($result as $lay){}
                                        ?>
                                        <!-- START WIDGET -->
                                        <div class="app-widget-tile">
                                            <div class="line">
                                                <div class="title">Jumlah Layanan</div>
                                            </div>                                        
                                            <div class="intval"><?= $lay[0] ?></div>
                                        </div>                                                                        
                                        <!-- END WIDGET -->
                                    </li>
                                    <li>
                                        <?php
                                            $sql = "SELECT Count(*) from tbaboutus";
                                            $result=$db->prepare($sql);
                                            $result->execute();
                                            foreach($result as $tent){}
                                        ?>
                                        <!-- START WIDGET -->
                                        <div class="app-widget-tile">
                                            <div class="line">
                                                <div class="title">Jumlah Tentang Perusahaan</div>
                                            </div>                                        
                                            <div class="intval"><?= $tent[0] ?></div>
                                        </div>                                                                        
                                        <!-- END WIDGET -->
                                    </li>
                                </ul>
                                
                            </div>
                            
                        </div>
                            
                        <div class="row">
                            
                            <div class="col-md-12">
                                
                                <!-- START LATEST TRANSACTIONS -->
                                <div class="block block-condensed">
                                    <div class="app-heading">                                        
                                        <div class="title">
                                            <h2>Data User</h2>
                                            <p>Informasi Singkat</p>
                                        </div>              
                                    </div>
                                    <div class="block-content">
                                        <div class="table-responsive">
                                            <table class="table table-clean-paddings margin-bottom-0">
                                                <thead>
                                                    <tr>
                                                        <th>Nama User</th>
                                                        <th width="150">ID. User</th>                                                    
                                                        <th width="150">Status Aktif</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    $sql = "SELECT * from tbuser";
                                                    $result=$db->prepare($sql);
                                                    $result->execute();
                                                    foreach($result as $user){
                                                ?>
                                                    <tr>
                                                        <td>
                                                            <div class="contact contact-rounded contact-bordered contact-lg">
                                                                <img src="assets/images/users/user_2.jpg">
                                                                <div class="contact-container">
                                                                    <span style="color:black"><?= $user['nama_user'] ?></span>
                                                                    <span><?= $user['lev_user'] ?></span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><?= $user['id_user'] ?></td>
                                                        <td><span class="label <?php if($user['status_login']==1){echo "label-success";}else{echo "label-danger";} ?> label-bordered"><?php if($user['status_login']==1){echo "Online";}else{echo "Offline";} ?></span></td>
                                                    </tr>       
                                                    <?php } ?>                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- END LATEST TRANSACTIONS -->
                                
                            </div>
                        </div>
                        
                        
                    </div>