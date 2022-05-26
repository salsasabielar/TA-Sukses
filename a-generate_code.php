<!doctype html>
<html class="no-js" lang="en">

<?php include 'header.php'; ?>

<body>

    <?php include 'sidebar.php'; ?>

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <?php include 'sidebar2.php'; ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Generate QR-Code</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">

                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                            include "config.php";
                                            $sql = mysqli_query($koneksi, "SELECT * FROM warga ORDER BY nik ASC");
                                            $no = 1;
                                            while ($d = mysqli_fetch_array($sql)) {
                                                echo "<tr>
							<td width='40px' align='center'>$no</td>
							<td>$d[nik]</td>
							<td>$d[nama]</td>
							<td>$d[alamat]</td>
							<td>$d[jenisKelamin]</td>
							<td width='180px' align='center'>
								<a class='btn btn-danger btn-sm' href='p-generate_code.php?nik=$d[nik]&nomor=$d[nik]'>Generate</a>
								<a class='btn btn-success btn-sm' href='p-cetak_qrcode.php?nik=$d[nik]' target='_blank'>Cetak</a>
							</td>
						</tr>";
                                                $no++;
                                            }
                                            ?>
                                            <?php ?>

                                    </tbody>
                                </table>
                            </div><!-- /#right-panel -->

                            <!-- Right Panel -->

                            <?php include 'footer.php'; ?>

</body>

</html>