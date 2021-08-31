<div id="label-page"><h3>Upload Data Buku</h3></div>
<div id="content">
<a href="index.php?p=buku">Kembali</a>
<br/><br/>
<?php 
include 'koneksi.php';
?>

<form method="post" enctype="multipart/form-data" action="upload_aksi.php">
	Pilih File: 
	<input name="filepegawai" type="file" required="required"> 
	<input name="upload" type="submit" value="Import">
</form>

<br/><br/>
</div>