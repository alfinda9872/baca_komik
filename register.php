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
					<p class="pp"> Register Akun Pembeli </p>
					<hr>
	<form action="register_cek.php" METHOD="POST"  enctype="multipart/form-data">
	<br>Username : <input type="text" name="user" size="20" placeholder="Username" required="" oninvalid="this.setCustomValidity('Masukkan Nama Dengan Benar')" oninput="setCustomValidity('')"/>
	<br>
	<br>Password : <input type="password" name="pass" size="20" placeholder="Password" required="" />
	<br>
	<br>Nama Lengkap : <input type="pass" name="nama" size="20" placeholder="Nama Lengkap" required="" />
	<br>
	<br>Email : <input type="email" name="email" size="20" placeholder="Email" required="" />
	<br>
	<br>Jenis Kelamin : <select name="jenis" width="50">
						<option value="L">Laki-Laki</option>
						<option value="P">Perempuan</option>
					</select>
	<br>
	<br>No HP : <input type="number" name="no" size="20" placeholder="Nomor Hp" required="" />
	<br>
	<br>Tanggal Lahir : <input type="date" name="tanggal" size="20" placeholder="TTanggal Lahir" required="" />
	<br>
	<br>Alamat : <textarea name="alam" rows="3" cols="20" placeholder="Alamat" required=""></textarea>
	<br>
	<br>Kode Pos: <input type="number" name="kode" size="20" placeholder="Kode Pos" required="" />
	<br>
	<br>
		<hr>
	<p><input type="submit" name="register" value="DAFTAR" class="button">
		<input type="reset"  value="RESET" class="button1">
	</p>
</form>
</div>
</div>

</body>
</html>