<?php
$connect = mysql_connect("localhost","koko","pilkoplo");
$connect = mysql_select_db("perpustakaan");
$id_pinjam=$_GET['id'];

$query = mysql_query("DELETE FROM tb_pinjam WHERE id_pinjam='$id_pinjam'");
if ($query) {
		echo "<script>alert('Data berhasil dihapus')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=data-peminjaman'>";
	} else {
		echo "Data anda gagal dihapus. Ulangi sekali lagi";
		echo "<meta http-equiv='refresh' content='0; url=?page=data_peminjaman'>";
	}
header("location:../index.php?p=data_peminjaman");
?>