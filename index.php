<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Perpus</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="ubhara.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<h1>
		<marquee background-color="#005bea" style="font-family: ariar;">Selamat Datang Di Sistem Perpustakaan Universitas Bhayangkara Surabaya</marquee>
	</h1>
	<form action="login.php" method="post">
	<form>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/img-01.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form class="login100-form validate-form">
					<div class="login100-form-avatar">
						<img src="ubhara.png" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						Perpustakaan Universitas Bhayangkara Surabaya
					</span>
					<form action="login.php" method="post">
						<form>

					<div class="wrap-input100 validate-input m-b-10">
						<input class="input100" type="text" name="username" placeholder="username" required/>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10">
						<input class="input100" type="password" name="password" placeholder="Password" reqiured/>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<td><input class="login100-form-btn" type="submit" name="login" value="LOGIN"/></td>
					</div>
					<div class="container-login100-form-btn p-t-10">
						<td><input class="login100-form-btn" type="submit" name="login" value="DAFTAR"/></td>
					</div>

					<div class="text-center w-full p-t-25 p-b-230">
						<a class="txt1" href="daftar.php">Create new account</a>
					</div>

					
			</div>
		</div>
	</div>
	</form>
</form>
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>