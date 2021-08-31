<?php
include 'koneksi.php';
?>
<div id="label-page"><h3>Tampil Data User</h3></div>
<div id="content">
	<p id="tombol-tambah-container"><a href="index.php?p=user-input" class="tombol">Tambah Data</a></p>
	<table id="tabel-tampil">
		<tr>
			<th id="label-tampil-no">No</td>
			<th>ID User</th>
			<th>Username</th>
			<th>Password</th>
			<th>Nama</th>
			<th>E-mail</th>
			<th>Level</th>
		</tr>
		<?php
		$q_tampil_user=mysql_query("SELECT * FROM user")or die(mysql_error());
		$nomor=1;
		while($r_tampil_user=mysql_fetch_array($q_tampil_user)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $r_tampil_user['id']; ?></td>
			<td><?php echo $r_tampil_user['username']; ?></td>
			<td><?php echo $r_tampil_user['password']; ?></td>
			<td><?php echo $r_tampil_user['nama']; ?></td>
			<td><?php echo $r_tampil_user['email']; ?></td>
			<td><?php echo $r_tampil_user['level']; ?></td>
			<td>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>