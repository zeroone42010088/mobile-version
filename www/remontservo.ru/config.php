<?php 
// Данные
$dbHost     = "localhost";
$dbUsername = "new";
$dbPassword = "8F9p8K1s";
$dbName     = "user361953_new";

// Коннетк
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
$db->set_charset("utf8");
// Чек коннект
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

 ?>