<?php
include "koneksi2.php";
$instansi   = $_POST['instansi'];
$ip  = $_POST['ip'];
$nama_server   = $_POST['nama_server'];
$os   = $_POST['os'];
$prosesor  = $_POST['prosesor'];
$ram   = $_POST['ram'];
$storage  = $_POST['storage'];
$psu   = $_POST['psu'];
$merk   = $_POST['merk'];
$serial_number   = $_POST['serial_number'];
$location   = $_POST['location'];
$type_server   = $_POST['type_server'];
$allocation   = $_POST['allocation'];
$keterangan   = $_POST['keterangan'];
$tgl_pemasangan  = $_POST['tgl_pemasangan'];

$query  = mysqli_query($connect, "INSERT INTO `colocation` (`instansi`, `ip`, `nama_server`,`os`,`prosesor`,`ram`,`storage`,`psu`,`merk`,`serial_number`,`location`,`type_server`,`allocation`,`keterangan`,`tgl_pemasangan`)
VALUES ('$instansi', '$ip', '$nama_server', '$os','$prosesor','$ram','$storage','$psu','$merk','$serial_number','$location','$type_server','$allocation','$keterangan','$tgl_pemasangan')");


if($query){
	header('location:../pages/datacolocation.php');
}else{
	echo mysqli_error($connect);
}
?>