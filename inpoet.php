<script language="javascript">
function tanya() 
{if (confirm ("Hapus Manga Ini..? Ingat Hati Sang Pembaca...Hiks..!")) 
  {return true;
    } else 
    {return false;
  }
}
</script>
<?php
include "koneksi.php";

//proses input
if (isset($_POST['input'])) {
	$judul = trim($_POST['judul']);
  	$dekskripsi = addcslashes(strip_tags($_POST['deskripsi']));
  	$chapter = $_POST['chapter'];
  	$volume = $_POST['volume'];
  	$jumlah = $_POST['jumlah'];
  	$ilus = $_POST['ilustrator'];
  	$harga = $_POST['harga'];
	$filename= $_FILES['gambar']['name'];
	$filesize  = $_FILES['gambar']['size'];
	$explode    = explode('.',$filename);
    $extensi    = $explode[count($explode)-1];
	$move=move_uploaded_file($_FILES['gambar']['tmp_name'],'gambar/'.$filename);
	

	//insert ke tabel
	$query = "INSERT INTO tb_manga VALUES('','','$judul','$filename','$chapter','$volume','$deskripsi','$jumlah','$ilustrator','$harga')";
	$sql = mysqli_query ($koneksi,$query) or die (mysqli_error());
	if ($sql) {
			echo"<script>alert('Manga Telah Di Tambahkah..Silahkan Isi Chapter !',document.location.href='index.php')</script>";
	} else {
			echo"<script>alert('Manga Gagal Di Tambahkan !',document.location.href='index.php')</script>";
	}
}
?>
<link rel="stylesheet" type="text/css" href="css/daftar.css" media="screen">
<link rel="stylesheet" href="css/daftar.css"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<div id="content">

<center>

	<FORM ACTION="" METHOD="POST" NAME="Daftar" enctype="multipart/form-data">
		<table cellpadding="40" cellspacing="20" border="0" style="color: black;">
			
			<tr>
				<td width="150">Judul Manga</td>	
				<td>: <input type="text" name="judul" size="38" height="20" maxlength="50" cols=""></td>
			</tr>
			<tr>
				<td width="150">Chapter</td>	
				<td>: <input type="text" name="chapter" size="38" height="20" maxlength="50" cols=""></td>
			</tr>
			<tr>
				<td width="150">Volume</td>	
				<td>: <input type="text" name="volume" size="38" height="20" maxlength="50" cols=""></td>
			</tr>
			<tr>
				<td width="150">Jumlah</td>	
				<td>: <input type="text" name="jumlah" size="38" height="20" maxlength="50" cols=""></td>
			</tr>
			<tr>
				<td width="150">Ilustrator</td>	
				<td>: <input type="text" name="ilustrator" size="38" height="20" maxlength="50" cols=""></td>
			</tr>
			<tr>
				<td width="150">Harga</td>	
				<td>: <input type="text" name="harga" size="38" height="20" maxlength="50" cols=""></td>
			</tr>
			<tr>
				<td>Dekskripsi</td>
				<td>: <textarea name="deskripsi" cols="40" rows="3"></textarea></td>
			</tr>
			<tr><td>AVATAR </td><td><input type="file" name="gambar" class="hover" /> </td></tr> 
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;&nbsp;
				<div class="controls">
				<input type="submit" name="input" value=" TAMBAH" class="btn">&nbsp;
				<input type="reset" name="reset" value=" REFRESH " class="btn">&nbsp;
				<a href="index.php"><input type="button" name="" value=" KEMBALI " class="btn btn-danger" /></a></td>
				</div>
			</tr>
		</table>
		</center>
	</FORM>
</div>