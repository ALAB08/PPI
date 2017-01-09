<!DOCTYPE html>

<html>

<?php include("connection.php"); ?>
<?php include("javascript.php"); ?>

<head>
	<title>PPI | Partner Seminars</title>
	<?php include("head.php"); ?>
	<?php include("queries.php"); ?>
	<?php include("modals.php"); ?>
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

				<div class="docuName">
					<p><?php echo $_GET['docu']; ?> | </p>
					<span class="docuPartner"><?php echo $_SESSION['partner_name']; ?></span>
				</div>

				<div class="hanap">
					<input type="text" placeholder="Search...">
				</div>
			</div>

			<div class="banners">
				<?php 
					$partner_id = $_SESSION['partner_id'];
					$seminar_id = $_SESSION['seminar_id'];
					$docu_type = $_GET['docu'];

					$sql = "SELECT * FROM tbl_documentation WHERE partner_id = '$partner_id' AND seminar_id = '$seminar_id' AND docu_type = '$docu_type'";
					$query = mysqli_query($connection, $sql);

					while($result = mysqli_fetch_assoc($query)){
						$id = $result['id'];
				?>
					<?php include("modals.php"); ?>
					<div class="row-grid">
						<div class="col-sm-1 col-md-6">

							<iframe src="<?php echo $result['pdf_file']; ?>" class="banner" width="100%"></iframe>
							
							<div class="dropdown">
							    <img src="img/Settings.png" class="dropdown-toggle moveBanner" data-toggle="dropdown" style="filter: brightness(0) invert(1);">
								<br><br><br>

							    <ul class="dropdown-menu" role="menu">
							    	<li role="presentation"><a role="menuitem" tabindex="-1" data-toggle="modal" data-target="#fileDetails<?php echo $id; ?>">Details</a></li>
								    <li role="presentation"><a role="menuitem" tabindex="-1" href="seminarUpdate.php?id=<?php echo $id; ?>">Update</a></li>
								    <li role="presentation"><a role="menuitem" tabindex="-1" data-toggle="modal" data-target="#seminarDelete<?php echo $id; ?>" style="border-bottom: none">Remove</a></li>
							    </ul>
						    </div>
						    
						    <!--
						    <button href="<?php echo $result['other_file']; ?>"><?php echo $result['other_file']; ?></button>
							-->

							<button href="<?php echo $result['other_file']; ?>" class="downloadButton">Download Word File</button>

						    <p class="remarks"><?php echo $result['remarks']; ?></p>
						</div>

					</div>

				<?php
					}
				?>
					

			</div>
		</div>

	</div>	
	 <?php floatButtonsDocu(); ?>


</body>

</html>