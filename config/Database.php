<?php
    class Database {
        // db params
        private $host = 'localhost';
        private $db_name = 'myblog';
        private $username = 'root';
        private $pasword = '123456';
        private $conn;

        // db connect
        public function conncet() {
            $this->conn = null;

            try {
                $this->conn = new PDO('mysql:host='. $this->host . ';dbname= '. $this->db_name, $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOExeption $e) {
                echo 'Connection Error: ' . $e->getMessage();
            }

            return $this->conn;
        }
    }