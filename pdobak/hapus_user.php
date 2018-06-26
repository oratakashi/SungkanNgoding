<?php
require_once ("koneksi.php");
class buang {
    function buangdb(){
        $id = $_GET['id'];
        $connection = new ConnectionDB();
        $conn = $connection->getConnection();
        $sql = "DELETE FROM tbuser where id_user='$id'";
        $result = $conn->prepare($sql);
        $result->execute();
        header('location: ../admin/index.php?page=user');
    }
}
$simpan = new buang();
$simpan -> buangdb();
?>