<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $url_website = "http://localhost/company_171530001";
    $folder_website = "/company_171530001";
    try{
        $db = new PDO("mysql:host=$host; dbname=dbcompany_171530001", $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }catch(PDOException $e){
        echo '<p class="bg-danger">'.$e->getMassage().'</p>';
        exit;
    }
?>