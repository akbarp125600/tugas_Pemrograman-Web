<html>
<head>
	<title>Admin Area</title>
	<link rel="stylesheet" type="text/css" href="style.css"></link>
	<link rel="icon" type="image/png" href="ubhara.png"/>
</head>
<body>

	<div id="container">
		<div id="header">
			<div id="logo-perpustakaan-container">
				<image id="logo-perpustakaan" src="ubhara.png">
			</div>
			<div id="nama-alamat-perpustakaan-container">
				<div class="nama-alamat-perpustakaan">
					<h1>
				<marquee style="font-family:arial" bgcolor="#ceedf9">	PERPUSTAKAAN UNIVERSITAS BHAYANGKARA SURABAYA</marquee>
				</h1>
				</div>
				<div class="nama-alamat-perpustakaan">
					<h4>Jl.Jendral Ahmad Yani No 144, Telp: (001)345678</h4>
				</div>
				<div class="pencarian"><a>pencarian pencarian</a></div>
			</div>
		</div>
		<div id="header2">
			<div id="nama-user">Hai, Kepala Perpus</div> 

		</div>
		<div id="sidebar">
			<a href="index.php?p=beranda">Beranda</a>
			
			<p class="label-navigasi">Laporan</p>
			<ul>
				<li><a href="cetak/cetak-user.php" target="_blank">Lap.Data User</a></li>
				<li><a href="cetak/cetak-anggota.php" target="_blank">Lap.Data Anggota</a></li>
				<li><a href="cetak/cetak-buku.php" target="_blank">Lap.Data Buku</a></li>
				<li><a href="cetak/cetak-transaksi-peminjaman.php" target="_blank">Lap.Peminjaman</a></li>
			</ul>
		</div>
		<div id="content-container">
		<?php
			$pages_dir='pages';
			if(!empty($_GET['p'])){
				$pages=scandir($pages_dir,0);
				unset($pages[0],$pages[1]);
				$p=$_GET['p'];
				if(in_array($p.'.php',$pages)){
					include($pages_dir.'/'.$p.'.php');
				}else{
					echo'Halaman Tidak Ditemukan';
				}
			}else{
				include($pages_dir.'/beranda.php');
			}
		?>
		</div>
	<div style="text-align:center" id="footer">
		<h2>Admin Area</h2>
		<p><a href="beranda.php">Home</a> / <a href="../logout.php">Logout</a></p>
 
		<p>Selamat datang di Guest Area, Anda Login dengan username <?php echo $_SESSION['guest']; ?></p>
	</div>
 
</body>
</html>