<?php
include "koneksi.php";
?>
<script language="javascript">
function tanya() 
{if (confirm ("Hapus Manga Ini..? Ingat Hati Sang Pembaca...Hiks..!")) 
  {return true;
    } else 
    {return false;
  }
}
</script>
<link rel="stylesheet" href="polesan.css">
<div id="bagcontent">
		<h2 align="center">Tambah Cover Manga</h2>
	<table width="50%"  id="tabel" >
	<tr>
		<th width="3%">No</td>
		<th width="28%">Nama Manga</td>
		<th width="10%">Gambar Manga</td>
		<th width="6%">Action</td>
	</tr>
	<?php
	$no = 1;
	$query = "SELECT * FROM tb_manga";
	$sql = mysqli_query ($koneksi,$query);
	while ($hasil = mysqli_fetch_array ($sql)) {
		$id_manga = $hasil['id_manga'];
		$jud_ma = stripslashes ($hasil['judul']);
		$teen = $hasil['deskripsi'];
		$gambar_manga = $hasil['gambar'];
		$warna = ($no%2==1)?"#ffffff":"#dddddd";
		$sql6 = "select * from tb_manga where id_manga='$id_manga'";
		$tampil1=mysqli_query($koneksi,$sql6);
		$jumlah1=mysqli_num_rows($tampil1); 

		if (isset ($_GET['hapus']) && $hapus=$_GET['hapus']){
		$hapus1=mysqli_query($koneksi,"delete from tb_manga where id_manga='$hapus'");
		if ($hapus1) {echo"<script>alert('Satu Manga Telah Di Hapus !',document.location.href='tambah_manga.php')</script>";} else {die ("Gagal Hapus");}
}

		//tampilkan data manga
	?>
		<tr bgcolor="<?php echo $warna; ?>">
			<td ><?php echo $no; ?></td>
			<td><a href="tambah_manga.php?id_manga=<?php echo $id_manga; ?>"><?php echo $judul_ma; ?></a></td>
			<td><?php echo "<img src='gambar/$gambar' width='50' height='50'/>"; ?></td>
			<td> 
			<?php echo "<a href='tambah_manga.php?hapus=$id_manga'onClick='return tanya()'><input type='button' name='' value=' Delete ' class='btn'/></a></b><br>"; ?>
			</td>
		</tr>	
	<?php $no++; }?>
	</table>
</div>
