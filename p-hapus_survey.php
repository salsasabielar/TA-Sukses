<?php
include "config.php";
$nik=$_GET['nik'];
// $status = $_POST['status'];

// $submit  = $_POST['submit'];
$sql="UPDATE warga SET survey='NON-AKTIF' where nik=".$nik;
mysqli_query($koneksi, $sql);
    header('location:a-tambah_data.php');
?>