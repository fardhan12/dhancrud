<?php
    include "../connection.php";
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        $select = mysqli_query($koneksi,"DELETE FROM siswa WHERE id='$cari'"); 
        if ($select) {
           header('location: ../index.php');
        }
        else {
            echo "gagal";
        }
    }
    else {
        echo "<script>alert('data harap di masukan')</script>";
    }