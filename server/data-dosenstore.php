<?php
    include_once("dbkoneksi-2.php");

    $r["sukses"] = false;
    if(isset($_POST["nip"])){
        $NIP = $_POST["nip"];
        $NAMA = $_POST["nama"];
        $GOLONGAN = $_POST["golongan"];
        $GAJI = $_POST["gaji"];

        $sql = "INSERT INTO dosen(NIP, NAMA, GOLONGAN, GAJI) 
            VALUES('$NIP', '$NAMA', '$GOLONGAN', '$GAJI');";
        
        mysqli_query($cnn, $sql);
        $r["sukses"]= true;
    }
    echo json_encode($r);