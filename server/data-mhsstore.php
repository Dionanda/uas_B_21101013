<?php
    include_once("dbkoneksi-2.php");

    $r["sukses"] = false;
    if(isset($_POST["nim"])){
        $NIM = $_POST["nim"];
        $NAMA = $_POST["nama"];
        $JURUSAN = $_POST["jurusan"];
        $JK = $_POST["jkel"];
        $TGLLAHIR = $_POST["tgl"];

        $sql = "INSERT INTO mahasiswa(NIM, NAMA, JURUSAN, JK, TGLLAHIR) 
            VALUES('$NIM', '$NAMA', '$JURUSAN', '$JK', '$TGLLAHIR');";
        
        mysqli_query($cnn, $sql);
        $r["sukses"]= true;
    }
    echo json_encode($r);