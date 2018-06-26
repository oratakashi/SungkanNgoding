<?php 
    class User{
        public function __construct(){ //koneksi database
            $this->db = new PDO('mysql:host=localhost;dbname=dbcompany_171530001', 'root', '');
        }
        public function create($id_user, $nama_user, $pass, $lev_user, $status_login){ //menyimpan data
            try{
                $sql = "INSERT into tbuser values ('$id_user', '$nama_user', '$pass', '$lev_user', '$status_login')";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function read(){ //menampilkan data
            try{
                $sql = "select * from tbuser";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function update($id_user, $nama_user, $lev_user){ //mengubah data
            try{
                $sql = "update tbuser set nama_user = '$nama_user', lev_user = '$lev_user', status_login=0 where id_user='$id_user' ";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function read_id($id_user){ //menampilkan data
            try{
                $sql = "select * from tbuser where id_user='$id_user'";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function delete($id_user){ //menghapus data
            try{
                $sql = "delete from tbuser where id_user = '$id_user' ";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }
?>