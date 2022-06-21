<?php
$output["error"] = true;

if (isset($_GET["kodemk"])) {
    $kodemk = $_GET["kodemk"];

    include_once("dbkoneksi-2.php");
    $sql = "SELECT KODEMK, NAMAMK, SKS, SEMESTER FROM matakuliah WHERE KODEMK='" . $kodemk . "';";
    $hsl = mysqli_query($cnn, $sql);
    $output["isi"] = mysqli_fetch_all($hsl);
    $output["error"] = false;
}

echo json_encode($output);
