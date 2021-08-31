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

		<!-- bagian konten Blog -->
		<!-- bagian sidebar website -->
		<aside class="sidebar">
			<div class="widget">
				<img src="gambar/iklan.gif">
			</div>
		</aside>
		<!-- akhir bagian sidebar website -->
		<div class="bagcontent">

			<div class="kontent">
				<?php
					$nadeshiko = "SELECT * FROM tb_manga order by id_manga desc ";
					$kirigiri = mysqli_query($koneksi,$nadeshiko);

					while ($myucel = mysqli_fetch_assoc($kirigiri)){
						$admin = $myucel['id_admin'];
						$gambar = $myucel['gambar'];
						$tgl_upload = $myucel['tgl_upload'];
						$judul = $myucel['judul'];
						$ilustrator = $myucel['ilustrator'];
				
					?>
				<div class="info">

				<b>Tanggal Upload : <b><?php echo $tgl_upload; ?></b>
				</div>
				<h1> <?php echo $judul; ?> </h1>
				<p>
					<div class="gambar" >
					<?php echo "<img src='gambar/$gambar' width='580px' height='400px'/>"; ?>
				</div>
					<div class="pps">
					<b>Diposting Oleh :</b> <a> Admin (<?php echo $admin ?>) </a></p>
					<p><b>Ilustrator :</b> <?php echo $ilustrator;?></p>
					<p><b>Genre</b></p>
					</div>
					<br>
					<a href="#" class="lanjutkan">Lihat Data Lebih Jelas</a>

				</p>
				<hr>
				<br>
				<?php } ?>
			</div>
		
		</div>
		 	
 	</div>



</body>
</html>