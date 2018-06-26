<?php
require_once ("koneksi.php");
class buang {
    function buangdb(){
        if(isset($_POST['submit'])){
            $id = $_GET['id'];
            $id_user = $_POST['id_user'];
            $nama_user = $_POST['nama_user'];
            $lev_user = $_POST['lev_user'];
            $status_login = 0;
            $connection = new ConnectionDB();
            $conn = $connection->getConnection();
            $sql = "UPDATE tbuser set id_user='$id_user', nama_user='$nama_user', lev_user='$lev_user', status_login='$status_login' where id_user='$id'";
            $result = $conn->prepare($sql);
            $result->execute();
            header('location: ../admin/index.php?page=user');
        }
    }
}
$simpan = new buang();
$simpan -> buangdb();
?>