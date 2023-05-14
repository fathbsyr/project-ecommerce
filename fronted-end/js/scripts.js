function login() {
    event.preventDefault();
    let email = document.getElementById("inputEmail").value;
    let pass = document.getElementById("inputPassword").value;

    if (email == "admin@gmail.com" && pass == "admin"){
        location.replace("../../../admin/dashboard/dashboard.php");
        alert("Selamat Datang Kembali Admin :)");
    }
    else {
        location.replace("index.php");
        alert("Terjadi Kesalahan")
    }
}