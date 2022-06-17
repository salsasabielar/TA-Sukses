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
                                
                                <!-- <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="cetak laporan/p-cetak.php">Cetak Semua</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Cetak Per Tahun</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Cetak Per RW<span class="caret"></span></a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="cetak laporan/p-cetak_rw1.php">Cetak RW 01</a>
                                            <a class="dropdown-item" href="cetak laporan/p-cetak_rw2.php">Cetak RW 02</a>
                                            <a class="dropdown-item" href="cetak laporan/p-cetak_rw3.php">Cetak RW 03</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Cetak Per RT<span class="caret"></span></a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="">Cetak RT 01</a>
                                            <a class="dropdown-item" href="">Cetak RT 02</a>
                                            <a class="dropdown-item" href="">Cetak RT 03</a>
                                            <a class="dropdown-item" href="">Cetak RT 04</a>
                                            <a class="dropdown-item" href="">Cetak RT 05</a>
                                            <a class="dropdown-item" href="">Cetak RT 06</a>
                                            <a class="dropdown-item" href="">Cetak RT 07</a>
                                            <a class="dropdown-item" href="">Cetak RT 08</a>
                                            <a class="dropdown-item" href="">Cetak RT 09</a>
                                            <a class="dropdown-item" href="">Cetak RT 10</a>
                                            <a class="dropdown-item" href="">Cetak RT 11</a>
                                            <a class="dropdown-item" href="">Cetak RT 12</a>
                                            <a class="dropdown-item" href="">Cetak RT 13</a>
                                            <a class="dropdown-item" href="">Cetak RT 14</a>
                                            <a class="dropdown-item" href="">Cetak RT 15</a>
                                            <a class="dropdown-item" href="">Cetak RT 16</a>
                                            <a class="dropdown-item" href="">Cetak RT 17</a>
                                        </div>
                                    </li>
                                </ul> -->

                                <!-- <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                                    </li>
                                    
                                </ul> -->
                                <div class="tab-content pl-3 p-1" id="myTabContent">
                                    <div class="tab-pane fade show" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <form action="cetak laporan/p-cetak_tahun.php" class="mt-4">
                                            <div class="row form-group">
                                                <div class="col-12 col-md-2">
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
                                            </div>
                                        </form>
                                    </div>

                                </div>



                                <!-- <form action="cetak laporan/p-cetak_tahun.php" class="mt-4">
                                    <div class="row form-group">
                                        <div class="col-12 col-md-2">
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
                                </form> -->
                                <form action="a-laporan.php" method="get" class="mt-4">
                                    <input type="text" name="cari">
                                    <input type="text" name="carirtw">
                                    <input type="text" name="caritgl">
                                    <input class="btn btn-outline-primary btn-sm" type="submit" value="Cari">
                                </form>
                                <?php
                                if (isset($_GET['cari']) || ($_GET['carirtw']) || ($_GET['caritgl']) ) {
                                    $cari = $_GET['cari'];
                                    $carirtw = $_GET['carirtw'];
                                    $caritgl = $_GET['caritgl'];
                                    // echo "<b>Hasil pencarian : " . $cari . "</b>";
                                    // echo "<b>Hasil pencarian : " . $carirtw . "</b>";
                                }
                                ?>
                                <form action="a-laporan.php" method="get" class="mt-4">
                                    <input type="text" name="caritgl">
                                    <input class="btn btn-outline-primary btn-sm" type="submit" value="Caritgl">
                                </form>
                                <?php
                                include "config.php";
                                if (isset($_GET['caritgl'])) {
                                    $caritgl = date('d M Y', strtotime($_GET['caritgl']));
                                    $p = "where survey.tglSurvey LIKE '%" . $caritgl . "%'";
                                    $sql = "SELECT * FROM survey INNER JOIN warga ON survey.nik = warga.nik ".$p;
                                    $query_mysqli = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
                                    echo "<b>Hasil pencarian : " . $caritgl . "</b>";
                                }
                                ?>

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
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                            include "config.php";
                                            // $query_mysqli = mysqli_query($koneksi, "SELECT * FROM survey INNER JOIN warga ON survey.nik = warga.nik ORDER BY id_survey DESC") or die(mysqli_error($koneksi));
                                            if (isset($_GET['cari'])) {
                                                $cari = ($_GET['cari']);
                                                if($cari == ""){
                                                    $q = "";
                                                }else if (isset($_GET['cari'])){
                                                    $q = "where warga.nama like '%" . $cari . "%'  OR warga.nik LIKE '%" . $cari . "%'  
                                                    OR warga.jenisKelamin LIKE '%" . $cari . "%'  OR warga.pekerjaan LIKE '%" . $cari . "%' 
                                                     OR survey.status LIKE '%" . $cari . "%'  OR survey.tglSurvey LIKE '%" . $cari . "%'";
                                                }
                                                $sql = "SELECT * FROM survey INNER JOIN warga ON survey.nik = warga.nik ".$q;
                                                $query_mysqli = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
                                            }else if (isset($_GET['caritgl'])) {
                                                $caritgl = ($_GET['caritgl']);
                                                if($caritgl == ""){
                                                    $p = "";
                                                }else if (isset($_GET['caritgl'])){
                                                    $p = "where survey.tglSurvey LIKE '%" . $caritgl . "%'";
                                                }
                                                $sql = "SELECT * FROM survey INNER JOIN warga ON survey.nik = warga.nik ".$p;
                                                $query_mysqli = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
                                            }else if (isset($_GET['carirtw'])) {
                                                $carirtw = ($_GET['carirtw']);
                                                if($carirtw == ""){
                                                    $p = "";
                                                }else if (isset($_GET['carirtw'])){
                                                    $p = "where warga.alamat LIKE '%" . $carirtw . "%'";
                                                }
                                                $sql = "SELECT * FROM survey INNER JOIN warga ON survey.nik = warga.nik ".$p;
                                                $query_mysqli = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
                                            // }else if (isset($_GET['cari'])) {
                                            //     $cari = ($_GET['cari']);
                                            //     if($cari == ""){
                                            //         $q = "";
                                            //     }else{
                                            //         $q = "where warga.nik like '%" . $cari . "%'";
                                            //     }
                                            //     $sql = "SELECT * FROM survey INNER JOIN warga ON survey.nik = warga.nik ".$q;
                                            //     $query_mysqli = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
                                            // }else if (isset($_GET['cari'])) {
                                            //     $cari = ($_GET['cari']);
                                            //     if($cari == ""){
                                            //         $q = "";
                                            //     }else{
                                            //         $q = "where warga.alamat like '%" . $cari . "%'";
                                            //     }
                                            //     $sql = "SELECT * FROM survey INNER JOIN warga ON survey.nik = warga.nik ".$q;
                                            //     $query_mysqli = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
                                            // }else if (isset($_GET['cari'])) {
                                            //     $cari = ($_GET['cari']);
                                            //     if($cari == ""){
                                            //         $q = "";
                                            //     }else{
                                            //         $q = "where warga.pekerjaan like '%" . $cari . "%'";
                                            //     }
                                            //     $sql = "SELECT * FROM survey INNER JOIN warga ON survey.nik = warga.nik ".$q;
                                            //     $query_mysqli = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
                                            // }else if (isset($_GET['cari'])) {
                                            //     $cari = ($_GET['cari']);
                                            //     if($cari == ""){
                                            //         $q = "";
                                            //     }else{
                                            //         $q = "where warga.jenisKelamin like '%" . $cari . "%'";
                                            //     }
                                            //     $sql = "SELECT * FROM survey INNER JOIN warga ON survey.nik = warga.nik ".$q;
                                            //     $query_mysqli = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
                                            // }else if (isset($_GET['cari'])) {
                                            //     $cari = ($_GET['cari']);
                                            //     if($cari == ""){
                                            //         $q = "";
                                            //     }else{
                                            //         $q = "where survey.status like '%" . $cari . "%'";
                                            //     }
                                            //     $sql = "SELECT * FROM survey INNER JOIN warga ON survey.nik = warga.nik ".$q;
                                            //     $query_mysqli = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
                                            // }else if (isset($_GET['cari'])) {
                                            //     $cari = ($_GET['cari']);
                                            //     if($cari == ""){
                                            //         $q = "";
                                            //     }else{
                                            //         $q = "where survey.tglSurvey like '%" . $cari . "%'";
                                            //     }
                                            //     $sql = "SELECT * FROM survey INNER JOIN warga ON survey.nik = warga.nik ".$q;
                                            //     $query_mysqli = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
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
                                            <td><?php echo date('d M Y', strtotime($data["tglSurvey"])); ?></td>
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