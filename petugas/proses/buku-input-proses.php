<?php
include 'koneksi.php';
$id_buku = $_POST['id_buku'];
$id_bidang = $_POST['id_bidang'];
$judul_buku = $_POST['judul_buku'];
$kode_buku = $_POST['kode_buku'];
$jumlah_buku = $_POST['jumlah_buku'];
$status = "tersedia";
	
if(isset($_POST['simpan'])){
	mysql_query(
		"INSERT INTO buku
		VALUES('$id_buku','$id_bidang','$judul_buku','$kode_buku','$jumlah_buku','$status')"
	);
	header("location:../index.php?p=buku");
}
?>