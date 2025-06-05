<?php
$host = "localhost";
$user = "root";       
$pass = "";           
$db   = "tebak_nasib";

// Membuat koneksi
$koneksi = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
