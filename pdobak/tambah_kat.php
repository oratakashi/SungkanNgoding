<?php
require_once ("koneksi.php");
class buang {
    function buangdb(){
        if(isset($_POST['submit'])){            
            $nama_kat = $_POST['nama_kategori'];
            $kat_slug = strtolower("$nama_kat");
            $kat_slug = str_ireplace(" ", "-", $kat_slug);
            $connection = new ConnectionDB();
            $conn = $connection->getConnection();
            $sql = "INSERT INTO tbkategori (kategori_post, kategori_slug) values ('$nama_kat', '$kat_slug')";
            $result = $conn->prepare($sql);
            $result->execute();
            header('location: ../admin/index.php?page=kategori-informasi');
        }
    }
}
$simpan = new buang();
$simpan -> buangdb();
?>