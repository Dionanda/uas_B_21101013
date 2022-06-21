function hapusdata() {
    let kodemk = document.getElementById("txkodemk").value;

    let data = "kodemk=" + kodemk;
    const gh = new XMLHttpRequest();
    gh.open("POST", "http://localhost/semester-2/webprog/webprog-uas/server/data-matakuliahhapus.php");
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