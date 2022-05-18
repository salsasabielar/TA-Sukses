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
                        <h1>Laporan Status Data Calon Penerima BLTDD</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="p-cetak.php">
                                    <button type="button" class="btn btn-primary">Cetak Data</button>
                                </a>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Pekerjaan</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Status</th>
                                            <th>Tanggal Survey</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                            include "config.php";
                                            $query_mysqli = mysqli_query($koneksi, "SELECT * FROM warga") or die(mysqli_error());

                                            if (isset($_POST['cari'])) {
                                                $thn = $_POST['thn_ini'];
                                                $query = mysqli_query($koneksi, "SELECT * from warga where tanggalsurvey LIKE '%$_POST[thn_ini]%'");
                                            } else {
                                                $query = mysqli_query($koneksi, "SELECT * from warga");
                                            }
                                            $nomor = 1;
                                            if ($query) {
                                                while ($data = mysqli_fetch_array($query)) {
                                            ?>
                                                    <!-- if (isset($_POST['cari'])){
                                                            $thn=$_POST['thn_ini'];
                                                            $query= mysqli_query($koneksi, "SELECT * from coba where tanggal LIKE '%$_POST[thn_ini]%'");
                                                            }else{
                                                            $query = mysqli_query($koneksi,"SELECT * from coba");
                                                            }
                                                            $nomor=1;
                                                            $total=0;
                                                            if($query){
                                                            while($data = mysqli_fetch_array($query)){ -->
                                        <tr>
                                            <td><?php echo $nomor++; ?></td>
                                            <td><?php echo $data['nik']; ?></td>
                                            <td><?php echo $data['nama']; ?></td>
                                            <td><?php echo $data['alamat']; ?></td>
                                            <td><?php echo $data['pekerjaan']; ?></td>
                                            <td><?php echo $data['jenisKelamin']; ?></td>
                                            <td><?php echo $data['status']; ?></td>
                                            <td><?php echo $data['tanggalsurvey']; ?></td>
                                            <td>
                                            </td>
                                        </tr>
                                <?php }
                                            } ?>
                                </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /#right-panel -->
            <!-- Right Panel -->
            <?php include 'footer.php'; ?>
</body>

</html>