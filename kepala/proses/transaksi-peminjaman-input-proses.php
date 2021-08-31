<?php
include'koneksi.php';
$id_transaksi=$_POST['id_transaksi'];
$nama=$_POST['nama'];
$jurusan=$_POST['jurusan'];
$buku=$_POST['buku'];
$tgl_pinjam=$_POST['tgl_pinjam'];
$tgl_pengembalian=$POST['tgl_pengembalian'];
$status_anggota="Sedang Meminjam";


if(isset($_POST['simpan'])){
	mysql_query(
		"INSERT INTO tbl_transaksi
		VALUES('$id_transaksi','$nama','$jurusan','$buku','$tgl_pinjam','$tgl_pengembalian')"
	);
	mysql_query(
		"UPDATE anggota
		SET status='$nama'
		WHERE nama='$id_anggota'"
	);
	mysql_query(
		"UPDATE buku
		SET jumlah_buku=jumlah_buku - 1
		WHERE nama='$buku'"
	);
	header("location:../index.php?p=transaksi");
}
?>