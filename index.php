<html>
<?php include "atas.php"; ?>
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<style>
		.row {
			margin:0px auto;
			width:250px;
			text-align:center;
			}
	</style>
	<!-- ISI -->
	<div class="container_12">
	<div class="module">
	<br>
	<h2><span>Silakan Masuk Untuk Melanjutkan!</span></h2>
	<div class="module-table-body">
	<table id="myTable" class="tablesorter">
		<tr>	
			<td>
			<br>
			<div align="center">
			<img src="images/kLogo.png" width="100" height="100">
			</div>
			<br>
			<div class="row">
			<form role="form" action="p_masuk.php" method="post">
			<div class="form-group">
					<input type="text" name="pengguna" class="form-control" placeholder="Masukkan Nama Pengguna" required autofocus />
			</div>
			<div class="form-group">
					<input type="password" name="sandi" class="form-control" placeholder="Masukkan Kata Sandi" required autofocus />
			</div>
			<div class="form-group">
					<input type="submit" name="login" class="btn btn-primary btn-block" value="MASUK" />
			</div>
			</form>
					Copyright&copy; 2018 - Kandar Molana
			</div>
			</div>
			</div>
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
					<script src="js/bootstrap.min.js"></script>
			</td>
		</tr>
	</div>
	</div>
	</div>
	</table>
	<!-- Akhir Isi -->
<?php include "bawah.php"; ?>	
</html>