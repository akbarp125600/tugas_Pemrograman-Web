<?php 
$connect = mysql_connect("localhost","koko","pilkoplo");
$connect = mysql_select_db("perpustakaan");
?>
<div id="label-page"><h3>Tampil Data Pengembalian</h3></div>
<div id="content">
	<p id="tombol-tambah-container"><a href="index.php?p=buku-input" class="tombol">Tambah Data</a></p>
	<table id="tabel-tampil">
		<tr>
			<th id="label-tampil-no">No</td>
			<th>ID Pengembalian</th>
			<th>ID Anggota</th>
			<th>Nama</th>
			<th>Jurusan</th>
			<th>buku</th>
			<th>Tanggal Pinjam</th>
			<th id="label-opsi2">Opsi</th>
		</tr>
		<?php
		$q_data_peminjaman=mysql_query("SELECT * from tbl_pengembalian")or die(mysql_error());
		$nomor=1;
		while($r_data_peminjaman=mysql_fetch_array($q_data_peminjaman)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $r_data_peminjaman['id_pengembalian']; ?></td>
			<td><?php echo $r_data_peminjaman['id_anggota']; ?></td>
			<td><?php echo $r_data_peminjaman['nama']; ?></td>
			<td><?php echo $r_data_peminjaman['jurusan']; ?></td>
			<td><?php echo $r_data_peminjaman['buku']; ?></td>
			<td><?php echo $r_data_peminjaman['tgl_pengembalian']; ?></td>
			<td>
				<div class="tombol-opsi-container"><a href="index.php?p=buku-edit&id=<?php echo $r_tampil_buku['idbuku'];?>" class="tombol">Edit</a></div>
				<div class="tombol-opsi-container"><a href="proses/buku-hapus.php?id=<?php echo $r_tampil_buku['idbuku']; ?>" class="tombol">Hapus</a></div>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>