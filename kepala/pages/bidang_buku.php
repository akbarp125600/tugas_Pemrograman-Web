<?php 
$connect = mysql_connect("localhost","koko","pilkoplo");
$connect = mysql_select_db("perpustakaan");
?>
<div id="label-page"><h3>Tampil Bidang Buku</h3> <form action="cari/cari_buku.php" method="get">
    <input type="text" name="cari">
    <input type="submit" value="Cari">
</form>
</div>
<div id="content">
	<p id="tombol-tambah-container"><a href="index.php?p=buku-input" class="tombol">Tambah Data</a></p>
	<table id="tabel-tampil">
		<tr>
			<th id="label-tampil-no">No</th>
			<th>ID Bidang</th>
			<th>Judul Buku</th>
			<th>Bidang Buku</th>
			<th id="label-opsi2">Opsi</th>
		</tr>
		<?php
		$q_tampil_buku=mysql_query("SELECT * from bidang_buku ORDER BY id_bidang ASC")or die(mysql_error());
		$nomor=1;
		while($r_tampil_buku=mysql_fetch_array($q_tampil_buku)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $r_tampil_buku['id_bidang']; ?></td>
			<td><?php echo $r_tampil_buku['judul_buku']; ?></td>
			<td><?php echo $r_tampil_buku['bidang_buku']; ?></td>
			<td>
				<div class="tombol-opsi-container"><a href="index.php?p=buku-edit&kode=<?php echo $r_tampil_buku['kode_buku'];?>" class="tombol">Edit</a></div>
				<div class="tombol-opsi-container"><a href="proses/buku-hapus.php?kode=<?php echo $r_tampil_buku['kode_buku']; ?>" class="tombol">Hapus</a></div>
			</td>
		</tr>
		<?php } ?> 
	</table>
</div>