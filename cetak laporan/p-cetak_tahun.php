<?php
// session_start();
// if(isset($_SESSION['login'])){
include "../config.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Laporan Data Calon Penerima BLTDD</title>
    <link rel="icon" href="./assets/img/logo.png">
    <style type="text/css">
        body {
            font-family: Arial;
        }

        @media print {
            .no-print {
                display: none;
            }
        }

        table {
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <!-- <!DOCTYPE html>
<html>
<head>
 <title>Laporan Penerima Bantuan BLTDD Desa Banturejo</title>
</head>
<body> -->
    <style type="text/css">
        body {
            font-family: sans-serif;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
        }

        table th,
        table td {
            border: 1px solid #3c3c3c;
            padding: 3px 8px;

        }

        a {
            background: blue;
            color: #fff;
            padding: 8px 10px;
            text-decoration: none;
            border-radius: 2px;
        }

        .tengah {
            text-align: center;
        }

        .element {
            position: absolute;
            right: 0;
            bottom: 100px;
            width: 200px;
            border: 1px solid #000;
        }
    </style>
    <table>
        <center>
            <img src="../images/logo/logo.png" width="200px">
            <h2>PEMERINTAH KABUPATEN MALANG</h2>
            <h2>KECAMATAN NGANTANG</h2>
            <h2>DESA BANTUREJO</h2>
            <p>Jl. Raya Banturejo No. 06 Telp. (0341) 5220053</p>
            <p>Kode Pos 65392</p>
            <h3> Laporan Penerima Bantuan Langsung Tunai Dana Desa <h3>
        </center>
        <tr>
            <th>No.</th>
            <th>NIK</th>
            <th>Surveyor</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
            <th>Jenis Kelamin</th>
            <th>Status</th>
            <th>Tanggal Survey</th>
        </tr>
        <?php
        // koneksi database
        $koneksi = mysqli_connect("localhost", "root", "", "bltdd");
        $cari = $_GET['cari'];
        $carirtw = $_GET['carirtw'];
        $tahun = $_GET['tahun'];
        $bulan = $_GET['bulan'];
        $tgl = $_GET['tgl'];
        // menampilkan data pegawai
        //  $data = mysqli_query($koneksi,"SELECT * FROM survey INNER JOIN warga ON survey.nik = warga.nik where YEAR($tahun)");s
        //  $query = mysqli_query($koneksi,"SELECT * FROM survey INNER JOIN warga ON survey.nik = warga.nik 
        //  where YEAR(tglSurvey) = '$tahun' AND MONTH(tglSurvey)='$bulan' AND DAY(tglSurvey) = '$tgl' " );
        if (isset($_GET['cari'])) {
            $cari = ($_GET['cari']);
            $q = "";
            if ($_GET['tahun'] != '' && $_GET['bulan'] != '' && $_GET['tgl'] != '') {
                $carirtw = ($_GET['carirtw']);
                $tahun = $_GET['tahun'];
                $bulan = $_GET['bulan'];
                $tgl = $_GET['tgl'];
                $q = "where (warga.alamat LIKE '%" . $carirtw . "%' AND warga.nama like '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND MONTH(tglSurvey)='$bulan' AND DAY(tglSurvey) = '$tgl' ))
                OR (warga.alamat LIKE '%" . $carirtw . "%' AND warga.nik LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND MONTH(tglSurvey)='$bulan' AND DAY(tglSurvey) = '$tgl' ) )
                OR (warga.alamat LIKE '%" . $carirtw . "%' AND warga.jenisKelamin LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND MONTH(tglSurvey)='$bulan' AND DAY(tglSurvey) = '$tgl' ))
                OR (warga.alamat LIKE '%" . $carirtw . "%' AND warga.pekerjaan LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND MONTH(tglSurvey)='$bulan' AND DAY(tglSurvey) = '$tgl'))
                OR (warga.alamat LIKE '%" . $carirtw . "%' AND survey.status LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND MONTH(tglSurvey)='$bulan' AND DAY(tglSurvey) = '$tgl' ))
                OR (warga.alamat LIKE '%" . $carirtw . "%' AND survey.tglSurvey LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND MONTH(tglSurvey)='$bulan' AND DAY(tglSurvey) = '$tgl'))
                OR (warga.alamat LIKE '%" . $carirtw . "%' AND user.username LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND MONTH(tglSurvey)='$bulan' AND DAY(tglSurvey) = '$tgl'))
                ";
            } else if ($_GET['tahun'] != '' && $_GET['bulan'] != '') {
                $carirtw = ($_GET['carirtw']);
                $tahun = $_GET['tahun'];
                $bulan = $_GET['bulan'];
                $tgl = $_GET['tgl'];
                $q = "where (warga.alamat LIKE '%" . $carirtw . "%' AND warga.nama like '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND MONTH(tglSurvey)='$bulan'))
                OR (warga.alamat LIKE '%" . $carirtw . "%' AND warga.nik LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND MONTH(tglSurvey)='$bulan' ) )
                OR (warga.alamat LIKE '%" . $carirtw . "%' AND warga.jenisKelamin LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND MONTH(tglSurvey)='$bulan' ))
                OR (warga.alamat LIKE '%" . $carirtw . "%' AND warga.pekerjaan LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND MONTH(tglSurvey)='$bulan' ))
                OR (warga.alamat LIKE '%" . $carirtw . "%' AND survey.status LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND MONTH(tglSurvey)='$bulan'  ))
                OR (warga.alamat LIKE '%" . $carirtw . "%' AND survey.tglSurvey LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND MONTH(tglSurvey)='$bulan' ))
                OR (warga.alamat LIKE '%" . $carirtw . "%' AND user.username LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND MONTH(tglSurvey)='$bulan' ))
                ";
            } else if ($_GET['tgl'] != '' && $_GET['bulan'] != '') {
                $carirtw = ($_GET['carirtw']);
                $tahun = $_GET['tahun'];
                $bulan = $_GET['bulan'];
                $tgl = $_GET['tgl'];
                $q = "where (warga.alamat LIKE '%" . $carirtw . "%' AND warga.nama like '%" . $cari . "%' AND (DAY(tglSurvey) = '$tgl' AND MONTH(tglSurvey)='$bulan'))
                OR (warga.alamat LIKE '%" . $carirtw . "%' AND warga.nik LIKE '%" . $cari . "%' AND (DAY(tglSurvey) = '$tgl' AND MONTH(tglSurvey)='$bulan' ) )
                OR (warga.alamat LIKE '%" . $carirtw . "%' AND warga.jenisKelamin LIKE '%" . $cari . "%' AND (DAY(tglSurvey) = '$tgl' AND MONTH(tglSurvey)='$bulan' ))
                OR (warga.alamat LIKE '%" . $carirtw . "%' AND warga.pekerjaan LIKE '%" . $cari . "%' AND (DAY(tglSurvey) = '$tgl' AND MONTH(tglSurvey)='$bulan' ))
                OR (warga.alamat LIKE '%" . $carirtw . "%' AND survey.status LIKE '%" . $cari . "%' AND (DAY(tglSurvey) = '$tgl' AND MONTH(tglSurvey)='$bulan'  ))
                OR (warga.alamat LIKE '%" . $carirtw . "%' AND survey.tglSurvey LIKE '%" . $cari . "%' AND (DAY(tglSurvey) = '$tgl' AND MONTH(tglSurvey)='$bulan' ))
                OR (warga.alamat LIKE '%" . $carirtw . "%' AND user.username LIKE '%" . $cari . "%' AND (DAY(tglSurvey) = '$tgl' AND MONTH(tglSurvey)='$bulan' ))
                ";
            } else if ($_GET['tahun'] != '' && $_GET['tgl'] != '') {
                $carirtw = ($_GET['carirtw']);
                $tahun = $_GET['tahun'];
                $bulan = $_GET['bulan'];
                $tgl = $_GET['tgl'];
                $q = "where (warga.alamat LIKE '%" . $carirtw . "%' AND warga.nama like '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND DAY(tglSurvey)='$tgl'))
                OR (warga.alamat LIKE '%" . $carirtw . "%' AND warga.nik LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND DAY(tglSurvey)='$tgl' ) )
                OR (warga.alamat LIKE '%" . $carirtw . "%' AND warga.jenisKelamin LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND DAY(tglSurvey)='$tgl' ))
                OR (warga.alamat LIKE '%" . $carirtw . "%' AND warga.pekerjaan LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND DAY(tglSurvey)='$tgl' ))
                OR (warga.alamat LIKE '%" . $carirtw . "%' AND survey.status LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND DAY(tglSurvey)='$tgl'  ))
                OR (warga.alamat LIKE '%" . $carirtw . "%' AND survey.tglSurvey LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND DAY(tglSurvey)='$tgl' ))
                OR (warga.alamat LIKE '%" . $carirtw . "%' AND user.username LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND DAY(tglSurvey)='$tgl' ))
                ";
            } else if ($_GET['tahun'] != '' || $_GET['bulan'] != '' || $_GET['tgl'] != '') {
                $carirtw = ($_GET['carirtw']);
                $tahun = $_GET['tahun'];
                $bulan = $_GET['bulan'];
                $tgl = $_GET['tgl'];
                $q = "where (warga.alamat LIKE '%" . $carirtw . "%' AND warga.nama like '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' OR MONTH(tglSurvey)='$bulan' OR DAY(tglSurvey) = '$tgl' ))
                OR (warga.alamat LIKE '%" . $carirtw . "%' AND warga.nik LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' OR MONTH(tglSurvey)='$bulan' OR DAY(tglSurvey) = '$tgl' ) )
                OR (warga.alamat LIKE '%" . $carirtw . "%' AND warga.jenisKelamin LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' OR MONTH(tglSurvey)='$bulan' OR DAY(tglSurvey) = '$tgl' ))
                OR (warga.alamat LIKE '%" . $carirtw . "%' AND warga.pekerjaan LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' OR MONTH(tglSurvey)='$bulan' OR DAY(tglSurvey) = '$tgl'))
                OR (warga.alamat LIKE '%" . $carirtw . "%' AND survey.status LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' OR MONTH(tglSurvey)='$bulan' OR DAY(tglSurvey) = '$tgl' ))
                OR (warga.alamat LIKE '%" . $carirtw . "%' AND survey.tglSurvey LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' OR MONTH(tglSurvey)='$bulan' OR DAY(tglSurvey) = '$tgl'))
                OR (warga.alamat LIKE '%" . $carirtw . "%' AND user.username LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' OR MONTH(tglSurvey)='$bulan' OR DAY(tglSurvey) = '$tgl'))
                ";
            } else if ($_GET['cari'] != '' || $_GET['carirtw'] != '' && $_GET['tahun'] == '' && $_GET['bulan'] == '' && $_GET['tgl'] == '') {
                $carirtw = ($_GET['carirtw']);
                $tahun = $_GET['tahun'];
                $bulan = $_GET['bulan'];
                $tgl = $_GET['tgl'];
                $q = "where (warga.alamat LIKE '%" . $carirtw . "%' AND warga.nama like '%" . $cari . "%')
                OR (warga.alamat LIKE '%" . $carirtw . "%' AND warga.nik LIKE '%" . $cari . "%' )
                OR (warga.alamat LIKE '%" . $carirtw . "%' AND warga.jenisKelamin LIKE '%" . $cari . "%' )
                OR (warga.alamat LIKE '%" . $carirtw . "%' AND warga.pekerjaan LIKE '%" . $cari . "%' )
                OR (warga.alamat LIKE '%" . $carirtw . "%' AND survey.status LIKE '%" . $cari . "%')
                OR (warga.alamat LIKE '%" . $carirtw . "%' AND survey.tglSurvey LIKE '%" . $cari . "%')
                OR (warga.alamat LIKE '%" . $carirtw . "%' AND user.username LIKE '%" . $cari . "%')
                ";
            } else {
                $carirtw = ($_GET['carirtw']);
                $tahun = $_GET['tahun'];
                $bulan = $_GET['bulan'];
                $tgl = $_GET['tgl'];
                $q = "where (warga.alamat LIKE '%" . $carirtw . "%' AND warga.nama like '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND MONTH(tglSurvey)='$bulan' AND DAY(tglSurvey) = '$tgl' ))
                OR (warga.alamat LIKE '%" . $carirtw . "%' AND warga.nik LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND MONTH(tglSurvey)='$bulan' AND DAY(tglSurvey) = '$tgl' ) )
                OR (warga.alamat LIKE '%" . $carirtw . "%' AND warga.jenisKelamin LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND MONTH(tglSurvey)='$bulan' AND DAY(tglSurvey) = '$tgl' ))
                OR (warga.alamat LIKE '%" . $carirtw . "%' AND warga.pekerjaan LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND MONTH(tglSurvey)='$bulan' AND DAY(tglSurvey) = '$tgl'))
                OR (warga.alamat LIKE '%" . $carirtw . "%' AND survey.status LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND MONTH(tglSurvey)='$bulan' AND DAY(tglSurvey) = '$tgl' ))
                OR (warga.alamat LIKE '%" . $carirtw . "%' AND survey.tglSurvey LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND MONTH(tglSurvey)='$bulan' AND DAY(tglSurvey) = '$tgl'))
                OR (warga.alamat LIKE '%" . $carirtw . "%' AND user.username LIKE '%" . $cari . "%' AND (YEAR(tglSurvey) = '$tahun' AND MONTH(tglSurvey)='$bulan' AND DAY(tglSurvey) = '$tgl'))
                ";
            }
        }
            $sql = "SELECT * FROM survey INNER JOIN warga ON survey.nik = warga.nik INNER JOIN user ON survey.id_user = user.id_user " . $q;
            $query_mysqli = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));

        $nomor = 1;
        //  query pertahun
        while ($d = mysqli_fetch_array($query_mysqli)) {
        ?>
            <tr>
                <!-- <td style='text-align: center;'><?php echo $d['id_warga'] ?></td> -->
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $d['nik']; ?></td>
                <td><?php echo $d['username']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['pekerjaan']; ?> </td>
                <td><?php echo $d['jenisKelamin']; ?> </td>
                <td><?php echo $d['status']; ?> </td>
                <td><?php echo $d['tglSurvey'];
                    date('Y-m-d'); ?> </td>
            </tr>
        <?php }
        ?>
    </table>
    <script>
        window.print();
    </script>
</body>

</html>