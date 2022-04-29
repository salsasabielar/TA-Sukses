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

        <div class="col-lg-12">
            <div class="card">

                <div class="card-body card-block">
                    <form action="" method="post" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col col-md-2"><label for="hf-email" class=" form-control-label">NIK</label></div>
                            <div class="col-12 col-md-5"><input type="email" id="hf-email" name="hf-email" placeholder="Masukkan NIK..." class="form-control"><span class="help-block"></span></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-2"><label for="hf-email" class=" form-control-label">Nama</label></div>
                            <div class="col-12 col-md-5"><input type="email" id="hf-email" name="hf-email" placeholder="Masukkan Nama..." class="form-control"><span class="help-block"></span></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-2"><label for="hf-email" class=" form-control-label">Alamat</label></div>
                            <div class="col-12 col-md-5"><input type="email" id="hf-email" name="hf-email" placeholder="Masukkan Alamat..." class="form-control"><span class="help-block"></span></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-2"><label for="hf-email" class=" form-control-label">Tanggal Lahir</label></div>
                            <div class="col-12 col-md-5"><input type="date" id="hf-email" name="hf-email" placeholder="Masukkan Tanggal Lahir..." class="form-control"><span class="help-block"></span></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-2"><label for="hf-email" class=" form-control-label">Pekerjaan</label></div>
                            <div class="col-12 col-md-5"><input type="email" id="hf-email" name="hf-email" placeholder="Masukkan Pekerjaan..." class="form-control"><span class="help-block"></span></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-2"><label class=" form-control-label">Jenis Kelamin</label></div>
                            <div class="col col-md-9">
                                <div class="form-check-inline form-check">
                                    <label for="inline-radio1" class="form-check-label ">
                                        <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input">Laki-Laki
                                    </label>
                                    <p style="text-indent: 5em;">&nbsp</p>
                                    <label for="inline-radio2" class="form-check-label ">
                                        <input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input">Perempuan
                                    </label>

                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-2"><label for="hf-email" class=" form-control-label">Tanggal Survey</label></div>
                            <div class="col-12 col-md-5"><input type="date" id="hf-email" name="hf-email" placeholder="Masukkan Survey..." class="form-control"><span class="help-block"></span></div>
                        </div>

                    </form>
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

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <?php include 'footer.php'; ?>

</body>

</html>