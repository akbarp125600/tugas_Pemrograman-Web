<?php
include'koneksi.php';

$id_buku=$_POST['id_buku'];
$id_bidang=$_POST['id_bidang'];
$judul_buku=$_POST['judul_buku'];
$kode_buku=$_POST['kode_buku'];
$jumlah_buku=$_POST['jumlah_buku'];

If(isset($_POST['simpan'])){
	mysql_query(
		"UPDATE buku
		SET id_buku='$id_buku',id_bidang='$id_bidang',judul_buku='$judul_buku',kode_buku='$kode_buku',jumlah_buku='$jumlah_buku'
		WHERE id_buku='$id_buku'"
	);
	header("location:../index.php?p=buku");
}
?>