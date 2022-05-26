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
                        <h1>Status Penentuan</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Status</th>
                                            <th>Jumlah</th>

                                        </tr>
                                    </thead>
                                    <?php
                                    include "config.php";
                                    $query_mysqli = mysqli_query($koneksi, "SELECT * FROM status") or die(mysqli_error());

                                    if (isset($_GET['cari'])) {
                                        $cari = $_GET['cari'];
                                        $query = mysqli_query($koneksi, "SELECT * FROM status WHERE status LIKE '%" . $cari . "%' OR status LIKE '%" . $cari . "%'");
                                    } else {
                                        $query = mysqli_query($koneksi, "SELECT * FROM status");
                                    }
                                    $nomor = 1;
                                    if ($query) {
                                        while ($data = mysqli_fetch_array($query)) {
                                    ?>
                                            <tr>
                                                <td><?php echo $nomor++; ?></td>
                                                <td><?php echo $data['nama_status']; ?></td>
                                                <td><?php echo $data['jumlah']; ?></td>
                                                <td>
                                                    <a class="btn btn-sm btn-success" href="a-form_edit_status.php?id_status=<?php echo $data['id_status']; ?>">Edit</a>
                                                </td>
                                            </tr>
                                    <?php }
                                    } ?>
                                    
                                </table>
                            </div>
                        </div>
                    </div>


                </div>

            </div><!-- /#right-panel -->

            <!-- Right Panel -->

            <?php include 'footer.php'; ?>

</body>

</html>