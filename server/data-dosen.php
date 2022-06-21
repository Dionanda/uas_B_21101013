<?php
include_once("dbkoneksi-2.php");
   $sql = "SELECT NIP, NAMA, GOLONGAN, GAJI FROM dosen";
   $hasil = mysqli_query($cnn, $sql);
   $output = mysqli_fetch_all($hasil);
   echo json_encode($output);