<?php
include 'koneksi.php';
$id_pinjam=$_POST['id_pinjam'];
$id_anggota=$_POST['id_anggota'];
$nama=$_POST['nama'];
$buku=$_POST['buku'];
$jurusan=$_POST['jurusan'];
$tgl_pinjam=$_POST['tgl_pinjam'];
$jatuh_tempo=$_POST['jatuh_tempo'];
$tgl_kembali=date('Y-m-d');
$keterangan_buku=$_POST['keterangan_buku'];
$denda_telat=$_POST['denda_telat'];
$denda_buku=$_POST['denda_buku'];
$total_denda=$_POST['total_denda'];
$status_buku="Kembali";

if(isset($_POST['simpan'])){
	mysql_query(
		"INSERT INTO tbl_pengembalian
		VALUES('$id_pinjam','$jatuh_tempo','$tgl_pinjam','$keterangan_buku','$total_denda','$id_anggota','$nama','$jurusan','$buku','$tgl_kembali','$denda_telat','$denda_buku')"
	);
	mysql_query(
		"UPDATE tbl_pinjam
		SET status='$status'
		WHERE id_pinjam='$id_pinjam'"
	);
	header("location:../index.php?p=data_pengembalian");
}
?>