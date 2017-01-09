<!DOCTYPE html>

<html>

<?php include("queries.php"); ?>
<?php session("regular");?>

<head>
	<title>PPI | Category</title>
	<?php include("head.php"); ?>
</head>

<body class="gold">
	<div class="container-fluid">
		<?php headerr(); ?>
		<div class="container">

			<div class="PPILogo2 PPILogo3">
				<img src="img/PPI_Logo.png">
			</div>
			<div class="index_buttons">
				<center>
					<button onclick="window.location.href='partners.php'" class="left left2">PARTNERS</button>
					<button onclick="window.location.href='npfEvents.php'" class="right right2">NPF/ EVENTS</button>
				</center>
			</div>
			<form action="" method="POST">
				<input type="text" class="search ayos" placeholder="Search">
			</form>
		</div>
		<?php footer(); ?>
	</div>	
</body>

</html>