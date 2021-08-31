<?php
	include "koneksi.php";

	if (isset($_POST['beli']))
{
	$id_pelanggan = $_POST['id_pelanggan'];
	$id_manga = $_POST['id_manga'];
	$jumlah_beli = $_POST['jumlah_beli'];
	$tanggal_beli = $_POST['tanggal_beli'];
	
	$sql7  = "SELECT harga FROM tb_manga where id_manga = '$id_manga'";
	$cek2  = mysqli_query($koneksi,$sql7);
	$hasil2 = mysqli_fetch_array($cek2);
	
	$harga = $hasil2['harga'];
	$total = $harga * $jumlah_beli;
	
	
	$sql = "insert into tb_daftar_beli values (null,'$id_pelanggan','$id_manga','$jumlah_beli','$total','$tanggal_beli')";
	$input = mysqli_query($koneksi,$sql) or die (mysqli_error($koneksi));

	if($input){
		echo"<script>alert('Berhasil Membeli Manga!',document.location.href='daftar_beli.php')</script>";
	}else{
		echo"<script>alert('Gagal Membeli Manga!',document.location.href='daftar_beli.php')</script>";
	}
}

	?>