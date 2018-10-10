<?php
require_once("user.php");
class Func {
    public static function redirect($path) {
        header("Location: $path");
    }

    public static function isAdmin() {
        $user = null;
        if (isset($_SESSION['user'])) {
            $user = $_SESSION["user"];
        } else {
            return false;
        }
        if ( $user ) {
            return $user['type'] == 1;
        }
        return false;
    }

    public static function stringpost($index) {
        if ($_POST[$index] != null) {
            return $_POST[$index];
        }
        return "";
    }
}
?>