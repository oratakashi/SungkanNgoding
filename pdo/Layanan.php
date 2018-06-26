<?php 
    class Layanan{
        public function __construct(){ //koneksi database
            $this->db = new PDO('mysql:host=localhost;dbname=dbcompany_171530001', 'root', '');
        }
        public function create($nama_layanan, $slug_layanan, $isi_layanan){ //menyimpan data
            try{
                $sql = "INSERT into tblayanan values ('', '$nama_layanan', '$slug_layanan', '$isi_layanan', '".$_SESSION['userid']."')";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function read(){ //menampilkan data
            try{
                $sql = "select * from tblayanan";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function update($id_layanan, $nama_layanan, $isi_layanan, $slug_layanan){ //mengubah data
            try{
                $sql = "update tblayanan set nama_layanan = '$nama_layanan', isi_layanan = '$isi_layanan', id_user='".$_SESSION['userid']."' where id_layanan='$id_layanan' ";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function read_id($id_layanan){ //menampilkan data
            try{
                $sql = "select * from tblayanan where id_layanan='$id_layanan'";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function read_slug($slug_layanan){ //menampilkan data
            try{
                $sql = "select * from tblayanan where slug_layanan='$slug_layanan'";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function delete($id_layanan){ //menghapus data
            try{
                $sql = "delete from tblayanan where id_layanan = '$id_layanan' ";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }
?>