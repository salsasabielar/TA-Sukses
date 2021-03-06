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
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Survey Data Warga</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <form action="a-data_survey.php" method="get">
                                <div class="card-header">
                                    <div class="row form-group">
                                        <div class="col-12 col-md-3">
                                            <input type="text" name="cari" placeholder="Masukkan Kata Kunci" class="form-control">
                                        </div>
                                        <p style="text-indent: 1em;">&nbsp</p>

                                        <input class="btn btn-outline-primary btn-sm" type="submit" value="Cari">

                                        <p style="text-indent: 1em;">&nbsp</p>

                                        <a href="p-refresh.php" class="btn btn-outline-danger">Reset</a>


                                    </div>
                                    <?php
                                    if (isset($_GET['cari'])) {
                                        $cari = $_GET['cari'];
                                        echo "<b>Hasil pencarian : " . $cari . "</b>";
                                    }
                                    ?>
                                </div>
                            </form>

                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    include "config.php";
                                    $query_mysqli = mysqli_query($koneksi, "SELECT * FROM warga") or die(mysqli_error($koneksi));

                                    if (isset($_GET['cari'])) {
                                        $cari = $_GET['cari'];
                                        $query = mysqli_query($koneksi, "SELECT * FROM warga WHERE nama LIKE '%" . $cari . "%' AND survey='SURVEY' OR nik LIKE '%" . $cari . "%' AND survey='SURVEY' OR alamat LIKE '%" . $cari . "%' AND survey='SURVEY'");
                                    } else {
                                        $query = mysqli_query($koneksi, "SELECT * FROM warga WHERE survey='SURVEY' ORDER BY ket ASC");
                                    }
                                    $nomor = 1;
                                    if ($query) {
                                        while ($data = mysqli_fetch_array($query)) {
                                    ?>
                                            <tr>
                                                <td><?php echo $nomor++; ?></td>
                                                <td><?php echo $data['nik']; ?></td>
                                                <td><?php echo $data['nama']; ?></td>
                                                <td><?php echo $data['alamat']; ?></td>
                                                <td><?php echo $data['ket']; ?></td>
                                                <td>
                                                    <a class="btn btn-sm btn-primary" href="a-kriteria.php?nik=<?php echo $data['nik']; ?>">Survey</a>
                                                    <!-- <a class="btn btn-sm btn-primary" href="s-form_edit_data.php?nik=<?php echo $data['nik']; ?>">Survey</a> -->
                                                    <!-- <a class="btn btn-danger btn-sm" href="p-delete_data.php?id_warga=<?= $data['nik']; ?>" onclick="return confirm()">Hapus</a> -->
                                                    <a class='btn btn-success btn-sm' href="p-generate_code.php?nik=<?php echo $data['nik']; ?>&& nomor=<?php echo $data['nik']; ?>">QR-Code</a>

                                                </td>
                                            </tr>
                                    <?php }
                                    } ?>

                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->




    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <?php include 'footer.php'; ?>

</body>

</html>