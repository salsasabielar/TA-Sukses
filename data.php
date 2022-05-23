        <div class="row">
        <?php error_reporting(E_ALL ^ E_NOTICE); ?>
            <?php
            //koneksi ke database
            $koneksi    = new mysqli('localhost', 'root', '', 'bantuan');

            //mengambil data ke tabel biodata
           // $select     = mysqli_query($koneksi, 'select * from warga');

            //melakukan looping dengan while
            
            $sql = mysqli_query($koneksi, "SELECT * FROM warga WHERE id_warga='$_GET[id_warga]'");
            while ($d = mysqli_fetch_array($sql)) {
                // while ($hasil = mysqli_fetch_array($select)) {
            ?>
                <div class="col-4">
                    <!-- data ditampilkan dalam bentuk gambar -->
                    <img src='upload/<?php echo $d['gambar']; ?>' width="100%" />
                    <!-- data ditampilkan dalam bentuk text  -->
                    <p style="text-align:center"><?php echo $d['nama']; ?></p>
                </div>
            <?php } ?>
        </div>