<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <style>
        .tombol{
            margin-left: 60px;
        }
        .tombol-dosen{
            margin-left: 90px;
        }
        .cb-mhs{
            background-color: black;
            margin-top: 60px;
            margin-bottom: 30px;
        }
        .cb-matkul{
            background-color: black;
            margin-top: 26px;
            margin-bottom: 30px;
        }
        .cb-dosen{
            background-color: black;
            margin-top: 48px;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <hr>
    <h3 class="text-center">Institut Bisnis dan Teknologi Indonesia (INSTIKI)</h3>
    <hr class="mb-4">
    <hr>
    <div class="container mt-3">
                <div class="row pb-5">
                    <div class="col-4 card mx-3" style="width:350px">
                        <img class="card-img-top p-3" src="../assets/images/mahasiswa.jpg" alt="Card image" style="width:100%">
                        <div class="card-body cb-mhs">
                            <a href="index.php?p=mahasiswa" class="btn btn-outline-light px-3 pb-0 tombol">
                                <h4 class="card-title text-center">Mahasiswa</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-4 card" style="width:350px">
                        <img class="card-img-top p-3" src="../assets/images/matakuliah.jpg" alt="Card image" style="width:100%">
                        <div class="card-body cb-matkul">
                            <a href="index.php?p=matakuliah" class="btn btn-outline-light px-3 pb-0 tombol">
                                <h4 class="card-title text-center">Mata Kuliah</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-4 card mx-3" style="width:350px">
                        <img class="card-img-top p-3" src="../assets/images/dosen.jpg" alt="Card image" style="width:100%">
                        <div class="card-body cb-dosen">
                            <a href="index.php?p=dosen" class="btn btn-outline-light px-3 pb-0 tombol-dosen">
                                <h4 class="card-title text-center">Dosen</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
</body>
</html>