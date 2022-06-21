<?php
    include_once("dbkoneksi-2.php");
    $sql = "CREATE TABLE matakuliah(
        KODEMK varchar(10) PRIMARY KEY,
        NAMAMK varchar(20),
        SKS enum('1','2','3','4'),
        SEMESTER enum('I','II','III','IV','V','VI','VII','VIII')
    );";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "Pembuatan tabel <strong>matakuliah</strong> sukses<br>";
    }else{
        echo "Pembuatan tabel <strong>matakuliah</strong> Gagal<br>";
    }
    mysqli_close($cnn);

