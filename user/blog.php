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
                    <?php
                        // Mendapatkan Data Tabel
                        require '../pdo/Informasi.php';
                        $informasi = new Informasi();
                        $tampil = $informasi->read();
                        while($inf = $tampil->fetch(PDO::FETCH_OBJ)){
                    ?>
                   	<!--Blog Post-->
                        <div class="blog-wrap col-sm-4">
                            <div class="shadow-wrap">
                                <div class="item-thumbs">
                                    <a href="index.php?page=<?= $inf->slug_judul ?>" class="hover-wrap">
                                    </a> 
                                    <img src="../media/source/<?= $inf->foto_header ?>">
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
                                    <h3><a href="index.php?page=<?= $inf->slug_judul ?>"><?= $inf->judul ?></a></h3>
                                    <a href="index.php?page=<?= $inf->slug_judul ?>" class="my-btn bordered btn-small">Baca Selengkapnya</a>
                                </div>
                            </div>
                            <!--Spacer-->
                            <div class="spacer">
                                &nbsp;
                            </div>
                            <!--Spacer-->
                        </div>
                    <!--Blog Post-->
                    <?php } ?>
                    <!--Blog Pagination-->
                    
                    <!--Blog Pagination-->
                    
                    <!--Divider-->
                    <div class="col-sm-12">
                        <div class="divider-wrap">&nbsp;</div>
                    </div>
                    <!--Divider End-->      
                </div>
      		</div>            
</section>