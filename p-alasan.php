<?php
include "config.php";
$nik = $_POST['nik'];
$alasan = $_POST['alasan'];

// $submit  = $_POST['submit'];
// if(mysqli_query ($koneksi, "UPDATE INTO data_terhapus VALUES('','$nik','$nama','$alamat','$ttl','$pekerjaan','$jenisKelamin','$status','$alasan')")) {
    if (mysqli_query($koneksi,"UPDATE data_terhapus SET alasan='$alasan' WHERE nik=$nik")) { 
    header("location:a-tambah_data.php");
  } else{
   echo mysqli_error($koneksi);
  }
 

?>