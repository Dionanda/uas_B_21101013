let qs = window.location.search;
let urlP = new URLSearchParams(qs);
let nip = urlP.get("nip");

let urltarget = new URL("http://localhost/semester-2/webprog/webprog-uas/server/data-dosennip.php");
urltarget.searchParams.set("nip", nip);

const gh = new XMLHttpRequest();
gh.open("GET", urltarget);
gh.send();

gh.onload = function () {
    const data = JSON.parse(this.responseText);
    console.log(data["isi"]);
    for (i = 0; i < data["isi"].length; i++) {
        document.getElementById("txnip").value = data["isi"][i][0];
        document.getElementById("txnama").value = data["isi"][i][1];
        document.getElementById("txgol").value = data["isi"][i][2];
        document.getElementById("txgaji").value = data["isi"][i][3];
    }

}