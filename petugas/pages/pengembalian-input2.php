<?php
include'koneksi.php';
?>
<?php
	$id_pinjam=$_GET['id_pinjam'];
	$q_data_peminjaman=mysql_query("SELECT * FROM tbl_pinjam where id_pinjam='$id_pinjam'");
	$r_data_peminjaman=mysql_fetch_array($q_data_peminjaman);
?>

<?php
$pinjam            = date("Y-m-d");
$tujuh_hari        = mktime(0,0,0,date("n"),date("j")+7,date("Y"));
$kembali           = date("Y-m-d", $tujuh_hari);
?>

<div id="label-page"><h3>Pengembalian Buku</h3></div>
<div id="content">
	<form action="index.php?p=pengembalian-input&id_pinjam=<?php echo $r_data_peminjaman['id_pinjam'];?>" method="post"> 
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID pinjam</td>
			<td class="isian-formulir"><input type="text" name="id_pinjam" value="<?php echo $r_data_peminjaman['id_pinjam']; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
		<tr>
			<td class="label-formulir">ID anggota</td>
			<td class="isian-formulir"><input type="text" name="id_anggota" value="<?php echo $r_data_peminjaman['id_anggota']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Nama</td>
			<td class="isian-formulir"><input type="text" name="nama" value="<?php echo $r_data_peminjaman['nama']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Buku</td>
			<td class="isian-formulir"><input type="text" name="buku" value="<?php echo $r_data_peminjaman['buku']; ?>" class="isian-formulir isian-formulir-border">
			</td>
		</tr>
		<tr>
			<td class="label-formulir">Jurusan</td>
			<td class="isian-formulir"><input type="text" name="jurusan" value="<?php echo $r_data_peminjaman['jurusan']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Tanggal Pinjam</td>
			<td class="isian-formulir"><input type="text" name="tgl_pinjam" readonly="readonly"  value="<?php echo $r_data_peminjaman['tgl_pinjam']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Jatuh Tempo</td>
			<td class="isian-formulir"><input name="jatuh_tempo" type="text" value="<?php echo $r_data_peminjaman['jatuh_tempo']; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
		<tr>
			<td class="label-formulir">Keterangan Buku</td>
			<td class="isian-formulir"><select name="keterangan_buku">
                                <option value="Tidak Ada">Tidak ada</option>
                                <option value="Terlambat">Terlamabat</option>
                                <option value="Rusak">Rusak</option>
                                <option value="Hilang">Hilang</option></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Proses" id="tombol-simpan"></td>
		</tr>
	</table>
	</form>
</div>