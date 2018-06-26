<section id="body-content">
        	<div class="container">
            	<div class="row">
                	<!--Our Services-->
                	
                    <!--Divider End-->                    
                    
                    <!--Our Portfolio-->
                    <div class="col-sm-12">
                    	<h2 class="home-title">Layanan Kami</h2>
                    </div>
                    <div class="col-sm-12">
                    	<div class="row animated" data-animation="flipInY" data-animation-delay="500">
                            <div id="portfolio-slider" class="owl-carousel owl-theme">
                                <!--Portfolio Item Loop Start-->
                                <?php
                                     // Mendapatkan Data Tabel
                                    require '../pdo/Layanan.php';
                                    $layanan = new Layanan();
                                    $tampil = $layanan->read();
                                    while($lay = $tampil->fetch(PDO::FETCH_OBJ)){
                                ?>
                                <div class="item col-sm-12">
                                	<div class="shadow-wrap">
                                        <center><h3><a href="#"><?= $lay->nama_layanan?></a></h3>
                                        <a href="#" class="my-btn bordered btn-small">Lihat Selengkapnya</a></center>
                                    </div>
                                </div>
                                <?php } ?>
                                <!--Portfolio Item Loop End-->
                            </div>
                            
                        </div>
                    </div>
                    <!--Our Portfolio-->
                </div>
            </div>
            <div class="col-sm-12">
                    	<div class="divider-wrap">&nbsp;</div>
                    </div>
        	<!-- xxx Our Blog xxx -->
            
            <!-- xxx End xxx -->
            
            <!-- xxx Our Clients xxx -->
            
            <!-- xxx End xxx -->
            
        </section>