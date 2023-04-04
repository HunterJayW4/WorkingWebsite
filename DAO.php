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
        return $conn->query("SELECT * FROM items WHERE id LIKE '1%'")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getWomens () {
        $conn = $this->getConnection();
        return $conn->query("SELECT * FROM items WHERE id LIKE '2%'")->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getPass($user)
    {
        $conn = $this->getConnection();
        $password = $conn->query("SELECT pass FROM users WHERE user LIKE '$user'")->fetchAll(PDO::FETCH_ASSOC);
        return $password;
    }

    public function testGet()
    {
        $conn = $this->getConnection();
        $password = $conn->query("SELECT pass FROM users WHERE user LIKE 'hunty'")->fetchAll(PDO::FETCH_ASSOC);
        return $password;
    }



} // end Dao