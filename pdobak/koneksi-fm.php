<?php 
$host = "localhost";
$username = "root";
$password = "";
$url_website = "http://localhost/company_171530001";
$folder_website = "/company_171530001";

try{
    $conn = new PDO("mysql:host=$host;dbname=dbcompany_171530001", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
}catch (PDOException $e){
    echo "ERROR : " .$e->getMessage();
}
?>