<?php
session_start();
$_SESSION["is_logged"] = false;
header('Location: http://localhost/kontoBootstrap/index.php?stranica=pocetna');
?>