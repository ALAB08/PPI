<!DOCTYPE html>

<html>

<?php include("connection.php"); ?>
<?php include("javascript.php"); ?>

<head>
	<title>PPI | Partner Seminars</title>
	<?php include("head.php"); ?>
	<?php include("queries.php"); ?>
	<?php session("regular"); ?>

</head>

<body class="goldNoBorder">
	<div class="container-fluid">
		<?php header2(); ?>
		<div class="container">
			<div class="logoSearch">
				<div class="logo">
					<img src="<?php echo $_SESSION['partner_logo']; ?>" width="100%" height="100px">
				</div>

				<div class="partnerName">
					<p>SEMINARS | <?php echo $_SESSION['partner_name']; ?></p>
				</div>

				<div class="hanap">
					<input type="text" placeholder="Search...">
				</div>
			</div>

			<div class="banners">
				<?php 
					$sql = "SELECT * FROM tbl_seminars WHERE deleted ='NO' AND partner_id ='".$_SESSION['partner_id']."'";
					$query = mysqli_query($connection, $sql);

					while($result = mysqli_fetch_assoc($query)){
						$id = $result['id'];
				?>
					<?php include("modals.php"); ?>
					<div class="row-grid">
						<div class="col-sm-3 col-md-3">
							
								<a href="documentation.php?id=<?php echo $id; ?>"><img src="<?php echo $result['seminar_banner'] ?>" width="100%" class="banner"></a>
							
							<div class="dropdown">
							    <img src="img/Settings.png" class="dropdown-toggle moveBanner" data-toggle="dropdown">
								<br><br><br>

							    <ul class="dropdown-menu" role="menu">
							    	<li role="presentation"><a role="menuitem" tabindex="-1" data-toggle="modal" data-target="#seminarDetails<?php echo $id; ?>">Details</a></li>
								    <li role="presentation"><a role="menuitem" tabindex="-1" href="seminarUpdate.php?id=<?php echo $id; ?>">Update</a></li>
								    <li role="presentation"><a role="menuitem" tabindex="-1" data-toggle="modal" data-target="#seminarDelete<?php echo $id; ?>" style="border-bottom: none">Remove</a></li>
							    </ul>
						    </div>

						    <div class="dropdowns">
							    <button class="dark dropdown-toggle width" type="button" id="documentation" data-toggle="dropdown">Documentation
							    </button>
							    
							    <ul class="dropdown-menu" role="menu" aria-labelledby="documentation">

							    	<li role="presentation">
							    		<a role="menuitem" tabindex="-1" href="#">Programmes</a>
							    	</li>
							    	<li role="presentation">
							    		<a role="menuitem" tabindex="-1" href="#">Attendees</a>
							    	</li>
							    	<li role="presentation">
							    		<a role="menuitem" tabindex="-1" href="#">Presentations</a>
							    	</li>
							    	<li role="presentation">
							    		<a role="menuitem" tabindex="-1" href="#">Actual Expense</a>
							    	</li>
							    	<li role="presentation">
							    		<a role="menuitem" tabindex="-1" href="#">Evaluation Report</a>
							    	</li>
							    	<li role="presentation">
							    		<a role="menuitem" tabindex="-1" href="#">Group Work</a>
							    	</li>
							    	<li role="presentation">
							    		<a role="menuitem" tabindex="-1" href="#">Venue</a>
							    	</li>
							    	<li role="presentation">
							    		<a role="menuitem" tabindex="-1" href="#">Resource Person</a>
							    	</li>
							    	<li role="presentation">
							    		<a role="menuitem" tabindex="-1" href="#">Documentator</a>
							    	</li>
							    	<li role="presentation">
							    		<a role="menuitem" tabindex="-1" href="#" style="border-bottom: none">Creatives</a>
							    	</li>   
							    </ul>

							  </div>
						</div>
					</div>

				<?php
					}
				?>
					

			</div>
		</div>
	</div>	
		<?php floatButtonsPartnerSeminars(); ?>

</body>

</html>