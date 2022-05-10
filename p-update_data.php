<?php 
 
include 'config.php';
$id_warga = $_POST['id_warga'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$ttl = $_POST['ttl'];
$pekerjaan = $_POST['pekerjaan'];
$jenisKelamin = $_POST['jenisKelamin'];
$tanggalsurvey = $_POST['tanggalsurvey'];
 
if (mysqli_query($koneksi,"UPDATE warga SET nik='$nik', nama='$nama',  alamat='$alamat', ttl='$ttl',pekerjaan='$pekerjaan',jenisKelamin='$jenisKelamin', tanggalsurvey='$tanggalsurvey'
WHERE id_warga='$id_warga'")) {
            header("location:a-tambah_data.php");
} else{
    echo mysqli_error($koneksi);
   }
 

?>