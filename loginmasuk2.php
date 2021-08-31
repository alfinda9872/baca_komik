<?php
include "koneksi.php";
$username= $_POST['username'];
$password= $_POST['password'];
$sql = "Select * from tb_admin where username='$username' and password='$password'";
$login=mysqli_query($koneksi,$sql);
$ketemu=mysqli_num_rows($login);
$r=mysqli_fetch_array($login);
					
if($ketemu == 1 ){
session_start();
$_SESSION['username'] =$r['username'];
$_SESSION['password'] =$r['password'];
$_SESSION['status'] =$r['status'];
header("location:index.php");
}
else{
	echo"<script type='text/javascript'>alert('Password Anda Salah Atau Belum Terdaftar Di Database Kami Silahkan Ingat-Ingat Kembali');</script>";
   	include "login.php";
}
?>