<?php 
// session_start();
// if(isset($_SESSION['login'])){
	include "config.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Lampiran QR-CODE</title>
	<link rel="icon" href="./assets/img/logo.png">
	<style type="text/css">
		body{
			font-family: Arial;
		}

		@media print{
			.no-print{
				display: none;
			}
		}

		table{
			border-collapse: collapse;
		}
	</style>
</head>
<body>
<br>
<center><a href="#" class="no-print" onclick="window.print();">Cetak/Print</a></center>
<br>
<table border="6" cellpadding="80" cellspacing="0" width="100%">
<tr>
	<td>
	<table width="100%">
		<?php
		$sql=mysqli_query($koneksi, "SELECT * FROM warga WHERE id_warga='$_GET[id_warga]'");
		$d=mysqli_fetch_array($sql);
		?>
		<tr>
			<td colspan="3">
				<center>
				<img src="images/logo/logo.png" width="200px">
				<h3>PEMERINTAH KABUPATEN MALANG</h3>
                <h3>KECAMATAN NGANTANG</h3>
                <h3>DESA BANTUREJO</h3>
				<p>Jl. Raya Banturejo No. 06 Telp. (0341) 5220053</p>
                <p>Kode Pos 65392</p>
				<hr>
				<br>
				<p>Bersama ini kami lampirkan QR-CODE BUKTI SURVEY CALON PENERIMAAN BANTUAN BLTDD</p>
				<p>Atas Nama: </p>

				<h1><u><?php echo $d['nama']; ?></u></h1>

				<p></p>
				<p></p>
				</center>
			</td>
		</tr>
		<tr>
			<td><img src="generate/temp/<?php echo $d['nik'].".png"; ?>"</td>
			<td></td>
			<td width="300px">
				<p>Kepala Desa Banturejo, <?php echo tglIndonesia(date('Y-m-d')); ?></p>
				<br/>
				<br/>
				<br/>
				<p><b>KUSNANTO</b></p>
			</td>
		</tr>
	</table>
	</td>
</tr>
</table>
<script>
 window.print();
 </script>
<br>

</body>
</html>

<?php
// }else{
// 	header('location:login.php');
// }
?>