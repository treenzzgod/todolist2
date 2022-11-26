<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "todolist2";
    $koneksi = mysqli_connect($server, $username, $password, $database);
    $koneksi_db = mysqli_select_db($koneksi, $database);
    // if ($koneksi_db) {
    //     echo "Koneksi Berhasil";
    // } else {
    //     echo "Koneksi Gagal";
    // }
?>