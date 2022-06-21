<?php
$output["error"] = true;

if (isset($_GET["nim"])) {
    $nim = $_GET["nim"];

    include_once("dbkoneksi-2.php");
    $sql = "SELECT NIM, NAMA, JURUSAN, JK, TGLLAHIR FROM mahasiswa WHERE NIM='" . $nim . "';";
    $hsl = mysqli_query($cnn, $sql);
    $output["isi"] = mysqli_fetch_all($hsl);
    $output["error"] = false;
}

echo json_encode($output);
