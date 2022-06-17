<?php
session_start(); // Start session nya
// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if( ! isset($_SESSION['username'])){ // Jika tidak ada session username berarti dia belum login
  header("location: index.php"); // Kita Redirect ke halaman index.php karena belum login
}
?>
<?php
// session_start();
// if(isset($_SESSION['login'])){
include "config_tgl.php";
?>
<html>

<head>
    <title>Surat Pernyataan Kehilangan Pekerjaan</title>
</head>

<body>
    <table align="center" border="0" cellpadding="1" style="width:550px;">
        <tbody>
            <tr>
                <td colspan="3">
                    <div align="center">
                        <span style="font-family: Verdana; font-size: x-medium;"><b>SURAT PERNYATAAN <br>
                                MEMPUNYAI ANGGOTA KELUARGA <BR>
                                RENTAN SAKIT MENAHUN/KRONIS/TERKENA COVID-19

                            </b></span>
                        <hr />
                    </div>
                </td>
            </tr>
            <?php
            // $sql=mysqli_query($koneksi, "SELECT * FROM warga ");

            $sql = mysqli_query($koneksi, "SELECT * FROM warga WHERE nik='$_GET[nik]'");
            while ($d = mysqli_fetch_array($sql)) {
                // $d=mysqli_fetch_array($sql);
            ?>
                <tr>
                    <td colspan="3">
                        <table border="0" cellpadding="1" style="width: 450px;">
                            <tbody>
                                <tr>
                                    <td width="250"><span style="font-size: x-medium;">Yang bertanda tangan di bawah ini:</span></td>

                                </tr>
                                <tr>
                                    <td><span style="font-size: x-medium;">Nama</span></td>
                                    <td><span style="font-size: x-medium;">:</span></td>
                                    <td><span style="font-size: x-medium;"><?php echo $d['nama']; ?></span></td>
                                </tr>
                                <tr>
                                    <td><span style="font-size: x-medium;">Alamat</span></td>
                                    <td><span style="font-size: x-medium;">:</span></td>
                                    <td><span style="font-size: x-medium;"><?php echo $d['alamat']; ?></span></td>
                                </tr>
                                <tr>
                                    <td><span style="font-size: x-medium;">Pekerjaan Sebelumnya</span></td>
                                    <td><span style="font-size: x-medium;">:</span></td>
                                    <td><span style="font-size: x-medium;"><?php echo $d['pekerjaan']; ?></span></td>
                                </tr>
                                <tr>
                                    <td><span style="font-size: x-medium;">Jenis Kelamin</span></td>
                                    <td><span style="font-size: x-medium;">:</span></td>
                                    <td><span style="font-size: x-medium;"><?php echo $d['jenisKelamin']; ?></span></td>
                                </tr>
                                <tr>
                                    <td><span style="font-size: x-medium;">Status dalam keluarga</span></td>
                                    <td><span style="font-size: x-medium;">:</span></td>
                                    <td><span style="font-size: x-medium;"></span></td>
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
                    <td colspan="3" height="180" valign="top">

                        <div align="justify">
                            <span style="font-size: x-medium;">
                                Menyatakan dengan sebenarnya, bahwa saya mempunyai anggota keluarga yang rentan sakit menahun atau kronis, termasuk yang positif terkena COVID-19 dan harus melakukan isolasi diri.

                            </span>
                        </div>
                        <br>

                        <div align="justify">
                            <span style="font-size: x-medium;">
                                Demikian surat pernyataan ini saya buat dengan sebenarnya dan apabila ternyata pernyataan ini tidak benar, saya sanggup dituntut sesuai dengan hukum dan ketentuan peraturan perundang-undangan yang berlaku.</span>
                        </div>
                    </td>
                <tr>

                <tr>
                    <td>
                        <div align="center">
                            <span style="font-size: x-medium;">Mengetahui,</span>
                        </div>

                        <div align="center">
                            <span style="font-size: x-medium;">Kepala Desa Banturejo</span>
                        </div>
                        <br><br><br><br>
                        <div align="center">
                            <span style="font-size: x-medium;">KUSNANTO</span>
                        </div>
                    </td>
                    <td></td>
                    <td valign="top">
                        <div align="center">
                            <span style="font-size: x-medium;">Banturejo, <?php echo tglIndonesia(date('Y-m-d')); ?> </span>
                        </div>
                        <div align="center">

                        </div>
                        <div align="center">
                            <span style="font-size: x-medium;">Yang Menyatakan</span>
                        </div>
                        <br><br><br><br>
                        <div align="center">
                            <span style="font-size: x-medium;"><?php echo $d['nama']; ?></span>
                        </div>
                    </td>

                </tr>
            <?php }; ?>

        </tbody>
    </table>
    <script>
        window.print();
    </script>
</body>

</html>