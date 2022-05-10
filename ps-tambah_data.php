<?php
include "config.php";
// $id_warga = $_POST['id_warga'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$ttl = $_POST['ttl'];
$pekerjaan = $_POST['pekerjaan'];
$jenisKelamin = $_POST['jenisKelamin'];
$tanggalsurvey = $_POST['tanggalsurvey'];
// $status = $_POST['status'];

// $submit  = $_POST['submit'];
if (mysqli_query($koneksi, "INSERT INTO warga VALUES('','$nik','$nama','$alamat','$ttl','$pekerjaan','$jenisKelamin','$tanggalsurvey','status')")) {
    $id_warga =  mysqli_insert_id($koneksi);
    if (mysqli_query($koneksi, "INSERT INTO penerimaan VALUES('','$id_warga','')")) {
        header("location:s-kriteria.php");
    }
} else {
    echo mysqli_error($koneksi);
}
?>
