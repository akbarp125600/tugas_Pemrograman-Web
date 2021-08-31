<?php
$connect = mysql_connect("localhost","koko","pilkoplo");
$connect = mysql_select_db("perpustakaan");
?>
<div id="label-page"><h3>Tampil Data Anggota</h3></div>
<div id="content">
	<p id="tombol-tambah-container"><a href="index.php?p=anggota-input" class="tombol">Tambah Data</a></p>
	<table id="tabel-tampil">
		<tr>
			<th id="label-tampil-no">No</td>
			<th>ID Anggota</th>
			<th>Nama</th>
			<th>Nim</th>
			<th>Jurusan</th>
			<th>Fakultas</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
			<th>Provinsi</th>
			<th>Kecamatan</th>
			
		</tr>
		<?php
		$q_tampil_anggota=mysql_query("SELECT * FROM anggota ORDER BY id_anggota ASC")or die(mysql_error());
		$nomor=1;
		while($r_tampil_anggota=mysql_fetch_array($q_tampil_anggota)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $r_tampil_anggota['id_anggota']; ?></td>
			<td><?php echo $r_tampil_anggota['nama']; ?></td>
			<td><?php echo $r_tampil_anggota['nim']; ?></td>
			<td><?php echo $r_tampil_anggota['jurusan']; ?></td>
			<td><?php echo $r_tampil_anggota['fakultas']; ?></td>
			<td><?php echo $r_tampil_anggota['jenis_kelamin']; ?></td>
			<td><?php echo $r_tampil_anggota['alamat']; ?></td>
			<td><?php echo $r_tampil_anggota['provinsi']; ?></td>
			<td><?php echo $r_tampil_anggota['kecamatan']; ?></td>
			
		</tr>
		<?php } ?>
	</table>
</div>