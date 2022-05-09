<?php 
include 'config.php';
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];
 
mysqli_query($koneksi,"INSERT INTO user VALUES('','$username','$password','$role')");
 
header("location:a-manage_user.php");
?>