<!DOCTYPE html>

<html>

<?php include("connection.php"); ?>
<?php include("javascript.php"); ?>

<head>
	<title>PPI | Partner Menu</title>
	<?php include("head.php"); ?>
	<?php include("queries.php"); ?>
	<?php session("regular"); ?>

</head>

<body class="goldNoBorder">
	<div class="container-fluid">
		<?php header2(); ?>
		<div class="container">
			<?php 
				$sql = "SELECT * FROM tbl_partner WHERE id = '".$_GET['id']."'";
				$query = mysqli_query($connection, $sql);
				$result = mysqli_fetch_assoc($query);
			?>
			<div class="leftSideDetails">
				<div class="previewBanner">
					<img src="<?php echo $result['partner_banner']; ?>" width="100%">
				</div>
			</div>
			
			<div class="rightSideDetails">
				<p>Aldwin Corporation</p>
				<input type="text" class="search" placeholder="Search">
				<div class="detailsButtons">
					<button type="button" onclick="location.href='partnerSeminars.php'" class="seminarButton">SEMINARS</button>
					<button type="button" onclick="location.href=''" class="awardsButton">AWARDS</button>
					<button type="button" onclick="location.href=''" class="specialButtons">SPECIAL AWARDS</button>

				</div>
			</div>

		</div>
		
	</div>	
	<?php floatButtonsPartnerMenu() ?>
</body>

</html>