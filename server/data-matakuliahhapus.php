<?php
    include_once("dbkoneksi-2.php");
    
    $r["sukses"] = false;
    if(isset($_POST["kodemk"])){
        $KODEMK=$_POST["kodemk"];
        
        $sql = "DELETE FROM matakuliah WHERE KODEMK='".$KODEMK."'";
        
        mysqli_query($cnn, $sql);
        $r["sukses"]= true;
    }
    echo json_encode($r);