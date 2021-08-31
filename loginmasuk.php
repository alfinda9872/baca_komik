<?php

	include "koneksi.php";

	$username = $_POST['username'];
	$password  = $_POST['password'];
	$sql = "SELECT * FROM tb_admin  WHERE username='$username' AND password='$password'";
	$pilih = mysqli_query($koneksi,$sql);
// index email, password, dan status dari table user_employer);
	$row   = mysqli_num_rows($pilih);
	$sel   = mysqli_fetch_array($pilih);
	$sql2 = "SELECT * FROM tb_pembeli where username='$username' AND password='$password'";
	$pilih2= mysqli_query($koneksi,$sql2);
	$rows  = mysqli_num_rows($pilih2);
	$sels  = mysqli_fetch_array($pilih2);

	if ($row == 1) {
		session_start();
		$_SESSION['username'] =$sel['username'];
		$_SESSION['password'] =$sel['password'];
		$_SESSION['status'] =$sel['status'];
		header('location: index.php?');
	} elseif ($rows == 1) {
		session_start();
		$_SESSION['username'] =$sels['username'];
		$_SESSION['password'] =$sels['password'];
		$_SESSION['status'] =$sels['status'];
		header('location: index.php?');
	} else {
		echo"<script type='text/javascript'>alert('Password Anda Salah Atau Belum Terdaftar Di Database Kami Silahkan Ingat-Ingat Kembali');</script>";
   	include "login.php";
	}


?>