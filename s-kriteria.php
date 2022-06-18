<?php
session_start(); // Start session nya
// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if (!isset($_SESSION['username'])) { // Jika tidak ada session username berarti dia belum login
    header("location: index.php"); // Kita Redirect ke halaman index.php karena belum login
}
?>
<!doctype html>
<html class="no-js" lang="en">

<?php include 'header.php'; ?>

<body>

    <?php include 's-sidebar.php'; ?>

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

        <form action="ps-filter.php?nik=<?= $_GET['nik'] ?>" method="post" class="form-horizontal">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row form-group">
                            <div class="col col-md-2"><label for="nik" class=" form-control-label">Pilih Tanggal Survey</label></div>
                            <div class="col-12 col-md-5"><input type="date" name="tgl" id="tgl" class="form-control"><span class="help-block"></span></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-2"><label for="nik" class=" form-control-label">Surveyor</label></div>
                            <div class="col-12 col-md-3">
                                <select name="id_user" id="select" class="form-control">

                                    <option selected>Temukan Nama...</option>
                                    <?php
                                    include "config.php";
                                    $id_user = $_GET['id_user'];
                                    //query menampilkan nip pegawai ke dalam combobox
                                    $query    = mysqli_query($koneksi, "SELECT * FROM user ORDER BY username");
                                    while ($data = mysqli_fetch_array($query)) {
                                    ?>
                                        <option value="<?= $data['id_user']; ?>"><?php echo $data['username']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>

                            </div>
                        </div>
                    </div>

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
                        <a href="s-tambah_data.php">
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