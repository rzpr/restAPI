<?php

$server = "localhost";
$user = "phpmyadmin";
$pass = "rezza123";
$database = "phpmyadmin";

$conn = mysqli_connect($server, $user, $pass, $database);
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}

?>
