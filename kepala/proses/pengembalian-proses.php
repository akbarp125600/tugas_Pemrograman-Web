<?php
include 'koneksi.php';

$tgl_kembali=date('Y-m-d');
$id_transaksi=$_GET['id'];
$q_transaksi=mysql_query(
	"SELECT * FROM tbl_transaksi WHERE id_transaksi='$id_transaksi'"
);
if(isset($_GET['id'])){
	mysql_query(
		"DELETE FROM tbl_transaksi
		WHERE id_transaksi='$id_transaksi'"
	);
	mysql_query( 
		"UPDATE anggota
		SET status='$status_anggota'
		WHERE idanggota='$id_anggota'"
	);
	mysql_query(
		"UPDATE buku
		SET status='$status_buku'
		WHERE idbuku='$id_buku'"
	);
	header("location:../index.php?p=transaksi-peminjaman");
}
?>