<?php
class Logout {
    function getOut(){
        session_start();
        require_once ("koneksi.php");
		$connection = new ConnectionDB();
        $conn = $connection->getConnection();
		$id = $_SESSION['id_user'];
		$sql = "UPDATE tbuser SET status_login=0 where id_user = :id";
        $result = $conn->prepare($sql);
        $result->bindParam(':id', $id);
		$result->execute();
        session_destroy();
        header('Location: ../admin/login.php');
        exit;
    }
}

$logout = new Logout();
$logout->getOut();