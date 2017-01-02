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
			$sql = "SELECT * from tbl_seminars WHERE id='".$_GET['id']."'";
			$query = mysqli_query($connection, $sql);
			$result = mysqli_fetch_assoc($query);
		?>

			<div class="leftSideDetails">
				<div class="logo2">
					<img src="<?php echo $result['seminar_logo']; ?>" width="100%" height="100px">
				</div>
				
				<div class="previewBanner2">
					<img src="<?php echo $result['seminar_banner']; ?>">
				</div>
			</div>

			<div class="rightSideDetails">
				<div class="seminarTitle">
					<h3><?php echo $result['title_seminar']; ?></h3>
				</div>

				<div class="hanap2">
					<input type="text" placeholder="Search from seminar..">
				</div>

				<div class="docuButtons">
					<div class="row-grid">
						<div class="col-sm-6 col-md-6">
							<button type="button" onclick="location.href=''">Programmes</button>
							<button type="button" onclick="location.href=''">Attendees</button>
							<button type="button" onclick="location.href=''">Presentations</button>
							<button type="button" onclick="location.href=''">Actual Expense</button>
							<button type="button" onclick="location.href=''">Evaluation Report</button>
						</div>
					</div>

					<div class="row-grid">
						<div class="col-sm-6 col-md-6">
							<button type="button" onclick="location.href=''">Group Work</button>
							<button type="button" onclick="location.href=''">Venue</button>
							<button type="button" onclick="location.href=''">Resource Person</button>
							<button type="button" onclick="location.href=''">Documentor</button>
							<button type="button" onclick="location.href=''">Creatives</button>
						</div>
					</div>

				</div>
			</div>

		</div>
		
	</div>	
	<?php floatButtonsDocumentation() ?>
</body>

</html>