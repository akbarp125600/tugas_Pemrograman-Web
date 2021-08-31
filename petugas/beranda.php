<html>
<html>
<head>
	<script type="text/javascript" src="chartjs/Chart.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css"></link>
</head>
<body class="form_login">
	<style type="text/css">
	body{
		font-family: roboto;
	}
 
	table{
		margin: 0px auto;
	}
	</style>
	<?php 
	include 'koneksi.php';
	?>
 
	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart"></canvas>
	</div>
 
	<br/>
	<br/>
	<script class="form_login">
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: ["Teknik informatika", "Ekonomi", "Hukum"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_teknik_informatika = mysqli_query($koneksi,"select * from anggota where jurusan='teknik informatika'");
					echo mysqli_num_rows($jumlah_teknik_informatika);
					?>, 
					<?php 
					$jumlah_ekonomi = mysqli_query($koneksi,"select * from anggota where jurusan='ekonomi'");
					echo mysqli_num_rows($jumlah_ekonomi);
					?>, 
					<?php 
					$jumlah_hukum = mysqli_query($koneksi,"select * from anggota where jurusan='hukum'");
					echo mysqli_num_rows($jumlah_hukum);
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(75, 192, 192, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(75, 192, 192, 1)'
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
	
</body>
</html>