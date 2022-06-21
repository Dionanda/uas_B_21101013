function hapusdata() {
    let nip = document.getElementById("txnip").value;

    let data = "nip=" + nip;
    const gh = new XMLHttpRequest();
    gh.open("POST", "http://localhost/semester-2/webprog/webprog-uas/server/data-dosenhapus.php");
    gh.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    gh.send(data);

    gh.onload = function () {
        const data = JSON.parse(this.responseText);
        if (data["sukses"]) {
            document.getElementById("pesan").style.display = "block";
        }
        setTimeout(() => {
            window.location.href = "http://localhost/semester-2/webprog/webprog-uas/client/index.php?p=dosen";
        }, 2500);
    }

}