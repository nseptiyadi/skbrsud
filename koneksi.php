<?php

$server = "localhost";
$user = "root";
$database = "pendaftaran";
$conn = mysqli_connect($server, $user, $pass, $database);
if (!$conn) {
    die("<script>alert('gagal tersambung')")</script>");    
}
?>