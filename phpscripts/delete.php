<?php
session_start();
require_once("functions.php");
require_once("imagecrud.php");

if (!Func::isAdmin()) {
    Func::redirect("login.php");
}

$img = new Imagecrud();
if (isset($_POST["submit"])) {
    $position = $_POST["position"];
    $img->deleteImagePathByPosition($position);
    Func::redirect("../admin.php");
}
?>