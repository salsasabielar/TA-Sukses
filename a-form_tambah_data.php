<?php
session_start(); // Start session nya
// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if( ! isset($_SESSION['username'])){ // Jika tidak ada session username berarti dia belum login
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
                        <h1>Tambah Data</h1>
                    </div>
                </div>
            </div>
        </div>

        <form action="p-tambah_data.php" method="post" class="form-horizontal">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body card-block">
                        <div class="row form-group">
                            <div class="col col-md-2"><label for="nik" class=" form-control-label">NIK</label></div>
                            <div class="col-12 col-md-5"><input type="text" name="nik" placeholder="Masukkan NIK..." class="form-control" required><span class="help-block"></span></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-2"><label for="nama" class=" form-control-label">Nama</label></div>
                            <div class="col-12 col-md-5"><input type="text" name="nama" placeholder="Masukkan Nama..." class="form-control" required><span class="help-block"></span></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-2"><label for="nama" class=" form-control-label">Alamat</label></div>
                            <div class="col-12 col-md-5"><input type="text" name="alamat" placeholder="Masukkan Alamat..." class="form-control" required><span class="help-block"></span></div>
                        </div>
                        
                        <div class="row form-group">
                            <div class="col col-md-2"><label for="nama" class=" form-control-label">Tempat Lahir</label></div>
                            <div class="col-12 col-md-5"><input type="text" name="tempat" placeholder="Masukkan Tempat Lahir..." class="form-control" required><span class="help-block"></span></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-2"><label for="ttl" class=" form-control-label">Tanggal Lahir</label></div>
                            <div class="col-12 col-md-5"><input type="date" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir..." class="form-control" required><span class="help-block"></span></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-2"><label for="pekerjaan" class=" form-control-label">Pekerjaan</label></div>
                            <div class="col-12 col-md-5"><input type="text" name="pekerjaan" placeholder="Masukkan Pekerjaan..." class="form-control" required><span class="help-block"></span></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-2"><label class=" form-control-label">Jenis Kelamin</label></div>
                            <div class="col col-md-9">
                                <div class="form-check-inline form-check">
                                    <label for="inline-radio1" class="form-check-label ">
                                        <input type="radio" id="inline-radio1" name="jenisKelamin"" value="Laki-Laki" class="form-check-input" required>Laki-Laki
                                    </label>
                                    <p style="text-indent: 5em;">&nbsp</p>
                                    <label for="inline-radio2" class="form-check-label ">
                                        <input type="radio" id="inline-radio2" name="jenisKelamin" value="Perempuan" class="form-check-input" required>Perempuan
                                    </label>

                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="card-footer">
                        <a href="a-kriteria.php">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Simpan
                            </button>
                        </a>

                    </div>
                </div>

            </div>
        </form>

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <?php include 'footer.php'; ?>

</body>

</html>