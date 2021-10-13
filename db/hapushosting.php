<!-- <?php
include "cek_session.php"
?> -->
<?php
include "koneksi2.php";
$id=$_GET['id'];
$query=mysqli_query($connect,"delete from hosting where no='$id'")
or die (mysqli_error($connect));
if($query){
	header('location:../pages/datahosting.php');
}else{
	echo mysqli_error($connect);
}
?>