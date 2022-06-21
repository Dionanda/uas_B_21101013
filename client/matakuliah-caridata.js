let qs = window.location.search;
let urlP = new URLSearchParams(qs);
let kodemk = urlP.get("kodemk");

let urltarget = new URL("http://localhost/semester-2/webprog/webprog-uas/server/data-matakuliahkode.php");
urltarget.searchParams.set("kodemk", kodemk);

const gh = new XMLHttpRequest();
gh.open("GET", urltarget);
gh.send();

gh.onload = function () {
    const data = JSON.parse(this.responseText);
    console.log(data["isi"]);
    for (i = 0; i < data["isi"].length; i++) {
        document.getElementById("txkodemk").value = data["isi"][i][0];
        document.getElementById("txnamamk").value = data["isi"][i][1];
        document.getElementById("txsks").value = data["isi"][i][2];
        document.getElementById("txsemester").value = data["isi"][i][3];
    }

}