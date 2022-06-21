function simpandata() {
    let kodemk = document.getElementById("txkodemk").value;
    let namamk = document.getElementById("txnamamk").value;
    let sks = document.getElementById("txsks").value;
    let semester = document.getElementById("txsemester").value;

    let data = "kodemk=" + kodemk + "&namamk=" + namamk + "&sks=" + sks + "&semester=" + semester;
    const gh = new XMLHttpRequest();
    gh.open("POST", "http://localhost/semester-2/webprog/webprog-uas/server/data-matakuliahstore.php");
    gh.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    gh.send(data);

    gh.onload = function () {
        const data = JSON.parse(this.responseText);
        if (data["sukses"]) {
            document.getElementById("pesan").style.display = "block";
        }
        setTimeout(() => {
            window.location.href = "http://localhost/semester-2/webprog/webprog-uas/client/index.php?p=matakuliah";
        }, 2500);
    }

}