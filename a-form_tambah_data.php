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
                        <h1>Tambah Data</h1>
                    </div>
                </div>
            </div>
        </div>

        <form action="p-tambah_data.php" method="post" class="form-horizontal">
        <br></br>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body card-block">
                        <div class="row form-group">
                            <div class="col col-md-2"><label for="nik" class=" form-control-label">NIK</label></div>
                            <div class="col-12 col-md-5"><input type="text" name="nik" placeholder="Masukkan NIK..." class="form-control"><span class="help-block"></span></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-2"><label for="nama" class=" form-control-label">Nama</label></div>
                            <div class="col-12 col-md-5"><input type="text" name="nama" placeholder="Masukkan Nama..." class="form-control"><span class="help-block"></span></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-2"><label for="alamat" class=" form-control-label">Alamat</label></div>
                            <div class="col-12 col-md-5">
                            <select class="form-control" aria-label="Default select example" name="alamat">
                            <option selected>Pilih Alamat</option>
                            <?php 
                                include "config.php";
                                $nama_alamat = mysqli_query($koneksi, "SELECT * FROM alamat");
                            ?>
                            <?php while($row = mysqli_fetch_array($nama_alamat)) { ?>
                            <option value="<?=$row['nama_alamat']?>"><?=$row['nama_alamat']?></option>
                            <?php } ?>
                            </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-2"><label for="ttl" class=" form-control-label">Tanggal Lahir</label></div>
                            <div class="col-12 col-md-5"><input type="date" name="ttl" placeholder="Masukkan Tanggal Lahir..." class="form-control"><span class="help-block"></span></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-2"><label for="pekerjaan" class=" form-control-label">Pekerjaan</label></div>
                            <div class="col-12 col-md-5"><input type="text" name="pekerjaan" placeholder="Masukkan Pekerjaan..." class="form-control"><span class="help-block"></span></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-2"><label class=" form-control-label">Jenis Kelamin</label></div>
                            <div class="col col-md-9">
                                <div class="form-check-inline form-check">
                                    <label for="inline-radio1" class="form-check-label ">
                                        <input type="radio" id="inline-radio1" name="jenisKelamin"" value="Laki-Laki" class="form-check-input">Laki-Laki
                                    </label>
                                    <p style="text-indent: 5em;">&nbsp</p>
                                    <label for="inline-radio2" class="form-check-label ">
                                        <input type="radio" id="inline-radio2" name="jenisKelamin" value="Perempuan" class="form-check-input">Perempuan
                                    </label>

                                </div>
                            </div>
                        </div>
                        <!-- <div class="row form-group">
                            <div class="col col-md-2"><label for="hf-email" class=" form-control-label">Tanggal Survey</label></div>
                            <div class="col-12 col-md-5"><input type="date" id="hf-email" name="hf-email" placeholder="Masukkan Survey..." class="form-control"><span class="help-block"></span></div>
                        </div> -->


                    </div>
                    <div class="card-footer">
                        <a href="a-kriteria.php">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Simpan
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