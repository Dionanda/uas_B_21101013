<?php
    include_once("dbkoneksi-2.php");
    
    $r["sukses"] = false;
    if(isset($_POST["kodemk"])){
        $KODEMK = $_POST["kodemk"];
        $NAMAMK = $_POST["namamk"];
        $SKS = $_POST["sks"];
        $SEMESTER = $_POST["semester"];

        $sql = "UPDATE matakuliah SET 
            NAMAMK='".$NAMAMK."',
            SKS='".$SKS."',
            SEMESTER='".$SEMESTER."' 
            WHERE KODEMK='".$KODEMK."'";
        
        mysqli_query($cnn, $sql);
        $r["sukses"]= true;
    }
    echo json_encode($r);