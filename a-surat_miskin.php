<?php
// session_start();
// if(isset($_SESSION['login'])){
include "config_tgl.php";
?>
<html>

<head>
    <title>Undanagan orang tua</title>
</head>

<body>
    <table align="center" border="0" cellpadding="1" style="width: 700px;">
        <tbody>
            <tr>
                <td colspan="3">
                    <div align="center">
                        <span style="font-family: Verdana; font-size: x-small;"><b>SURAT PERNYATAAN <br>
                                KEHILANGAN PEKERJAAN / MATA PENCAHARIAN <BR>
                                AKIBAT DAMPAK COVID-19

                            </b></span>
                        <hr />
                    </div>
                </td>
            </tr>
            <?php
            // $sql=mysqli_query($koneksi, "SELECT * FROM warga ");

            $sql = mysqli_query($koneksi, "SELECT * FROM warga WHERE nik='$_GET[id_warga]'");
            while ($d = mysqli_fetch_array($sql)) {
                // $d=mysqli_fetch_array($sql);
            ?>
                <tr>
                    <td colspan="2">
                        <table border="0" cellpadding="1" style="width: 400px;">
                            <tbody>
                                <tr>
                                    <td width="200"><span style="font-size: x-small;">Yang bertanda tangan di bawah ini:</span></td>

                                </tr>
                                <tr>
                                    <td><span style="font-size: x-small;">Nama</span></td>
                                    <td><span style="font-size: x-small;">:</span></td>
                                    <td><span style="font-size: x-small;"><?php echo $d['nama']; ?></span></td>
                                </tr>
                                <tr>
                                    <td><span style="font-size: x-small;">Alamat</span></td>
                                    <td><span style="font-size: x-small;">:</span></td>
                                    <td><span style="font-size: x-small;"></span></td>
                                </tr>
                                <tr>
                                    <td><span style="font-size: x-small;">Pekerjaan Sebelumnya</span></td>
                                    <td><span style="font-size: x-small;">:</span></td>
                                    <td><span style="font-size: x-small;"></span></td>
                                </tr>
                                <tr>
                                    <td><span style="font-size: x-small;">Jenis Kelamin</span></td>
                                    <td><span style="font-size: x-small;">:</span></td>
                                    <td><span style="font-size: x-small;"></span></td>
                                </tr>
                                <tr>
                                    <td><span style="font-size: x-small;">Status dalam keluarga</span></td>
                                    <td><span style="font-size: x-small;">:</span></td>
                                    <td><span style="font-size: x-small;"></span></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>

                </tr>
                <tr>
                    <td width="302"></td>
                    <td width="343"></td>
                    <td width="339"></td>
                </tr>
                <tr>
                    <td>

                    </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="3" height="270" valign="top">

                        <div align="justify">
                            <span style="font-size: x-small;">
                                Menyatakan dengan sebenarnya, bahwa saya telah kehilangan pekerjaan/mata pencaharian akibat dampak COVID-19, sehingga berdampak pada saya yaitu:
                                <br>1. Saya tidak memiliki penghasilan;
                                <br>2. Keluarga saya menjadi miskin mendadak;
                                <br>3. Kebutuhan hidup sehari-hari keluarga bergantung kepada saya; dan
                                <br>4. Saya tidak memiliki aset.
                            </span>
                        </div>
                        <br>

                        <div align="justify">
                            <span style="font-size: x-small;">

                                Demikian surat pernyataan ini saya buat dengan sebenarnya dan apabila ternyata pernyataan ini tidak benar, saya sanggup dituntut sesuai dengan hukum dan ketentuan peraturan perundang-undangan yang berlaku.</span>
                        </div>
                        </div>
                    </td>
                    <td>
                <tr>
                    <td>
                        <div align="center">
                            <span style="font-size: x-small;">Mengetahui,</span>
                        </div>

                        <div align="center">
                            <span style="font-size: x-small;">Ai komala sari </span>
                        </div>
                    </td>
                    <td></td>
                    <td valign="top">
                        <div align="center">
                            <span style="font-size: x-small;">Kepala Sekolah, </span>
                        </div>
                        <div align="center">

                        </div>
                        <div align="center">
                            <span style="font-size: x-small;">E.Sulyati Dra,M.pd.</span>
                        </div>
                    </td>

                </tr>
            <?php }; ?>

        </tbody>
    </table>
</body>

</html>