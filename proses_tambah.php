<?php
//mulai proses tambah data//cek dahulu, jika tombol tambah di klik
include('koneksi.php');
	session_start();
	$eror       = false;
	$file_type  = array('jpg','jpeg','png','gif');
	$maxsize   = 1000000;
	$user = $_SESSION['username'];

if(isset($_POST['input'])){
	
	//inlcude atau memasukkan file koneksi ke database	
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	
	$judul		= $_POST['judul'];	//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
	$chapter	= $_POST['chapter'];
	$volume	= $_POST['volume'];
	$deskripsi = $_POST['deskripsi'];
	$jumlah	= $_POST['jumlah'];
	$ilustrator	= $_POST['ilustrator'];
	$harga	= $_POST['harga'];
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
 
	

	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$sql= "INSERT INTO tb_manga VALUES(null,(select id_admin from tb_admin where username='$user'),'$judul','$filename','$chapter','$volume','$deskripsi','$jumlah','$ilustrator','$harga',now())";
	$input = mysqli_query($koneksi,$sql) or die(mysqli_error($koneksi));
	
	//jika query input sukses
	if($input){
		
		echo "<script>alert('Manga telah ditambahkan !',document.location.href='tambah_manga.php')</script>";
		
	}else{
		
		echo "<script>alert('Manga Gagal ditambahkan !',document.location.href='index.php')</script>";
		
	}

}else{	//jika tidak terdeteksi tombol tambah di klik

	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';

}
?>