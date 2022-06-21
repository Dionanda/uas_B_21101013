<?php
    /**
     * Membuat koneksi
     * 1. menyiapkan lokasi server, user name dan password
     * 2. test koneksi
     */
    include_once("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASCODE) or die("Koneksi ke DBMS Mysql gagal<br>");
    echo "Koneksi ke DBMS Mysql Sukses<br>";

