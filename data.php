        <div class="row">
            <?php
            //koneksi ke database
            $koneksi    = new mysqli('localhost', 'root', '', 'bantuan');

            //mengambil data ke tabel biodata
            $select     = mysqli_query($koneksi, 'select * from galeri');

            //melakukan looping dengan while
            while ($hasil = mysqli_fetch_array($select)) {
            ?>
                <div class="col-4">
                    <!-- data ditampilkan dalam bentuk gambar -->
                    <img src='upload/<?php echo $hasil['gambar']; ?>' width="100%" />
                    <!-- data ditampilkan dalam bentuk text  -->
                    <p style="text-align:center"><?php echo $hasil['name']; ?></p>
                </div>
            <?php } ?>
        </div>