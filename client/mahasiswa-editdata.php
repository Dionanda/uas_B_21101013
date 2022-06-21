<hr>
<h3>EDIT DATA MAHASISWA</h3>
<hr>
<div class="alert alert-primary" role="alert" id="pesan">Data berhasil diperbaharui</div>

<form>
    <div class="mb-3">
        <label class="form-label">NIM</label>
        <input type="text" class="form-control" id="txnim" disabled>
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Mahasiswa</label>
        <input type="text" class="form-control" id="txnama">
    </div>
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
    <div class="mb-3">
        <label class="form-label"></label>
        <button type="button" onclick="editdata()" class="btn btn-outline-primary">Simpan Data</button>
        <button type="button" onclick="batal()" class="btn btn-outline-secondary"> Batal </button>
    </div>
</form>

<script>
    document.getElementById("pesan").style.display = "none";

    function batal() {
        location.replace("http://localhost/semester-2/webprog/webprog-uas/client/index.php?p=mahasiswa")
    }
</script>
<script src="mahasiswa-caridata.js"></script>
<script src="mahasiswa-editdata.js"></script>