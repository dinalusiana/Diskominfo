<?php
//isikan dengan query select data
include "koneksi2.php";

    $nama_opd   = $_POST['nama_opd'];
    $lokasi_hosting  = $_POST['lokasi_hosting'];
    $domain   = $_POST['domain'];
    $package   = $_POST['package'];
    $quota  = $_POST['quota'];
    $used   = $_POST['used'];
    $keb_bw  = $_POST['keb_bw'];
    $nama   = $_POST['nama']; 
    $telepon   = $_POST['telepon'];
    $id = $_GET['no'];
   


$query=mysqli_query($connect,"update hosting set nama_opd='$nama_opd',lokasi_hosting='$lokasi_hosting',domain='$domain',package='$package',
quota='$quota',used='$used',keb_bw='$keb_bw',nama='$nama',telepon='$telepon' where nama_opd='$id'")
or die(mysqli_error($connect));


if($query){
	header('location:../pages/datahosting.php');
}else{
	echo mysqli_error($connect);
}
?>