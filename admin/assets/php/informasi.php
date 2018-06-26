<?php if($_GET['page']=='informasi'){ ?>
                    <div class="app-heading app-heading-bordered app-heading-page">
                        <div class="icon icon-lg">
                            <span class="fa fa-newspaper-o"></span>
                        </div>
                        <div class="title">
                            <h1>Informasi Perusahaan - Admin Panel</h1>
                            <p>Akademi Komunitas Negeri Kajen</p>
                        </div>               
                        <!--<div class="heading-elements">
                            <a href="#" class="btn btn-danger" id="page-like"><span class="app-spinner loading"></span> loading...</a>
                        </div>-->
                    </div>
                    <div class="app-heading-container app-heading-bordered bottom">
                        <ul class="breadcrumb">
                            <li><a href="#">System</a></li>                                                     
                            <li class="active">Informasi</li>
                        </ul>
                    </div>
                    <div class="container">              
                                            <div class="block block-condensed">
                                                <!-- START HEADING -->
                                                <div class="app-heading app-heading-small">
                                                    <div class="title">
                                                        <h5>Data Informasi</h5>
                                                        <a href="index.php?page=tambah-informasi"><button class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</button></a>
                                                    </div>
                                                </div>
                                                <!-- END HEADING -->
                                                
                                                <div class="block-content">
                                                    
                                                    <table class="table table-striped table-bordered datatable-extended">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>ID. Post</th>
                                                                <th>Tgl. Post</th>
                                                                <th>Judul</th>
                                                                <th>Status</th>
                                                                <th>[Aksi]</th>
                                                            </tr>
                                                        </thead>                                    
                                                        <tbody>
                                                            <?php
                                                                // Mendapatkan Data Tabel
                                                                require '../pdo/Informasi.php';
                                                                $informasi = new Informasi();
                                                                $tampil = $informasi->read();
                                                                $no = 1;
                                                                while($data = $tampil->fetch(PDO::FETCH_OBJ)){
                                                            ?>
                                                            <tr>
                                                                <td><?php echo $no++ ?></td>
                                                                <td><?php echo $data->id_post ?></td>
                                                                <td><?php echo $data->tgl_post ?></td>
                                                                <td><?php echo $data->judul ?></td>
                                                                <td><?php echo $data->status_aktif ?></td>
                                                                <td><a href="index.php?page=edit-informasi&id=<?php echo $data->id_post ?>"><button class="btn btn-primary"><i class="fa fa-pencil"></i></button></a>&nbsp<a href="index.php?page=informasi&delete=<?php echo $data->id_post?>"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a></td>
                                                            </tr>
                                                            <?php } ?>  
                                                            <?php 
                                                                if(isset($_GET['delete'])){
                                                                $id_post=$_GET['delete'];
                                                                    $hapus = $informasi->delete($id_post);
                                                                    echo "<script>window.location.replace('index.php?page=informasi')</script>";
                                                                }
                                                            ?>                          
                                                        </tbody>
                                                    </table>
                                                    
                                                </div>
                                                
                                            </div>
                                            
                    </div>
<?php }elseif($_GET['page']=='tambah-informasi'){?>
                     <div class="app-heading app-heading-bordered app-heading-page">
                        <div class="icon icon-lg">
                            <span class="fa fa-newspaper-o"></span>
                        </div>
                        <div class="title">
                            <h1>Tambah Informasi - Admin Panel</h1>
                            <p>Akademi Komunitas Negeri Kajen</p>
                        </div>               
                        <!--<div class="heading-elements">
                            <a href="#" class="btn btn-danger" id="page-like"><span class="app-spinner loading"></span> loading...</a>
                        </div>-->
                    </div>
                    <div class="app-heading-container app-heading-bordered bottom">
                        <ul class="breadcrumb">
                            <li><a href="#">System</a></li>                                                     
                            <li><a href="index.php?page=informasi">Informasi</a></li>
                            <li class="active">Tambah Informasi</li>
                        </ul>
                    </div>
                    <div class="container">
                        
                        <!-- BASIC INPUTS -->
                        <div class="block">                        
                            
                            <div class="app-heading app-heading-small">                                
                                <a href="index.php?page=informasi" style="float:right"><button class="btn btn-danger"><i class="fa fa-close"></i></button></a>
                                <div class="title">
                                    <h2>Tambah Informasi Baru</h2>
                                    <p>Silahkan isi form di bawah ini</p>
                                </div>                                
                            </div>
                                  
                            <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Tgl. Post</label>
                                    <div class="col-md-2">
                                        <div class="input-group bs-datepicker">
                                            <input type="text" name="tgl_post" class="form-control" id="">
                                            <span class="input-group-addon">
                                                <span class="icon-calendar-full"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Kategori Informasi</label>
                                    <div class="col-md-10">
                                        <select class="bs-select" name="id_kategori" data-live-search="true">
                                            <?php
                                                // Mendapatkan Data Tabel
                                                require '../pdo/KategoriInformasi.php';
                                                $kategori = new KategoriInformasi();
                                                $tampil = $kategori->read();
                                                while($combo = $tampil->fetch(PDO::FETCH_OBJ)){
                                            ?>
                                                <option value="<?= $combo->id_kategori ?>"><?= $combo->kategori_post ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Judul</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="judul">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Foto Header</label>
                                    <div class="col-md-10">
                                        <input type="file" name="foto_header" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Isi Informasi</label>
                                    <div class="col-md-10">
                                        <textarea name="isi_informasi" id="richtext" class="form-control" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <center><input type="submit" value="Simpan" name="btnSimpan" class="btn btn-info btn-rounded">
                                    <input type="reset" value="Batal" name="batal" class="btn btn-danger btn-rounded"></center>
                                </div>
                            </form>
                            <?php 
                                require '../pdo/Informasi.php';
                                require 'upload.php';
                                if(isset($_POST['btnSimpan'])){
                                    $foto_tmp = $_FILES['foto_header']['tmp_name'];
                                    $foto_name = $_FILES['foto_header']['name'];
                                    $foto_type = $_FILES['foto_header']['type'];
                                    $foto_size = $_FILES['foto_header']['size'];

                                    upload_foto($foto_name,$foto_type);
                                    
                                    echo "<script>window.location.replace('index.php?page=informasi')</script>";
                                }
                            ?>
                        </div>
                        <!-- END BASIC INPUTS -->
                        
                        
                    </div>

<?php }elseif($_GET['page']=='edit-informasi'){?>
                     <div class="app-heading app-heading-bordered app-heading-page">
                        <div class="icon icon-lg">
                            <span class="fa fa-newspaper-o"></span>
                        </div>
                        <div class="title">
                            <h1>Ubah Informasi - Admin Panel</h1>
                            <p>Akademi Komunitas Negeri Kajen</p>
                        </div>               
                        <!--<div class="heading-elements">
                            <a href="#" class="btn btn-danger" id="page-like"><span class="app-spinner loading"></span> loading...</a>
                        </div>-->
                    </div>
                    <div class="app-heading-container app-heading-bordered bottom">
                        <ul class="breadcrumb">
                            <li><a href="#">System</a></li>                                                     
                            <li><a href="index.php?page=informasi">Informasi</a></li>
                            <li class="active">Ubah Informasi</li>
                        </ul>
                    </div>
                    <div class="container">
                        
                        <!-- BASIC INPUTS -->
                        <div class="block">                        
                            
                            <div class="app-heading app-heading-small">                                
                            <a href="index.php?page=informasi" style="float:right"><button class="btn btn-danger"><i class="fa fa-close"></i></button></a>
                                <div class="title">
                                    <h2>Ubah Informasi : <?php echo $_GET['id'] ?></h2>
                                    <p>Silahkan isi form di bawah ini</p>
                                </div>                                
                            </div>
                            <?php
                                require '../pdo/Informasi.php';
                                if(isset($_GET['id'])){
                                    $id_post = $_GET['id'];
                                    $informasi = new Informasi();
                                    $get = $informasi->read_id($id_post);
                                    $data = $get->fetch(PDO::FETCH_OBJ);
                                }
                            ?>                            
                            <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Tgl. Post</label>
                                    <div class="col-md-2">
                                        <div class="input-group bs-datepicker">
                                            <input type="text" name="tgl_post" class="form-control" id="" value="<?= $data->tgl_post ?>">
                                            <span class="input-group-addon">
                                                <span class="icon-calendar-full"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Kategori Informasi</label>
                                    <div class="col-md-10">
                                        <select class="bs-select" name="id_kategori" data-live-search="true">
                                            <option value="<?= $data->id_kategori ?>"><?= $data->kategori_post ?></option>
                                            <?php
                                                // Mendapatkan Data Tabel
                                                require '../pdo/KategoriInformasi.php';
                                                $kategori = new KategoriInformasi();
                                                $tampil = $kategori->read();
                                                while($combo = $tampil->fetch(PDO::FETCH_OBJ)){
                                            ?>
                                                <option value="<?= $combo->id_kategori ?>"><?= $combo->kategori_post ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Judul</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="judul" value="<?= $data->judul ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Foto Header</label>
                                    <div class="col-md-10">
                                        <input type="file" name="foto_header" class="form-control" ><br>
                                        <img src="../media/thumbs/<?= $data->thumbs ?>" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Isi Informasi</label>
                                    <div class="col-md-10">
                                        <textarea name="isi_informasi" id="richtext" class="form-control" cols="30" rows="10"><?= $data->isi_post ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <center><input type="submit" value="Simpan" name="btnUbah" class="btn btn-info btn-rounded">
                                    <input type="reset" value="Batal" name="batal" class="btn btn-danger btn-rounded"></center>
                                </div>
                            </form>
                            <?php 
                                //require '../pdo/Informasi.php';
                                require 'upload.php';
                                if(isset($_POST['btnUbah'])){
                                    $foto_tmp = $_FILES['foto_header']['tmp_name'];
                                    $foto_name = $_FILES['foto_header']['name'];
                                    $foto_type = $_FILES['foto_header']['type'];
                                    $foto_size = $_FILES['foto_header']['size'];
                                    $id_post = $_GET['id'];
                                    upload_foto($foto_name,$foto_type);
                                    
                                    echo "<script>window.location.replace('index.php?page=informasi')</script>";
                                }
                            ?>
                        </div>
                        <!-- END BASIC INPUTS -->
                        
                        
                    </div>

<?php }?>