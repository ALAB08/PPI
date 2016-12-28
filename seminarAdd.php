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
				<p>Add <span>Seminar</span></p><br>
				
                <div class="preview">
					<div class="logoBox">
						<img id="seminarLogoImagePreview" class="logoPreview">
						<img id="seminarLogo2ImagePreview" class="logoPreview">
						<span class="btn btn-file two">Seminar Logo<input type="file" name="seminarLogoImage" id="uploadImageSeminarLogo" required onchange="PreviewImageSeminarLogo();" ></span>
					</div>
                	
                	<img id="seminarBannerImagePreview" class="bannerPreview">
                	<span class="btn btn-file">
                	Seminar Banner<input type="file" name="seminarBannerImage" id="uploadImageSeminarBanner" required onchange="PreviewImageSeminarBanner();" >
                	</span>
                </div>
			</div>
			
			<div class="rightSideSeminar">
				<div class="fieldName">
					<ul>
						<li>Title of Seminar :</li>
						<li>Period Covered :</li>
						<li>Areas :</li>
						<li>Remarks :</li>
						<li>Luzon Venue :</li>
						<li>Visayas Venue :</li>
						<li>Mindanao Venue :</li>
					</ul>
				</div>
				<div class="textBoxes">
					<input type="text" name="titleSeminar">
					<input type="date"> to <input type="date">

					<select name="areas" id="areasCollection">
						<option value="Luzon Only" id="luzon">Luzon Only</option>
						<option value="Visayas Only" id="visayas">Visayas Only</option>
						<option value="Mindanao Only" id="mindanao">Mindanao Only</option>
						<option value="Nationwide">Nationwide</option>
					</select>



					<select name="remarks">
						<option value="Complete">Complete</option>
						<option value="Incomplete">Inomplete</option>
					</select>

					<input type="text" name="luzonVenue" id="luzonVenue">
					<input type="text" name="visayasVenue" id="visayasVenue">
					<input type="text" disabledname="mindanaoVenue" id="mindanaoVenue">

					<?php areas(); ?>

				</div>

				<div class="cmsButtons">
					<button type="submit" class="btn-success" onclick="location.href=''">SAVE</button>
					<button type="button" class="btn-warning" onclick="location.href=''">CANCEL</button>
				</div>
			</div>
		</div>
		
	</div>	
</body>
		<?php floatButtonsSeminarManager(); ?>

</html>