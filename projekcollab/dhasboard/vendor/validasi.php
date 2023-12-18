<?php
session_start();
//untuk memvalidasikan inputan pada web dengan field yg ada pada tabel database 
include "konek.php";
$user = $_POST['usernamediweb'];
$pass = $_POST['passworddiweb'];
    // echo "ini adalah username ".$user."dan ini adalah password ".$pass;
if (empty($user)){
    $_SESSION['info'] = 'Ussername dan password tidak boleh kosong';

    header("location: ../login.php");
    exit();
} else {
    if (empty($pass)) {
        $_SESSION['info'] = 'Ussername dan Password kosong wajib di isi';
        header("location: ../login.php");
        exit();
} else {
    $sql = "SELECT * FROM tb_akun WHERE Ussername LIKE '$user' AND Password LIKE '$pass'";
    // mengonkesikan data base dengan apa yang di panggil 
    $cek = mysqli_query($kon,$sql);
    // memanggil data pada baris 
    $row = mysqli_fetch_assoc($cek);
    // ID AKUN/NAMA AKUN/EMAIL/USERNAME/PASSWORD/FOTO/HAK AKSES
    if ($row ['Ussername'] === $user && $row['Password'] === $pass) {
        $_SESSION['login'] = true;
    }
    else{
        $_SESSION['info'] = 'Ussername atau Password salah';
        header("location: ../login.php");
    }
    if (isset($_SESSION['login'])){
        header("location: ../index.php");
    }else{
        header("location: ../login.php");
        exit();
    }

}


}     

?>