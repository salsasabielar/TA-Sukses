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
                        <h1>Detail Informasi</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Uraian Data Diri</strong>
                </div>
                <div class="card-body">
                    <table class="table">

                        <?php
                        if (isset($_GET['id_warga'])) {
                            $id_warga    = $_GET['id_warga'];
                        } else {
                            die("Error. No ID Selected!");
                        }
                        include "config.php";
                        $query    = mysqli_query($koneksi, "SELECT * FROM warga WHERE id_warga='$id_warga'");
                        $data    = mysqli_fetch_array($query);
                        ?>

                        <tbody>
                            <tr>
                                <th scope="row">NIK</th>
                                <td><?php echo $data['nik'] ?></td>
                                <td></td>
                                <td>
                                <td></td>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">Nama</th>
                                <td><?php echo $data['nama'] ?></td>
                                <td></td>
                                <td>
                                <td></td>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">Alamat</th>
                                <td><?php echo $data['alamat'] ?></td>
                                <td></td>
                                <td>
                                <td></td>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">Tanggal Lahir</th>
                                <td><?php echo $data['ttl'] ?></td>
                                <td></td>
                                <td>
                                <td></td>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">Pekerjaan</th>
                                <td><?php echo $data['pekerjaan'] ?></td>
                                <td></td>
                                <td>
                                <td></td>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">Jenis Kelamin</th>
                                <td><?php echo $data['jenisKelamin'] ?></td>
                                <td></td>
                                <td>
                                <td></td>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">Tanggal Survey</th>
                                <td><?php echo $data['tanggalsurvey'] ?></td>
                                <td></td>
                                <td>
                                <td></td>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">Status</th>
                                <td><?php echo $data['status'] ?></td>
                                <td></td>
                                <td>
                                <td></td>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Uraian Kriteria</strong>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <?php
                            include "config.php";
                            $id_warga = $_GET['id_warga'];
                            $query_mysqli = mysqli_query($koneksi, "SELECT * FROM warga WHERE id_warga='$id_warga'") or die(mysqli_error($koneksi));
                            $nomor = 1;
                            while ($data = mysqli_fetch_array($query_mysqli)) {
                            ?>

                                <table class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                        <?php
                                        $tampil = "SELECT * FROM kriteria";
                                        $hasil = mysqli_query($koneksi, $tampil);
                                        $no1 = 0;
                                        $no2 = 0;
                                        $nomor = 1;
                                        while ($data = mysqli_fetch_array($hasil)) {
                                        ?>
                                            
                                            <td>
                                                <input type=checkbox name=ya[] value=<?php echo $data['id_kriteria'];
                                                                                        $query = "SELECT * FROM kriteria_warga WHERE id_warga='$id_warga'";
                                                                                        $result = mysqli_query($koneksi, $query);
                                                                                        while ($row = mysqli_fetch_array($result)) {
                                                                                            if ($data['id_kriteria'] == $row['id_kriteria']) {
                                                                                        ?> checked=checked disabled= disabled<?php
                                                                                                        }
                                                                                                    }     ?>>

                                            </td>
                                            <td><?php echo $data['nama']; ?></td>
                                            </tr> <?php
                                                    $nomor++;
                                                    $no1++;
                                                    $no2++;
                                                }

                                                    ?>
                                    <?php } ?>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                                
                                <?php  ?>
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