function editdata() {
    let nip = document.getElementById("txnip").value;
    let nama = document.getElementById("txnama").value;
    let golongan = document.getElementById("txgol").value;
    let gaji = document.getElementById("txgaji").value;

    let data = "nip=" + nip + "&nama=" + nama + "&golongan=" + golongan + "&gaji=" + gaji;
    const gh = new XMLHttpRequest();
    gh.open("POST", "http://localhost/semester-2/webprog/webprog-uas/server/data-dosenedit.php");
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