<?php
// session_start();
// if(isset($_SESSION['login'])){
include "config_tgl.php";
?>
<html>

<head>
    <title>Cetak Per Warga</title>
</head>
<?php include 'header.php'; ?>

<body>
    <table align="center" border="0" cellpadding="1" style="width:800px;">
        <tbody>
            <tr>
                <td><img src="images/logo/logo.png" width="150px"></td>

                <td>
                    <div align="left">
                        <span style="font-family: Verdana; font-size: x-big;">
                            <b>PEMERINTAH KABUPATEN MALANG <br>
                                KECAMATAN NGANTANG <BR>
                            </b>
                            <p>Jl. Raya Banturejo No. 06 Telp. (0341) 5220053</p>
                        </span>
                    </div>

                </td>
            </tr>

            <tr>
                <td colspan="3">
                    <hr>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <table class="table">

                                    <?php
                                    $tglSurvey = $_GET['id_survey'];
                                    if (isset($_GET['nik'])) {
                                        $nik    = $_GET['nik'];
                                    } else {
                                        die("Error. No ID Selected!");
                                    }
                                    include "config.php";
                                    $query    = mysqli_query($koneksi, "SELECT * FROM survey INNER JOIN warga ON survey.nik = warga.nik WHERE survey.id_survey='$tglSurvey'");
                                    $data    = mysqli_fetch_array($query);
                                    ?>

                                    <tbody>
                                        <tr>
                                            <th scope="row">NIK</th>
                                            <td><?php echo $data['nik'] ?></td>
                                            <td></td>
                                            <td>
                                            <td></td>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th scope="row">Nama</th>
                <td><?php echo $data['nama'] ?></td>
                <td></td>
                <td>
                <td></td>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th scope="row">Alamat</th>
                <td><?php echo $data['alamat'] ?></td>
                <td></td>
                <td>
                <td></td>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th scope="row">Tanggal Lahir</th>
                <td><?php echo $data['tempat']; ?>, <?php echo date('j M Y', strtotime($data["tgl_lahir"])); ?></td>
                <td></td>
                <td>
                <td></td>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th scope="row">Pekerjaan</th>
                <td><?php echo $data['pekerjaan'] ?></td>
                <td></td>
                <td>
                <td></td>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th scope="row">Jenis Kelamin</th>
                <td><?php echo $data['jenisKelamin'] ?></td>
                <td></td>
                <td>
                <td></td>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th scope="row">Tanggal Survey</th>
                <td><?php echo date('j M Y', strtotime($data["tglSurvey"])); ?></td>
                <td></td>
                <td>
                <td></td>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th scope="row">Status</th>
                <td><?php echo $data['status'] ?></td>
                <td></td>
                <td>
                <td></td>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

        </tbody>
    </table>
    </div>
    </div>
    </div>
    <div class="col-lg-12">
        <div class="card">

            <div class="card-body">
                <table class="table">
                    <tbody>
                        <?php
                        include "config.php";
                        $nik = $_GET['nik'];
                        $query_mysqli = mysqli_query($koneksi, "SELECT * FROM warga WHERE nik='$nik'") or die(mysqli_error($koneksi));
                        $nomor = 1;
                        while ($data = mysqli_fetch_array($query_mysqli)) {
                        ?>

                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <?php
                                    $nik = $_GET['nik'];
                                    $id_survey = $_GET['id_survey'];
                                    $tampil = "SELECT * FROM kriteria";
                                    $surveyData = mysqli_query($koneksi, "SELECT * FROM jawaban_survey WHERE id_survey='$id_survey'");
                                    $surveyDatas = mysqli_fetch_array($surveyData);
                                    $hasil = mysqli_query($koneksi, $tampil);
                                    $no1 = 0;
                                    $no2 = 0;
                                    $nomor = 1;

                                    while ($data = mysqli_fetch_array($hasil)) {
                                    ?>

                                        <td>
                                            <input type="checkbox" name="ya[]" id="s" <?php foreach ($surveyData as $sr) {
                                                                                            if ($sr['id_kriteria'] == $data['id_kriteria']) {
                                                                                                echo "checked";
                                                                                            }
                                                                                        }  ?> disabled>
                                        </td>
                                        <td><?php echo $data['nama']; ?></td>
                                        </tr> <?php
                                                $nomor++;
                                                $no1++;
                                                $no2++;
                                            }

                                                ?>
                                <?php } ?>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>

                            <?php  ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    </td>

    </tr>


    </tbody>
    </table>
    <script>
        window.print();
    </script>
</body>

</html>