<?php
require_once ("koneksi.php");
class buang {
    function buangdb(){
        if(isset($_POST['submit'])){
            $id = $_GET['id'];
            $judul = $_POST['judul'];
            $detail = $_POST['detail'];
            $connection = new ConnectionDB();
            $conn = $connection->getConnection();
            $sql = "UPDATE tbaboutus set judul='$judul', detail_about='$detail' where id_about='$id'";
            $result = $conn->prepare($sql);
            $result->execute();
            header('location: ../admin/index.php?page=tentang');
        }
    }
}
$simpan = new buang();
$simpan -> buangdb();
?>