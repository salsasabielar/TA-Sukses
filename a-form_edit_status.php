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
                        <h1>Edit Status</h1>
                    </div>
                </div>
            </div>
        </div>

        <form action="p-update_status.php" method="post" class="form-horizontal">

            <div class="col-lg-12">
                <div class="card">

                    <div class="card-body card-block">
                        <?php
                        include "config.php";
                        $id_status = $_GET['id_status'];
                        $query_mysqli = mysqli_query($koneksi, "SELECT * FROM status WHERE id_status='$id_status'") or die(mysqli_error($koneksi));
                        $nomor = 1;
                        while ($data = mysqli_fetch_array($query_mysqli)) {
                        ?>

                            <div class="row form-group">
                                
                                <input type="hidden" name="id_status" value="<?php echo $data['id_status'] ?>">
                                <div class="col-12 col-md-5"><input type="hidden" name="nama_status" required value="<?php echo $data['nama_status'] ?>" placeholder="Masukkan Status" class="form-control"><span class="help-block"></span></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-2"><label class=" form-control-label">Jumlah</label></div>
                                <div class="col-12 col-md-5"><input type="text" name="jumlah" required value="<?php echo $data['jumlah'] ?>" placeholder="Masukkan Jumlah" class="form-control"><span class="help-block"></span></div>
                            </div>

                        <?php } ?>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Update
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