<?php if($_GET['page']=='tentang'){ ?>
                    <div class="app-heading app-heading-bordered app-heading-page">
                        <div class="icon icon-lg">
                            <span class="fa fa-exclamation-circle"></span>
                        </div>
                        <div class="title">
                            <h1>Tentang Perusahaan - Admin Panel</h1>
                            <p>Akademi Komunitas Negeri Kajen</p>
                        </div>               
                        <!--<div class="heading-elements">
                            <a href="#" class="btn btn-danger" id="page-like"><span class="app-spinner loading"></span> loading...</a>
                        </div>-->
                    </div>
                    <div class="app-heading-container app-heading-bordered bottom">
                        <ul class="breadcrumb">
                            <li><a href="#">System</a></li>                                                     
                            <li class="active">Tentang</li>
                        </ul>
                    </div>
                    <div class="container">              
                                            <div class="block block-condensed">
                                                <!-- START HEADING -->
                                                <div class="app-heading app-heading-small">
                                                    <div class="title">
                                                        <h5>Tentang Perusahaan</h5>
                                                        <a href="index.php?page=tambah-tentang"><button class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</button></a>
                                                    </div>
                                                </div>
                                                <!-- END HEADING -->
                                                
                                                <div class="block-content">
                                                    
                                                    <table class="table table-striped table-bordered datatable-extended">
                                                        <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Tentang</th>
                                                                <th>[Aksi]</th>
                                                            </tr>
                                                        </thead>                                    
                                                        <tbody>
                                                            <?php
                                                                // Mendapatkan Data Tabel
                                                                require '../pdo/About.php';
                                                                $tentang = new About();
                                                                $tampil = $tentang->read();
                                                                while($data = $tampil->fetch(PDO::FETCH_OBJ)){
                                                                /*require_once ("../pdo/koneksi.php"); //Membaca file Konfiguasi Koneksi Database Seperti Nama DB dll
                                                                $connection = new ConnectionDB(); //Membuat Variabel Connection dengan isi Class "ConnectionDB"
                                                                $conn = $connection->getConnection(); //Membuat Variabel conn dengan isi menjalankan function "getConnection"
                                                                $sql 	= 'SELECT * FROM tbaboutus ORDER BY judul ASC'; //Query untuk menampilkan semua data dari tabel "tbuser"
                                                                $result = $conn->prepare($sql); //Membuat Variabel "result" dengan isi Perintah Prepare/Persiapan dari Query $sql
                                                                $result->execute(); //Mengeksekusi Query SQL
                                                                $no = 1; //Membuat Variabel No dengan isi "1"
                                                                foreach($result as $data){ //Perulangan untuk Menampilkan Data Hasil dari Query dengan nama "Data"*/
                                                            ?>
                                                            <tr>
                                                                <td><?php echo $data->id_about ?></td>
                                                                <td><?php echo $data->judul ?></td>
                                                                <td><a href="index.php?page=edit-tentang&id=<?php echo $data->id_about ?>"><button class="btn btn-primary"><i class="fa fa-pencil"></i></button></a>&nbsp<a href="index.php?page=tentang&delete=<?php echo $data->id_about ?>"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a></td>
                                                            </tr>
                                                            <?php } ?>    
                                                            <?php 
                                                                if(isset($_GET['delete'])){
                                                                    $id_about = $_GET['delete'];
                                                                    $delete=$tentang->delete($id_about);
                                                                    echo "<script>window.location.replace('index.php?page=tentang')</script>";
                                                                }
                                                            ?>                        
                                                        </tbody>
                                                    </table>
                                                    
                                                </div>
                                                
                                            </div>
                                            
                    </div>
<?php }elseif($_GET['page']=='tambah-tentang'){?>
                    <div class="app-heading app-heading-bordered app-heading-page">
                        <div class="icon icon-lg">
                            <span class="fa fa-exclamation-circle"></span>
                        </div>
                        <div class="title">
                            <h1>Tentang Perusahaan - Admin Panel</h1>
                            <p>Akademi Komunitas Negeri Kajen</p>
                        </div>               
                        <!--<div class="heading-elements">
                            <a href="#" class="btn btn-danger" id="page-like"><span class="app-spinner loading"></span> loading...</a>
                        </div>-->
                    </div>
                    <div class="app-heading-container app-heading-bordered bottom">
                        <ul class="breadcrumb">
                            <li><a href="#">System</a></li>                                                     
                            <li><a href="index.php?page=tentang">Tentang</a></li>
                            <li class="active">Tambah Tentang Perusahaan</li>
                        </ul>
                    </div>
                    <div class="container">
                        
                        <!-- BASIC INPUTS -->
                        <div class="block">                        
                            
                            <div class="app-heading app-heading-small">                                
                                <a href="index.php?page=tentang" style="float:right"><button class="btn btn-danger"><i class="fa fa-close"></i></button></a>
                                <div class="title">
                                    <h2>Tambah Tentang Perusahaan Baru</h2>
                                    <p>Silahkan isi form di bawah ini</p>
                                </div>                                
                            </div>
                                  
                            <form action="" method="post" class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-md-2 control-label">ID</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="id_tentang" value="[ OTOMATIS ]" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Judul</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="judul">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Detail</label>
                                    <div class="col-md-10">
                                        <textarea name="detail" id="richtext" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <center><input type="submit" value="Simpan" name="submit" class="btn btn-info btn-rounded">
                                    <input type="reset" value="Batal" name="batal" class="btn btn-danger btn-rounded"></center>
                                </div>
                            </form>
                            <?php
                                require '../pdo/About.php';
                                if(isset($_POST['submit'])){
                                    $judul=$_POST['judul'];
                                    $detail_about=$_POST['detail'];
                                    $about = new About();
                                    $simpan = $about->create($judul, $detail_about);
                                    echo "<script>window.location.replace('index.php?page=tentang')</script>";
                                }
                            ?>
                        </div>
                        <!-- END BASIC INPUTS -->
                        
                        
                    </div>

<?php }elseif($_GET['page']=='edit-tentang'){?>
                    <div class="app-heading app-heading-bordered app-heading-page">
                        <div class="icon icon-lg">
                            <span class="fa fa-exclamation-circle"></span>
                        </div>
                        <div class="title">
                            <h1>Tentang Perusahaan - Admin Panel</h1>
                            <p>Akademi Komunitas Negeri Kajen</p>
                        </div>               
                        <!--<div class="heading-elements">
                            <a href="#" class="btn btn-danger" id="page-like"><span class="app-spinner loading"></span> loading...</a>
                        </div>-->
                    </div>
                    <div class="app-heading-container app-heading-bordered bottom">
                        <ul class="breadcrumb">
                            <li><a href="#">System</a></li>                                                     
                            <li><a href="index.php?page=tentang">Tentang</a></li>
                            <li class="active">Ubah Tentang Perusahaan</li>
                        </ul>
                    </div>
                    <div class="container">
                        
                        <!-- BASIC INPUTS -->
                        <div class="block">                        
                            
                            <div class="app-heading app-heading-small">                                
                                <a href="index.php?page=tentang" style="float:right"><button class="btn btn-danger"><i class="fa fa-close"></i></button></a>
                                <div class="title">
                                    <h2>Edit Tentang Perusahaan</h2>
                                    <p>Silahkan isi form di bawah ini</p>
                                </div>                                
                            </div>
                            <?php
                                require '../pdo/About.php';
                                if(isset($_GET['id'])){
                                    $id_about=$_GET['id'];
                                    $about = new About();
                                    $get=$about->read_id($id_about);
                                    $data=$get->fetch(PDO::FETCH_OBJ);
                                }
                                /*require_once ("../pdo/koneksi.php");
                                $id = $_GET['id'];
                                $connection = new ConnectionDB();
                                $conn = $connection->getConnection();
                                $sql 	= "SELECT * FROM tbaboutus WHERE id_about = '$id'";
                                $result = $conn->prepare($sql);
                                $result->execute();
                                foreach($result as $data){*/
                            ?>
                            <form action="" method="post" class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-md-2 control-label">ID</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="id_tentang" value="[ OTOMATIS ]" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Judul</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="judul" value="<?php echo $data->judul ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Detail</label>
                                    <div class="col-md-10">
                                        <textarea name="detail" id="richtext" class="form-control"><?php echo $data->detail_about ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <center><input type="submit" value="Ubah" name="submit" class="btn btn-info btn-rounded">
                                    <input type="reset" value="Batal" name="batal" class="btn btn-danger btn-rounded"></center>
                                </div>
                            </form>
                            <?php 
                                if(isset($_POST['submit'])){
                                    $id_about=$_GET['id'];
                                    $judul=$_POST['judul'];
                                    $detail_about=$_POST['detail'];
                                    $simpan = $about->update($id_about, $judul, $detail_about);
                                    echo "<script>window.location.replace('index.php?page=tentang')</script>";
                                }
                            ?>
                        </div>
                        <!-- END BASIC INPUTS -->
                        
                        
                    </div>

<?php }?>