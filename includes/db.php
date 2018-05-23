<?php
$dbServername ="localhost";
$dbUsername = "root";
$dbPassword = "btabta123";
$dbName = "news";

$conn = new PDO("mysql:host=$dbServername;dbname=$dbName", $dbUsername, $dbPassword);
?>