<?php
    include_once("dbkoneksi-1.php");
    if($cnn){
        $sql = "CREATE DATABASE kampusinstiki;";

        $hsl = mysqli_query($cnn,$sql);
        if($hsl){
            echo "Database kampusinstiki <strong>sukses</strong> dibuat<br>";
        }else{
            echo "Database kampusinstiki <strong>gagal</strong> dibuat<br>";
        }
        mysqli_close($cnn);
    }