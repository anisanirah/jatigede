<?php
// Koneksi ke database
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "jatigede";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>