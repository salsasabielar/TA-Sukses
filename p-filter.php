<?php
include "config.php";
$ceka = @$_POST['ya'];
$nik = $_GET['nik'];
if(is_null($ceka)){
    echo "<script>alert('Pilih Kriteria Terlebih Dahulu');</script>";
    echo "<script>location='a-kriteria.php?nik=$nik';</script>";
}
$jumlaha = count($ceka) * 1;

$tampil = "SELECT * FROM warga WHERE nik = '$nik'";
$hasil = mysqli_query($koneksi, $tampil);

while ($data = mysqli_fetch_array($hasil)) {
    $id_warga = $data['nik'];
    $date = $_POST['tgl'];
    $newSurvey = mysqli_query($koneksi, "INSERT INTO `survey` VALUES (null,$nik,null,null,'$date',null)");

    $survey = mysqli_query($koneksi, "SELECT * FROM survey WHERE nik = '$nik' ORDER BY id_survey DESC LIMIT 1");
    $dataSurvey = mysqli_fetch_array($survey);
    $id_survey = $dataSurvey['id_survey'];

    for ($i = 0; $i < $jumlaha; $i++) {
        if (mysqli_query($koneksi, "INSERT INTO jawaban_survey values (null, $id_survey, $ceka[$i], $nik)")) {
        } else {
            echo mysqli_error($koneksi);
        }
    }
    $result = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM jawaban_survey WHERE nik = $nik");
    $row = mysqli_fetch_array($result);
    $count = $row['total'];
    echo $count;
    
    $sql = mysqli_query($koneksi, "SELECT * FROM `status` WHERE nama_status = 'Min'");
    $min = mysqli_fetch_array($sql);
    $sql2 = mysqli_query($koneksi, "SELECT * FROM `status` WHERE nama_status = 'Max'");
    $max = mysqli_fetch_array($sql2);
    $status = "";

    if (count($ceka) >= (int)$max['jumlah']) {
        $status = 'Sangat Layak';
    } else if (count($ceka) >= (int) $min['jumlah'] && count($ceka) <= (int) $max['jumlah']) {
        $status = 'Layak';
    } else {
        $status = 'Tidak Layak';
    }
    
    mysqli_query($koneksi, "UPDATE survey SET `status` = '$status' WHERE id_survey = '$id_survey'");
    echo "<script>alert('Data Berhasil Disimpan');</script>";
    header("location:a-data_survey.php");
}

?>
