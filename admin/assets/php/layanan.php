<?php if($_GET['page']=='layanan'){ ?>
                    <div class="app-heading app-heading-bordered app-heading-page">
                        <div class="icon icon-lg">
                            <span class="fa fa-comments"></span>
                        </div>
                        <div class="title">
                            <h1>Layanan - Admin Panel</h1>
                            <p>Akademi Komunitas Negeri Kajen</p>
                        </div>               
                        <!--<div class="heading-elements">
                            <a href="#" class="btn btn-danger" id="page-like"><span class="app-spinner loading"></span> loading...</a>
                        </div>-->
                    </div>
                    <div class="app-heading-container app-heading-bordered bottom">
                        <ul class="breadcrumb">
                            <li><a href="#">System</a></li>                                                     
                            <li class="active">Layanan</li>
                        </ul>
                    </div>
                    <div class="container">              
                                            <div class="block block-condensed">
                                                <!-- START HEADING -->
                                                <div class="app-heading app-heading-small">
                                                    <div class="title">
                                                        <h5>Data Layanan</h5>
                                                        <a href="index.php?page=tambah-layanan"><button class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</button></a>
                                                    </div>
                                                </div>
                                                <!-- END HEADING -->
                                                
                                                <div class="block-content">
                                                    
                                                    <table class="table table-striped table-bordered datatable-extended">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>ID. Layanan</th>
                                                                <th>Judul</th>
                                                                <th>[Aksi]</th>
                                                            </tr>
                                                        </thead>                                    
                                                        <tbody>
                                                            <?php
                                                                require '../pdo/Layanan.php';
                                                                $layanan = new Layanan();
                                                                $tampil = $layanan->read();
                                                                $no = 1;
                                                                while($data = $tampil->fetch(PDO::FETCH_OBJ)){
                                                            ?>
                                                            <tr>
                                                                <td><?php echo $no++ ?></td>
                                                                <td><?php echo $data->id_layanan ?></td>
                                                                <td><?php echo $data->nama_layanan ?></td>
                                                                <td><a href="index.php?page=edit-layanan&id=<?php echo $data->id_layanan ?>"><button class="btn btn-primary"><i class="fa fa-pencil"></i></button></a>&nbsp<a href="index.php?page=layanan&delete=<?php echo $data->id_layanan ?>"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a></td>
                                                            </tr>
                                                            <?php } ?>                            
                                                            <?php 
                                                                if(isset($_GET['delete'])){
                                                                //if($_GET['delete']=='')
                                                                    $id_layanan=$_GET['delete'];
                                                                    $hapus = $layanan->delete($id_layanan);
                                                                    echo "<script>window.location.replace('index.php?page=layanan')</script>";
                                                                    //header('location: .php');
                                                                }
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                
                                            </div>
                                            
                    </div>
<?php }elseif($_GET['page']=='tambah-layanan'){?>
                     <div class="app-heading app-heading-bordered app-heading-page">
                        <div class="icon icon-lg">
                            <span class="fa fa-comments"></span>
                        </div>
                        <div class="title">
                            <h1>Tambah Layanan - Admin Panel</h1>
                            <p>Akademi Komunitas Negeri Kajen</p>
                        </div>               
                        <!--<div class="heading-elements">
                            <a href="#" class="btn btn-danger" id="page-like"><span class="app-spinner loading"></span> loading...</a>
                        </div>-->
                    </div>
                    <div class="app-heading-container app-heading-bordered bottom">
                        <ul class="breadcrumb">
                            <li><a href="#">System</a></li>                                                     
                            <li><a href="index.php?page=layanan">Layanan</a></li>
                            <li class="active">Tambah Layanan</li>
                        </ul>
                    </div>
                    <div class="container">
                        
                        <!-- BASIC INPUTS -->
                        <div class="block">                        
                            
                            <div class="app-heading app-heading-small">                                
                                <a href="index.php?page=layanan" style="float:right"><button class="btn btn-danger"><i class="fa fa-close"></i></button></a>
                                <div class="title">
                                    <h2>Tambah Layanan Baru</h2>
                                    <p>Silahkan isi form di bawah ini</p>
                                </div>                                
                            </div>
                                  
                            <form action="" method="post" class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-md-2 control-label">ID. Layanan</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="id_layanan" value="[ OTOMATIS ]" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Judul Layanan</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="nama_layanan">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Informasi Layanan</label>
                                    <div class="col-md-10">
                                        <textarea name="isi_layanan" id="richtext" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <center><input type="submit" value="Simpan" name="submit" class="btn btn-info btn-rounded">
                                    <input type="reset" value="Batal" name="batal" class="btn btn-danger btn-rounded"></center>
                                </div>
                            </form>
                            <?php 
                                require '../pdo/Layanan.php';
                                if(isset($_POST['submit'])){
                                    $nama_layanan = $_POST['nama_layanan'];
                                    $slug_layanan = strtolower("$nama_layanan");
                                    $slug_layanan = str_ireplace(" ", "-", $slug_layanan);
                                    $isi_layanan = $_POST['isi_layanan'];
                                    $layanan = new Layanan();
                                    $simpan = $layanan->create($nama_layanan, $slug_layanan, $isi_layanan);
                                    echo "<script>window.location.replace('index.php?page=layanan')</script>";
                                }
                            ?>
                        </div>
                        <!-- END BASIC INPUTS -->
                        
                        
                    </div>

<?php }elseif($_GET['page']=='edit-layanan'){?>
                     <div class="app-heading app-heading-bordered app-heading-page">
                        <div class="icon icon-lg">
                            <span class="fa fa-comments"></span>
                        </div>
                        <div class="title">
                            <h1>Ubah Layanan - Admin Panel</h1>
                            <p>Akademi Komunitas Negeri Kajen</p>
                        </div>               
                        <!--<div class="heading-elements">
                            <a href="#" class="btn btn-danger" id="page-like"><span class="app-spinner loading"></span> loading...</a>
                        </div>-->
                    </div>
                    <div class="app-heading-container app-heading-bordered bottom">
                        <ul class="breadcrumb">
                            <li><a href="#">System</a></li>                                                     
                            <li><a href="index.php?page=kategori-informasi">Kategori</a></li>
                            <li class="active">Ubah Kategori</li>
                        </ul>
                    </div>
                    <div class="container">
                        
                        <!-- BASIC INPUTS -->
                        <div class="block">                        
                            
                            <div class="app-heading app-heading-small">                                
                            <a href="index.php?page=layanan" style="float:right"><button class="btn btn-danger"><i class="fa fa-close"></i></button></a>
                                <div class="title">
                                    <h2>Ubah Layanan : <?php echo $_GET['id'] ?></h2>
                                    <p>Silahkan isi form di bawah ini</p>
                                </div>                                
                            </div>
                            <?php
                                // Mendapatkan Data Tabel
                                require '../pdo/Layanan.php';
                                if(isset($_GET['id'])){
                                    $id_layanan = $_GET['id'];
                                    $layanan = new Layanan();
                                    $get = $layanan->read_id($id_layanan);
                                    $data = $get->fetch(PDO::FETCH_OBJ);
                                }
                                /*require_once ("../pdo/koneksi.php"); //Membaca file Konfiguasi Koneksi Database Seperti Nama DB dll
                                $connection = new ConnectionDB(); //Membuat Variabel Connection dengan isi Class "ConnectionDB"
                                $conn = $connection->getConnection(); //Membuat Variabel conn dengan isi menjalankan function "getConnection"
                                $slug = $_GET['id'];
                                $sql 	= "SELECT * FROM tbkategori where id_kategori = '$slug' ORDER BY kategori_post ASC"; //Query untuk menampilkan semua data dari tabel "tbuser"
                                $result = $conn->prepare($sql); //Membuat Variabel "result" dengan isi Perintah Prepare/Persiapan dari Query $sql
                                $result->execute(); //Mengeksekusi Query SQL
                                foreach($result as $data){ //Perulangan untuk Menampilkan Data Hasil dari Query dengan nama "Data"*/
                            ?>                            
                            <form action="" method="post" class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-md-2 control-label">ID. Layanan</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="id_layanan" value="[ OTOMATIS ]" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Judul Layanan</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="nama_layanan" value="<?= $data->nama_layanan ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Informasi Layanan</label>
                                    <div class="col-md-10">
                                        <textarea name="isi_layanan" id="richtext" class="form-control"><?= $data->isi_layanan ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <center><input type="submit" value="Ubah" name="submit" class="btn btn-info btn-rounded">
                                    <input type="reset" value="Batal" name="batal" class="btn btn-danger btn-rounded"></center>
                                </div>
                            </form>
                            <?php
                                if(isset($_POST['submit'])){
                                    $id_layanan = $_GET['id'];
                                    $nama_layanan = $_POST['nama_layanan'];
                                    $isi_layanan = $_POST['isi_layanan'];
                                    $slug_layanan = strtolower($nama_layanan);
                                    $slug_layanan = str_ireplace(' ', '-', $slug_layanan);
                                    $simpan = $layanan->update($id_layanan, $nama_layanan, $isi_layanan, $slug_layanan);
                                    echo "<script>window.location.replace('index.php?page=layanan')</script>";
                                }
                            ?>
                        </div>
                        <!-- END BASIC INPUTS -->
                        
                        
                    </div>

<?php }?>