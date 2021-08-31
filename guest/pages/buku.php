<?php 
$connect = mysql_connect("localhost","koko","pilkoplo");
$connect = mysql_select_db("perpustakaan");
?>
<div id="label-page"><h3>Tampil Data Buku</h3> <form action="cari/cari_buku.php" method="get">
    <input type="text" name="cari">
    <input type="submit" value="Cari">
</form>
</div>
<div id="content">
	<table id="tabel-tampil">
		<tr>
			<th id="label-tampil-no">No</th>
			<th>Judul Buku</th>
			<th>jenis buku</th>
			<th>Bidang Buku</th>
			<th>Penerbit</th>
			<th>Penulis</th>
			<th>tahun terbit</th>
		</tr>
		<?php
		$q_tampil_buku=mysql_query("SELECT a.judul_buku, b.jenis_buku, b.tahun_terbit, b.penerbit, b.penulis, c.bidang_buku from buku a inner join jenis_buku b on a.kode_buku=b.kode_buku join bidang_buku c on a.id_bidang=c.id_bidang ORDER BY id_buku ASC")or die(mysql_error());
		$nomor=1;
		while($r_tampil_buku=mysql_fetch_array($q_tampil_buku)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $r_tampil_buku['judul_buku']; ?></td>
			<td><?php echo $r_tampil_buku['jenis_buku']; ?></td>
			<td><?php echo $r_tampil_buku['bidang_buku']; ?></td>
			<td><?php echo $r_tampil_buku['penerbit']; ?></td>
			<td><?php echo $r_tampil_buku['penulis']; ?></td>
			<td><?php echo $r_tampil_buku['tahun_terbit']; ?></td>
		</tr>
		<?php } ?> 
	</table>
</div>