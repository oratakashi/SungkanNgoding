<?php 
    class Informasi{
        public function __construct(){ //koneksi database
            $this->db = new PDO('mysql:host=localhost;dbname=dbcompany_171530001', 'root', '');
        }
        public function create($tgl_post, $id_kategori, $judul, $slug_judul, $foto_header, $thumbs, $isi_post, $id_user){ //menyimpan data
            try{
                $sql = "INSERT into tbpost values ('', '$tgl_post', '$id_kategori', '$judul', '$slug_judul', '$foto_header', '$thumbs','$isi_post', 0, '$id_user', CURRENT_TIMESTAMP)";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function read(){ //menampilkan data
            try{
                $sql = "select * from tbpost a, tbkategori b where a.id_kategori=b.id_kategori";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function update($id_post, $tgl_post, $id_kategori, $judul, $slug_judul, $foto_header, $thumbs, $isi_post,  $id_user){ //mengubah data
            try{
                $sql = "UPDATE tbpost SET tgl_post='$tgl_post', id_kategori='$id_kategori', judul='$judul', slug_judul='$slug_judul', foto_header='$foto_header', thumbs='$thumbs', isi_post='$isi_post',   id_user='$id_user' where id_post='$id_post'";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function read_id($id_post){ //menampilkan data
            try{
                $sql = "select * from tbpost a, tbkategori b where a.id_kategori=b.id_kategori and a.id_post='$id_post'";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function read_slug($slug_judul){ //menampilkan data
            try{
                $sql = "select * from tbpost a, tbkategori b where a.id_kategori=b.id_kategori and a.slug_judul='$slug_judul'";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function delete($id_post){ //menghapus data
            try{
                $sql = "delete from tbpost where id_post = '$id_post' ";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }
?>