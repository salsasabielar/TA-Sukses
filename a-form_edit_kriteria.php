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
                        <h1>Edit Kriteria</h1>
                    </div>
                </div>
            </div>
        </div>

        <form action="p-update_kriteria.php" method="post" class="form-horizontal">

            <div class="col-lg-12">
                <div class="card">

                    <!-- 
                    <form action="" method="post" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col col-md-2"><label for="textarea-input" class=" form-control-label">Masukkan Kriteria</label></div>
                            <div class="col-12 col-md-7"><textarea name="textarea-input" id="textarea-input" rows="7" placeholder="Content..." class="form-control"></textarea></div>
                        </div>
                    </form>
                 -->

                    <?php
                    include "config.php";
                    $id_kriteria = $_GET['id_kriteria'];
                    $query_mysqli = mysqli_query($koneksi, "SELECT * FROM kriteria WHERE id_kriteria='$id_kriteria'") or die(mysqli_error($koneksi));
                    $nomor = 1;
                    while ($data = mysqli_fetch_array($query_mysqli)) {
                    ?>

                        <div class="card-body card-block">
                            <div class="row form-group">
                                <div class="col col-md-2"><label for="nama" class=" form-control-label">Masukkan Kriteria</label></div>
                                <input type="hidden" name="id_kriteria" value="<?php echo $data['id_kriteria'] ?>">
                                <div class="col-12 col-md-7"><textarea name="nama" rows=" 7" class="form-control"><?php echo $data['nama'] ?></textarea></div>

                            </div>
                        </div>


                    <?php } ?>


                    <div class="card-footer">
                        <a href="a-kriteria.php">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Update
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