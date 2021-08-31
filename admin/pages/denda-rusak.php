<?php 
$connect = mysql_connect("localhost","koko","pilkoplo");
$connect = mysql_select_db("perpustakaan");
?>
<div id="label-page"><h3>Tampil Data Denda Rusak</h3> <form action="cari/cari_buku.php" method="get">
    <input type="text" name="cari">
    <input type="submit" value="Cari">
</form>
</div>
<div id="content">
	<p id="tombol-tambah-container"><a href="index.php?p=buku-input" class="tombol">Tambah Data</a></p>
	<table id="tabel-tampil">
		<tr>
			<th id="label-tampil-no">No</th>
			<th>Nama</th>
			<th>Jurusan</th>
			<th>Buku</th>
			<th>Jenis Denda</th>
			<th>Nominal Denda </th>
			<th id="label-opsi2">Opsi</th>
		</tr>
		<?php
		$q_tampil_buku=mysql_query("SELECT * from tbl_pengembalian where keterangan='Rusak' ORDER BY id_pengembalian ASC")or die(mysql_error());
		$nomor=1;
		while($r_tampil_buku=mysql_fetch_array($q_tampil_buku)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $r_tampil_buku['nama']; ?></td>
			<td><?php echo $r_tampil_buku['jurusan']; ?></td>
			<td><?php echo $r_tampil_buku['buku']; ?></td>
			<td><?php echo $r_tampil_buku['keterangan']; ?></td>
			<td><?php echo $r_tampil_buku['denda_buku']; ?></td>
			<td>
				<div class="tombol-opsi-container"><a href="index.php?p=buku-edit&kode=<?php echo $r_tampil_buku['kode_buku'];?>" class="tombol">Edit</a></div>
				<div class="tombol-opsi-container"><a href="proses/buku-hapus.php?kode=<?php echo $r_tampil_buku['kode_buku']; ?>" class="tombol">Hapus</a></div>
			</td>
		</tr>
		<?php } ?> 
	</table>
</div>