<?php
// Dao.php
// class for saving and getting comments from MySQL
class Dao {

    private $host = "us-cdbr-east-06.cleardb.net";
    private $db = "heroku_cdd3dc0f38f2d59";
    private $user = "bf7f5793fed85c";
    private $pass = "8bbb6ec3";

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


    public function newUser($username, $password)
    {
        $user = $username;
        $pass = $password;
        $conn = $this->getConnection();
        $sql = $conn->prepare("INSERT INTO users (user, pass) VALUES (:user, :pass)");
        $sql->bindParam(":user", $user);
        $sql->bindParam(":pass", $pass);
        $sql->execute();
    }




} // end Dao