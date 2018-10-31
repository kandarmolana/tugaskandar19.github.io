<?php
include "../database/koneksi.php";
if($_SESSION['pengguna'] == "kandarmolana"){
?>
<?php $base = "SELECT * FROM pengguna";
$sql = mysqli_query($koneksi, $base);
$data = mysqli_fetch_array($sql);
?>
		<ul>
			<li class="has-sub"><a href="../k_beranda.php"><span><img src="../images/kLogo.png" width="25" height="25">&nbsp;&nbsp;Beranda</a></span></li>
			<li class="has-sub"><a href="#"><span><img src="../images/kLogo.png" width="25" height="25">&nbsp;&nbsp;Data Gue :</span></a>
		<ul>
			<li><a href="#"> - Profil Gue</a></li>
			<li><a href="../galeri/index.php"> - Galeri Foto Gue</a></li>
		</ul></li>
			<li class="has-sub"><a href="#"><span><img src="../images/kLogo.png" width="25" height="25">&nbsp;&nbsp;Tugas Gue :</span></a>
		<ul>
			<li><a href="../tugas/tugas1/tugas1.php"> - Tugas Input Foto</a></li>
			<li><a href="../tugas/tugas2/tugas2.php"> - Tugas Input Video</a></li>
			<li><a href="../tugas/tugas3/tugas3.php"> - Tugas Input Lagu</a></li>
			<li><a href="../tugas/tugas4/tugas4.php"> - Tugas Ganti Warna</a></li>
		</ul></li>
			<li class="has-sub"><a href="../keluar.php"><span><img src="../images/kLogo.png" width="25" height="25">&nbsp;&nbsp;Keluar</a></span></li>
<?php } ?>