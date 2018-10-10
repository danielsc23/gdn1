<?php
require_once("conn.php");
class User {
    public $tablename = "users";
    public $pdo;

    public function __construct(){
        $conn = new Conn();
        $this->pdo = $conn->getConn();
    }

    public function getUserByLogin($username, $pwd) {
        $stmt = $this->pdo->prepare("SELECT * FROM $this->tablename WHERE username=? AND `PASSWORD` = ? LIMIT 1");
        $stmt->execute([$username, sha1($pwd)]);
        var_dump($username, $pwd);
        return $stmt->fetch();
    }
}
?>