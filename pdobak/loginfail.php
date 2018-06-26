<?php
require_once('koneksi.php');
class Login {
    function dashboard(){
        $connection = new ConnectionDB();
        $conn = $connection->getConnection();
        try{
            if(isset($_POST['submit'])){
                $id_user = $_POST['id_user'];
                $id_user = strtoupper($id_user);
                $password = md5($_POST['password']);
                if(empty($_POST['id_user']) || empty($_POST['password'])){
                    header('Location: ../login.php?error=true');
                }else{
                    //$sql = "SELECT * FROM tbuser where id_user = '$id_user'"; my Code
                    $sql = "SELECT * FROM tbuser where id_user=:id_user and pass=:pass";
                    
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    $count = $stmt->rowCount();
                    if($count == 1){

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
        }catch (PDOException $e){
            echo "ERROR : " . $e->getMessage();
        }
    }
}
$masuk = new Login();
$masuk->dashboard();
?>