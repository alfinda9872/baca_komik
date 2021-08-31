<?php
 session_start();
 include"koneksi.php";
 error_reporting(0);

 if($_SESSION['username'] && $_SESSION['status'] == "Pemilik") {

    include "menu_admin.php";

}elseif ($_SESSION['username'] && $_SESSION['status'] == "Pengguna") {

    include "menu_user.php";


}else {

?>



         <div class="bagmenu">
		<!-- bagian menu		 -->
		<nav class="menu">
			<ul>
				<li>
					<a href="index.php">HOME</a>
				</li>
				<li>
					<a href="list_manga.php">LIHAT LIST</a>
				</li>
				<li>
					<a href="genre.php">GENRE</a>
				</li>
				<li>
					<a href="login.php">LOGIN</a>
				</li>
				<li>
					<a href="#">ABOUT US</a>
				</li>
			</ul>
		</nav>

<?php } ?>