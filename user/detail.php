<section class="breadcrumbs">
        	<div class="container">
            	<div class="row">
                	<div class="col-sm-12">
                    	<h1>Papan Informasi</h1>
                        
                        <div class="breadcrumb-links">
                        	<a href="#">Beranda</a> <i class="fa fa-angle-double-right"></i> Papan Informasi
                        </div>
                    </div>
                </div>
            </div>
</section>
<section id="body-content">
        	<div class="container">
            	<div class="row">
                    <!--Left Content-->
                    <div class="col-sm-12">  
                        <!--Blog Post-->
                        <?php
                            // Mendapatkan Data Tabel
                            require '../pdo/Informasi.php';
                            $informasi = new Informasi();
                            $slug_judul = $_GET['page'];
                            $tampil = $informasi->read_slug($slug_judul);
                            $inf = $tampil->fetch(PDO::FETCH_OBJ)
                        ?>
                        <div class="blog-wrap">
                            <div class="shadow-wrap">
                                <div class="item-thumbs">
                                    <a href="../media/source/<?= $inf->foto_header ?>" class="hover-wrap">
                                  	</a> 
                                    <img src="../media/source/<?= $inf->foto_header ?>" alt="">
                                </div>
                                <div class="icon-left">
                                    <span><?php 
                                        $tgl_post = date_format(date_create($inf->tgl_post), 'd');
                                        echo $tgl_post;
                                    ?> <span><?php 
                                    $tgl_post = date_format(date_create($inf->tgl_post), 'M');
                                    echo $tgl_post;
                                    ?></span></span>
                                </div>
                                <div class="blog-text">
                                    <div class="meta">
                                        <span><i class="fa fa-info-circle"></i> <?=$inf->kategori_post?></span> <span><a href="#"><i class="fa fa-comment"></i> 0 Komentar</a></span>
                                    </div>
                                    <h3><a href="blog-single.html"><?= $inf->judul ?></a></h3>
                                    <?= $inf->isi_post ?>
                                </div>
                            </div>
                            <!--Spacer-->
                            <div class="spacer">
                                &nbsp;
                            </div>
                            <!--Spacer-->
                        </div>
                        <!--Blog Post--> 
                        
                        <!--Share Social Icons-->                            
                        <div class="share-this">
                            <div class="pull-left">
                                <h4>Share This</h4>
                            </div>
                            <div class="pull-right social-icons">
                                <ul>
                                    <li><a title="" data-toggle="tooltip" href="#" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a title="" data-toggle="tooltip" href="#" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a title="" data-toggle="tooltip" href="#" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a title="" data-toggle="tooltip" href="#" data-original-title="Dribble"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a title="" data-toggle="tooltip" href="#" data-original-title="Youtube"><i class="fa fa-youtube"></i></a></li>
                                    <li><a title="" data-toggle="tooltip" href="#" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a title="" data-toggle="tooltip" href="#" data-original-title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!--Share Social Icons--> 
                        
                        <!--Recent Comments-->
                        <div class="comments-wrap">
                            <h3>0 Komentar</h3>
                        </div>
                        <!--Recent Comments-->
                        
                        <!--Leave Comments-->
                        <h4>Tinggalkan Komentar</h4>
                        <div class="row">
                            <div class="col-sm-12">
                                <div id="sucessmessage"> </div>
                            </div>
                            <form action="#" method="post" id="contact_form" novalidate>
                                <div class="col-sm-6">
                                    <label>Nama</label>
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                                <div class="col-sm-6">
                                    <label>Email</label>
                                    <input type="text" name="email" id="email" class="form-control">
                                </div>
                                <div class="col-sm-12">
                                    <label>Komentar</label>
                                    <textarea name="comment" id="comment" class="form-control"></textarea>
                                </div>
                                <div class="col-sm-12">
                                    <button class="my-btn shadow" type="submit">Kirim <i class="fa fa-check-circle"></i></button>
                                </div>
                            </form>
                        </div>
                        <!--Leave Comments-->
                    </div> 
                </div>
      		</div>            
</section>