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
                            <a href="cetak laporan/p-cetak.php" class="btn btn-outline-danger">Cetak Semua</a>
                                <form action="a-laporan.php" class="mt-4">
                                    <div class="row form-group">
                                        <div class="col-12 col-md-2">
                                            <select name="tgl" class="form-control">
                                                <option value="">Pilih Tanggal</option>
                                                <?php for ($i = 1; $i <= 31; $i++) : ?>
                                                    <option value="<?= $i ?>" <?= $i == date('d') ?>><?= $i ?></option>
                                                <?php endfor; ?>
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <select name="bulan" class="form-control">
                                                <option value="">Pilih Bulan</option>
                                                <?php for ($i = 1; $i <= 12; $i++) : ?>
                                                    <option value="<?= $i ?>" <?= $i == date('m') ?>><?= $i ?></option>
                                                <?php endfor; ?>
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <select name="tahun" class="form-control">
                                                <option value="">Pilih Tahun</option>
                                                <?php for ($i = 2010; $i <= 2100; $i++) : ?>
                                                    <option value="<?= $i ?>" <?= $i == date('Y') ?>><?= $i ?></option>
                                                <?php endfor; ?>
                                            </select>
                                        </div>
                                        <!-- <a href="cetak laporan/p-cetak.php" class="btn btn-outline-danger">Cetak Semua</a> -->
                                    </div>

                                    <div class="col-12 col-md-3">
                                        <input type="text" name="cari" placeholder="Masukkan Kata Kunci" class="form-control">
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <input type="text" name="carirtw" placeholder="Masukkan Alamat" class="form-control">
                                    </div>
                                    <!-- <button type="submit" class="btn btn-primary btn-sm">
                                        Cetak
                                    </button> -->

                                    <input class="btn btn-outline-primary btn-sm" type="submit" value="Cari">
                                    <?php
                                    if (isset($_GET['cari'])) { ?>

                                        <a href="cetak laporan/p-cetak_tahun.php?tgl=<?php echo $_GET['tgl']; ?>&&bulan=<?php echo $_GET['bulan']; ?>&&tahun=<?php echo $_GET['tahun']; ?>&&cari=<?php echo $_GET['cari']; ?>&&carirtw=<?php echo $_GET['carirtw']; ?>" class="btn btn-outline-danger btn-sm">Cetak</a>

                                    <?php }
                                    ?>

                                </form>
                                <?php
                                if (isset($_GET['cari']) && ($_GET['carirtw'])) {
                                    $cari = $_GET['cari'];
                                    $carirtw = $_GET['carirtw'];
                                    echo "<b>Hasil pencarian : " . $cari . "</b>";
                                    echo "<b>Hasil pencarian : " . $carirtw . "</b>";
                                }
                                ?>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>NIK</th>
                                            <th>Surveyor</th>
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
                                                $q = "";
                                                if ($_GET['tahun'] != '' && $_GET['bulan'] != '' && $_GET['tgl'] != '') {
                                                    $carirtw = ($_GET['carirtw']);
                                                    $tahun = $_GET['tahun'];
                                                    $bulan = $_GET['bulan'];
                                                    $tgl = $_GET['tgl'];
                                                    $q = "where (warga.alamat LIKE '%" . $carirtw . "%' AND warga.nama like '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND MONTH(tglSurvey)='$bulan' AND DAY(tglSurvey) = '$tgl' ))
                                                    OR (warga.alamat LIKE '%" . $carirtw . "%' AND warga.nik LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND MONTH(tglSurvey)='$bulan' AND DAY(tglSurvey) = '$tgl' ) )
                                                    OR (warga.alamat LIKE '%" . $carirtw . "%' AND warga.jenisKelamin LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND MONTH(tglSurvey)='$bulan' AND DAY(tglSurvey) = '$tgl' ))
                                                    OR (warga.alamat LIKE '%" . $carirtw . "%' AND warga.pekerjaan LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND MONTH(tglSurvey)='$bulan' AND DAY(tglSurvey) = '$tgl'))
                                                    OR (warga.alamat LIKE '%" . $carirtw . "%' AND survey.status LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND MONTH(tglSurvey)='$bulan' AND DAY(tglSurvey) = '$tgl' ))
                                                    OR (warga.alamat LIKE '%" . $carirtw . "%' AND survey.tglSurvey LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND MONTH(tglSurvey)='$bulan' AND DAY(tglSurvey) = '$tgl'))
                                                    OR (warga.alamat LIKE '%" . $carirtw . "%' AND user.username LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND MONTH(tglSurvey)='$bulan' AND DAY(tglSurvey) = '$tgl'))
                                                    ";
                                                } else if ($_GET['tahun'] != '' && $_GET['bulan'] != '') {
                                                    $carirtw = ($_GET['carirtw']);
                                                    $tahun = $_GET['tahun'];
                                                    $bulan = $_GET['bulan'];
                                                    $tgl = $_GET['tgl'];
                                                    $q = "where (warga.alamat LIKE '%" . $carirtw . "%' AND warga.nama like '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND MONTH(tglSurvey)='$bulan'))
                                                    OR (warga.alamat LIKE '%" . $carirtw . "%' AND warga.nik LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND MONTH(tglSurvey)='$bulan' ) )
                                                    OR (warga.alamat LIKE '%" . $carirtw . "%' AND warga.jenisKelamin LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND MONTH(tglSurvey)='$bulan' ))
                                                    OR (warga.alamat LIKE '%" . $carirtw . "%' AND warga.pekerjaan LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND MONTH(tglSurvey)='$bulan' ))
                                                    OR (warga.alamat LIKE '%" . $carirtw . "%' AND survey.status LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND MONTH(tglSurvey)='$bulan'  ))
                                                    OR (warga.alamat LIKE '%" . $carirtw . "%' AND survey.tglSurvey LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND MONTH(tglSurvey)='$bulan' ))
                                                    OR (warga.alamat LIKE '%" . $carirtw . "%' AND user.username LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND MONTH(tglSurvey)='$bulan' ))
                                                    ";
                                                } else if ($_GET['tgl'] != '' && $_GET['bulan'] != '') {
                                                    $carirtw = ($_GET['carirtw']);
                                                    $tahun = $_GET['tahun'];
                                                    $bulan = $_GET['bulan'];
                                                    $tgl = $_GET['tgl'];
                                                    $q = "where (warga.alamat LIKE '%" . $carirtw . "%' AND warga.nama like '%" . $cari . "%' AND (DAY(tglSurvey) = '$tgl' AND MONTH(tglSurvey)='$bulan'))
                                                    OR (warga.alamat LIKE '%" . $carirtw . "%' AND warga.nik LIKE '%" . $cari . "%' AND (DAY(tglSurvey) = '$tgl' AND MONTH(tglSurvey)='$bulan' ) )
                                                    OR (warga.alamat LIKE '%" . $carirtw . "%' AND warga.jenisKelamin LIKE '%" . $cari . "%' AND (DAY(tglSurvey) = '$tgl' AND MONTH(tglSurvey)='$bulan' ))
                                                    OR (warga.alamat LIKE '%" . $carirtw . "%' AND warga.pekerjaan LIKE '%" . $cari . "%' AND (DAY(tglSurvey) = '$tgl' AND MONTH(tglSurvey)='$bulan' ))
                                                    OR (warga.alamat LIKE '%" . $carirtw . "%' AND survey.status LIKE '%" . $cari . "%' AND (DAY(tglSurvey) = '$tgl' AND MONTH(tglSurvey)='$bulan'  ))
                                                    OR (warga.alamat LIKE '%" . $carirtw . "%' AND survey.tglSurvey LIKE '%" . $cari . "%' AND (DAY(tglSurvey) = '$tgl' AND MONTH(tglSurvey)='$bulan' ))
                                                    OR (warga.alamat LIKE '%" . $carirtw . "%' AND user.username LIKE '%" . $cari . "%' AND (DAY(tglSurvey) = '$tgl' AND MONTH(tglSurvey)='$bulan' ))
                                                    ";
                                                } else if ($_GET['tahun'] != '' && $_GET['tgl'] != '') {
                                                    $carirtw = ($_GET['carirtw']);
                                                    $tahun = $_GET['tahun'];
                                                    $bulan = $_GET['bulan'];
                                                    $tgl = $_GET['tgl'];
                                                    $q = "where (warga.alamat LIKE '%" . $carirtw . "%' AND warga.nama like '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND DAY(tglSurvey)='$tgl'))
                                                    OR (warga.alamat LIKE '%" . $carirtw . "%' AND warga.nik LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND DAY(tglSurvey)='$tgl' ) )
                                                    OR (warga.alamat LIKE '%" . $carirtw . "%' AND warga.jenisKelamin LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND DAY(tglSurvey)='$tgl' ))
                                                    OR (warga.alamat LIKE '%" . $carirtw . "%' AND warga.pekerjaan LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND DAY(tglSurvey)='$tgl' ))
                                                    OR (warga.alamat LIKE '%" . $carirtw . "%' AND survey.status LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND DAY(tglSurvey)='$tgl'  ))
                                                    OR (warga.alamat LIKE '%" . $carirtw . "%' AND survey.tglSurvey LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND DAY(tglSurvey)='$tgl' ))
                                                    OR (warga.alamat LIKE '%" . $carirtw . "%' AND user.username LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND DAY(tglSurvey)='$tgl' ))
                                                    ";
                                                } else if ($_GET['tahun'] != '' || $_GET['bulan'] != '' || $_GET['tgl'] != '') {
                                                    $carirtw = ($_GET['carirtw']);
                                                    $tahun = $_GET['tahun'];
                                                    $bulan = $_GET['bulan'];
                                                    $tgl = $_GET['tgl'];
                                                    $q = "where (warga.alamat LIKE '%" . $carirtw . "%' AND warga.nama like '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' OR MONTH(tglSurvey)='$bulan' OR DAY(tglSurvey) = '$tgl' ))
                                                    OR (warga.alamat LIKE '%" . $carirtw . "%' AND warga.nik LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' OR MONTH(tglSurvey)='$bulan' OR DAY(tglSurvey) = '$tgl' ) )
                                                    OR (warga.alamat LIKE '%" . $carirtw . "%' AND warga.jenisKelamin LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' OR MONTH(tglSurvey)='$bulan' OR DAY(tglSurvey) = '$tgl' ))
                                                    OR (warga.alamat LIKE '%" . $carirtw . "%' AND warga.pekerjaan LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' OR MONTH(tglSurvey)='$bulan' OR DAY(tglSurvey) = '$tgl'))
                                                    OR (warga.alamat LIKE '%" . $carirtw . "%' AND survey.status LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' OR MONTH(tglSurvey)='$bulan' OR DAY(tglSurvey) = '$tgl' ))
                                                    OR (warga.alamat LIKE '%" . $carirtw . "%' AND survey.tglSurvey LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' OR MONTH(tglSurvey)='$bulan' OR DAY(tglSurvey) = '$tgl'))
                                                    OR (warga.alamat LIKE '%" . $carirtw . "%' AND user.username LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' OR MONTH(tglSurvey)='$bulan' OR DAY(tglSurvey) = '$tgl'))
                                                    ";
                                                } else if ($_GET['cari'] != '' || $_GET['carirtw'] != '' && $_GET['tahun'] == '' && $_GET['bulan'] == '' && $_GET['tgl'] == '') {
                                                    $carirtw = ($_GET['carirtw']);
                                                    $tahun = $_GET['tahun'];
                                                    $bulan = $_GET['bulan'];
                                                    $tgl = $_GET['tgl'];
                                                    $q = "where (warga.alamat LIKE '%" . $carirtw . "%' AND warga.nama like '%" . $cari . "%')
                                                    OR (warga.alamat LIKE '%" . $carirtw . "%' AND warga.nik LIKE '%" . $cari . "%' )
                                                    OR (warga.alamat LIKE '%" . $carirtw . "%' AND warga.jenisKelamin LIKE '%" . $cari . "%' )
                                                    OR (warga.alamat LIKE '%" . $carirtw . "%' AND warga.pekerjaan LIKE '%" . $cari . "%' )
                                                    OR (warga.alamat LIKE '%" . $carirtw . "%' AND survey.status LIKE '%" . $cari . "%')
                                                    OR (warga.alamat LIKE '%" . $carirtw . "%' AND survey.tglSurvey LIKE '%" . $cari . "%')
                                                    OR (warga.alamat LIKE '%" . $carirtw . "%' AND user.username LIKE '%" . $cari . "%')
                                                    ";
                                                } else {
                                                    $carirtw = ($_GET['carirtw']);
                                                    $tahun = $_GET['tahun'];
                                                    $bulan = $_GET['bulan'];
                                                    $tgl = $_GET['tgl'];
                                                    $q = "where (warga.alamat LIKE '%" . $carirtw . "%' AND warga.nama like '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND MONTH(tglSurvey)='$bulan' AND DAY(tglSurvey) = '$tgl' ))
                                                    OR (warga.alamat LIKE '%" . $carirtw . "%' AND warga.nik LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND MONTH(tglSurvey)='$bulan' AND DAY(tglSurvey) = '$tgl' ) )
                                                    OR (warga.alamat LIKE '%" . $carirtw . "%' AND warga.jenisKelamin LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND MONTH(tglSurvey)='$bulan' AND DAY(tglSurvey) = '$tgl' ))
                                                    OR (warga.alamat LIKE '%" . $carirtw . "%' AND warga.pekerjaan LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND MONTH(tglSurvey)='$bulan' AND DAY(tglSurvey) = '$tgl'))
                                                    OR (warga.alamat LIKE '%" . $carirtw . "%' AND survey.status LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND MONTH(tglSurvey)='$bulan' AND DAY(tglSurvey) = '$tgl' ))
                                                    OR (warga.alamat LIKE '%" . $carirtw . "%' AND survey.tglSurvey LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND MONTH(tglSurvey)='$bulan' AND DAY(tglSurvey) = '$tgl'))
                                                    OR (warga.alamat LIKE '%" . $carirtw . "%' AND user.username LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND MONTH(tglSurvey)='$bulan' AND DAY(tglSurvey) = '$tgl'))
                                                    ";
                                                }
                                                $sql = "SELECT * FROM survey INNER JOIN warga ON survey.nik = warga.nik INNER JOIN user ON survey.id_user = user.id_user " . $q;
                                                $query_mysqli = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
                                            } else {
                                                $query_mysqli = mysqli_query($koneksi, "SELECT * FROM survey INNER JOIN warga ON survey.nik = warga.nik INNER JOIN user ON survey.id_user = user.id_user ORDER BY id_survey DESC") or die(mysqli_error($koneksi));
                                            }
                                            $nomor = 1;
                                            if ($query_mysqli) {
                                                while ($data = mysqli_fetch_array($query_mysqli)) {
                                            ?>
                                        <tr>
                                            <td><?php echo $nomor++; ?></td>
                                            <td><?php echo $data['nik']; ?></td>
                                            <td><?php echo $data['username']; ?></td>
                                            <td><?php echo $data['nama']; ?></td>
                                            <td><?php echo $data['alamat']; ?></td>                                            
                                            <td><?php echo $data['jenisKelamin']; ?></td>
                                            <td><?php echo $data['pekerjaan']; ?></td>
                                            <td><?php echo $data['status']; ?></td>
                                            <td><?php echo date('d-m-Y', strtotime($data["tglSurvey"])); ?></td>
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