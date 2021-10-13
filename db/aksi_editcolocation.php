<?php
//isikan dengan query select data
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
    $id = $_GET['no'];

$query=mysqli_query($connect,"update colocation set instansi='$instansi',ip='$ip',nama_server='$nama_server',os='$os',
prosesor='$prosesor',ram='$ram',storage='$storage',psu='$psu',merk='$merk',serial_number='$serial_number',
location='$location',type_server='$type_server',allocation='$allocation',tgl_pemasangan='$tgl_pemasangan' where no='$id'")
or die(mysqli_error($connect));


if($query){
	header('location:../pages/datacolocation.php');
}else{
	echo mysqli_error($connect);
}
?>