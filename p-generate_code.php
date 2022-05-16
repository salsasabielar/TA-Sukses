<?php
include 'config_tgl.php';
$id_warga = $_GET['id_warga'];
mysqli_query($koneksi, "SELECT * FROM warga")or die(mysqli_error($koneksi));

if(isset($_GET['nomor']) && $_GET['nomor'] !=''){
    //tampung data kiriman
    $nik=$_GET['nik'];
    $nomor = $_GET['nomor'];


    // include file qrlib.php
    include "phpqrcode/qrlib.php";

    //Nama Folder file QR Code kita nantinya akan disimpan
    $tempdir = "generate/temp/";

    //jika folder belum ada, buat folder 
    if (!file_exists($tempdir)){
        mkdir($tempdir);
    }

    #parameter inputan
    $isi_teks = $nomor;
    $namafile = $nik.".png";
    $quality = 'H'; //ada 4 pilihan, L (Low), M(Medium), Q(Good), H(High)
    $ukuran = 5; //batasan 1 paling kecil, 10 paling besar
    $padding = 2;

    QRCode::png($isi_teks,$tempdir.$namafile,$quality,$ukuran,$padding);

    // header('location:a-generate_code.php');
    header('location:p-cetak_qrcode.php?nik=' . $nik);
}
// }else{
//     header('location:a-generate_code.php');
// }
?>