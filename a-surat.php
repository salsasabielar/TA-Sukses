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
                        <h1>Pengajuan Surat</h1>
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
                                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="GET">

                                    <div class="row form-group">
                                        <div class="col-12 col-md-5">

                                            <head>

                                                <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
                                                <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
                                                <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
                                            </head>

                                            <body>
                                                <form method="POST">
                                                    <select id="nik" name="nik" class="form-control">
                                                        <option></option>
                                                        <?php
                                                        include "config.php";
                                                        $nik = $_GET['nik'];
                                                        //query menampilkan nip pegawai ke dalam combobox
                                                        $query    = mysqli_query($koneksi, "SELECT * FROM warga ORDER BY nama");
                                                        while ($data = mysqli_fetch_array($query)) {
                                                        ?>
                                                            <option value="<?= $data['nik']; ?>"><?php echo $data['nama']; ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </form>
                                                <script type="text/javascript">
                                                    $(document).ready(function() {
                                                        $('#nik').select2();
                                                    });
                                                </script>
                                            </body>



                                        </div>

                                        <button type="submit" class="btn btn-primary btn-sm">
                                            Cari
                                        </button>
                                        <p style="text-indent: 1em;">&nbsp</p>
                                        <a href="./a-surat.php" class="btn btn-outline-danger btn-sm">Refresh</a>


                                    </div>


                                </form>

                            </div>
                            <div class="card-body">
                                <?php error_reporting(E_ALL ^ E_NOTICE); ?>
                                <?php
                                $tamPeg = mysqli_query($koneksi, "SELECT * FROM warga WHERE nik='$_GET[nik]'");
                                while ($tpeg = mysqli_fetch_array($tamPeg)) {
                                    // $tpeg = mysqli_fetch_array($tamPeg);
                                    // if(isset($_GET['id_warga']) && $_GET['id_warga'] !=''){
                                    //     $id_warga = $_GET['id_warga'];

                                    //menampilkan data pegawai berdasarkan pilihan combobox ke dalam form

                                ?>
                                    <form action="#" method="POST">
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <td width="100">NIK</td>
                                                    <td width="280"><?php echo $tpeg['nik'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Nama</td>
                                                    <td><?php echo $tpeg['nama'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat</td>
                                                    <td><?php echo $tpeg['alamat'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Tempat,Tanggal Lahir</td>
                                                    <td><?php echo $tpeg['tempat'] ?>, <?php echo date('d-m-Y', strtotime($tpeg["tgl_lahir"])); ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Pekerjaan</td>
                                                    <td><?php echo $tpeg['pekerjaan'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Jenis Kelamin</td>
                                                    <td><?php echo $tpeg['jenisKelamin'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <a class='btn btn-danger btn-sm' href='a-surat_miskin.php?nik=<?= $tpeg['nik'] ?>'>Surat Kehilangan Mata Pencaharian</a>
                                                        <!-- <input type="submit" value="Save"> -->
                                                        <a class='btn btn-primary btn-sm' href='a-surat_penyakit.php?nik=<?= $tpeg['nik'] ?>'>Surat Penyakit Kronis</a>



                                                </tr>
                                            </thead>


                                        </table>
                                    </form>
                                <?php
                                }
                                ?>
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