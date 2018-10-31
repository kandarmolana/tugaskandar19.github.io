<style>
   img{
     border: 4px solid #575D63;
     width: 300px;
     height: 200px;}
</style>
<br>
<h2><span>Galeri Foto, <?php echo $data['namalengkap']; ?> (@<?php echo $_SESSION['pengguna']; ?>) :</span></h2>
<div class="module-table-body">
<table id="myTable" class="tablesorter">
<tr>
<td>
<br>
<div align="center">
	<div class="form-group col-md-6">
		<img class="gambar6" src="gambar/6.jpg">
		<img class="gambar2" src="gambar/2.jpg">
		<img class="gambar3" src="gambar/3.jpg">
	</div>
	<div class="form-group col-md-6">
		<img class="gambar4" src="gambar/4.jpg">
		<img class="gambar1" src="gambar/1.jpg">
		<img class="gambar5" src="gambar/5.jpg">
	</div>
</div>
<br>
</td>
</tr>
</table>
<?php include "bawah.php"; ?>