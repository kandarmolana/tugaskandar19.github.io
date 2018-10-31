<?php 
session_start();
include 'database/koneksi.php';
$pengguna = $_POST['pengguna'];
$sandi = $_POST['sandi'];
$data = mysqli_query($koneksi, "select * from pengguna where pengguna='$pengguna' and sandi='$sandi'");
$cek = mysqli_num_rows($data);
if($cek > 0){
	$_SESSION['pengguna'] = $pengguna;
	$_SESSION['status'] = "login";
	header("location: k_beranda.php");
}else{
	header("location: index.php?pesan=Masuk Gagal");
}
?>