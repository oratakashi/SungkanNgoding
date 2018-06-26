<?php
require_once ("koneksi.php");
class buang {
    function buangdb(){
        if(isset($_POST['submit'])){
            $id = $_GET['id'];
            $nama_kat = $_POST['nama_kategori'];
            $kat_slug = strtolower("$nama_kat");
            $kat_slug = str_ireplace(" ", "-", $kat_slug);
            $connection = new ConnectionDB();
            $conn = $connection->getConnection();
            $sql = "UPDATE tbkategori set kategori_post='$nama_kat', kategori_slug='$kat_slug' where kategori_slug='$id'";
            $result = $conn->prepare($sql);
            $result->execute();
            header('location: ../admin/index.php?page=kategori-informasi');
        }
    }
}
$simpan = new buang();
$simpan -> buangdb();
?>