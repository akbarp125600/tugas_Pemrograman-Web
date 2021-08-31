<?php
mysql_connect("localhost","koko","pilkoplo");
mysql_select_db("perpustakaan");
$id_pinjam=$_POST['id_pinjam']; 
$id_anggota=$_POST['id_anggota'];
$nama=$_POST['nama'];
$buku=$_POST['buku'];
$jurusan=$_POST['jurusan'];
$tgl_pinjam=$_POST['tgl_pinjam'];
$jatuh_tempo=$_POST['jatuh_tempo'];

if(isset($_POST['simpan'])){
	mysql_query(
		"INSERT INTO tbl_pinjam
		VALUES('$id_pinjam','$id_anggota', '$nama', '$buku', '$jurusan', '$tgl_pinjam','$jatuh_tempo')"
	);
	header("location:../index.php?p=data_peminjaman");
}
?>