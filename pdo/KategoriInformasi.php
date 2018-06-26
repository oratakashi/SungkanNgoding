<?php 
    class KategoriInformasi{
        public function __construct(){ //koneksi database
            $this->db = new PDO('mysql:host=localhost;dbname=dbcompany_171530001', 'root', '');
        }
        public function create($kategori_post, $kategori_slug){ //menyimpan data
            try{
                $sql = "insert into tbkategori (kategori_post, kategori_slug) values ('$kategori_post', '$kategori_slug') ";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function read(){ //menampilkan data
            try{
                $sql = "select * from tbkategori";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function update($id_kategori, $kategori_post, $kategori_slug){ //mengubah data
            try{
                $sql = "update tbkategori set kategori_post = '$kategori_post', kategori_slug = '$kategori_slug' where id_kategori='$id_kategori' ";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function read_id($id_kategori){ //menampilkan data
            try{
                $sql = "select * from tbkategori where id_kategori='$id_kategori'";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function read_slug($kategori_slug){ //menampilkan data
            try{
                $sql = "select * from tbkategori where kategori_slug='$kategori_slug'";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function delete($id_kategori){ //menghapus data
            try{
                $sql = "delete from tbkategori where id_kategori = '$id_kategori' ";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }
    // fungsi / prosedur / method
    /* sebuah kumpulan statment atau baris kode yang berada dalam
        blok kode {} untuk menjalankan perintah  
    */
    /*
        $sql untuk menampung perintah query
        $stmt untuk menampung perintah query yang di jalankan
        $this->db untuk menampung perintah koneksi db
        $this->db->prepare(), untuk menjalankan query
        execute() perintah untuk eksekusi query
        PDOExcption fungsi pada catch untuk mengecek baris yang error

        Kenapa menggunakan preparedstatment?
        ketika menjalankan sebuah perintah untuk manipulasi data labeih cepat
     */
?>