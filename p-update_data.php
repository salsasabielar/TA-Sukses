<?php 
 
include 'config.php';
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tempat = $_POST['tempat'];
$tgl_lahir = $_POST['tgl_lahir'];
$pekerjaan = $_POST['pekerjaan'];
$jenisKelamin = $_POST['jenisKelamin'];
$tanggalsurvey = $_POST['tanggalsurvey'];

mysqli_query($koneksi, "UPDATE warga SET nik='$nik', nama='$nama',  alamat='$alamat', tempat='$tempat',tgl_lahir='$tgl_lahir',jenisKelamin='$jenisKelamin', pekerjaan='$pekerjaan' WHERE nik='$nik'");
mysqli_query($koneksi, "UPDATE wargaList SET nik='$nik', nama='$nama',  alamat='$alamat', tempat='$tempat',tgl_lahir='$tgl_lahir',jenisKelamin='$jenisKelamin',pekerjaan='$pekerjaan' WHERE nik='$nik'");
 
header("location:a-tambah_data.php");

?>