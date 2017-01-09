<!DOCTYPE html>

<html>

<?php include("connection.php"); ?>
<?php include("javascript.php"); ?>

<head>
	<title>PPI | Add Partner</title>
	<?php include("head.php"); ?>
	<?php include("queries.php"); ?>
	<?php session("regular"); ?>

</head>

<body class="goldNoBorder">
	<div class="container-fluid">
		<?php header2(); ?>
		<div class="container">
			<div class="leftSide">
				<p>Append <span>Partner</span></p><br>
			<form action="" method="POST" enctype="multipart/form-data">
				<div class="preview">
					<div class="logoBox">
						<img id="partnerLogoImagePreview" class="logoPreview">
						<img id="partnerLogo2ImagePreview" class="logoPreview">
						
						<span class="btn btn-file two" style="color: white">Partner Logo<input type="file" name="partnerLogoImage" id="uploadImagePartnerLogo" required onchange="PreviewImagePartnerLogo();" ></span>
					</div>
                	
                	<img id="partnerBannerImagePreview" class="bannerPreview">
                	
                	<span class="btn btn-file" style="color: white">
                	Partner Banner<input type="file" name="partnerBannerImage" id="uploadImagePartnerBanner" required onchange="PreviewImagePartnerBanner();" >
                	</span>
                </div>
			</div>
			
			<div class="rightSide">
				<div class="fieldName">
					<ul>
						<li>Partner Name :</li>
						<li>Contact Person :</li>
						<li>Contact Number :</li>
						<li>Address :</li>
						<li>Email :</li>
						<li>Website :</li>
						<li>Partnership Date :</li>
					</ul>
				</div>
				<div class="textBoxes">
					<input type="text" name="partner_name" required>
					<input type="text" name="contact_person" required>
					<input type="text" name="contact_number" required>
					<input type="text" name="address" required>
					<input type="text" name="email" required>
					<input type="text" name="website" required>
					<input type="date" name="partnership_date" style="width: 100%" required>
				</div>

				<div class="cmsButtons">
					<button type="submit" class="btn-success" name="partnerAdd">SAVE</button>
					<button type="button" class="btn-warning" onclick="location.href='partners.php'">CANCEL</button>
				</div>
			</div>
			</form>
		</div>
		
	</div>	
	<?php floatButtonsPartnersManager() ?>
</body>

</html>