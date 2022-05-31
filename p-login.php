<?php 
session_start();

include 'config.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$result = mysqli_query($koneksi, "SELECT * FROM user where username='$username' and password='$password'");
foreach ($result as $data){
    $role = $data['role'];
}


$cek = mysqli_num_rows($result);
 
if($cek > 0) {
	$data = mysqli_fetch_assoc($result);
	//menyimpan session user, nama, status dan id login
	$_SESSION['username'] = $username;
	$_SESSION['nama'] = $data['nama'];
	$_SESSION['status'] = "login";
	if($role == "admin"){
		header("location:a-index.php");
	}else{
		header("location:a-tambah_data.php");
	}
	$_SESSION['id_login'] = $data['id'];
	
} else {
	echo "<script>alert('Username/password salah!');history.go(-1);</script>";
}
?>