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
 
if (mysqli_query($koneksi,"UPDATE warga SET nik='$nik', nama='$nama',  alamat='$alamat', tempat='$tempat',tgl_lahir='$tgl_lahir',pekerjaan='$pekerjaan',jenisKelamin='$jenisKelamin'
WHERE nik='$nik'")) {
            header("location:a-tambah_data.php");
} else{
    echo mysqli_error($koneksi);
   }
 

?>