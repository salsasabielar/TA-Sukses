<?php 
 
include 'config.php';
$id_user = $_POST['id_user'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];
 
mysqli_query($koneksi,"UPDATE user SET username='$username', password='$password', role='$role' WHERE id_user='$id_user'");
 
header("location:a-manage_user.php");
?>