<div id="konten"></div>

<script>
    const gh = new XMLHttpRequest();
    gh.open("GET", "http://localhost/semester-2/webprog/webprog-uas/server/data-mhs.php");
    gh.send();

    gh.onload = function() {
        const data = JSON.parse(this.responseText);
        var tx = '<div class="card border-5"><h3 class=" card-header border-5 bg-white text-dark mb-3 text-center">DATA MAHASISWA</h3>';
        tx += '<div class="card-body py-0"><table class="table table-hover table-white align-middle text-center"><thead class="table-dark align-middle"><tr><th scope="col">NO</th><th scope="col">NIM</th><th scope="col">NAMA LENGKAP</th><th scope="col">JENIS KELAMIN</th><th scope="col">JURUSAN</th><th scope="col">TANGGAL LAHIR</th><th scope="col"><a href="index.php?p=mahasiswa&sp=tambahdata" class="btn btn-outline-light">TAMBAH DATA</a></th></tr></thead></tbody>';

        let nomor = 1;
        for (i = 0; i < data.length; i++) {
            let jkel = "Laki-Laki";
            if (data[i][3] == "P") {
                jkel = "Perempuan";
            }
            tx += '<tr>';
            tx += '  <th scope="row">' + nomor + '</th>';
            tx += '  <td>' + data[i][0] + '</td>';
            tx += '  <td>' + data[i][1] + '</td>';
            tx += '  <td>' + jkel + '</td>';
            tx += '  <td>' + data[i][2] + '</td>';
            tx += '  <td>' + data[i][4] + '</td>';
            tx += '  <td> ';
            tx += '<a href="index.php?p=mahasiswa&sp=editdata&nim=' + data[i][0] + '" class="btn btn-outline-success">EDIT</a> ';
            tx += '<a href="index.php?p=mahasiswa&sp=hapusdata&nim=' + data[i][0] + '" class="btn btn-outline-danger">HAPUS</a> ';
            tx += '</td>';
            tx += '</tr>';
            nomor++;
        }
        tx += '  </tbody></table></div></div><hr class="mt-4">';

        document.getElementById("konten").innerHTML = tx;
    }
</script>