<?php
$username   = $_POST['username'];
$password       = md5($_POST['password']);

include 'db/koneksi2.php';

$user = mysqli_query($connect,"SELECT * from akun where username='$username' and password='$password'");
$chek = mysqli_num_rows($user);
if($chek>0)
{
    session_start();
    $row = mysqli_fetch_array($user);
    $_SESSION['username'] = $row['username'];
    header("location:pages/home.php");
}else
{
    header("location:index.php?pesan=gagal");
}
?>