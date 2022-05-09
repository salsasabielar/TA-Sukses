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
                        <h1>Tambah Kriteria</h1>
                    </div>
                </div>
            </div>
        </div>
        <form action="p-tambah_kriteria.php" method="post" class="form-horizontal">
            <div class="col-lg-12">
                <div class="card">

                    <div class="card-body card-block">

                        <div class="row form-group">
                            <div class="col col-md-2"><label for="nama" class=" form-control-label">Masukkan Kriteria</label></div>
                            <div class="col-12 col-md-7"><textarea name="nama" rows="7" placeholder="Content..." class="form-control"></textarea></div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <a href="a-tambah_kriteria.php">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Submit
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