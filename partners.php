<!DOCTYPE html>

<html>

<?php include("connection.php"); ?>

<head>
	<title>PPI | Partners</title>
	<?php include("head.php"); ?>

</head>

<body class="goldNoBorder">
	<div class="container-fluid">
		<?php header2(); ?>
		<div class="container">
			<center><h1>Partners</h1></center>
			<form action="" method="POST">
				<input type="text" class="search" placeholder="Search">

		<?php
			$row = 0;
			while($row!=15){
		?>
			<div class="row-grid">
				<div class="col-sm-3 col-md-4">
					<a href="partnerMenu.php"><img src="img/PPI_Home_Background.jpg" width="100%" class="height"></a>

					<div class="dropdown">
					    <img src="img/Settings.png" class="dropdown-toggle move" data-toggle="dropdown">
						<br><br><br><br>

					    <ul class="dropdown-menu" role="menu">
						    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
						    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
					    </ul>
				    </div>
				  
				</div>
			</div>

		<?php
				$row++;
			}
		?>
			</form>

		</div>
		<?php footer(); ?>
	</div>	

	<?php floatButtonsPartners() ?>
</body>

</html>