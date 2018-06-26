<div class="app-container" style="background: url(assets/images/background/bg-1.jpg) center center no-repeat fixed;">
                
                <div class="app-login-box">                                        
                    <div class="app-login-box-user"><img src="img/user/no-image.png"></div>
                    <div class="app-login-box-title">
                        <div class="title">Login - Admin Panel</div>
                        <div class="subtitle">Masukan ID. User dan Password Anda</div>                        
                    </div>
                    <div class="app-login-box-container">
                        <form action="" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="id_user" placeholder="ID. User">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="form-group">

                                <div class="row">
                                    <div class="col-md-12 col-xs-12">
                                       <input type="submit" value="Sign In" class="btn btn-success btn-block" name="submit">
                                    </div>
                                </div>
                                
                            </div>
                        </form>
                        <?php
                            if(isset($_POST['submit'])){
                                if(empty($_POST['id_user']) || empty($_POST['password'])){
                                    header('Location: login.php?error=true');
                                }else{
                                    //$sql = "SELECT * FROM tbuser where id_user = '$id_user'"; my Code
                                    include '../pdo/koneksi.php';
                                    $id_user = $_POST['id_user'];
                                    $id_user = strtoupper($id_user);
                                    $password = md5($_POST['password']);
                                    $sql = "SELECT * FROM tbuser where id_user=:id_user and pass=:pass";
                                    $stmt = $db->prepare($sql);
                                    $stmt->bindParam(':id_user', $id_user);
                                    $stmt->bindParam(':pass', $password);
                                    $stmt->execute();
                                    $count = $stmt->rowCount(); //Menghitung Baris Data yang ditemukan
                                    if($count == 1){ 
                                        session_start();//Memulai Session
                                        //Session Adl Sebuah variabel global untuk menampung data
                                        $data = $stmt -> fetch(PDO::FETCH_OBJ); //membuat var bernama data berisi data yang ditemukan
                                        $_SESSION['userid'] = $data->id_user; //Menyimpan data id_user ke dalam Session userid
                                        $_SESSION['username'] = $data->nama_user;
                                        $_SESSION['level'] = $data->lev_user;
                                        //====== Tambahan Agar Status Login Berubah =======================
                                        $sql = "UPDATE tbuser set status_login = 1 where id_user='$id_user'";
                                        $result = $db->prepare($sql);
                                        $result->execute();
                                        //==================================================================
                                        header('location: index.php');
                                        /*foreach($result as $data){
                                            if($password!=$data['pass']){
                                                header('Location: ../admin/login.php?error=true');
                                            }else{
                                                session_start();
                                                $_SESSION['id_user'] = $id_user;
                                                $_SESSION['nama'] = $data['nama_user'];
                                                $_SESSION['lev_user']= $data['lev_user'];
                                                $id = $data['id_user'];
                                                $sql = "UPDATE tbuser set status_login = 1 where id_user='$id'";
                                                $result = $conn->prepare($sql);
                                                $result->execute();
                                                header('location: ../admin/index.php');
                                            }
                                        } My Code*/
                                    }else{
                                        header('Location: ../admin/login.php?error=true');
                                    }
                                    
                                }
                            }
                        ?>
                    </div>
                    <div class="app-login-box-or">
                    </div>
                    <div class="app-login-box-footer">
                        &copy; SungkanNgoding.com 2018. All rights reserved.
                    </div>
                </div>
                                
</div>