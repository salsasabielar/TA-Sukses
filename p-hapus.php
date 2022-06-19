<?php 
include 'config.php';
$id_wargaList = $_GET['id_wargaList'];
mysqli_query($koneksi,"DELETE FROM wargaList WHERE id_wargaList='$id_wargaList'")or die(mysqli_error($koneksi));
 
header("location:a-tambah_data.php");
?>