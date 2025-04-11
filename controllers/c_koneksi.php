<?php
class Database {
        private $host = 'sql310.infinityfree.com';
        private $username = 'if0_38647834';
        private $password = 'mqU51fk9LDuy5W';
        private $database = 'if0_38647834_user';
        private $conn;
    
        public function __construct() {
            $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->database);
            if (!$this->conn) {
                die("Koneksi gagal: " . mysqli_connect_error());
            }
        }
    
        public function query($sql) {
            return mysqli_query($this->conn, $sql);
        }
    
        public function escape($value) { 
            return mysqli_real_escape_string($this->conn, $value);
        }
    
        public function getConnection() {
            return $this->conn;
        }
    }
