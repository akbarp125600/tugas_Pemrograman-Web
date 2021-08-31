<?php
include 'koneksi.php';
?>

<?php
$pinjam            = date("Y-m-d");
$tujuh_hari        = mktime(0,0,0,date("n"),date("j")+7,date("Y"));
$kembali        = date("Y-m-d", $tujuh_hari);
$nomor=7001;
?>   
<div id="label-page"><h3>Input Transaksi Peminjaman</h3></div>
<div id="content">
	<form action="../admin/proses/peminjaman-input-proses.php" method="post">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID Pinjam</td>
			<td class="isian-formulir"><input type="text" name="id_pinjam" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">ID Aanggota</td>
			<td class="isian-formulir">
				<select name="id_anggota" class="isian-formulir isian-formulir-border">
					<option value="" select="selected">Pilih ID</option>
					<?php
						$q_tampil_anggota=mysql_query(
							"SELECT id_anggota FROM anggota
							WHERE status='tidak meminjam'"
						);
						while($r_tampil_anggota=mysql_fetch_array($q_tampil_anggota)){
							echo"<option value=$r_tampil_anggota[id_anggota]>$r_tampil_anggota[id_anggota]</option>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td class="label-formulir">Nama</td>
			<td class="isian-formulir"><input type="text" name="nama" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Buku</td>
			<td class="isian-formulir"><input type="text" name="buku" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Jurusan</td>
			<td class="isian-formulir"><input type="text" name="jurusan" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Tanggal Pinjam</td>
			<td class="isian-formulir"><input type="text" name="tgl_pinjam" value="<?php echo "$pinjam ";
				?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
		<tr>
			<td class="label-formulir">Jatuh Tempo</td>
			<td class="isian-formulir"><input type="text" name="jatuh_tempo" value="<?php echo "$kembali";?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
		<tr>
			<td class="label-formulir">Jumlah</td>
			<td class="isian-formulir"><input type="text" name="jumlah" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" class="tombol"></td>
		</tr>
	</table>
	</form>
</div>
