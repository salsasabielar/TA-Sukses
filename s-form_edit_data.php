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
                        <h1>Survey Data Warga</h1>
                    </div>
                </div>
            </div>
        </div>

        <form action="ps-update.php" method="post" class="form-horizontal">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body card-block">
                        <?php
                        include "config.php";
                        $id_warga = $_GET['id_warga'];
                        $query_mysqli = mysqli_query($koneksi, "SELECT * FROM warga WHERE id_warga='$id_warga'") or die(mysqli_error($koneksi));
                        $nomor = 1;
                        while ($data = mysqli_fetch_array($query_mysqli)) {
                        ?>
                            <input type="hidden" name="id_warga" value="<?php echo $data['id_warga'] ?>">
                            <div class="col-12 col-md-5"><input type="hidden" name="nik" value="<?php echo $data['nik'] ?>" placeholder="Masukkan NIK..." class="form-control"><span class="help-block"></span></div>
                            <div class="col-12 col-md-5"><input type="hidden" name="nama" value="<?php echo $data['nama'] ?>" placeholder="Masukkan Nama..." class="form-control"><span class="help-block"></span></div>
                            <div class="col-12 col-md-5"><input type="hidden" name="alamat" value="<?php echo $data['alamat'] ?>" placeholder="Masukkan Alamat..." class="form-control"><span class="help-block"></span></div>
                            <div class="col-12 col-md-5"><input type="hidden" name="ttl" value="<?php echo $data['ttl'] ?>" placeholder="Masukkan Tanggal Lahir..." class="form-control"><span class="help-block"></span></div>
                            <div class="col-12 col-md-5"><input type="hidden" name="pekerjaan" value="<?php echo $data['pekerjaan'] ?>" placeholder="Masukkan Pekerjaan..." class="form-control"><span class="help-block"></span></div>
                            <div class="form-check-inline form-check">
                                <label for="inline-radio1" class="form-check-label ">
                                    <input type="hidden" id="inline-radio1" name="jenisKelamin" value="Laki-Laki" <?php echo ($data['jenisKelamin'] == 'Laki-Laki') ? 'checked' : ' ' ?> class="form-check-input">
                                </label>
                                <p style="text-indent: 5em;">&nbsp</p>
                                <label for="inline-radio2" class="form-check-label ">
                                    <input type="hidden" id="inline-radio2" name="jenisKelamin" value="Perempuan" <?php echo ($data['jenisKelamin'] == 'Perempuan') ? 'checked' : ' ' ?> class="form-check-input">
                                </label>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-2"><label class=" form-control-label">Tanggal Survey</label></div>
                                <div class="col-12 col-md-5"><input type="date" name="tanggalsurvey" value="<?php echo $data['tanggalsurvey'] ?>" placeholder="Masukkan Survey..." class="form-control"><span class="help-block"></span></div>
                            </div>

                            <a class="btn btn-sm btn-primary" href="index_upload.php?id_warga=<?php echo $data['id_warga']; ?>">Upload KK</a>
                            <!-- <a class="btn btn-sm btn-primary" href="s-form_edit_data.php?id_warga=<?php echo $data['id_warga']; ?>">Upload KTP</a> -->

                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Kriteria Penerimaan</strong>
                    </div>
                    <div class="card-body">

                        <table class="table">
                            <thead class="thead-light">

                                <tr>

                                    <?php
                                    $tampil = "SELECT * FROM kriteria";
                                    $hasil = mysqli_query($koneksi, $tampil);
                                    $no1 = 0;
                                    $no2 = 0;
                                    $nomor = 1;
                                    while ($data = mysqli_fetch_array($hasil)) {
                                    ?>

                                <tr>
                                    <!-- <td><?php echo $nomor; ?></td> -->

                                    <td>
                                        <input type=checkbox name=ya[] value=<?php echo $data['id_kriteria'];
                                                                                $query = "SELECT * FROM kriteria_warga WHERE id_warga='$id_warga'";
                                                                                $result = mysqli_query($koneksi, $query);
                                                                                while ($row = mysqli_fetch_array($result)) {
                                                                                    if ($data['id_kriteria'] == $row['id_kriteria']) {
                                                                                ?> checked=checked <?php
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
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>

            <div class="card-footer">
                <a href="s-data_survey.php">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Update
                    </button>
                </a>

            </div>

    </div>
    </form>
    <?php  ?>
    <!-- /#right-panel -->

    <!-- Right Panel -->

    <?php include 'footer.php'; ?>

</body>

</html>