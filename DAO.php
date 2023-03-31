<?php
// Dao.php
// class for saving and getting comments from MySQL
class Dao {

    private $host = "localhost";
    private $db = "shop";
    private $user = "hunty";
    private $pass = "Hunt2009";

    public function getConnection () {
        return
            new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user,
                $this->pass);
    }

    public function getMens () {
        $conn = $this->getConnection();
        return $conn->query("SELECT * FROM M_Items")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getWomens () {
        $conn = $this->getConnection();
        return $conn->query("SELECT * FROM W_Items")->fetchAll(PDO::FETCH_ASSOC);
    }


} // end Dao