<!DOCTYPE html>

<html>

<?php include("connection.php"); ?>
<?php include("javascript.php"); ?>

<head>
	<title>PPI | Partner Seminars</title>
	<?php include("head.php"); ?>

</head>

<body class="goldNoBorder">
	<div class="container-fluid">
		<?php header2(); ?>
		<div class="container">
			<div class="logoSearch">
				<div class="logo">
					<img src="" width="100%">
				</div>

				<div class="partnerName">
					<p>SEMINARS | Aldwin Corporation</p>
				</div>

				<div class="hanap">
					<input type="text" placeholder="Search...">
				</div>
			</div>

			<div class="banners">
				<?php
					$row = 0;
					while($row!=15){
				?>
					<div class="row-grid">
						<div class="col-sm-3 col-md-3">
							
								<a href="documentation.php"><img src="img/PPI_BackgroundNoBorder.jpg" width="100%" class="banner"></a>
							
							<div class="dropdown">
							    <img src="img/Settings.png" class="dropdown-toggle moveBanner" data-toggle="dropdown">
								<br><br><br>

							    <ul class="dropdown-menu" role="menu">
								    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
								    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
							    </ul>
						    </div>

						    <div class="dropdownsa">
							    <button class="btn btn-warning dropdown-toggle width" type="button" id="documentation" data-toggle="dropdown">Documentation
							    <span class="caret"></span></button>
							    
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
							    		<a role="menuitem" tabindex="-1" href="#">Creatives</a>
							    	</li>
							      
							    </ul>
							  </div>
						  
						</div>

					</div>


				<?php
						$row++;
					}
				?>
			</div>
		</div>
	</div>	
		<?php floatButtonsPartnerSeminars(); ?>

</body>

</html>