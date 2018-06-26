<?php if($_GET['page']=='kategori-informasi'){ ?>
                    <div class="app-heading app-heading-bordered app-heading-page">
                        <div class="icon icon-lg">
                            <span class="fa fa-newspaper-o"></span>
                        </div>
                        <div class="title">
                            <h1>Kategori Informasi - Admin Panel</h1>
                            <p>Akademi Komunitas Negeri Kajen</p>
                        </div>               
                        <!--<div class="heading-elements">
                            <a href="#" class="btn btn-danger" id="page-like"><span class="app-spinner loading"></span> loading...</a>
                        </div>-->
                    </div>
                    <div class="app-heading-container app-heading-bordered bottom">
                        <ul class="breadcrumb">
                            <li><a href="#">System</a></li>                                                     
                            <li class="active">Kategori</li>
                        </ul>
                    </div>
                    <div class="container">              
                                            <div class="block block-condensed">
                                                <!-- START HEADING -->
                                                <div class="app-heading app-heading-small">
                                                    <div class="title">
                                                        <h5>Kategori Informasi</h5>
                                                        <a href="index.php?page=tambah-kategori-informasi"><button class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</button></a>
                                                    </div>
                                                </div>
                                                <!-- END HEADING -->
                                                
                                                <div class="block-content">
                                                    
                                                    <table class="table table-striped table-bordered datatable-extended">
                                                        <thead>
                                                            <tr>
                                                                <th>ID. Kategori</th>
                                                                <th>Kategori Informasi</th>
                                                                <th>[Aksi]</th>
                                                            </tr>
                                                        </thead>                                    
                                                        <tbody>
                                                            <?php
                                                                // Mendapatkan Data Tabel
                                                                require '../pdo/KategoriInformasi.php';
                                                                $kategori = new KategoriInformasi();
                                                                $tampil = $kategori->read();
                                                                $no = 1;
                                                                while($data = $tampil->fetch(PDO::FETCH_OBJ)){
                                                                /*require_once ("../pdo/koneksi.php"); //Membaca file Konfiguasi Koneksi Database Seperti Nama DB dll
                                                                $connection = new ConnectionDB(); //Membuat Variabel Connection dengan isi Class "ConnectionDB"
                                                                $conn = $connection->getConnection(); //Membuat Variabel conn dengan isi menjalankan function "getConnection"
                                                                $sql 	= 'SELECT * FROM tbkategori ORDER BY kategori_post ASC'; //Query untuk menampilkan semua data dari tabel "tbuser"
                                                                $result = $conn->prepare($sql); //Membuat Variabel "result" dengan isi Perintah Prepare/Persiapan dari Query $sql
                                                                $result->execute(); //Mengeksekusi Query SQL
                                                                $no = 1; //Membuat Variabel No dengan isi "1"
                                                                foreach($result as $data){ //Perulangan untuk Menampilkan Data Hasil dari Query dengan nama "Data"*/
                                                            ?>
                                                            <tr>
                                                                <td><?php echo $data->id_kategori ?></td>
                                                                <td><?php echo $data->kategori_post ?></td>
                                                                <td><a href="index.php?page=edit-kategori-informasi&id=<?php echo $data->id_kategori ?>"><button class="btn btn-primary"><i class="fa fa-pencil"></i></button></a>&nbsp<a href="index.php?page=kategori-informasi&delete=<?php echo $data->id_kategori?>"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a></td>
                                                            </tr>
                                                            <?php } ?>  
                                                            <?php 
                                                                if(isset($_GET['delete'])){
                                                                    $id_kategori=$_GET['delete'];
                                                                    $hapus = $kategori->delete($id_kategori);
                                                                    echo "<script>window.location.replace('index.php?page=kategori-informasi')</script>";
                                                                }
                                                            ?>                          
                                                        </tbody>
                                                    </table>
                                                    
                                                </div>
                                                
                                            </div>
                                            
                    </div>
<?php }elseif($_GET['page']=='tambah-kategori-informasi'){?>
                     <div class="app-heading app-heading-bordered app-heading-page">
                        <div class="icon icon-lg">
                            <span class="fa fa-newspaper-o"></span>
                        </div>
                        <div class="title">
                            <h1>Tambah Kategori Informasi - Admin Panel</h1>
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
                            <li class="active">Tambah Kategori</li>
                        </ul>
                    </div>
                    <div class="container">
                        
                        <!-- BASIC INPUTS -->
                        <div class="block">                        
                            
                            <div class="app-heading app-heading-small">                                
                                <a href="index.php?page=kategori-informasi" style="float:right"><button class="btn btn-danger"><i class="fa fa-close"></i></button></a>
                                <div class="title">
                                    <h2>Tambah Kategori Baru</h2>
                                    <p>Silahkan isi form di bawah ini</p>
                                </div>                                
                            </div>
                                  
                            <form action="" method="post" class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-md-2 control-label">ID. Kategori</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="id_kategori" value="[ OTOMATIS ]" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Kategori Informasi</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="nama_kategori">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <center><input type="submit" value="Simpan" name="submit" class="btn btn-info btn-rounded">
                                    <input type="reset" value="Batal" name="batal" class="btn btn-danger btn-rounded"></center>
                                </div>
                            </form>
                            <?php 
                                require '../pdo/KategoriInformasi.php';
                                if(isset($_POST['submit'])){
                                    $kategori = new KategoriInformasi();
                                    $kategori_post = $_POST['nama_kategori'];
                                    $kategori_slug = strtolower("$kategori_post");
                                    $kategori_slug = str_ireplace(" ", "-", $kategori_slug);
                                    $simpan = $kategori->create($kategori_post, $kategori_slug);
                                    echo "<script>window.location.replace('index.php?page=kategori-informasi')</script>";
                                }
                            ?>
                        </div>
                        <!-- END BASIC INPUTS -->
                        
                        
                    </div>

<?php }elseif($_GET['page']=='edit-kategori-informasi'){?>
                     <div class="app-heading app-heading-bordered app-heading-page">
                        <div class="icon icon-lg">
                            <span class="fa fa-newspaper-o"></span>
                        </div>
                        <div class="title">
                            <h1>Ubah Kategori Informasi - Admin Panel</h1>
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
                            <a href="index.php?page=kategori-informasi" style="float:right"><button class="btn btn-danger"><i class="fa fa-close"></i></button></a>
                                <div class="title">
                                    <h2>Ubah Kategori : <?php echo $_GET['id'] ?></h2>
                                    <p>Silahkan isi form di bawah ini</p>
                                </div>                                
                            </div>
                            <?php
                                require '../pdo/KategoriInformasi.php';
                                if(isset($_GET['id'])){
                                    $id_kategori = $_GET['id'];
                                    $kategori = new KategoriInformasi();
                                    $get = $kategori->read_id($id_kategori);
                                    $data = $get->fetch(PDO::FETCH_OBJ);
                                }
                                // Mendapatkan Data Tabel
                                /*
                                My Code -_-
                                require_once ("../pdo/koneksi.php"); //Membaca file Konfiguasi Koneksi Database Seperti Nama DB dll
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
                                    <label class="col-md-2 control-label">ID. Kategori</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="id_kategori" value="[ OTOMATIS ]" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Kategori Informasi</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="nama_kategori" value="<?php echo $data->kategori_post ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <center><input type="submit" value="Ubah" name="submit" class="btn btn-info btn-rounded">
                                    <input type="reset" value="Batal" name="batal" class="btn btn-danger btn-rounded"></center>
                                </div>
                            </form>
                            <?php 
                                if(isset($_POST['submit'])){
                                    $id_kategori = $_GET['id'];
                                    $kategori_post = $_POST['nama_kategori'];
                                    $kategori_slug = strtolower("$kategori_post");
                                    $kategori_slug = str_ireplace(" ", "-", $kategori_slug);
                                    $simpan = $kategori->update($id_kategori, $kategori_post, $kategori_slug);
                                    echo "<script>window.location.replace('index.php?page=kategori-informasi')</script>";
                                }
                            ?>
                        </div>
                        <!-- END BASIC INPUTS -->
                        
                        
                    </div>

<?php }?>