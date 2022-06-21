<?php
    include_once("dbkoneksi-2.php");
    
    $r["sukses"] = false;
    if(isset($_POST["nip"])){
        $NIP = $_POST["nip"];
        $NAMA = $_POST["nama"];
        $GOLONGAN = $_POST["golongan"];
        $GAJI = $_POST["gaji"];

        $sql = "UPDATE dosen SET 
            NAMA='".$NAMA."',
            GOLONGAN='".$GOLONGAN."',
            GAJI='".$GAJI."' 
            WHERE NIP='".$NIP."'";
        
        mysqli_query($cnn, $sql);
        $r["sukses"]= true;
    }
    echo json_encode($r);