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
        <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Tempat, Tanggal Lahir</th>
                        <th>Pekerjaan</th>
                        <th>Jenis Kelamin</th>
                        <th>Alasan</th>
                      </tr>
                      <?php 
                          include "config.php";
                          $query_mysqli = mysqli_query($koneksi,"SELECT * from data_terhapus")or die(mysqli_error());
                          
                                        $nomor = 1;
                                        foreach ($query_mysqli as $data){
                                        echo "<tr>
                                        
                                            <td>".$data["nik"]."</td>
                                            <td>".$data["nama"]."</td>                                            
                                            <td>".$data['alamat']."</td>
                                            <td>".$data['ttl']."</td>
                                            <td>".$data['pekerjaan']."</td>
                                            <td>".$data['jenisKelamin']."</td>
                                            <td>".$data["alasan"]."</td>
                                            </tr>";
                          if(isset($_GET['cari'])){
                              $cari = $_GET['cari'];
                              $query = mysqli_query($koneksi,"SELECT * FROM data_terhapus WHERE nama LIKE '%".$cari."%' OR nik LIKE '%".$cari."%'" ); 
                            }
                              else{
                                  $query = mysqli_query($koneksi,"SELECT * FROM data_terhapus"); 
                              }
                          $nomor = 1;
                          if($query){
                          while($data = mysqli_fetch_array($query)){
                          }
                          ?> 
                            <!-- <tr>
                              <td><?php echo $nomor++; ?></td>
                              <td><?php echo $data['nik']; ?></td>
                              <td><?php echo $data['nama']; ?></td>
                              <td><?php echo $data['alasan']; ?></td>
                            </tr> -->
                            <?php } }?>
                          
                      </thead>
                    <tbody>                      
                      
                    </tbody>
                  </table>
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <?php include 'footer.php'; ?>

</body>

</html>