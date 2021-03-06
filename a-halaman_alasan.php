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

    <div class="breadcrumbs">
      <div class="col-sm-4">
        <div class="page-header float-left">
          <div class="page-title">
            <h1>Pilih Alasan Untuk Menghapus Data</h1>
          </div>
        </div>
      </div>
    </div>
    
    
    <form action="p-alasan.php" method="post">
    <div class="col-lg-12">
      <div class="card">

        <div class="card-body card-block">
            <input type="hidden" name="nik" value="<?php echo $_GET['nik']; ?>">
            <br>
            <input type="radio" name="alasan" value="Tidak Layak"> Tidak Layak<br><br>
            <input type="radio" name="alasan" value="Meninggal"> Meninggal<br><br>
            <input type="radio" name="alasan" value="KPM Tidak Ditemukan"> KPM Tidak Ditemukan<br><br>
            <input type="radio" name="alasan" value="Pindah Domisili"> Pindah domisili<br><br>
          
        </div>
        <div class="card-footer">
          <a href="s-data_survey.php">
            <button type="submit" class="btn btn-primary btn-sm">
              <i class="fa fa-dot-circle-o"></i> Submit
            </button>
          </a>

        </div>
      </div>

    </div>
    </form>
    <!-- /#right-panel -->

    <!-- Right Panel -->

    <?php include 'footer.php'; ?>

</body>

</html>