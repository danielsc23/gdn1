<?php
require_once("conn.php");
class Imagecrud {
    public $tablename = "imagepath";
    public $pdo;

    public function __construct() {
        $conn = new Conn();
        $this->pdo = $conn->getConn();
    }

    public function getImagePathByPosition($position) {
        $stmt = $this->pdo->prepare("SELECT * FROM $this->tablename WHERE position=:position");
        $stmt->execute(['position' => $position]);
        $row = $stmt->fetch();
        return $row["path"];
    }

    public function deleteImagePathByPosition($position) {
        $stmt = $this->pdo->prepare("DELETE FROM $this->tablename WHERE position=:position");
        $stmt->execute(['position' => $position]);
    }

    public function setImagePathByPosition($path, $position) {
        $this->deleteImagePathByPosition($position);
            
        $sql = "INSERT INTO $this->tablename (`path`, `position`) VALUES (?,?)";
        $stmt= $this->pdo->prepare($sql);
        $stmt->execute([$path, $position]);
    }
}
?>