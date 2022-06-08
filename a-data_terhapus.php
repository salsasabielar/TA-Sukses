
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
            <h1>Data Warga Terhapus</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-12">
      <div class="card">

        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">NIK</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Pekerjaan</th>
                <th scope="col">Alasan</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include "config.php";
              $query_mysqli = mysqli_query($koneksi, "SELECT * from data_terhapus") or die(mysqli_error());

              if (isset($_GET['cari'])) {
                $cari = $_GET['cari'];
                $query = mysqli_query($koneksi, "SELECT * FROM data_terhapus WHERE nama LIKE '%" . $cari . "%' OR nik LIKE '%" . $cari . "%'");
              } else {
                $query = mysqli_query($koneksi, "SELECT * FROM data_terhapus");
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
                    <td><?php echo $data['pekerjaan']; ?></td>
                    <td><?php echo $data['alasan']; ?></td>

                  </tr>

              <?php }
              } ?>


            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div><!-- /#right-panel -->

  <!-- Right Panel -->

  <?php include 'footer.php'; ?>

</body>

</html>