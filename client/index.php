<?php
if (isset($_GET["p"])) {
    if ($_GET["p"] === "beranda") {
        $APage = "active";
        $page = "beranda.php";
        $TPage = "Beranda";
    }
    if ($_GET["p"] === "mahasiswa") {
        $BPage = "active";
        if (isset($_GET["sp"])) {
            if ($_GET["sp"] == "tambahdata") {
                $page = "mahasiswa-tambahdata.php";
                $TPage = "Tambah Data Mahasiswa";
            }
            if ($_GET["sp"] == "editdata") {
                $page = "mahasiswa-editdata.php";
                $TPage = "Edit Data Mahasiswa";
            }
            if ($_GET["sp"] == "hapusdata") {
                $page = "mahasiswa-hapusdata.php";
                $TPage = "Hapus Data Mahasiswa";
            }
        } else {
            $page = "mahasiswa-listdata.php";
            $TPage = "Data Mahasiswa";
        }
    }
    if ($_GET["p"] === "matakuliah") {
        $CPage = "active";
        if (isset($_GET["sp"])) {
            if ($_GET["sp"] == "tambahdata") {
                $page = "matakuliah-tambahdata.php";
                $TPage = "Tambah Data Mata Kuliah";
            }
            if ($_GET["sp"] == "editdata") {
                $page = "matakuliah-editdata.php";
                $TPage = "Edit Data Mata Kuliah";
            }
            if ($_GET["sp"] == "hapusdata") {
                $page = "matakuliah-hapusdata.php";
                $TPage = "Hapus Data Mata Kuliah";
            }
        } else {
            $page = "matakuliah-listdata.php";
            $TPage = "Data Mata Kuliah";
        }
    }
    if ($_GET["p"] === "dosen") {
        $DPage = "active";
        if (isset($_GET["sp"])) {
            if ($_GET["sp"] == "tambahdata") {
                $page = "dosen-tambahdata.php";
                $TPage = "Tambah Data Dosen";
            }
            if ($_GET["sp"] == "editdata") {
                $page = "dosen-editdata.php";
                $TPage = "Edit Data Dosen";
            }
            if ($_GET["sp"] == "hapusdata") {
                $page = "dosen-hapusdata.php";
                $TPage = "Hapus Data Dosen";
            }
        } else {
            $page = "dosen-listdata.php";
            $TPage = "Data Dosen";
        }
    }
}else{
    $APage = "active";
    $page = "beranda.php";
    $TPage = "Beranda";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $TPage; ?></title>
    <!-- CDN CSS BOOTSRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style type="text/css">
        body{
            font-family: "Lucida Bright";
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-white pb-0 pt-2">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php?p=beranda">
                <img src="../assets/images/logo.svg" alt="logo" width="250" height="85">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="btn btn-outline-dark px-3 mx-0 rounded-pill <?= $APage; ?>" aria-current="page" href="index.php?p=beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-dark px-3 mx-2 rounded-pill <?= $BPage; ?>" href="index.php?p=mahasiswa">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-dark px-3 mx-0 rounded-pill <?= $CPage; ?>" href="index.php?p=matakuliah">Mata Kuliah</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-dark px-3 mx-2 rounded-pill <?= $DPage; ?>" href="index.php?p=dosen">Dosen</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid"> <hr class="mb-4">
        <?php
        include_once($page);
        ?>
    </div>

</body>

</html>