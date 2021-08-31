<?php
include 'koneksi.php';
?>
<div id="label-page"><h3>Beranda</h3></div>
<div id="content">
	<div  class="" style="width: 800px;height: 1000px;"style="margin-left: 520px;">
<?php
$connect = mysql_connect("localhost","koko","pilkoplo");
$connect = mysql_select_db("perpustakaan");
?>		
		<script type="text/javascript" src="pages/chartjs/Chart.js"></script>
		<h2><canvas id="myChart"></canvas></h2>
	    </div>
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Teknik Informatika", "Ekonomi", "Hukum", "Teknik Electro", "Ilmu Komunikasi"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_teknik = mysql_query("SELECT * from anggota where jurusan='teknik informatika'");
					echo mysql_num_rows($jumlah_teknik);
					?>, 
					<?php 
					$jumlah_ekonomi = mysql_query("SELECT * from anggota where jurusan='ekonomi'");
					echo mysql_num_rows($jumlah_ekonomi);
					?>, 
					<?php 
					$jumlah_fisip = mysql_query("SELECT * from anggota where jurusan='hukum'");
					echo mysql_num_rows($jumlah_fisip);
					?>, 
					<?php 
					$jumlah_pertanian = mysql_query("SELECT * from anggota where jurusan='teknik elektro'");
					echo mysql_num_rows($jumlah_pertanian);
					?>,
					<?php 
					$jumlah_ilmu = mysql_query("SELECT * from anggota where jurusan='ilmu komunikasi'");
					echo mysql_num_rows($jumlah_ilmu);
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
	<div  class="" style="width: 800px;height: 500px;"style="margin-left: 520px;">
<?php
$connect = mysql_connect("localhost","koko","pilkoplo");
$connect = mysql_select_db("perpustakaan");
?>		
		<script type="text/javascript" src="pages/chartjs/Chart.js"></script>
		<h2><canvas id="myno"></canvas></h2>
	    </div>
	<script>
		var ctx = document.getElementById("myno").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Astronomi", "Kalkulus", "Anatomi Tubuh", "Planet Bumi", "Bangun Ruang"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_teknik = mysql_query("SELECT * from buku where judul_buku='astronomi'");
					echo mysql_num_rows($jumlah_teknik);
					?>, 
					<?php 
					$jumlah_ekonomi = mysql_query("SELECT * from buku where judul_buku='kalkulus'");
					echo mysql_num_rows($jumlah_ekonomi);
					?>, 
					<?php 
					$jumlah_fisip = mysql_query("SELECT * from buku where judul_buku='anatomi tubuh'");
					echo mysql_num_rows($jumlah_fisip);
					?>, 
					<?php 
					$jumlah_pertanian = mysql_query("SELECT * from buku where judul_buku='planet bumi'");
					echo mysql_num_rows($jumlah_pertanian);
					?>,
					<?php 
					$jumlah_ilmu = mysql_query("SELECT * from buku where judul_buku='bangun ruang'");
					echo mysql_num_rows($jumlah_ilmu);
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
</div>
