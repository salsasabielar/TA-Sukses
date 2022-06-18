<?php 
include 'config.php';
$nik = $_GET['nik'];
$query = mysqli_query($koneksi, "SELECT * FROM warga");
if ($query) {
    while ($data = mysqli_fetch_array($query)) {
        $sql="UPDATE wargaList SET ket='' where nik=".$data['nik'];
        mysqli_query($koneksi, $sql);
    }
}
header("location:a-data_survey.php");
?>