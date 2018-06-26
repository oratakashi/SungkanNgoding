<?php 
    class About{
        public function __construct(){ //koneksi database
            $this->db = new PDO('mysql:host=localhost;dbname=dbcompany_171530001', 'root', '');
        }
        public function create($judul, $detail_about){ //menyimpan data
            try{
                $sql = "INSERT into tbaboutus (judul, detail_about) values ('$judul', '$detail_about')";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function read(){ //menampilkan data
            try{
                $sql = "select * from tbaboutus";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function update($id_about, $judul, $detail_about){ //mengubah data
            try{
                $sql = "update tbaboutus set judul = '$judul', detail_about = '$detail_about' where id_about='$id_about' ";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function read_id($id_about){ //menampilkan data
            try{
                $sql = "select * from tbaboutus where id_about='$id_about'";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function delete($id_about){ //menghapus data
            try{
                $sql = "delete from tbaboutus where id_about = '$id_about' ";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }
?>