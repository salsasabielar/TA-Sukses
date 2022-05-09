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
$ceka=$_POST['ya'];
$jumlaha=count($ceka)*1;
echo $jumlaha;

mysqli_query($koneksi,"UPDATE warga SET nik='$nik', nama='$nama', ttl='$ttl',pekerjaan='$pekerjaan',jenisKelamin='$jenisKelamin', tanggalsurvey='$tanggalsurvey'
 WHERE id_warga='$id_warga'");

if (mysqli_query($koneksi,"DELETE FROM kriteria_warga WHERE id_warga='$id_warga'")) {
    for($i=0; $i < $jumlaha; $i++){    
        if(mysqli_query ($koneksi, "INSERT INTO kriteria_warga (id_kriteria, id_warga) values ($ceka[$i], $id_warga)")) {               
        
        } else{
        echo mysqli_error($koneksi);
      }    
    
    }
    $result = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM kriteria_warga WHERE id_warga = $id_warga");
        $row = mysqli_fetch_array($result);
        $count = $row['total'];
        echo $count;
        $status = "";
                        if($count >= 11 ){$status='Sangat Layak';}
                        else if($count <= 10 && $count >= 6 ){$status='Layak';}
                        else {$status='Tidak Layak';}
                        
                    echo $status;
        if(mysqli_query($koneksi,"UPDATE warga SET status='$status' WHERE id_warga='$id_warga'")){
           header("location:a-tambah_data.php");
           
        }

}
 

?>