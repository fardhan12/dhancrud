<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "sekolah";

$koneksi = mysqli_connect($host, $user, $password, $database);
if(!$koneksi){
    echo "gagal";
}
?>