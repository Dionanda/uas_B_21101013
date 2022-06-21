<?php
    include_once("dbkoneksi-2.php");
    
    $r["sukses"] = false;
    if(isset($_POST["nim"])){
        $NIM=$_POST["nim"];
        
        $sql = "DELETE FROM mahasiswa WHERE NIM='".$NIM."'";
        
        mysqli_query($cnn, $sql);
        $r["sukses"]= true;
    }
    echo json_encode($r);