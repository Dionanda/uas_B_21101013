let qs = window.location.search;
let urlP = new URLSearchParams(qs);
let nim = urlP.get("nim");

let urltarget = new URL("http://localhost/semester-2/webprog/webprog-uas/server/data-mhsnim.php");
urltarget.searchParams.set("nim", nim);

const gh = new XMLHttpRequest();
gh.open("GET", urltarget);
gh.send();

gh.onload = function () {
    const data = JSON.parse(this.responseText);
    console.log(data["isi"]);
    for (i = 0; i < data["isi"].length; i++) {
        document.getElementById("txnim").value = data["isi"][i][0];
        document.getElementById("txnama").value = data["isi"][i][1];
        document.getElementById("txtglahir").value = data["isi"][i][4];
        document.getElementById("txjkel").value = data["isi"][i][3];
        document.getElementById("txjur").value = data["isi"][i][2];
    }

}