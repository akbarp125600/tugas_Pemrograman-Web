<?php 
    include 'koneksi.php';
?>
<?php 
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        echo "<b>Hasil pencarian : ".$cari."</b>";
    }
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css"></link>
</head>
<body>
<div id="label-page"><h3>Tampil Data Buku</h3>
<div id="content">
	<p id="tombol-tambah-container">Tambah Data</a></p>
<table id="tabel-tampil">
    <tr>
        <th id="label-tampil-no">No</th>
        <th>id_buku</th>
        <th>id_bidang</th>
        <th>judul buku</th>
        <th>kode buku</th>
        <th>jumlah buku</th>

    </tr>
<?php 
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        $data = mysql_query("select * from buku where judul_buku like '%".$cari."%'"); 
    }
    else{
        $data = mysql_query("select * from buku"); 
    }
    $no = 1;
    while($d = mysql_fetch_array($data)){
?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['id_buku']; ?></td>
        <td><?php echo $d['id_bidang']; ?></td>
        <td><?php echo $d['judul_buku']; ?></td>
        <td><?php echo $d['kode_buku']; ?></td>
        <td><?php echo $d['jumlah_buku']; ?></td>
    </tr>
<?php 
    } 
?>
</table>
</div>
</div>