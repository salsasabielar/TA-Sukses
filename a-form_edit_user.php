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

        <form action="p-edit_user.php" method="post" class="form-horizontal">

        <div class="col-lg-12">
            <div class="card">

                <div class="card-body card-block">
                    <?php
                    include "config.php";
                    $id_user = $_GET['id_user'];
                    $query_mysqli = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$id_user'") or die(mysqli_error($koneksi));
                    $nomor = 1;
                    while ($data = mysqli_fetch_array($query_mysqli)) {
                    ?>
                        
                            <div class="row form-group">
                                <div class="col col-md-2"><label class=" form-control-label">Username</label></div>
                                <input type="hidden" name="id_user" value="<?php echo $data['id_user'] ?>">
                                <div class="col-12 col-md-5"><input type="text" name="username" value="<?php echo $data['username'] ?>" placeholder="Masukkan Username..." class="form-control"><span class="help-block"></span></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-2"><label class=" form-control-label">Password</label></div>
                                <div class="col-12 col-md-5"><input type="text" name="password" value="<?php echo $data['password'] ?>" placeholder="Masukkan Password..." class="form-control"><span class="help-block"></span></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-2"><label class=" form-control-label">Role</label></div>
                                <div class="col col-md-9">
                                    <div class="form-check-inline form-check">
                                        <label for="inline-radio1" class="form-check-label ">
                                            <input type="radio" id="inline-radio1" name="role" value="Admin" <?php echo ($data['role'] == 'Admin') ? 'checked' : ' ' ?> class="form-check-input">Admin
                                        </label>
                                        <p style="text-indent: 5em;">&nbsp</p>
                                        <label for="inline-radio2" class="form-check-label ">
                                            <input type="radio" id="inline-radio2" name="role" value="Surveyor" <?php echo ($data['role'] == 'Surveyor') ? 'checked' : ' ' ?> class="form-check-input">Surveyor
                                        </label>

                                    </div>
                                </div>
                            </div>
                            
                    <?php } ?>
                    
                </div>
                <div class="card-footer">
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