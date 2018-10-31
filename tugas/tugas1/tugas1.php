<?php
session_start();
if(empty($_SESSION['pengguna'])){
header('location:index.php');
}
$pengguna = $_SESSION['pengguna'];
include 'm_atas.php';
	echo "<div class='container_12'>";
	echo "<div class='module'>";
include 'gambar.php';
	echo "</div>";
	echo "</div>";
?>