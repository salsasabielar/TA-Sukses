<?php 
include 'config.php';
$nik = $_GET['nik'];
mysqli_query($koneksi,"DELETE FROM warga WHERE nik='$nik'")or die(mysqli_error($koneksi));
 
header("location:a-tambah_data.php");
?>