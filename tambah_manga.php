<?php include "koneksi.php"; ?>
<html>
<head>
	<marquee><title>Sistem Penjualan MANGA online</title></marquee>
	<link rel="stylesheet" type="text/css" href="polesan.csss">
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
		<div class="bagcontent">
			<div class="kontent">
			
</head>
<body>
<h3 style="font-family: 'Comic Sans MS', cursive, sans-serif;"><center>Tambah Data Manga</h3>
  <hr>
  
  <script language="javascript">
function tanya() 
{if (confirm ("Hapus Manga Ini..? Ingat Hati Sang Pembaca...Hiks..!")) 
  {return true;
    } else 
    {return false;
  }
}
</script>
<div id="bagcontent">
    <h2 align="center"></h2>
  <table width="50%">
  <tr>
    <th width="3%">No</td>
    <th width="8%">Nama Manga</td>
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
      <td><a href="edit_manga.php?id_manga=<?php echo $id_manga; ?>"><?php echo $jud_ma; ?></a></td>
      <td><?php echo "<img src='gambar/$gambar_manga' width='200' height='100'/>"; ?></td>
      <td> 
      <?php echo "<a href='tambah_manga.php?hapus=$id_manga'onClick='return tanya()'><input type='button' name='' value=' Delete ' class=''/></a></b><br>"; ?>
      </td>
    </tr> 
  <?php $no++; }?>
  </table>
  <hr>
</div>
  <form action="proses_tambah.php" method="post" enctype="multipart/form-data">
  	<br>
    <table cellpadding="3" cellspacing="0" class="table2">
      <tr>
        <td>Judul</td>
        <td>:</td>
        <td><input type="text" name="judul" size="30" required></td>
      </tr>
      <tr>
        <td>Chapter</td>
        <td>:</td>
        <td><input type="text" name="chapter" size="30" required></td>
      </tr>
      <tr>
        <td>Volume</td>
        <td>:</td>
        <td><input type="text" name="volume" size="30" required></td>
      </tr>
      <tr>
        <td>Jumlah</td>
        <td>:</td>
        <td><input type="text" name="jumlah" size="30" required></td>
      </tr>
      <tr>
        <td>Ilustrator</td>
        <td>:</td>
        <td><input type="text" name="ilustrator" size="30" required></td>
      </tr>
      <tr>
        <td>Deskripsi</td>
        <td>:</td>
        <td><textarea name="deskripsi" rows="5" cols="32" required></textarea></td>
      </tr>
      <tr>
        <td>Harga</td>
        <td>:</td>
        <td><input type="text" name="harga" size="30" required></td>
      </tr>
      <tr>
      <td>Cover Manga</td>
      <td></td>
      <td><input type="file" name="gambar"></td>
      </tr>
      
        <td></td>
        <tr>
        	<td>
        	
        <td><input type="submit" name="input" value="Tambah" class="button"></td>
        <td><input type="reset" value="Reset" class="button1"></td></tr>
      </tr>
    </table>
</body>
</html>