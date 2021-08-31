<?php 
$connect = mysql_connect("localhost","koko","pilkoplo");
$connect = mysql_select_db("perpustakaan");
?>
<div id="label-page"><h3>Transaksi Peminjaman</h3></div>
<div id="content">
	<p id="tombol-tambah-container"><a href="index.php?p=transaksi-peminjaman-input" class="tombol">Transaksi Baru</a></p>
	<table id="tabel-tampil">
		<tr>
			<th id="label-tampil-no">No</td>
			<th>ID Transaksi</th>
			<th>Nama</th>
			<th>Jurusan</th>
			<th>Buku</th>
			<th>Tanggal Pinjam</th>
			<th>Tanggal Pengembalian</th>
			<th id="label-opsi3">Opsi</th>
		</tr>
		<?php
		$q_transaksi_buku=mysql_query("SELECT * from tbl_transaksi")or die(mysql_error());
		$nomor=1;
		while($r_transaksi_buku=mysql_fetch_array($q_transaksi_buku)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $r_transaksi_buku['id_transaksi']; ?></td>
			<td><?php echo $r_transaksi_buku['nama']; ?></td>
			<td><?php echo $r_transaksi_buku['jurusan']; ?></td>
			<td><?php echo $r_transaksi_buku['buku']; ?></td>
			<td><?php echo $r_transaksi_buku['tgl_pinjam']; ?></td>
			<td><?php echo $r_transaksi_buku['tgl_pengembalian']; ?></td>
			<td>
				<div class="tombol-opsi-container"><a href="cetak/nota-peminjaman.php?&kode=<?php echo $r_transaksi['id_transaksi'];?>" target="_blank" class="tombol">Cetak Nota</a></div>
				<div class="tombol-opsi-container"><a href="../admin/proses/pengembalian-proses.php?&id=<?php echo $r_transaksi['id_transaksi'];?>" class="tombol">Pengembalian</a></div>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>