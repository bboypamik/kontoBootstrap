<?php

$id = $_GET["id"];

$sql = "DELETE FROM klijenti WHERE id =$id";

$statement = $conn->prepare($sql);
$statement->execute();
header('Location: index.php?stranica=klijenti');
?>