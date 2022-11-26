<?php
include 'koneksi.php';
if (isset($_GET['id_task'])) {
    $id_task = $_GET['id_task'];
    $sql = "DELETE FROM task WHERE id_task = '$id_task'";
    $result = mysqli_query($koneksi, $sql);
    if ($result) {
        header('location: index.php');
    } else {
        echo "Gagal";
    }
}
