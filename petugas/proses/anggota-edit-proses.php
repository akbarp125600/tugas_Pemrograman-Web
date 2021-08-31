<?php
$connect = mysql_connect("localhost","koko","pilkoplo");
$connect = mysql_select_db("perpustakaan");
$id_anggota=	$_POST['id_anggota'];
$user_id=		$_POST['user_id'];
$nama=			$_POST['nama'];
$nim=			$_POST['nim'];
$jurusan=		$_POST['jurusan'];
$jenis_kelamin=	$_POST['jenis_kelamin'];
$alamat=		$_POST['alamat'];
$provinsi=		$_POST['provinsi'];
$kabupaten=		$_POST['kabupaten'];

If(isset($_POST['simpan'])){
	mysql_query(
		"UPDATE anggota
		SET id_anggota='$id_anggota',user_id='$user_id',nama='$nama',nim='$nim',jurusan='$jurusan',jenis_kelamin='$jenis_kelamin',alamat='$alamat',provinsi='$provinsi',kabupaten='$kabupaten'
		WHERE id_anggota='$id_anggota'"
	);
	header("location:../index.php?p=anggota");
}
?>