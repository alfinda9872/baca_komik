<?php
	session_start();
	include "koneksi.php";
		$_SESSION['username'] = '';
		unset($_SESSION['username']);

		session_start();

		session_unset();

		session_destroy();

		header('location:index.php');

?>