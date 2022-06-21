<?php
    include_once("dbkoneksi-2.php");
    
    $r["sukses"] = false;
    if(isset($_POST["nip"])){
        $NIP=$_POST["nip"];
        
        $sql = "DELETE FROM dosen WHERE NIP='".$NIP."'";
        
        mysqli_query($cnn, $sql);
        $r["sukses"]= true;
    }
    echo json_encode($r);