<?php 
// Данные
$dbHost     = "localhost";
$dbUsername = "u0353001_default";
$dbPassword = "UxpF1E_k";
$dbName     = "u0353001_default";

// Коннетк
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
$db->set_charset("utf8");
// Чек коннект
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>