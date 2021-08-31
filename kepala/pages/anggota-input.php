<div id="label-page"><h3>Input Data Anggota</h3></div>
<div id="content">
	<form action="../admin/proses/anggota-input-proses.php" method="post">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID Anggota</td>
			<td class="isian-formulir"><input type="text" name="id_anggota" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">User ID</td>
			<td class="isian-formulir"><input type="text" name="user_id" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">NAMA</td>
			<td class="isian-formulir"><input type="text" name="nama" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Nim</td>
			<td class="isian-formulir"><input type="text" name="nim" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">JURUSAN</td>
			<td class="isian-formulir"><input type="text" name="jurusan" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Jenis Kelamin</td>
			<td class="isian-formulir"><input type="radio" name="jenis_kelamin" value="Pria">Pria</label></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="radio" name="jenis_kelamin" value="Wanita">Wanita</td>
		</tr>

		<tr>
			<td class="label-formulir">Alamat</td>
			<td class="isian-formulir"><textarea rows="2" cols="40" name="alamat" class="isian-formulir isian-formulir-border"></textarea></td>
		</tr>
		<tr>
			<td class="label-formulir">PROVINSI</td>
			<td class="isian-formulir"><input type="text" name="provinsi" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">KABUPATEN</td>
			<td class="isian-formulir"><input type="text" name="kabupaten" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Kecamatan</td>
			<td class="isian-formulir"><input type="text" name="kecamatan" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" class="tombol"></td>
		</tr>
	</table>
	</form>
</div>