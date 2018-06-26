<?php
require_once ("koneksi.php");
class buang {
    function buangdb(){
        if(isset($_POST['submit'])){            
            $judul = $_POST['judul'];
            $detail = $_POST['detail'];
            $connection = new ConnectionDB();
            $conn = $connection->getConnection();
            $sql = "INSERT INTO tbaboutus (judul, detail_about) values ('$judul', '$detail')";
            $result = $conn->prepare($sql);
            $result->execute();
            header('location: ../admin/index.php?page=tentang');
        }
    }
}
$simpan = new buang();
$simpan -> buangdb();
?>