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
                        <h1>Edit User</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card">

                <div class="card-body card-block">
                    <form action="" method="post" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col col-md-2"><label for="hf-email" class=" form-control-label">Username</label></div>
                            <div class="col-12 col-md-5"><input type="email" id="hf-email" name="hf-email" placeholder="Masukkan Username..." class="form-control"><span class="help-block"></span></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-2"><label for="hf-email" class=" form-control-label">Password</label></div>
                            <div class="col-12 col-md-5"><input type="email" id="hf-email" name="hf-email" placeholder="Masukkan Password..." class="form-control"><span class="help-block"></span></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-2"><label for="select" class=" form-control-label">Roles</label></div>
                            <div class="col-12 col-md-5">
                                <select name="select" id="select" class="form-control">
                                    <option value="0">Pilih Role</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Surveyor</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <a href="a-kriteria.php">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Update
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