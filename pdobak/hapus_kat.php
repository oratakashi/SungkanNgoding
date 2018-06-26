<?php
require_once ("koneksi.php");
class buang {
    function buangdb(){
        $id = $_GET['id'];
        $connection = new ConnectionDB();
        $conn = $connection->getConnection();
        $sql = "DELETE FROM tbkategori where id_kategori='$id'";
        $result = $conn->prepare($sql);
        $result->execute();
        header('location: ../admin/index.php?page=kategori-informasi');
    }
}
$simpan = new buang();
$simpan -> buangdb();
?>