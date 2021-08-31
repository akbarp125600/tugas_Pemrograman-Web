<html>
<head>
	<title>User Area</title>
	<link rel="stylesheet" type="text/css" href="style.css"></link>
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
				<marquee style="font-family:arial" bgcolor="#ceedf9">PERPUSTAKAAN UNIVERSITAS BHAYANGKARA SURABAYA</marquee>
				</h1>
				</div>
				<div class="nama-alamat-perpustakaan">
					<h4>Jl.Jendral Ahmad Yani No 11, Telp: (001)345678</h4>
				</div>
			</div>
		</div>
		<div id="header2">
			<div id="nama-user">Hai, User</div>
		</div>
		<div id="sidebar">
			<a href="index.php?p=beranda">Beranda</a>
			<p class="label-navigasi">Entry Data Dan Transaksi</p>
			<ul>
				<li><a href="index.php?p=buku">Data Buku</a></li>
				<li><a href="index.php?p=transaksi">Transaksi Peminjaman</a></li>
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
		<h2>User Area</h2>
		<p><a href="beranda.php">Home</a> / <a href="../logout.php">Logout</a></p>
 
		<p>Selamat datang di Guest Area, Anda Login dengan username <?php echo $_SESSION['guest']; ?></p>
	</div>
 
</body>
</html>