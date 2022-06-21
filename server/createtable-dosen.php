<?php
    include_once("dbkoneksi-2.php");
    $sql = "CREATE TABLE dosen(
        NIP varchar(10) PRIMARY KEY,
        NAMA varchar(50),
        GOLONGAN enum('I','II','III','IV'),
        GAJI varchar(20)
    );";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "Pembuatan tabel <strong>dosen</strong> sukses<br>";
    }else{
        echo "Pembuatan tabel <strong>dosen</strong> Gagal<br>";
    }
    mysqli_close($cnn);

