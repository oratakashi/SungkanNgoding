<?php
    session_start();
    include '../pdo/koneksi.php';
    //====== Tambahan Agar Status Login Berubah =======================
    $id_user = $_SESSION['userid'];
    $sql = "UPDATE tbuser set status_login = 0 where id_user='$id_user'";
    $result = $db->prepare($sql);
    $result->execute();
    //==================================================================
    unset($_SESSION['userid']);
    unset($_SESSION['level']);
    unset($_SESSION['username']);
    session_destroy();
    header('location: ../admin/login.php');
?>