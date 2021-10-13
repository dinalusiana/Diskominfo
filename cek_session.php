<?php 
session_start();
include '../db/koneksi2.php';
if (count($_SESSION)==0){
	header('location:../index.php');
	} 
?>