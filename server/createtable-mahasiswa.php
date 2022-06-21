<?php
    include_once("dbkoneksi-2.php");
    $sql = "CREATE TABLE mahasiswa(
        NIM varchar(8) PRIMARY KEY,
        NAMA varchar(50),
        JURUSAN enum('MTI','DGM','KAB','SK'),
        JK enum('L','P'),
        TGLLAHIR date
    );";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "Pembuatan tabel <strong>mahasiswa</strong> sukses<br>";
    }else{
        echo "Pembuatan tabel <strong>mahasiswa</strong> Gagal<br>";
    }
    mysqli_close($cnn);

