<?php
include "koneksi2.php";
$nama_opd   = $_POST['nama_opd'];
$lokasi_hosting = $_POST['lokasi_hosting'];
$domain   = $_POST['domain'];
$package   = $_POST['package'];
$quota  = $_POST['quota'];
$used  = $_POST['used'];
$keb_bw = $_POST['keb_bw'];
$nama   = $_POST['nama'];
$telepon   = $_POST['telepon'];


$query  = mysqli_query($connect, "INSERT INTO `hosting` (`nama_opd`, `lokasi_hosting`, `domain`,`package`,`quota`,`used`,`keb_bw`,`nama`,`telepon`)
VALUES ('$nama_opd', '$lokasi_hosting', '$domain', '$package','$quota','$used','$keb_bw','$nama','$telepon')");

echo $query;

if($query){
	header('location:../pages/datahosting.php');
}else{
	echo mysqli_error($connect);
}
?>