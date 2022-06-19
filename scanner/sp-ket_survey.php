<?php
include "../config.php";
$nik=$_GET['nik'];
$ket = $_POST['ket'];
// $status = $_POST['status'];

// $submit  = $_POST['submit'];
$sql="UPDATE warga SET ket='Sudah di survey' where nik=".$nik;
mysqli_query($koneksi, $sql);
    header('location:s-index.php');
?>