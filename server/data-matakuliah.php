<?php
include_once("dbkoneksi-2.php");
   $sql = "SELECT KODEMK, NAMAMK, SKS, SEMESTER FROM matakuliah";
   $hasil = mysqli_query($cnn, $sql);
   $output = mysqli_fetch_all($hasil);
   echo json_encode($output);