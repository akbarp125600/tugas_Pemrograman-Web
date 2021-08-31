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
			type: 'pie',
			data: {
				labels: ["Teknik Informatika", "Ekonomi", "Hukum", "Teknik Electro", "Ilmu Komunikasi"],
				datasets: [{
					label: 'Data Anggota',
					data: [10,15,25,10,5],
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
				labels: ["Teknik Informatika", "Ekonomi", "Hukum", "Teknik Electro", "Ilmu Komunikasi"],
				datasets: [{
					label: 'Data Anggota',
					data: [10,15,25,10,5],
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
