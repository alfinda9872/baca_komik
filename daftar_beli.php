<?php include "koneksi.php"; ?>
<html>
<head>
	<marquee><title>Sistem Penjualan MANGA online</title></marquee>
	<link rel="stylesheet" type="text/css" href="polesan.css">
</head>
<body>
<!-- HEADER -->
	<header>
		<img src="gambar/header2.jpg">
		<h1 class = "heder">Sistem Penjualan MANGA online</h1>
		<p class= "nama"> Adrian,Ezra,Tabah </p> 
	</header>
	<div class="bagmenu">
		<!-- bagian menu		 -->
		<?php include "menu_utama.php"; ?>
	</div>
		<!-- bagian konten Blog -->
		
			
</head>

<body>
	<div class="bagcontent">
			<div class="kontent">
					<p class="pp"> Beli Manga </p>
					<hr>	
	<form action="daftar_beli_cek.php" METHOD="POST"  enctype="multipart/form-data">				
	<br>Id Pelanggan : <input type="text" name="id_pelanggan" size="20" placeholder="Id Pelanggan" required="" />
	<br>
	<br>Id Manga : <input type="text" name="id_manga" size="20" placeholder="Id Manga" required="" />
	<br>
	<br>Jumlah Beli : <input type="text" name="jumlah_beli" size="20" placeholder="Jumlah Beli" required="" />
	<br>
	<br>Tanggal Beli : <input type="text" name="tanggal_beli" size="20" placeholder="YYYY-MM-DD" required="" />
	<br>
	<br>
		<hr>
	<p><input type="submit" name="beli" value="BELI" class="button">
		<input type="reset"  value="RESET" class="button1">
	</p>
</form>
</div>
</div>

</body>
</html>