<?php 
include 'config.php';
$id_user = $_GET['id_user'];
mysqli_query($koneksi,"DELETE FROM user WHERE id_user='$id_user'")or die(mysqli_error($koneksi));
 
header("location:a-manage_user.php");
?>