<?php 
 
include 'config.php';
$id_status = $_POST['id_status'];
$nama_status = $_POST['nama_status'];
$jumlah = $_POST['jumlah'];
 
mysqli_query($koneksi,"UPDATE status SET nama_status='$nama_status', jumlah='$jumlah' WHERE id_status='$id_status'");
 
header("location:a-status.php");
?>