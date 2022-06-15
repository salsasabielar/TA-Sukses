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
                        <h1>Edit Data</h1>
                    </div>
                </div>
            </div>
        </div>

        <form action="p-update_data.php" method="post" class="form-horizontal">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body card-block">
                        <?php
                        include "config.php";
                        $nik = $_GET['nik'];
                        $query_mysqli = mysqli_query($koneksi, "SELECT * FROM warga WHERE nik='$nik'") or die(mysqli_error($koneksi));
                        $nomor = 1;
                        while ($data = mysqli_fetch_array($query_mysqli)) {
                        ?>
                            <div class="row form-group">
                                <div class="col col-md-2"><label for="hf-email" class=" form-control-label">NIK</label></div>
                                <input type="hidden" name="nik" value="<?php echo $data['nik'] ?>">
                                <div class="col-12 col-md-5"><input type="text" name="nik" value="<?php echo $data['nik'] ?>" placeholder="Masukkan NIK..." class="form-control"><span class="help-block"></span></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-2"><label for="hf-email" class=" form-control-label">Nama</label></div>
                                <div class="col-12 col-md-5"><input type="text" name="nama" value="<?php echo $data['nama'] ?>" placeholder="Masukkan Nama..." class="form-control"><span class="help-block"></span></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-2"><label for="hf-email" class=" form-control-label">Alamat</label></div>
                                <div class="col-12 col-md-5"><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>" placeholder="Masukkan Alamat..." class="form-control"><span class="help-block"></span></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-2"><label for="hf-email" class=" form-control-label">Tempat Lahir</label></div>
                                <div class="col-12 col-md-5"><input type="text" name="tempat" value="<?php echo $data['tempat'] ?>" placeholder="Masukkan Tempat Lahir..." class="form-control"><span class="help-block"></span></div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col col-md-2"><label for="hf-email" class=" form-control-label">Tanggal Lahir</label></div>
                                <div class="col-12 col-md-5"><input type="date" name="tgl_lahir" value="<?php echo $data['tgl_lahir'] ?>" placeholder="Masukkan Tanggal Lahir..." class="form-control"><span class="help-block"></span></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-2"><label for="hf-email" class=" form-control-label">Pekerjaan</label></div>
                                <div class="col-12 col-md-5"><input type="text" name="pekerjaan" value="<?php echo $data['pekerjaan'] ?>" placeholder="Masukkan Pekerjaan..." class="form-control"><span class="help-block"></span></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-2"><label class=" form-control-label">Jenis Kelamin</label></div>
                                <div class="col col-md-9">
                                    <div class="form-check-inline form-check">
                                        <label for="inline-radio1" class="form-check-label ">
                                            <input type="radio" id="inline-radio1" name="jenisKelamin" value="Laki-Laki" <?php echo ($data['jenisKelamin'] == 'Laki-Laki') ? 'checked' : ' ' ?> class="form-check-input">Laki-Laki
                                        </label>
                                        <p style="text-indent: 5em;">&nbsp</p>
                                        <label for="inline-radio2" class="form-check-label ">
                                            <input type="radio" id="inline-radio2" name="jenisKelamin" value="Perempuan" <?php echo ($data['jenisKelamin'] == 'Perempuan') ? 'checked' : ' ' ?> class="form-check-input">Perempuan
                                        </label>

                                    </div>
                                </div>
                            </div>

                            <?php } ?>

                    </div>

                    <div class="card-footer">
                        <a href="a-tambah_data.php">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Update
                            </button>
                        </a>

                    </div>

                </div>
        </form>
        <!-- /#right-panel -->

        <!-- Right Panel -->

        <?php include 'footer.php'; ?>

</body>

</html>