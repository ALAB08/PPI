<!DOCTYPE html>

<html>

<?php include("connection.php"); ?>

<head>
	<title>PPI | Home</title>
	<link rel="icon" type="img/ico" href="img/PPI_Logo.ico">
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body class="gray">
	<div class="container-fluid">
		<div class="container">
			<div class="PPILogo2">
				<img src="img/PPI_Logo.png">
			</div>

			<div class="index_buttons">
				<center>
					<button onclick="window.location.href='login.php'" class="left">Login</button>
					<button onclick="window.location.href='register.php'" class="right">Create Account</button>
				</center>
			</div>
		</div>
	</div>	
</body>

</html>