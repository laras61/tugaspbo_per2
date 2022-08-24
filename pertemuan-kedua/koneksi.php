<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "pertemuan_kedua";
$kon = mysqli_connect($hostname, $username, $password, $database);

if (!$kon) {
    die("Koneksi Tidak Berhasil:" . mysql_connect_error());
}

?>