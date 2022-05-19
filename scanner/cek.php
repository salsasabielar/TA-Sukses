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
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <!-- Simple Tables -->
              <div class="card">
                
                <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>Hasil Validasi Data Penerima</th>
                        
                      </tr>
                    </thead>
                    <tr>
                      <th>
                      <div class="container">
                            <div class="row">
                                <div class="panel panel-success">
                                    <!-- <div class="panel-heading">
                                        <h3 class="panel-title">Hasil Validasi Data Penerima</h3>
                                    </div> -->
                                    <div class="panel-body">
                                        <table class="table table-bordered">                                
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
                                        // If(isset($_POST['nik'])){

                                        //     $nik = $_POST['nik'];
                                            
                                        //     }else{
                                            
                                        //     $nik = "Nik tidak diset di Method POST";
                                            
                                        //     }
                                        // Echo $nik;
                                        $sql=mysqli_query($koneksi, "SELECT * FROM warga WHERE nik='$_POST[nik]'");
                                        // $sql=mysqli_query($koneksi, "SELECT warga.*, penerimaan.tanggalpenerimaan, penerimaan.id_penerimaan FROM penerimaan LEFT JOIN warga ON penerimaan.id_warga=warga.id_warga
                                        // WHERE warga.nik='$_POST[nik]'");
                                        $d=mysqli_fetch_array($sql);

                                        if(mysqli_num_rows($sql) < 1){
                                            ?>
                                            <div class="alert alert-danger">
                                                <center>
                                                <strong>Maaf, Data tidak ditemukan..!</strong><br>
                                                <!-- <i>Silahkan menghubungi Perguruan Tinggi terkait untuk menanyakan masalah ini</i> -->
                                                </center>
                                            </div>
                                            <?php
                                        }else{
                                        ?>
                                        <table class="table table-bordered table-striped">
                                            <tr>
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>Pekerjaan</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Tanggal Survey</th>
                                                <th>Action</th>
                                            </tr>
                                            <tr>
                                                <td><?php echo $d['nik']; ?></td>
                                                <td><?php echo $d['nama']; ?></td>
                                                <td><?php echo $d['alamat']; ?></td>
                                                <td><?php echo $d['pekerjaan']; ?></td>
                                                <td><?php echo $d['jenisKelamin']; ?></td>
                                                <td><?php echo $d['tanggalsurvey']; ?></td>
                                                <td>
                                                <a class="btn btn-sm btn-primary" href="../s-form_edit_data.php?id_warga=<?php echo $d['id_warga'];?>">Survey</a> 
                                                </td>
                                            </tr>
                                        </table>
                                        <?php } ?>
                                    </div>
                                    <div class="panel-footer">
                                        <center><a class="btn btn-danger" href="index.php">Kembali</a></center>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                      </th>
                    </tr>
                    
                  </table>
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <?php include 'footer.php'; ?>

</body>

</html>