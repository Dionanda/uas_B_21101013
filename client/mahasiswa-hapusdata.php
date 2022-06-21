<hr>
<h3>HAPUS DATA MAHASISWA</h3>
<hr>
<div class="alert alert-primary" role="alert" id="pesan">Data berhasil dihapus</div>
<form>
    <div class="mb-3">
        <label class="form-label">NIM</label>
        <input type="text" class="form-control" id="txnim" disabled>
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Mahasiswa</label>
        <input type="text" class="form-control" id="txnama">
    </div>

    <div id="sembunyi">
        <div class="mb-3">
            <label class="form-label">Tgl Lahir</label>
            <input type="date" class="form-control" id="txtglahir">
        </div>
        <div class="mb-3">
            <label class="form-label">Jenis Kelamin</label>
            <select id="txjkel" class="form-select">
                <option value="L"> Laki-Laki </option>
                <option value="P"> Perempuan </option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Jurusan</label>
            <select id="txjur" class="form-select">
                <option value="MTI"> TI-MTI </option>
                <option value="DGM"> TI-DGM </option>
                <option value="KAB"> TI-KAB </option>
                <option value="SK"> SK </option>
            </select>
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label"></label>
        <button type="button" onclick="hapusdata()" class="btn btn-outline-danger">Hapus Data</button>
        <button type="button" onclick="batal()" class="btn btn-outline-secondary"> Batal </button>
    </div>
</form>

<script>
    document.getElementById("pesan").style.display = "none";
    document.getElementById("sembunyi").style.display = "none";

    function batal() {
        location.replace("http://localhost/semester-2/webprog/webprog-uas/client/index.php?p=mahasiswa")
    }
</script>
<script src="mahasiswa-caridata.js"></script>
<script src="mahasiswa-hapusdata.js"></script>