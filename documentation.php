<!DOCTYPE html>

<html>

<?php include("connection.php"); ?>
<?php include("javascript.php"); ?>

<head>
	<title>PPI | Partner Menu</title>
	<?php include("head.php"); ?>

</head>

<body class="goldNoBorder">
	<div class="container-fluid">
		<?php header2(); ?>
		<div class="container">
			<div class="leftSideDetails">
				<div class="logo2">
					<img src="">
				</div>
				
				<div class="previewBanner2">
					<img src="">
				</div>
			</div>
			
			<div class="rightSideDetails">
				<div class="seminarTitle">
					<h3>Seminar Title</h3>
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
	<?php floatButtonsPartnerMenu() ?>
</body>

</html>