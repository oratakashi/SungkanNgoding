<?php
require_once ("koneksi.php");
class buang {
    function buangdb(){
        $id = $_GET['id'];
        $connection = new ConnectionDB();
        $conn = $connection->getConnection();
        $sql = "DELETE FROM tbaboutus where id_about='$id'";
        $result = $conn->prepare($sql);
        $result->execute();
        header('location: ../admin/index.php?page=tentang');
    }
}
$simpan = new buang();
$simpan -> buangdb();
?>