<?php
$connect = mysql_connect("localhost","koko","pilkoplo");
$connect = mysql_select_db("perpustakaan");
$id_buku=$_GET['kode'];

$query = mysql_query("DELETE FROM buku WHERE id_buku='$id_buku'");
if ($query) {
		echo "<script>alert('Data berhasil dihapus')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=buku'>";
	} else {
		echo "Data anda gagal dihapus. Ulangi sekali lagi";
		echo "<meta http-equiv='refresh' content='0; url=?page=buku'>";
	}
header("location:../index.php?p=buku");
?>