<?php
    /* Contoh model dengan data lokal
    class blog_model {
        private $blog = [
            [
                "penulis" => "Az Zikra Ismunandar",
                "judul" => "Belajar PHP MVC",
                "tulisan" => ""
            ],
            [
                "penulis" => "Az Zikra Ismunandar",
                "judul" => "Belajar OOP PHP",
                "tulisan" => "Tutrial PHP OOP"
            ],
            [
                "penulis" => "Az Zikra Ismunandar",
                "judul" => "Belajar PHP Laravel",
                "tulisan" => "Tutorial PHP Laravel"
            ]
        ];

        public function getAllBlog() {
            return $this->blog;
        }
    }
    */

    //Contoh menggunakan database
    class blog_model {
        private $table = 'blog';
        private $db;
    
        public function __construct() {
            $this->db = new Database;
        }
    
        public function getAllBlog() {
            $query = "SELECT * FROM " . $this->table;
            $this->db->query($query);
            return $this->db->resultAll();
        }
    
        public function getBlogById($id) {
            $query = "SELECT * FROM " . $this->table . " WHERE id=:id";
            $this->db->query($query);
            $this->db->bind('id', $id);
            return $this->db->resultSingle();
        }

        public function buatArtikel($data) {
            $query = "INSERT INTO blog VALUES
            ('', :judul, :tulisan, :penulis)";
            $this->db->query($query);
            $this->db->bind('judul', $data['judul']);
            $this->db->bind('tulisan', $data['tulisan']);
            $this->db->bind('penulis', $data['penulis']);
            $this->db->execute();
            return $this->db->rowCount();
        }
    }    
?>