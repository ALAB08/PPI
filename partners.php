<!DOCTYPE html>

<html>

<?php include("connection.php"); ?>

<head>
	<title>PPI | Partners</title>
	<?php include("head.php"); ?>
	<?php include("queries.php"); ?>
	<?php session("regular"); ?>
</head>

<body class="goldNoBorder">
	<div class="container-fluid">
		<?php header2(); ?>
		<div class="container">
			<center><h1>Partners</h1></center>
			<form action="" method="POST">
				<input type="text" class="search" placeholder="Search">

			<?php
				$sql = "SELECT * FROM tbl_partner";
				$query = mysqli_query($connection, $sql);

				while($result = mysqli_fetch_assoc($query)){
					$id = $result['id'];
			?>

				<div class="row-grid">
				<div class="col-sm-3 col-md-4">
					<a href="partnerMenu.php?id=<?php echo $id; ?>"><img src="<?php echo $result['partner_logo']; ?>" width="100%" class="height boxShadow"></a>

					<div class="dropdown">
					    <img src="img/Settings.png" class="dropdown-toggle move" data-toggle="dropdown">
						<br><br><br><br>
						
						<?php include("modals.php"); ?>

					    <ul class="dropdown-menu" role="menu">
					    	<li role="presentation"><a role="menuitem" tabindex="-1" data-toggle="modal" data-target="#partnerDetails<?php echo $id;?>">Details</a></li>
						    <li role="presentation"><a role="menuitem" tabindex="-1" href="partnerUpdate.php?id=<?php echo $id;?>">Update</a></li>
						    <li role="presentation"><a role="menuitem" tabindex="-1" data-toggle="modal" data-target="#partnerDelete<?php echo $id;?>">Remove</a></li>
					    </ul>
				    </div>
				  
				</div>
			</div>
			<?php
				}
			?>

			</form>

		</div>
		<?php footer(); ?>
	</div>	

	<?php floatButtonsPartners() ?>
</body>

</html>