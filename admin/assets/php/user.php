<?php if($_GET['page']=='user'){ ?>
                    <div class="app-heading app-heading-bordered app-heading-page">
                        <div class="icon icon-lg">
                            <span class="fa fa-users"></span>
                        </div>
                        <div class="title">
                            <h1>Users - Admin Panel</h1>
                            <p>Akademi Komunitas Negeri Kajen</p>
                        </div>               
                        <!--<div class="heading-elements">
                            <a href="#" class="btn btn-danger" id="page-like"><span class="app-spinner loading"></span> loading...</a>
                        </div>-->
                    </div>
                    <div class="app-heading-container app-heading-bordered bottom">
                        <ul class="breadcrumb">
                            <li><a href="#">System</a></li>                                                     
                            <li class="active">Users</li>
                        </ul>
                    </div>
                    <div class="container">              
                        <div class="block block-condensed">
                            <!-- START HEADING -->
                            <div class="app-heading app-heading-small">
                                <div class="title">
                                    <h5>Data User</h5>
                                    <a href="index.php?page=tambah-user"><button class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</button></a>
                                </div>
                            </div>
                            <!-- END HEADING -->
                            
                            <div class="block-content">
                                
                                <table class="table table-striped table-bordered datatable-extended">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>ID. User</th>
                                            <th>Nama User</th>
                                            <th>Level User</th>
                                            <th>Status Login</th>
                                            <th>[ Aksi ]</th>
                                        </tr>
                                    </thead>                                    
                                    <tbody>
                                        <?php
                                                    // Mendapatkan Data Tabel
                                                    require '../pdo/User.php';
                                                    $user = new User();
                                                    $tampil = $user->read();
                                                    $no = 1;
                                                    while($data = $tampil->fetch(PDO::FETCH_OBJ)){
                                                    /*
                                                    My Code -_-
                                                    require_once ("../pdo/koneksi.php"); //Membaca file Konfiguasi Koneksi Database Seperti Nama DB dll
													$connection = new ConnectionDB(); //Membuat Variabel Connection dengan isi Class "ConnectionDB"
													$conn = $connection->getConnection(); //Membuat Variabel conn dengan isi menjalankan function "getConnection"
													$sql 	= 'SELECT * FROM tbuser ORDER BY nama_user ASC'; //Query untuk menampilkan semua data dari tabel "tbuser"
													$result = $conn->prepare($sql); //Membuat Variabel "result" dengan isi Perintah Prepare/Persiapan dari Query $sql
                                                    $result->execute(); //Mengeksekusi Query SQL
                                                    $no = 1; //Membuat Variabel No dengan isi "1"
													foreach($result as $data){ //Perulangan untuk Menampilkan Data Hasil dari Query dengan nama "Data"*/
										?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $data->id_user ?></td> <!-- Menampilkan Data ID_User -->
                                            <td><?php echo $data->nama_user ?></td> <!-- Menampilkan Data Nama_User -->
                                            <td><?php echo $data->lev_user ?></td> <!-- Menampilkan Data Lev_User -->
                                            <td><?php echo $data->status_login ?></td> <!-- Menampilkan Data Status Login -->
                                            <td><a href="index.php?page=edit-user&id=<?php echo $data->id_user ?>"><button class="btn btn-primary"><i class="fa fa-pencil"></i></button></a>&nbsp<a href="index.php?page=user&delete=<?php echo $data->id_user ?>"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a></td>
                                        </tr>
                                        <?php } ?>                        
                                        <?php 
                                            if(isset($_GET['delete'])){
                                                $id_user=$_GET['delete'];
                                                $hapus=$user->delete($id_user);
                                                echo "<script>window.location.replace('index.php?page=user')</script>";
                                            }
                                        ?>
                                    </tbody>
                                </table>
                                
                            </div>
                            
                        </div>
                        
                    </div>
<?php }elseif($_GET['page']=='tambah-user'){?>
                    <div class="app-heading app-heading-bordered app-heading-page">
                        <div class="icon icon-lg">
                            <span class="fa fa-user"></span>
                        </div>
                        <div class="title">
                            <h1>Tambah User - Admin Panel</h1>
                            <p>Akademi Komunitas Negeri Kajen</p>
                        </div>               
                        <!--<div class="heading-elements">
                            <a href="#" class="btn btn-danger" id="page-like"><span class="app-spinner loading"></span> loading...</a>
                        </div>-->
                    </div>
                    <div class="app-heading-container app-heading-bordered bottom">
                        <ul class="breadcrumb">
                            <li><a href="#">System</a></li>                                                     
                            <li><a href="index.php?page=user">Users</a></li>
                            <li class="active">Tambah User</li>
                        </ul>
                    </div>
                    <div class="container">
                        
                        <!-- BASIC INPUTS -->
                        <div class="block">                        
                            
                            <div class="app-heading app-heading-small">                                
                                <a href="index.php?page=user" style="float:right"><button class="btn btn-danger"><i class="fa fa-close"></i></button></a>
                                <div class="title">
                                    <h2>Tambah User Baru</h2>
                                    <p>Silahkan isi form di bawah ini</p>
                                </div>                                
                            </div>
                                  
                            <form action="" method="post" class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-md-2 control-label">ID. User</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="id_user">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Nama User</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="nama_user">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Level User</label>
                                    <div class="col-md-10">
                                        <select class="bs-select" name="lev_user" id="">
                                            <option value="Administrator">Administrator</option>
                                            <option value="Operator">Operator</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <center><input type="submit" value="Simpan" name="submit" class="btn btn-info btn-rounded">
                                    <input type="reset" value="Batal" name="batal" class="btn btn-danger btn-rounded"></center>
                                </div>
                            </form>
                            <?php 
                                require '../pdo/User.php';
                                if(isset($_POST['submit'])){
                                    $id_user = $_POST['id_user'];
                                    $nama_user = $_POST['nama_user'];
                                    $lev_user = $_POST['lev_user'];
                                    $password = md5('12345');
                                    $status_login = 0;
                                    $user = new User();
                                    $simpan = $user->create($id_user, $nama_user, $password, $lev_user, $status_login);
                                    /*require_once('../pdo/koneksi.php');
                                    $connection = new ConnectionDB();
                                    $conn = $connection->getConnection();
                                    $id_user = $_POST['id_user'];
                                    $nama_user = $_POST['nama_user'];
                                    $lev_user = $_POST['lev_user'];
                                    $password = md5('12345');
                                    $status_login = 0;
                                    $sql = "INSERT INTO tbuser values ('$id_user', '$nama_user', '$password', '$lev_user', '$status_login')";
                                    $query = $conn->prepare($sql);
                                    $query->execute();
                                    //header('location: index.php?page=user');*/
                                    echo "<script>window.location.replace('index.php?page=user')</script>";
                                }
                            ?>
                        </div>
                        <!-- END BASIC INPUTS -->
                        
                        
                    </div>

<?php }elseif($_GET['page']=='edit-user'){?>
                    <div class="app-heading app-heading-bordered app-heading-page">
                        <div class="icon icon-lg">
                            <span class="fa fa-user"></span>
                        </div>
                        <div class="title">
                            <h1>Ubah User - Admin Panel</h1>
                            <p>Akademi Komunitas Negeri Kajen</p>
                        </div>               
                        <!--<div class="heading-elements">
                            <a href="#" class="btn btn-danger" id="page-like"><span class="app-spinner loading"></span> loading...</a>
                        </div>-->
                    </div>
                    <div class="app-heading-container app-heading-bordered bottom">
                        <ul class="breadcrumb">
                            <li><a href="#">System</a></li>                                                     
                            <li><a href="index.php?page=user">Users</a></li>
                            <li class="active">Ubah User</li>
                        </ul>
                    </div>
                    <div class="container">
                        
                        <!-- BASIC INPUTS -->
                        <div class="block">                        
                            
                            <div class="app-heading app-heading-small">                                
                                <a href="index.php?page=user" style="float:right"><button class="btn btn-danger"><i class="fa fa-close"></i></button></a>
                                <div class="title">
                                    <h2>Edit User : <?php echo $_GET['id'] ?></h2>
                                    <p>Silahkan isi form di bawah ini</p>
                                </div>                                
                            </div>
                            <?php
                                require '../pdo/User.php';
                                if(isset($_GET['id'])){
                                    $id_user = $_GET['id'];
                                    $user = new User();
                                    $get = $user->read_id($id_user);
                                    $data = $get->fetch(PDO::FETCH_OBJ);
                                }
                                /*require_once ("../pdo/koneksi.php");
                                $id = $_GET['id'];
                                $connection = new ConnectionDB();
                                $conn = $connection->getConnection();
                                $sql 	= "SELECT * FROM tbuser WHERE id_user = '$id'";
                                $result = $conn->prepare($sql);
                                $result->execute();
                                foreach($result as $data){*/
                            ?>      
                            <form action="" method="post" class="form-horizontal" method="post">
                                <div class="form-group">
                                    <label class="col-md-2 control-label">ID. User</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" value="<?php echo $data->id_user ?>" name="id_user">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Nama User</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="nama_user" value="<?php echo $data->nama_user ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Level User</label>
                                    <div class="col-md-10">
                                        <select class="bs-select" name="lev_user" id="">
                                            <option <?php if($data->lev_user =='Administrator'){?>selected="selected"<?php } ?> value="Administrator">Administrator</option>
                                            <option <?php if($data->lev_user =='Operator'){?>selected="selected"<?php } ?> value="Operator">Operator</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <center><input type="submit" value="Ubah" name="submit" class="btn btn-info btn-rounded">
                                    <input type="reset" value="Batal" name="batal" class="btn btn-danger btn-rounded"></center>
                                </div>
                            </form>
                            <?php
                                if(isset($_POST['submit'])){
                                    $id_user = $_POST['id_user'];
                                    $nama_user = $_POST['nama_user'];
                                    $lev_user = $_POST['lev_user'];
                                    $simpan = $user->update($id_user, $nama_user, $lev_user);
                                    echo "<script>window.location.replace('index.php?page=user')</script>";
                                }
                            ?>
                        </div>
                        <!-- END BASIC INPUTS -->
                        
                        
                    </div>
<?php }?>
