<?php include "koneksi.php" ; ?>
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

		<div class="bagcontent">
			<div class="kontent">
				<form  name="login" class="login-form" action="loginmasuk.php" method="post">
				<h1> Login </h1>
				<hr>
				<div class ="login">
		<br>Username : <input name="username" type="text" size='20' placeholder="Username" id="username"/>
		<br>
		<br>Password : <input name="password" type="password" size="20"  placeholder="Password" id="username"/>
		<br>
		<p>
		<input type="submit" name="submit" value="Login" class="button"   />
		<input type="reset" value="Reset" class="button1"   />
		</form>
		<form method="POST" action="register.php">
			<p> Belum Punya Akun..? Klik Register. </p>
		<input type="submit" name="submit" value="Register" class="button" />
		<hr>
				</div>
	</form>
				<br>
			</div>
		</div>
	</div>
</body>
</html>