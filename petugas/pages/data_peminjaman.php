<?php 

include'koneksi.php';
?>
<div id="label-page"><h3>Tampil Data Peminjam</h3></div>
<div id="content">
	<p id="tombol-tambah-container"><a href="index.php?p=peminjaman-input" class="tombol">Tambah Data</a></p>
	<table id="tabel-tampil">
		<tr>
			<th id="label-tampil-no">No</td>
			<th>ID Pinjam</th>
			<th>ID Anggota</th>
			<th>Nama</th>
			<th>Buku</th>
			<th>Jurusan</th>
			<th>Tanggal Pinjam</th>
			<th>Jatuh Tempo</th>
			<th>Status</th>
			<th id="label-opsi2">Opsi</th>
		</tr>
		<?php
		$q_data_peminjaman=mysql_query("SELECT * from tbl_pinjam")or die(mysql_error());
		$nomor=1;
		while($r_data_peminjaman=mysql_fetch_array($q_data_peminjaman)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $r_data_peminjaman['id_pinjam']; ?></td>
			<td><?php echo $r_data_peminjaman['id_anggota']; ?></td>
			<td><?php echo $r_data_peminjaman['nama']; ?></td>
			<td><?php echo $r_data_peminjaman['buku']; ?></td>
			<td><?php echo $r_data_peminjaman['jurusan']; ?></td>
			<td><?php echo $r_data_peminjaman['tgl_pinjam']; ?></td>
			<td><?php echo $r_data_peminjaman['jatuh_tempo'];?></td>
			<td><?php echo $r_data_peminjaman['status'];?></td>
			<td>
				<div class="tombol-opsi-container"><a href="cetak/nota-peminjaman.php?&id=<?php echo $r_data_peminjaman['id_pinjam'];?>" target="_blank" class="tombol">Cetak Nota</a></div>
				<div class="tombol-opsi-container"><a href="index.php?p=pengembalian-input2&id_pinjam=<?php echo $r_data_peminjaman['id_pinjam'];?>" class="tombol">Pengembalian</a></div>
				<div class="tombol-opsi-container"><a href="proses/peminjaman-hapus.php?id=<?php echo $r_data_peminjaman['id_pinjam']; ?>" class="tombol">Hapus</a></div>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>