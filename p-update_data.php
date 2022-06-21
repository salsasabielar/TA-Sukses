<?php 
 
include 'config.php';
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tempat = $_POST['tempat'];
$tgl_lahir = $_POST['tgl_lahir'];
$jenisKelamin = $_POST['jenisKelamin'];
$pekerjaan = $_POST['pekerjaan'];
$ket = $_POST['ket'];
$survey = $_POST['survey'];

mysqli_query($koneksi, "UPDATE warga SET nik='$nik', nama='$nama',  alamat='$alamat', tempat='$tempat',tgl_lahir='$tgl_lahir',
jenisKelamin='$jenisKelamin', pekerjaan='$pekerjaan', ket='$ket', survey='$survey' WHERE nik='$nik'");

 
header("location:a-tambah_data.php");

?>