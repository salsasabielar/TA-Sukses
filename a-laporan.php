<?php
session_start(); // Start session nya
// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if (!isset($_SESSION['username'])) { // Jika tidak ada session username berarti dia belum login
    header("location: index.php"); // Kita Redirect ke halaman index.php karena belum login
}
?>
<!doctype html>
<html class="no-js" lang="en">
<?php include 'header.php'; ?>

<body>
    <?php include 'sidebar.php'; ?>
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        <?php include 'sidebar2.php'; ?>

        <div class="breadcrumbs">
            <div class="col-sm-auto">
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
                                <a href="cetak laporan/p-cetak.php">
                                    <button type="button" class="btn btn-primary">Cetak All</button>
                                </a>
                                <a href="cetak laporan/p-cetak_rw1.php">
                                    <button type="button" class="btn btn-primary">Cetak RW.01</button>
                                </a>
                                <a href="cetak laporan/p-cetak_rw2.php">
                                    <button type="button" class="btn btn-primary">Cetak RW.02</button>
                                </a>
                                <a href="cetak laporan/p-cetak_rw3.php">
                                    <button type="button" class="btn btn-primary">Cetak RW.03</button>
                                </a>
                                <div class="card">
                            <div class="card-header">
                            <!-- <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"> -->
                            <!-- <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                            <div class="form-group">
                                <label for="sel1">Kata Kunci:</label>
                                <?php
                                $kata_kunci="";
                                if (isset($_POST['kata_kunci'])) {
                                    $kata_kunci=$_POST['kata_kunci'];
                                }
                                ?>
                                <input type="text" name="kata_kunci" value="<?php echo $kata_kunci;?>" class="form-control"  required/>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-info" value="Cari">
                            </div>
                            </form> -->
                            <form action="a-laporan.php" method="get">
                                    <input type="text" name="cari">
                                    <input type="submit" value="Cari">
                                </form>
                                <?php 
                                    if(isset($_GET['cari'])){
                                        $cari = $_GET['cari'];
                                        echo "<b>Hasil pencarian : ".$cari."</b>";
                                    }
                                ?>
                    </div>
                                <form action="cetak laporan/p-cetak_tahun.php" class="mt-4">
                                    <div class="row form-group">
                                        <div class="col-12 col-md-3">
                                            <select name="tahun" class="form-control" required>
                                                <option value="">Pilih Tahun</option>
                                                <?php for ($i = 1990; $i <= 2050; $i++) : ?>
                                                    <option value="<?= $i ?>" <?= $i == date('Y') ? 'selected' : '' ?>><?= $i ?></option>
                                                <?php endfor; ?>
                                            </select>

                                        </div>
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            Cetak
                                        </button>
                                        <p style="text-indent: 1em;">&nbsp</p>

                                        <a href="cetak laporan/p-cetak.php" class="btn btn-outline-danger">Cetak Semua</a>
                                    </div>

                                </form>
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
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                            include "config.php";
                                            $query_mysqli = mysqli_query($koneksi, "SELECT * FROM survey INNER JOIN warga ON survey.nik = warga.nik ORDER BY id_survey DESC") or die(mysqli_error($koneksi));
                                            if (isset($_GET['cari'])) {
                                                $cari=($_GET['cari']);
                                                $sql="SELECT * FROM survey INNER JOIN warga ON survey.nik = warga.nik where warga.nama like '%salsa%'";
                                            } else {
                                                $query_mysqli = mysqli_query($koneksi, "SELECT * FROM survey INNER JOIN warga ON survey.nik = warga.nik ORDER BY id_survey DESC") or die(mysqli_error($koneksi));
                                               }
                                            $nomor = 1;
                                            if ($query_mysqli) {
                                                while ($data = mysqli_fetch_array($query_mysqli)) {
                                            ?>
                                        <tr>
                                            <td><?php echo $nomor++; ?></td>
                                            <td><?php echo $data['nik']; ?></td>
                                            <td><?php echo $data['nama']; ?></td>
                                            <td><?php echo $data['alamat']; ?></td>
                                            <td><?php echo $data['pekerjaan']; ?></td>
                                            <td><?php echo $data['jenisKelamin']; ?></td>
                                            <td><?php echo $data['status']; ?></td>
                                            <td><?php echo $data['tglSurvey']; ?></td>
                                            <td><a class="btn btn-sm btn-warning" href="a-detail.php?nik=<?php echo $data['nik']; ?>&id_survey=<?= $data['id_survey'] ?>">Detail</a>
                                                <a class="btn btn-danger btn-sm" href="a-cetak_detail.php?nik=<?php echo $data['nik']; ?>&id_survey=<?= $data['id_survey'] ?>">Cetak</a>
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