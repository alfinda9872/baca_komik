<?php include "koneksi.php";?>
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
	if (isset($_GET['id_pelanggan'])){
		$id_pelanggan = $_GET['id_pelanggan'];
		$user = $_SESSION['username'];
	} else {
		die ("ID Manga Tidak Terdaftar");
	}

	$edit = "SELECT * FROM tb_pembeli where id_pelanggan='$id_pelanggan'";
	$cek = mysqli_query($koneksi,$edit);
	$user = mysqli_fetch_array($cek);
	$id_pelanggan = $user['id_pelanggan'];
	$username = $user['username'];
	$nama = $user['nama'];
	$email= $user['email'];
	$jk = $user['jk'];
	$no_hp = $user['no_hp'];
	$ttl = $user['ttl'];
	$alamat = $user['alamat'];
	$kode_pos = $user['kode_pos'];
	
	

	if(isset($_POST['simpan'])){
		$id_pelanggan = $_POST['id_pelanggan'];
		$username = $_POST['username'];		
		$nama = $_POST['nama'];
		$email= $_POST['email'];
		$jk = $_POST['jk'];
		$no_hp = $_POST['no_hp'];
		$ttl = $_POST['ttl'];
		$alamat = $_POST['alamat'];
		$kode_pos = $_POST['kode_pos'];

		$edit2 = "UPDATE tb_pembeli SET username='$username', password='$password', nama='$nama' , email='$email', jk='$jk', no_hp='$no_hp', ttl='$ttl', alamat='$alamat', kode_pos='$kode_pos' where id_pelanggan='$id_pelanggan'";
		$cek2 = mysqli_query($koneksi,$edit2) or die (mysqli_error());
		if ($cek2){
			echo"<script>alert('Data Pelanggan Telah Di Ubah.!',document.location.href='olah_akun.php')</script>";
		}else{
			echo"<script>alert('Data Pelanggan Gagal Di Ubah !',document.location.href='edit_user.php')</script>";
		}

	}

?>
<body>
	<div class="bagcontent">
			<div class="kontent">
			<form action="" method="post" name="edit_user" enctype="multipart/form-data">
  	<br>
  	<p class="pp"> Edit Data Pelanggan </p>
  	<p>  Data Pelanggan </p>
  	<hr>
    <table cellpadding="3" cellspacing="0" class="table3">

      <tr>
        <td>ID Pelanggan </td>
        <td><input type="text" name="id_pelanggan" size="30" value="<?php echo $id_pelanggan;?>"></td>
      </tr>
      <tr>
        <td>Username </td>
        <td><input type="text" name="username" size="30" value="<?php echo $username;?>"></td>
      </tr>
      <tr>
        <td>Nama </td>
        <td><input type="text" name="nama" size="30" value="<?php echo $nama;?>"></td>
      </tr>
      <tr>
        <td>Email </td>
        <td><input type="text" name="email" size="30" value="<?php echo $email;?>"></td>
      </tr>
      <tr>
        <td>Jenis Kelamin </td>
        <td><input type="text" name="jk" size="30" value="<?php echo $jk;?>"></td>
      </tr>
      <tr>
        <td>No. Handphone</td>
        <td><input type="text" name="no_hp" size="30" value="<?php echo $no_hp?>"></td>
      </tr>
	  <tr>
        <td>Tempat Tanggal Lahir</td>
        <td><input type="text" name="ttl" size="30" value="<?php echo $ttl?>"></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat" size="30" value="<?php echo $alamat?>"></td>
      </tr>	  
      <tr>
        <td>Kode Pos</td>
        <td><input type="text" name="kode_pos" size="30" value="<?php echo $kode_pos?>"></td>
      </tr>	  
	  
      <input type="hidden" name="id_manga" value="<?php echo $id_manga; ?>">
      
        <td></td>
        <tr>
        	<td>
        	
        <td><input type="submit" name="simpan" value="Simpan" class="button"></td>

        <td><a href="olah_akun.php"><input type="button" value="Kembali" class="button1"></td></tr>
      </tr>
    </table>
   <hr>

</form>
<hr>
</body>
			</div>
	</div>
