<?php 
include 'config.php';
$id_warga = $_GET['id_warga'];;
// $alasan = $_GET['alasan'];;
$tampil ="SELECT * FROM warga where id_warga = '$id_warga' ";
	$hasil=mysqli_query($koneksi,$tampil); 
	while ($data=mysqli_fetch_array($hasil)){
        $nik = $data['nik'];
        $nama = $data['nama'];
        $alamat = $data['alamat'];
        $ttl = $data['ttl'];
        $pekerjaan = $data['pekerjaan'];
        $jenisKelamin = $data['jenisKelamin'];
        $status = $data['status'];
        mysqli_query($koneksi,"INSERT INTO data_terhapus values('','$nik','$nama','$alamat','$ttl','$pekerjaan','$jenisKelamin','$status','')")or die(mysqli_error($koneksi));
        mysqli_query($koneksi,"DELETE FROM warga WHERE id_warga='$id_warga'")or die(mysqli_error($koneksi));
    }
header("location:halaman_alasan.php?nik='$nik'");
    
?>