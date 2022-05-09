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
                        <h1>Tambah User</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card">

                <div class="card-body card-block">
                    <form action="p-tambah_user.php" method="post" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col col-md-2"><label for="hf-email" class=" form-control-label">Username</label></div>
                            <div class="col-12 col-md-5"><input type="text" name="username" placeholder="Masukkan Username..." class="form-control"><span class="help-block"></span></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-2"><label for="hf-email" class=" form-control-label">Password</label></div>
                            <div class="col-12 col-md-5"><input type="text" name="password" placeholder="Masukkan Password..." class="form-control"><span class="help-block"></span></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-2"><label for="select" class=" form-control-label">Roles</label></div>
                            <div class="col-12 col-md-5">
                                <select name="role" id="select" class="form-control">
                                    <option value="0">Pilih Role</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Surveyor">Surveyor</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                    </a>

                </div>
                    </form>
                </div>
                
            </div>

        </div>

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <?php include 'footer.php'; ?>

</body>

</html>