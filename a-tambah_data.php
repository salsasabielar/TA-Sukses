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
                        <h1>Informasi Data Warga</h1>
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
                                <a href="a-form_tambah_data.php">
                                    <button type="button" class="btn btn-primary">Tambah Data</button>
                                </a>
                            </div>
                            <div class="card-header">
                                <form action="a-tambah_data.php" method="get">
                                    <div class="row form-group">
                                        <div class="col-12 col-md-3">
                                            <input type="text" name="cari" placeholder="Masukkan Kata Kunci" class="form-control">
                                        </div>
                                        <p style="text-indent: 1em;">&nbsp</p>

                                        <input class="btn btn-outline-primary btn-sm" type="submit" value="Cari">

                                    </div>

                                </form>
                                <?php
                                if (isset($_GET['cari'])) {
                                    $cari = $_GET['cari'];
                                    echo "<b>Hasil pencarian : " . $cari . "</b>";
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
                                            <th>Tempat,Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Pekerjaan</th>
                                            <th>Status Aktif</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    include "config.php";
                                    $query_mysqli = mysqli_query($koneksi, "SELECT * FROM warga") or die(mysqli_error());

                                    if (isset($_GET['cari'])) {
                                        $cari = $_GET['cari'];
                                        $query = mysqli_query($koneksi, "SELECT * FROM warga WHERE nama LIKE '%" . $cari . "%' OR nik LIKE '%" . $cari . "%' 
                                        OR alamat LIKE '%" . $cari . "%' OR pekerjaan LIKE '%" . $cari . "%' 
                                        OR jenisKelamin LIKE '%" . $cari . "%' OR tempat LIKE '%" . $cari . "%' OR tgl_lahir LIKE '%" . $cari . "%' 
                                        OR survey LIKE '%" . $cari . "%'");
                                    } else {
                                        $query = mysqli_query($koneksi, "SELECT * FROM warga ORDER BY nama");
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
                                                <td><?php echo $data['tempat']; ?>, <?php echo date('d-m-Y', strtotime($data["tgl_lahir"]));  ?></td>
                                                <td><?php echo $data['jenisKelamin']; ?></td>
                                                <td><?php echo $data['pekerjaan']; ?></td>
                                                <td><?php echo $data['survey']; ?></td>
                                                <td>
                                                    <a class="btn btn-success btn-sm" href="a-form_edit_data.php?nik=<?php echo $data['nik']; ?>">Edit</a>
                                                    <a class="btn btn-warning btn-sm" href="p-hapus_survey.php?nik=<?php echo $data['nik']; ?>">Non-Aktif</a>
                                                    <a class="btn btn-danger btn-sm" href="p-aktif_survey.php?nik=<?php echo $data['nik']; ?>">Aktif</a>
                                                    <!-- <a class="btn btn-danger btn-sm" href="p-hapus.php?nik=<?php echo $data['nik']; ?>" onclick="return confirm()">Hapus</a> -->
                                                    <a class="btn btn-sm btn-primary" href="a-detail_warga.php?nik=<?php echo $data['nik']; ?>">Detail</a>

                                                </td>
                                            </tr>
                                    <?php }
                                    } ?>

                                </table>
                            </div>


                        </div>
                    </div><!-- .animated -->
                </div><!-- .content -->




            </div><!-- /#right-panel -->

            <!-- Right Panel -->

            <?php include 'footer.php'; ?>

</body>

</html>