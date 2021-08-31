<?php
$connect = mysql_connect("localhost","koko","pilkoplo");
$connect = mysql_select_db("perpustakaan");
?>
<?php
$pinjam            = date("Y-m-d");
$tujuh_hari        = mktime(0,0,0,date("n"),date("j")+7,date("Y"));
$kembali        = date("Y-m-d", $tujuh_hari);
?>   
<div id="label-page"><h3>Input Transaksi Peminjaman</h3></div>
<div id="content">
	<form action="../admin/proses/transaksi-peminjaman-input-proses.php" method="post">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID Transaksi</td>
			<td class="isian-formulir"><input type="text" name="id_transaksi" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Anggota</td>
			<td class="isian-formulir">
				<select name="nama" class="isian-formulir isian-formulir-border">
					<option value="" select="selected">~ Pilih Anggota ~</option>
					<?php
						$q_tampil_anggota=mysql_query(
							"SELECT nama FROM anggota
							WHERE status='tidak meminjam'"
						);
						while($r_tampil_anggota=mysql_fetch_array($q_tampil_anggota)){
							echo"<option value=$r_tampil_anggota[id_anggota]>$r_tampil_anggota[nama]</option>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td class="label-formulir">Jurusan</td>
			<td class="isian-formulir"><input type="text" name="jurusan" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Buku</td>
			<td class="isian-formulir">
				<select name="buku" class="isian-formulir isian-formulir-border">
					<option value="" select="selected">~ Pilih Buku ~</option>
					<?php
						$q_tampil_buku=mysql_query(
							"SELECT judul_buku FROM buku
							WHERE status='tersedia'"
						);
						while($r_tampil_buku=mysql_fetch_array($q_tampil_buku)){
							echo"<option value=$r_tampil_buku[id_buku]>$r_tampil_buku[judul_buku]</option>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td class="label-formulir">Tanggal Pinjam</td>
			<td class="isian-formulir"><input type="text" name="tgl_pinjam" value="<?php echo "$pinjam ";
				?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
		<tr>
			<td class="label-formulir">Tanggal kembali</td>
			<td class="isian-formulir"><input type="text" name="tgl_pengembalian" value="<?php echo "$kembali";?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" class="tombol"></td>
		</tr>
	</table>
	</form>
</div>
