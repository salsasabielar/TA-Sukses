<?php 
include 'config.php';
$id_warga = $_GET['id_warga'];
mysqli_query($koneksi,"DELETE FROM warga WHERE id_warga='$id_warga'")or die(mysqli_error($koneksi));
 
header("location:a-tambah_data.php");
?>