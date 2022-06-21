<?php
    include_once("dbkoneksi-2.php");

    $r["sukses"] = false;
    if(isset($_POST["kodemk"])){
        $KODEMK = $_POST["kodemk"];
        $NAMAMK = $_POST["namamk"];
        $SKS = $_POST["sks"];
        $SEMESTER = $_POST["semester"];

        $sql = "INSERT INTO matakuliah(KODEMK, NAMAMK, SKS, SEMESTER) 
            VALUES('$KODEMK', '$NAMAMK', '$SKS', '$SEMESTER');";
        
        mysqli_query($cnn, $sql);
        $r["sukses"]= true;
    }
    echo json_encode($r);