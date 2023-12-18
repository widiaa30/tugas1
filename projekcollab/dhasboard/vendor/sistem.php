<?php 
include "konek.php";

// PROSES INSERT
if (isset($_POST["form"])) {
    $form = $_POST["form"];
    
    if ($form === "form1") {
        include("index.php");

$nama = $_POST['namaweb'];
$kelas = $_POST['kelasweb'];
$jurusan = $_POST['jurusanweb'];
$jk = $_POST['jenisweb'];
$alamat = $_POST['alamatweb'];

echo $nama, $kelas, $jurusan, $jk, $alamat;

$sql = "insert into tb_siswa(NAMA,KELAS,JURUSAN,JK,ALAMAT) VALUES ('$nama','$kelas','$jurusan','$jk','$alamat')";
mysqli_query($kon,$sql);

header("location: ../index.php");


// PROSES UPDATE
}elseif ($form === "form2") {
    include("edit.php");
    
$id =$_GET ['id'];
$anm = $_POST['anamaweb'];
$akls = $_POST['akelasweb'];
$ajrsn = $_POST['ajurusanweb'];
$ajk = $_POST['ajenisweb'];
$almt = $_POST['aalamatweb'];

$edit = "UPDATE tb_siswa SET NAMA='".$anm."', KELAS='".$akls."', JURUSAN='".$ajrsn."', jk='".$ajk."', ALAMAT='".$almt."' WHERE NO =".$id;
 mysqli_query($kon, $edit);
 header("location: ../index.php");


} else {
    echo "tidak ditemukan";
}

} else {
echo "tentukan dengan parameter 'form'.";
}

?>