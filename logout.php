<?php
require "init.php";
$id = "true";
if (!$id) {
    header("Location: login.php");
}
HEAD::printHead("Logout - Admin Panel", "index.css");
session_start();
session_destroy();
header('Location:login.php');
?>