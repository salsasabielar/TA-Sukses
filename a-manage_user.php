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
                        <h1>Informasi User</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="a-form_tambah_user.php">
                                    <button type="button" class="btn btn-primary">Tambah Data</button>
                                </a>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Role</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    include "config.php";
                                    $query_mysqli = mysqli_query($koneksi, "SELECT * FROM user") or die(mysqli_error());

                                    if (isset($_GET['cari'])) {
                                        $cari = $_GET['cari'];
                                        $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username LIKE '%" . $cari . "%'");
                                    } else {
                                        $query = mysqli_query($koneksi, "SELECT * FROM user");
                                    }
                                    $nomor = 1;
                                    if ($query) {
                                        while ($data = mysqli_fetch_array($query)) {
                                    ?>
                                            <tr>
                                                <td><?php echo $nomor++; ?></td>
                                                <td><?php echo $data['username']; ?></td>
                                                <td><?php echo $data['password']; ?></td>
                                                <td><?php echo $data['role']; ?></td>
                                                <td>
                                                    <a class="btn btn-sm btn-primary" href="a-form_edit_user.php?id_user=<?php echo $data['id_user']; ?>">Edit</a>
                                                    <a class="btn btn-sm btn-primary" href="p-hapus_user.php?id_user=<?php echo $data['id_user']; ?>" onclick="return confirm()">Hapus</a>
                                                </td>
                                            </tr>

                                    <?php }
                                    }  ?>

                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->

        </div><!-- /#right-panel -->

        <!-- Right Panel -->

        <?php include 'footer.php'; ?>

</body>

</html>