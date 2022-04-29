<!doctype html>
<html class="no-js" lang="en">

<?php include 'header.php';?>

<body>

<?php include 'sidebar.php';?>

<!-- Right Panel -->

    <div id="right-panel" class="right-panel">

    <?php include 'sidebar2.php';?>

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
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Pekerjaan</th>
                                            <th>Jenis Kelamin</th>
                                            <!-- <th>Tanggal Survey</th>
                                            <th>Status</th> -->
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <?php 
                          include "config.php";
                          $query_mysqli = mysqli_query($koneksi,"SELECT * FROM warga")or die(mysqli_error());
                          
                          if(isset($_GET['cari'])){
                              $cari = $_GET['cari'];
                              $query = mysqli_query($koneksi,"SELECT * FROM warga WHERE nama LIKE '%".$cari."%' OR nik LIKE '%".$cari."%'" ); 
                            }
                              else{
                                  $query = mysqli_query($koneksi,"SELECT * FROM warga"); 
                              }
                          $nomor = 1;
                          if($query){
                          while($data = mysqli_fetch_array($query)){
                          ?> 
                            <tr>
                              <td><?php echo $nomor++; ?></td>
                              <td><?php echo $data['nik']; ?></td>
                              <td><?php echo $data['nama']; ?></td>
                              <td><?php echo $data['alamat']; ?></td>
                              <td><?php echo $data['ttl']; ?></td>
                              <td><?php echo $data['pekerjaan']; ?></td>
                              <td><?php echo $data['jenisKelamin']; ?></td>
                              <!-- <td><?php echo $data['tanggalsurvey']; ?></td>
                              <td><?php echo $data['status']; ?></td> -->
                              <td>
                                <a class="btn btn-sm btn-primary" href="a-form_edit_data.php?id_warga=<?php echo $data['id_warga']; ?>">Edit</a> 
                                <a class="btn btn-sm btn-primary" href="deleteData.php?id_warga=<?php echo $data['id_warga']; ?>" onclick="return confirm()">Hapus</a> 
                                <a class="btn btn-sm btn-primary" href="a-detail.php?id_warga=<?php echo $data['id_warga']; ?>">Detail</a>
                                
                              </td>
                            </tr>
                            <?php } }?>
                                    
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->




    </div><!-- /#right-panel -->

    <!-- Right Panel -->

<?php include 'footer.php';?>

</body>

</html>
