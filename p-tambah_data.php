<?php
include "config.php";
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tempat = $_POST['tempat'];
$tgl_lahir = $_POST['tgl_lahir'];
$pekerjaan = $_POST['pekerjaan'];
$jenisKelamin = $_POST['jenisKelamin'];
$ket = $_POST['ket'];
// $status = $_POST['status'];

// $submit  = $_POST['submit'];
mysqli_query($koneksi, "INSERT INTO warga VALUES('$nik','$nama','$alamat','$tempat','$tgl_lahir','$jenisKelamin','$pekerjaan','$ket')");
mysqli_query($koneksi, "INSERT INTO wargaList VALUES('$nik','$nama','$alamat','$tempat','$tgl_lahir','$jenisKelamin','$pekerjaan','$ket')");
    header("location:a-tambah_data.php");
?>
