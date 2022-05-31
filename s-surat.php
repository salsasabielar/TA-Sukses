<!doctype html>
<html class="no-js" lang="en">

<?php include 's-header.php'; ?>

<body>

    <?php include 's-sidebar.php'; ?>

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <?php include 's-sidebar2.php'; ?>

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
                                            <select name="nik" id="select" class="form-control">

                                                <option selected>Cari Nama...</option>
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

                                        </div>

                                        <button type="submit" class="btn btn-primary btn-sm">
                                            Cari
                                        </button>
                                        <p style="text-indent: 1em;">&nbsp</p>

                                        <a href="./a-surat.php" class="btn btn-outline-danger">Refresh</a>

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
                                                    <td><?php echo $tpeg['tempat'] ?>, <?php echo $tpeg['tgl_lahir'] ?></td>
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
                                                        <a class='btn btn-danger btn-sm' href='a-surat_miskin.php?nik=<?=$tpeg['nik']?>'>Surat Kehilangan Mata Pencaharian</a>
                                                        <!-- <input type="submit" value="Save"> -->
                                                        <a class='btn btn-primary btn-sm' href='a-surat_penyakit.php?nik=<?=$tpeg['nik']?>'>Surat Penyakit Kronis</a>
                                                        


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

        <?php include 's-footer.php'; ?>

</body>

</html>