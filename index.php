<!DOCTYPE html>

<html>

	<?php session_start(); ?>
<head>
	<title>PPI | Home</title>
	<?php include("head.php"); ?>
	<?php include("connection.php"); ?>
	<?php include("modals.php"); ?>
	<?php unset($_SESSION['id']); unset($_SESSION['super_id']); ?>

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
					<button type="button" data-toggle="modal" data-target="#verifyAccess" class="right">Create Account</button>
				</center>
			</div>
		</div>
		<?php footer(); ?>
	</div>	
</body>

</html>