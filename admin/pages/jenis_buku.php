<?php 
$connect = mysql_connect("localhost","koko","pilkoplo");
$connect = mysql_select_db("perpustakaan");
?>
<div id="label-page"><h3>Tampil Jenis Buku</h3> <form action="cari/cari_buku.php" method="get">
    <input type="text" name="cari">
    <input type="submit" value="Cari">
</form>
</div>
<div id="content">
	<p id="tombol-tambah-container"><a href="index.php?p=jenis-buku-input" class="tombol">Tambah Data</a></p>
	<table id="tabel-tampil">
		<tr>
			<th id="label-tampil-no">No</th>
			<th>Kode Buku</th>
			<th>Judul Buku</th>
			<th>Jenis Buku</th>
			<th>Tahun Terbit</th>
			<th>Penerbit</th>
			<th>Penulis</th>
			<th id="label-opsi2">Opsi</th>
		</tr>
		<?php
		$q_tampil_buku=mysql_query("SELECT * from jenis_buku ORDER BY kode_buku ASC")or die(mysql_error());
		$nomor=1;
		while($r_tampil_buku=mysql_fetch_array($q_tampil_buku)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $r_tampil_buku['kode_buku']; ?></td>
			<td><?php echo $r_tampil_buku['judul_buku']; ?></td>
			<td><?php echo $r_tampil_buku['jenis_buku']; ?></td>
			<td><?php echo $r_tampil_buku['tahun_terbit']; ?></td>
			<td><?php echo $r_tampil_buku['penerbit']; ?></td>
			<td><?php echo $r_tampil_buku['penulis']; ?></td>
			<td>
				<div class="tombol-opsi-container"><a href="index.php?p=buku-edit&kode=<?php echo $r_tampil_buku['kode_buku'];?>" class="tombol">Edit</a></div>
				<div class="tombol-opsi-container"><a href="proses/buku-hapus.php?kode=<?php echo $r_tampil_buku['kode_buku']; ?>" class="tombol">Hapus</a></div>
			</td>
		</tr>
		<?php } ?> 
	</table>
</div>