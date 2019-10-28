<?php
session_start();
unset($_SESSION["uid"]);
unset($_SESSION["name"]);
unset($_SESSION["isAdmin"]);
header("location:index.php");

?>