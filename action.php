<?php
        //mendefinisikan folder
        define('UPLOAD_DIR', 'upload/');
    
        //koneksi ke database
        $koneksi = new mysqli('localhost', 'root', '', 'bantuan');
    
        //menangkap variabel
        $img        = $_POST['image'];
        $name       = $_POST['name'];
    
        $img        = str_replace('data:image/jpeg;base64,', '', $img);
        $img        = str_replace(' ', '+', $img);
    
        //resource gambar diubah dari encode
        $data       = base64_decode($img);
    
        //menamai file, file dinamai secara random dengan unik
        $file       = $name . '.png';
        
        //memindahkan file ke folder upload
        file_put_contents(UPLOAD_DIR.$file, $data);
    
        //memasukkan data ke dalam tabel biodata
        mysqli_query($koneksi,"INSERT INTO warga WHERE upload_kk='$file'");
        // mysqli_query($koneksi, "UPDATE warga SET upload_kk='$file' WHERE id_warga='$id_warga'");
       

    ?>