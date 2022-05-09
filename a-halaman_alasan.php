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
                        <h1>Pilih Alasan Untuk Menghapus Data</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th></th>
                        
                      </tr>
                    </thead>
                    <tr>
                      <th>
                      <form action="p-alasan.php" method="post">
                          <input type="hidden" name="nik" value="<?php echo $_GET['nik'];?>" >
                          <br></br>
                          <input type="radio" name="alasan" value="Tidak Layak"> Tidak Layak<br><br>
                          <input type="radio" name="alasan" value="Meninggal"> Meninggal<br><br>
                          <input type="radio" name="alasan" value="KPM Tidak Ditemukan"> KPM Tidak Ditemukan<br><br>
                          <input type="radio" name="alasan" value="Pindah Domisili"> Pindah domisili<br>
                          <div class="form-group">
                      <div class="custom-file">
                    </div>
                          <input type="submit" class="btn btn-primary" value="Submit">
                        </form>

                      </th>
                    </tr>
                    
                  </table>
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <?php include 'footer.php'; ?>

</body>

</html>