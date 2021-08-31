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
					<p class="pp"> Jenis Genre </p>
					<hr>
	<?php
	$nomor = 0;
	$sql = "select * from tb_genre order by jenis_genre asc";
	$compair = mysqli_query($koneksi,$sql);
	while ($ulangi=mysqli_fetch_array($compair)){
		$nomor = $nomor+1;
		$id_mangas = $ulangi['id_manga'];
		$jenis_genre = $ulangi['jenis_genre'];
	$sql2 = "select * from tb_genre where id_manga='$id_mangas'";
	$tampilkan = mysqli_query($koneksi,$sql2);
	$total = mysqli_num_rows($tampilkan);

	?> 
	<p><?php echo $nomor; ?>.
	<td><a href="list_manga_genre.php?jenis_genre=<?php echo $jenis_genre; ?>"><?php echo $jenis_genre; ?></a></td>
	
	
	<?php } ?>
</div>
</div>
</body>