<?php
$connect = mysql_connect("localhost","koko","pilkoplo");
$connect = mysql_select_db("perpustakaan");
	$id_anggota=$_GET['id'];
	$q_tampil_anggota=mysql_query("SELECT * FROM anggota WHERE id_anggota='$id_anggota'");
	$r_tampil_anggota=mysql_fetch_array($q_tampil_anggota);
?>
<div id="label-page"><h3>Edit Data Anggota</h3></div>
<div id="content">
	<form action="proses/anggota-edit-proses.php" method="post">
	<table id="tabel-input">
		<<tr>
			<td class="label-formulir">ID Anggota</td>
			<td class="isian-formulir"><input type="text" name="id_anggota" value="<?php echo $r_tampil_anggota['id_anggota']; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
		<tr>
			<td class="label-formulir">User_ID</td>
			<td class="isian-formulir"><input type="text" name="user_id" value="<?php echo $r_tampil_anggota['user_id']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Nama</td>
			<td class="isian-formulir"><input type="text" name="nama" value="<?php echo $r_tampil_anggota['nama']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">NIM</td>
			<td class="isian-formulir"><input type="text" name="nim" value="<?php echo $r_tampil_anggota['nim']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">JURUSAN</td>
			<td class="isian-formulir"><input type="text" name="jurusan" value="<?php echo $r_tampil_anggota['jurusan']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Jenis Kelamin</td>
			<td class="isian-formulir"><input type="text" name="jenis_kelamin" value="<?php echo $r_tampil_anggota['jenis_kelamin']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Alamat</td>
			<td class="isian-formulir"><textarea rows="2" cols="40" name="alamat" class="isian-formulir isian-formulir-border"><?php echo $r_tampil_anggota['alamat']; ?></textarea></td>
		</tr>
		<tr>
			<td class="label-formulir">PROVINSI</td>
			<td class="isian-formulir"><input type="text" name="provinsi" value="<?php echo $r_tampil_anggota['provinsi']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">KABUPATEN</td>
			<td class="isian-formulir"><input type="text" name="kabupaten" value="<?php echo $r_tampil_anggota['kabupaten']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" id="tombol-simpan"></td>
		</tr>
	</table>
	</form>
</div>