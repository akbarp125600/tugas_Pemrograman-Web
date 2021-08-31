<?php
$connect = mysql_connect("localhost","koko","pilkoplo");
$connect = mysql_select_db("perpustakaan");
$id_anggota=$_GET['id'];

mysql_query(
	"DELETE FROM anggota
	WHERE id_anggota='$id_anggota'"
);
header("location:../index.php?p=anggota");
?>