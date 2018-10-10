<?php
session_start();

require_once("functions.php");
unset($_SESSION["user"]);
session_destroy();

Func::redirect("../login.php");
?>