<?php
include'koneksi.php';

$id_anggota=$_POST['id_anggota'];
$user_id=$_POST['user_id'];
$nama=$_POST['nama'];
$nim=$_POST['nim'];
$jurusan=$_POST['jurusan'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$provinsi=$_POST['provinsi'];
$kabupaten=$_POST['kabupaten'];
$kecamatan=$_POST['kecamatan'];
$status='tidak meminjam';
if(isset($_POST['simpan'])){
	mysql_query(
		"INSERT INTO anggota
		VALUES('$id_anggota','$user_id','$nama','$nim','$jurusan','$jenis_kelamin','$alamat','$provinsi','$kabupaten','$kecamatan','$status')"
	);
	header("location:../index.php?p=data_pengembalian");
}
?>