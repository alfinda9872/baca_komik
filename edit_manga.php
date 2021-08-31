<?php include "koneksi.php";	?>
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
<?php 
	session_start();
	if (isset($_GET['id_manga'])){
		$id_manga = $_GET['id_manga'];
		$user = $_SESSION['username'];
	} else {
		die ("ID Manga Tidak Terdaftar");
	}

	$edit = "SELECT * FROM tb_manga where id_manga='$id_manga'";
	$cek = mysqli_query($koneksi,$edit);
	$manga = mysqli_fetch_array($cek);
	$id_manga = $manga['id_manga'];
	$judul = $manga['judul'];
	$gambar = $manga['gambar'];
	$chapter = $manga['chapter'];
	$volume = $manga['volume'];
	$deksripsi = $manga['deksripsi'];
	$jumlah = $manga['jumlah'];
	$ilustrator = $manga['ilustrator'];
	$harga = $manga['harga'];

	if(isset($_POST['simpan'])){
		$id_manga = $_POST['id_manga'];
		$judul		= $_POST['judul'];	//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
		$chapter	= $_POST['chapter'];
		$volume	= $_POST['volume'];
		$deksripsi = $_POST['deksripsi'];
		$jumlah	= $_POST['jumlah'];
		$ilustrator	= $_POST['ilustrator'];
		$harga	= $_POST['harga'];

		$edit2 = "UPDATE tb_manga SET judul='$judul', chapter='$chapter', volume='$volume' , deksripsi= '$deksripsi', jumlah= '$jumlah', ilustrator= '$ilustrator', harga= '$harga' where id_manga='$id_manga'";
		$cek2 = mysqli_query($koneksi,$edit2) or die (mysqli_error());
		if ($cek2){
			echo"<script>alert('Data Manga Telah Di Ubah.!',document.location.href='tambah_manga.php')</script>";
		}else{
			echo"<script>alert('Data Manga Gagal Di Ubah !',document.location.href='edit_manga.php')</script>";
		}

	}

	if (isset($_POST['saved'])){
		$filename=$_FILES['gambar']['name'];
		$filesize  = $_FILES['gambar']['size'];
		$explode    = explode('.',$filename);
    	$extensi    = $explode[count($explode)-1];
		$move=move_uploaded_file($_FILES['gambar']['tmp_name'],'gambar/'.$filename);

		if(!in_array($extensi,$file_type)){
        $eror   = true;
        $pesan .= '- Type file yang anda upload tidak sesuai<br />';
   		}
    	if($filesize > $maxsize){
        $eror   = true;
        $pesan .= '- Ukuran file melebihi batas maximum<br />';
    	}

    	if($filesize == 0){
    		echo"<script>alert('Tolong Masukkan Gambar Terlebih Dahulu.!',document.location.href='tambah_manga.php')</script>";
    	}
    	else{

    	$ganti = "UPDATE tb_manga set gambar='$filename' where id_manga='$id_manga'";
    	$cek3 = mysqli_query($koneksi,$ganti) or die (mysqli_query());

    	if ($cek3){
    		echo"<script>alert('Cover Manga Telah Di Ubah.!',document.location.href='tambah_manga.php')</script>";
    	} else{
    		echo"<script>alert('Cover Manga Gagal Di Ubah.!',document.location.href='edit_manga.php')</script>";
    	}

    }

	}

?>
<body>
	<div class="bagcontent">
			<div class="kontent">
			<form action="" method="post" name="edit_manga" enctype="multipart/form-data">
  	<br>
  	<p class="pp"> Edit Manga </p>
  	<p>  Data Manga </p>
  	<hr>
    <table cellpadding="3" cellspacing="0" class="table3">

      <tr>
        <td>Judul :</td>
        <td><input type="text" name="judul" size="30" value="<?php echo $judul;?>"></td>
      </tr>
      <tr>
        <td>Chapter :</td>
        <td><input type="text" name="chapter" size="30" value="<?php echo $chapter;?>"></td>
      </tr>
      <tr>
        <td>Volume : </td>
        <td><input type="text" name="volume" size="30" value="<?php echo $volume;?>"></td>
      </tr>
      <tr>
        <td>Jumlah :</td>
        <td><input type="text" name="jumlah" size="30" value="<?php echo $jumlah;?>"></td>
      </tr>
      <tr>
        <td>Ilustrator : </td>
        <td><input type="text" name="ilustrator" size="30" value="<?php echo $ilustrator;?>"></td>
      </tr>
      <tr>
        <td>Deskripsi :</td>
        <td><textarea name="deksripsi" rows="5" cols="32"><?php echo $deksripsi;?></textarea></td>
      </tr>
      <tr>
        <td>Harga : </td>
        <td><input type="text" name="harga" size="30" value="<?php echo $harga?>"></td>
      </tr>
      <input type="hidden" name="id_manga" value="<?php echo $id_manga; ?>">
      
      
        <td></td>
        <tr>
        	<td>
        	
        <td><input type="submit" name="simpan" value="Simpan" class="button"></td>

        <td><a href="tambah_manga.php"><input type="button" value="Kembali" class="button1"></td></tr>
      </tr>
    </table>
   <hr>

</form>
<form action="" method="POST" name="edit_foto" enctype="multipart/form-data">
	<table cellpadding="5" cellspacing="0" class="table3">
		<br>
		<p>Edit Cover</p>
			<hr>
		<tr>
			<td><p><?php echo "<img src='gambar/$gambar' width='300' height='180'/>"; ?> </td>
				<td><input type="file" name="gambar">
				<input type="submit" name="saved" value="Simpan" class="button2"></td>
      </tr>
	</table>
			</form>
<hr>
</body>
			</div>
	</div>
