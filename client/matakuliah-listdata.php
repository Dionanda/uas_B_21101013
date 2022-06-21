<div id="konten"></div>

<script>
    const gh = new XMLHttpRequest();
    gh.open("GET", "http://localhost/semester-2/webprog/webprog-uas/server/data-matakuliah.php");
    gh.send();

    gh.onload = function() {
        const data = JSON.parse(this.responseText);
        var tx = '<div class="card border-5"><h3 class=" card-header border-5 bg-white text-dark mb-3 text-center">DATA MATA KULIAH</h3>';
        tx += '<div class="card-body py-0"><table class="table table-hover table-white align-middle text-center"><thead class="table-dark align-middle"><tr><th scope="col">NO</th><th scope="col">KODE MATA KULIAH</th><th scope="col">NAMA MATA KULIAH</th><th scope="col">SKS</th><th scope="col">SEMESTER</th><th scope="col"><a href="index.php?p=matakuliah&sp=tambahdata" class="btn btn-outline-light">TAMBAH DATA</a></th></tr></thead></tbody>';

        let nomor = 1;
        for (i = 0; i < data.length; i++) {
            let sks = "1";
            if (data[i][2] == "2") {
                sks = "2";
            }else if (data[i][2] == "3") {
                sks = "3";
            }else if (data[i][2] == "4") {
                sks = "4";
            }
            let semester = "I";
            if (data[i][3] == "II") {
                semester = "II";
            }
            if (data[i][3] == "III") {
                semester = "III";
            }
            if (data[i][3] == "IV") {
                semester = "IV";
            }
            if (data[i][3] == "V") {
                semester = "V";
            }
            if (data[i][3] == "VI") {
                semester = "VI";
            }
            if (data[i][3] == "VII") {
                semester = "VII";
            }
            if (data[i][3] == "VIII") {
                semester = "VIII";
            }
            tx += '<tr>';
            tx += '  <th scope="row">' + nomor + '</th>';
            tx += '  <td>' + data[i][0] + '</td>';
            tx += '  <td>' + data[i][1] + '</td>';
            tx += '  <td>' + sks + '</td>';
            tx += '  <td>' + semester + '</td>';
            tx += '  <td> ';
            tx += '<a href="index.php?p=matakuliah&sp=editdata&kodemk=' + data[i][0] + '" class="btn btn-outline-success">EDIT</a> ';
            tx += '<a href="index.php?p=matakuliah&sp=hapusdata&kodemk=' + data[i][0] + '" class="btn btn-outline-danger">HAPUS</a> ';
            tx += '</td>';
            tx += '</tr>';
            nomor++;
        }
        tx += '  </tbody></table></div></div><hr class="mt-4">';

        document.getElementById("konten").innerHTML = tx;
    }
</script>