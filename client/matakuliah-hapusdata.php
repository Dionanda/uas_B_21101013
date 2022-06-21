<hr>
<h3>HAPUS DATA MATA KULIAH</h3>
<hr>
<div class="alert alert-primary" role="alert" id="pesan">Data berhasil dihapus</div>
<form>
    <div class="mb-3">
        <label class="form-label">Kode Mata Kuliah</label>
        <input type="text" class="form-control" id="txkodemk" disabled>
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Mata Kuliah</label>
        <input type="text" class="form-control" id="txnamamk">
    </div>

    <div id="sembunyi">
        <div class="mb-3">
            <label class="form-label">SKS</label>
            <select id="txsks" class="form-select">
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Semester</label>
            <select id="txsemester" class="form-select">
                <option value="I"> I </option>
                <option value="II"> II </option>
                <option value="III"> III </option>
                <option value="IV"> IV </option>
                <option value="V"> V </option>
                <option value="VI"> VI </option>
                <option value="VII"> VII </option>
                <option value="VIII"> VIII </option>
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
        location.replace("http://localhost/semester-2/webprog/webprog-uas/client/index.php?p=matakuliah")
    }
</script>
<script src="matakuliah-caridata.js"></script>
<script src="matakuliah-hapusdata.js"></script>