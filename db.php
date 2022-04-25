<?php
/**
 * @var $mysqli mysqli
 */

$host = "localhost";
$name = "school exchange";
$user = "root";
$password = "";

$PDO = new PDO("mysql:host=$host;dbname=$name", $user, $password);
?>