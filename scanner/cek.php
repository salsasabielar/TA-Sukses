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
                        <h1>Hasil Validasi Data Penerima</h1>
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
                                    <table class="table align-items-center table-flush">

                                        <tr>
                                            <td colspan="3">
                                                <center>
                                                    <img src="" width="90px">
                                                    <h1>DESA BANTUREJO NGANTANG</h1>
                                                    <p>Jl. Raya Banturejo No.06 Telp. (0341) 5220053</p>
                                                    <hr>
                                            </td>
                                        </tr>
                                    </table>
                                    <?php
                                    include "../config.php";

                                    $sql = mysqli_query($koneksi, "SELECT * FROM warga WHERE nik='$_POST[nik]'");

                                    $d = mysqli_fetch_array($sql);

                                    if (mysqli_num_rows($sql) < 1) {
                                    ?>
                                        <div class="alert alert-danger">
                                            <center>
                                                <strong>Maaf, Data tidak ditemukan..!</strong><br>
                                                <!-- <i>Silahkan menghubungi Perguruan Tinggi terkait untuk menanyakan masalah ini</i> -->
                                            </center>
                                        </div>
                                    <?php
                                    } else {
                                    ?>
                                        <table class="table align-items-center table-flush">
                                            <tr>
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>Pekerjaan</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Action</th>
                                            </tr>
                                            <tr>
                                                <td><?php echo $d['nik']; ?></td>
                                                <td><?php echo $d['nama']; ?></td>
                                                <td><?php echo $d['alamat']; ?></td>
                                                <td><?php echo $d['pekerjaan']; ?></td>
                                                <td><?php echo $d['jenisKelamin']; ?></td>
                                                <td>
                                                    <a class="btn btn-sm btn-primary" href="as-kriteria.php?nik=<?php echo $d['nik']; ?>">Survey</a>
                                                </td>
                                            </tr>
                                        </table>
                                    <?php } ?>
                                    <div class="panel-footer">
                                        <center><a class="btn btn-danger" href="index.php">Kembali</a></center>
                                    </div>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    </div><!-- .animated -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <?php include 'footer.php'; ?>

</body>

</html>