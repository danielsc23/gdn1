<?php

class Conn{
    public function __construct() {
    }
    public function getConn() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "gdn";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
}
?>