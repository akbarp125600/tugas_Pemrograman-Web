<?php
include'koneksi.php';
$jatuh_tempo= $_POST['jatuh_tempo'];
$id_pinjam =$_POST['id_pinjam'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$tgl_pengembalian = date("Y-m-d");
$keterangan_buku = $_POST['keterangan_buku'];
?>
<?php
	$id_pinjam=$_GET['id_pinjam'];
	$q_data_peminjaman=mysql_query("SELECT * FROM tbl_pinjam where id_pinjam='$id_pinjam'");
	$r_data_peminjaman=mysql_fetch_array($q_data_peminjaman);
?>
<?php
$pinjam            = date("Y-m-d");
$tujuh_hari        = mktime(0,0,0,date("n"),date("j")+7,date("Y"));
$kembali           = date("Y-m-d", $tujuh_hari);
?>

<?php
$cari_hari = abs(strtotime($tgl_pinjam) - strtotime($tgl_pengembalian));
$hitung_hari = floor($cari_hari/(60*60*24));
 
if($hitung_hari > 7){
    $telat = $hitung_hari - 7;
    $denda = 1000 * $telat;
}else{
    $telat = 0;
    $denda = 0;
}
 
if($keterangan_buku == 'Tidak Ada'){
    $denda_buku = 0;
}elseif($keterangan_buku == 'Rusak'){
    $denda_buku = 30000;
}else{
    $denda_buku = 80000;
}
 
$jumlah_denda = $denda + $denda_buku;
?>
<div id="label-page"><h3>Pengembalian Buku</h3></div>
<div id="content">
	<form action="../admin/proses/pengembalian-proses.php" method="post">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID pinjam</td>
			<td class="isian-formulir"><input type="text" name="id_pinjam" value="<?php echo $r_data_peminjaman['id_pinjam']; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
		<tr>
			<td class="label-formulir">ID anggota</td>
			<td class="isian-formulir"><input type="text" name="id_anggota" value="<?php echo $r_data_peminjaman['id_anggota']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Nama</td>
			<td class="isian-formulir"><input readonly="readonly" type="text" name="nama" value="<?php echo $r_data_peminjaman['nama']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Buku</td>
			<td class="isian-formulir"><input readonly="readonly" type="text" name="buku" value="<?php echo $r_data_peminjaman['buku']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Jurusan</td>
			<td class="isian-formulir"><input type="text" name="jurusan" value="<?php echo $r_data_peminjaman['jurusan']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Tanggal Pinjam</td>
			<td class="isian-formulir"><input type="text" name="tgl_pinjam" readonly="readonly"  value="<?php echo $r_data_peminjaman['tgl_pinjam']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Jatuh Tempo</td>
			<td class="isian-formulir"><input name="jatuh_tempo" type="text" value="<?php echo "$jatuh_tempo";?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
		<tr>
			<td class="label-formulir">Tanggal kembali</td>
			<td class="isian-formulir"><input type="text" name="tgl_pengembalian" readonly="readonly" value="<?php  echo date("Y-m-d");?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
		<tr>
			<td class="label-formulir">Keterangan Buku</td>
			<td class="isian-formulir"><input readonly="readonly" type="text" name="keterangan_buku" class="isian-formulir isian-formulir-border"  value="<?php echo $keterangan_buku ?>"></td>
		</tr>
		<tr>
			<td class="label-formulir">Denda Telat</td>
			<td class="isian-formulir"><input readonly="readonly" type="text" name="denda_telat" class="isian-formulir isian-formulir-border" value="Rp. <?php echo number_format($denda)?>"></td>
		</tr>
		<tr>
			<td class="label-formulir">Denda Buku</td>
			<td class="isian-formulir"><input readonly="readonly" type="text" name="denda_buku" class="isian-formulir isian-formulir-border"  value="Rp.<?php echo number_format($denda_buku)?>,-"></td>
		</tr>
		<tr>
			<td class="label-formulir">Total Denda</td>
			<td class="isian-formulir"><input readonly="readonly" type="text" name="total_denda" class="isian-formulir isian-formulir-border" readonly value="Rp.<?php echo number_format($jumlah_denda) ?>"></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" id="tombol-simpan"></td>
		</tr>
	</table>
	</form>
</div>