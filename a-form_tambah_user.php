<?php
session_start(); // Start session nya
// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if( ! isset($_SESSION['username'])){ // Jika tidak ada session username berarti dia belum login
  header("location: index.php"); // Kita Redirect ke halaman index.php karena belum login
}
?>
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

        <form action="p-tambah_user.php" method="post" class="form-horizontal">

            <div class="col-lg-12">
                <div class="card">

                    <div class="card-body card-block">

                        <div class="row form-group">
                            <div class="col col-md-2"><label for="hf-email" class=" form-control-label">Username</label></div>
                            <div class="col-12 col-md-5"><input type="text" name="username" placeholder="Masukkan Username..." class="form-control"><span class="help-block" required></span></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-2"><label for="hf-email" class=" form-control-label">Password</label></div>
                            <div class="col-12 col-md-5"><input type="text" name="password" placeholder="Masukkan Password..." class="form-control"><span class="help-block" required></span></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-2"><label class=" form-control-label">Role</label></div>
                            <div class="col col-md-9">
                                <div class="form-check-inline form-check">
                                    <label for="inline-radio1" class="form-check-label ">
                                        <input type="radio" id="inline-radio1" name="role" value="admin" class="form-check-input" required>Admin
                                    </label>
                                    <p style="text-indent: 5em;">&nbsp</p>
                                    <label for="inline-radio2" class="form-check-label ">
                                        <input type="radio" id="inline-radio2" name="role" value="surveyor" class="form-check-input" required>Surveyor
                                    </label>

                                </div>
                            </div>
                        </div>
                        <!-- <div class="row form-group">
                            <div class="col col-md-2"><label class=" form-control-label">Role</label></div>
                            <div class="col col-md-9">
                                <div class="form-check-inline form-check">
                                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                                <select name="role" >
                                <option value="admin">Admin</option>
                                <option value="surveyor">Surveyor</option>
                                </select> 
                                </form>

                                </div>
                            </div>
                        </div> -->

                    </div>
                    <div class="card-footer">
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