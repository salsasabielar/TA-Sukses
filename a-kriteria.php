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
                        <h1>Kriteria Penerimaan</h1>
                    </div>
                </div>
            </div>
        </div>

        <form action="p-filter.php" method="post" class="form-horizontal">

            <div class="col-lg-12">
                <div class="card">

                    <div class="card-body">

                        <table class="table">
                            <thead class="thead-light">

                                <tr>

                                    <?php
                                    include "config.php";

                                    $tampil = "SELECT * FROM kriteria ORDER BY id_kriteria asc";
                                    $hasil = mysqli_query($koneksi, $tampil);
                                    $no1 = 0;
                                    $no2 = 0;

                                    $nomor = 1;
                                    while ($data = mysqli_fetch_array($hasil)) {

                                        echo "<tr >
                                    
                                    <td><input type=checkbox name=ya[] value=$data[id_kriteria] id=id1$no1></td>
                                    <td>$data[nama]</td>";

                                        $nomor++;
                                        $no1++;
                                        $no2++;

                                    ?>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>


                    </div>
                    <div class="card-footer">
                        <a href="a-tambah_data.php">
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