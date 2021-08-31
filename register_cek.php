<?php
	include "koneksi.php";

	if (isset($_POST['register']))
{
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$jenis = $_POST['jenis'];
	$no = $_POST['no'];
	$tanggal = $_POST['tanggal'];
	$alam = $_POST['alam'];
	$kode = $_POST['kode'];
	$status = 'Pengguna';

	$sql = "insert into tb_pembeli values (null,'$user','$pass','$nama','$email','$jenis','$no','$tanggal','$alam','$kode','$status')";
	$input = mysqli_query($koneksi,$sql) or die (mysqli_error($koneksi	));

	if($input){
		echo"<script>alert('Register Akun Pembeli Berhasil !',document.location.href='login.php')</script>";
	}else{
		echo"<script>alert('Register Akun Pembeli Gagal !',document.location.href='register.php')</script>";
	}


}

	?>