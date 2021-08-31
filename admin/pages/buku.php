<?php 
$connect = mysql_connect("localhost","root","");
$connect = mysql_select_db("perpustakaan");
	?>
<div id="label-page"><h3>Tampil Data Buku</h3> <form action="cari/cari_buku.php" method="get">
    <input type="text" name="cari">
    <input type="submit" value="Cari">
</form>
</div>
<div id="content">
	<p id="tombol-tambah-container"><a href="index.php?p=buku-input" class="tombol">Tambah Data</a><a href="index.php?p=upload" class="tombol">Upload Data</a></p>
	<table id="tabel-tampil">
		<tr>
			<th id="label-tampil-no">No</th>
			<th>ID Buku</th>
			<th>ID Bidang</th>
			<th>Judul Buku</th>
			<th>Kode Buku</th>
			<th>Jumlah Buku</th>
			<th>Status</th>
			<th id="label-opsi2">Opsi</th>
		</tr>
		<?php
		$q_tampil_buku=mysql_query("SELECT * from buku ORDER BY id_buku ASC")or die(mysql_error());
		$nomor=1;
		while($r_tampil_buku=mysql_fetch_array($q_tampil_buku)){
		?>
		<tr>
			
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $r_tampil_buku['id_buku']; ?></td>
			<td><?php echo $r_tampil_buku['id_buku']; ?></td>
			<td><?php echo $r_tampil_buku['judul_buku']; ?></td>
			<td><?php echo $r_tampil_buku['kode_buku']; ?></td>
			<td><?php echo $r_tampil_buku['jumlah_buku']; ?></td>
			<td><?php echo $r_tampil_buku['status']; ?></td>
			<td>

				<div class="tombol-opsi-container"><a href="index.php?p=buku-edit&kode=<?php echo $r_tampil_buku['kode_buku'];?>" class="tombol">Edit</a></div>
				<div class="tombol-opsi-container"><a href="proses/buku-hapus.php?kode=<?php echo $r_tampil_buku['id_buku']; ?>" class="tombol">Hapus</a><td align="center"><a href="?page=buku_hapus&id=<?php echo $data['id']; ?>" onclick="return confirm('Anda yakin ingin menghapus data buku <?php echo $data['id']; ?> ?')"></div>
			</td>
		</tr>
		<?php } ?> 
	</table>
</div>