<!DOCTYPE html>

<html>

<?php include("connection.php"); ?>

<head>
	<title>PPI | Home</title>
	<?php include("head.php"); ?>
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
		<?php footer(); ?>
	</div>	
</body>

</html>