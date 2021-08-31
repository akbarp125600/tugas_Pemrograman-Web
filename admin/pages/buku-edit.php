<?php
include'koneksi.php';
?>
<?php
	$id_buku=$_GET['kode'];
	$q_tampil_buku=mysql_query("SELECT * FROM buku");
	$r_tampil_buku=mysql_fetch_array($q_tampil_buku);
?>
<div id="label-page"><h3>Edit Data Buku</h3></div>
<div id="content">
	<form action="proses/buku-edit-proses.php" method="post">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID Buku</td>
			<td class="isian-formulir"><input type="text" name="id_buku" value="<?php echo $r_tampil_buku['id_buku']; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
		<tr>
			<td class="label-formulir">ID Bidang</td>
			<td class="isian-formulir"><input type="text" name="id_bidang" value="<?php echo $r_tampil_buku['id_bidang']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Judul Buku</td>
			<td class="isian-formulir"><input type="text" name="judul_buku" value="<?php echo $r_tampil_buku['judul_buku']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Kode Buku</td>
			<td class="isian-formulir"><input type="text" name="kode_buku" value="<?php echo $r_tampil_buku['kode_buku']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Jumlah Buku</td>
			<td class="isian-formulir"><input type="text" name="jumlah_buku" value="<?php echo $r_tampil_buku['jumlah_buku']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" id="tombol-simpan"></td>
		</tr>
	</table>
	</form>
</div>