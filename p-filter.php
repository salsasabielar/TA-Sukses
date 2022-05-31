<?php
include "config.php";
$ceka = $_POST['ya'];

$jumlaha = count($ceka) * 1;

$tampil = "SELECT * FROM warga ORDER BY nik desc LIMIT 1";
$hasil = mysqli_query($koneksi, $tampil);

while ($data = mysqli_fetch_array($hasil)) {
    $id_warga = $data['nik'];
}
//echo $id_warga;

for ($i = 0; $i < $jumlaha; $i++) {
    if (mysqli_query($koneksi, "INSERT INTO jawaban_survey (id_kriteria, id_survey) values ($ceka[$i], $nik)")) {
    } else {
        echo mysqli_error($koneksi);
    }
}
$result = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM jawaban_survey WHERE nik = $nik");
$row = mysqli_fetch_array($result);
$count = $row['total'];
echo $count;

$sql = mysqli_query($koneksi, "SELECT FROM status WHERE nama_status = min");
$min = mysqli_fetch_array($sql);
$sql2 = mysqli_query($koneksi, "SELECT FROM status WHERE nama_status = max");
$max = mysqli_fetch_array($sql2);
$status = "";
if ($count >= $max) {
    $status = 'Sangat Layak';
} else if ($count <= $max && $count >= $min) {
    $status = 'Layak';
} else {
    $status = 'Tidak Layak';
}

echo $status;
if (mysqli_query($koneksi, "UPDATE survey SET status='$status' WHERE nik='$nik'")) {
    header("location:a-tambah_data.php");
}
//echo $ceka[0];

?>
