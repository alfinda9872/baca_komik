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
<h3 style="font-family: 'Comic Sans MS', cursive, sans-serif;"><center>Hapus Akun Pengguna</h3>
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
    <th>No</td>
    <th>ID Pelanggan</td>
    <th width="10%">Username</td>
    <th width="6%" >Nama</td>
	<th width="6%" >Email</td>
	<th width="6%" >Jenis Kelamin</td>
	<th width="6%" >No. Handphone</td>
	<th width="6%" >Tempat Tanggal Lahir</td>
	<th width="6%" >Alamat</td>
	<th width="6%" >Kode Pos</td>
	<th width="6%" >Action</td>
  </tr>
  <?php
  $no = 1;
  $query = "SELECT * FROM tb_pembeli";
  $sql = mysqli_query ($koneksi,$query);
  while ($hasil = mysqli_fetch_array ($sql)) {
	$id_pelanggan = $hasil['id_pelanggan'];
	$username = $hasil['username'];
    $nama = $hasil['nama'];
	$email = $hasil['email'];
	$jk = $hasil['jk'];
	$no_hp = $hasil['no_hp'];
	$ttl = $hasil['ttl'];
	$alamat = $hasil['alamat'];
	$kode_pos = $hasil['kode_pos'];
	
    $warna = ($no%2==1)?"#ffffff":"#dddddd";
    $sql6 = "select * from tb_pembeli where id_pembeli='$id_pembeli'";
    $tampil1=mysqli_query($koneksi,$sql6);
    $jumlah1=mysqli_num_rows($tampil1); 

	if (isset ($_GET['hapus']) && $hapus=$_GET['hapus'])
	{
		$hapus1=mysqli_query($koneksi,"delete from tb_pembeli where id_pelanggan='$hapus'");
		if ($hapus1) {echo"<script>alert('Satu Data Pelanggan Berhasil Dihapus !',document.location.href='olah_akun.php')</script>";} else {die ("Gagal Hapus");}
	}
    //tampilkan data manga
  ?>
    <tr bgcolor="<?php echo $warna; ?>">
      <td><?php echo $no; ?></td>
      <td><?php echo $id_pelanggan; ?>
	  <td><?php echo $username; ?></a></td>
	  <td><?php echo $nama; ?></a></td>
      <td><?php echo $email; ?></a></td>
	  <td><?php echo $jk; ?></a></td>
	  <td><?php echo $no_hp; ?></a></td>
	  <td><?php echo $ttl; ?></a></td>
	  <td><?php echo $alamat; ?></a></td>
	  <td><?php echo $kode_pos; ?></a></td>
      <td><?php echo "<a href='olah_akun.php?hapus=$id_pelanggan'onClick='return tanya()'><input type='button' name='' value=' Delete ' class=''/></a></b><br>"; ?></td>
    </tr>
  <?php $no++; }?>
  </table>
  <hr>
</div>
  
</body>
</html>