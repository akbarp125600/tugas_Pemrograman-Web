<?php
include 'koneksi.php';
$kode_buku = $_POST['kode_buku'];
$judul_buku = $_POST['judul_buku'];
$jenis_buku = $_POST['jenis_buku'];
$tahun_terbit = $_POST['tahun_terbit'];
$penerbit = $_POST['penerbit'];
$penulis = $_POST['penulis'];
	
if(isset($_POST['simpan'])){
	mysql_query(
		"INSERT INTO jenis_buku
		VALUES('$kode_buku','$judul_buku','$jenis_buku','$tahun_terbit','$penerbit','$penulis')"
	);
	header("location:../index.php?p=jenis_buku");
}
?>