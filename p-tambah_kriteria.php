<?php
include "config.php";
$nama = $_POST['nama'];

$submit  = $_POST['submit'];
if(mysqli_query ($koneksi, "INSERT INTO kriteria VALUES('','$nama')")) {
    header("location:a-tambah_kriteria.php");
  } else{
   echo mysqli_error($koneksi);
  }


?>