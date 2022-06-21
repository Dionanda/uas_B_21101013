<hr>
<h3>EDIT DATA DOSEN</h3>
<hr>
<div class="alert alert-primary" role="alert" id="pesan">Data berhasil diperbaharui</div>

<form>
    <div class="mb-3">
        <label class="form-label">NIP</label>
        <input type="text" class="form-control" id="txnip" disabled>
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Dosen</label>
        <input type="text" class="form-control" id="txnama">
    </div>
    <div class="mb-3">
        <label class="form-label">Golongan</label>
        <select id="txgol" class="form-select">
            <option value="I"> I </option>
            <option value="II"> II </option>
            <option value="III"> III </option>
            <option value="IV"> IV </option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Gaji</label>
        <input type="text" class="form-control" id="txgaji">
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
        location.replace("http://localhost/semester-2/webprog/webprog-uas/client/index.php?p=dosen")
    }
</script>
<script src="dosen-caridata.js"></script>
<script src="dosen-editdata.js"></script>