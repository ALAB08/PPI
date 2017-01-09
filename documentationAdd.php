	<!DOCTYPE html>

<html>

<?php include("connection.php"); ?>
<?php include("javascript.php"); ?>

<head>
	<title>PPI | Add Seminar</title>
	<?php include("head.php"); ?>
	<?php include("queries.php"); ?>
	<?php session("regular"); ?>

</head>


<body class="goldNoBorder">
	<div class="container-fluid">
		<?php header2(); ?>
		<div class="container">
			<div class="leftSideSeminar">
				<p>Add <span>Programme</span></p><br>
			<form action="" method="POST" enctype="multipart/form-data">
                <div class="preview">
					<div class="logoBox">
						<img id="seminarLogoImagePreview" class="logoPreview">
						<img id="seminarLogo2ImagePreview" class="logoPreview">
						<span class="btn btn-file two" style="color: white">Seminar Logo<input type="file" name="seminarLogoImage" id="uploadImageSeminarLogo" required onchange="PreviewImageSeminarLogo();" ></span>
					</div>
                	
                	<img id="seminarBannerImagePreview" class="bannerPreview">
                	<span class="btn btn-file" style="color: white">
                	Seminar Banner<input type="file" name="seminarBannerImage" id="uploadImageSeminarBanner" required onchange="PreviewImageSeminarBanner();" >
                	</span>
                </div>
			</div>
			
			<div class="rightSideSeminar">
				<div class="fieldName">
					<ul>
						<li>File Name :</li>
						<li>Period Covered :</li>
						<li>Areas :</li>
						<li>Remarks :</li>
						<li>Luzon Venue :</li>
						<li>Visayas Venue :</li>
						<li>Mindanao Venue :</li>
					</ul>
				</div>
				<div class="textBoxes">
					<input type="text" name="title_seminar" required>
					<input type="date" name="period_from" required> to <input type="date" name="period_to" required>

					<select name="areas" id="areasCollection">
						<option value="Luzon Only" id="luzon">Luzon Only</option>
						<option value="Visayas Only" id="visayas">Visayas Only</option>
						<option value="Mindanao Only" id="mindanao">Mindanao Only</option>
						<option value="Nationwide">Nationwide</option>
					</select>



					<select name="remarks">
						<option value="Complete">Complete</option>
						<option value="Incomplete" selected>Inomplete</option>
					</select>

					<input type="text" name="luzon" id="luzonVenue" value="None">
					<input type="text" name="visayas" id="visayasVenue" value="None">
					<input type="text" name="mindanao" id="mindanaoVenue" value="None">

					<?php areas(); ?>

				</div>

				<div class="cmsButtons">
					<button type="submit" class="btn-success" name="seminarAdd">SAVE</button>
					<button type="button" class="btn-warning" onclick="location.href='partnerSeminars.php'">CANCEL</button>
				</div>
			</div>
			</form>
		</div>
		
	</div>	
</body>
		<?php floatButtonsSeminarManager(); ?>

</html>