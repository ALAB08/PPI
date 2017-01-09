<!DOCTYPE html>

<html>

<?php include("connection.php"); ?>
<?php include("javascript.php"); ?>

<head>
	<title>PPI | Update Partner</title>
	<?php include("head.php"); ?>
	<?php include("queries.php"); ?>
	<?php session("regular"); ?>

</head>

<body class="goldNoBorder">
	<div class="container-fluid">
		<?php header2(); ?>
		<div class="container">
		<form action="" method="POST" enctype="multipart/form-data">
			<div class="leftSide">
				<p>Update <span>Partner</span></p><br>

				<?php 
					$sql = "SELECT * FROM tbl_partner WHERE id = '".$_GET['id']."'";
					$query = mysqli_query($connection,$sql);
					$result = mysqli_fetch_assoc($query);
				?>

				<div class="preview">
					<div class="logoBox">
						<img id="partnerLogoImagePreview" class="logoPreview" src="<?php echo $result['partner_logo']; ?>">
						<img id="partnerLogo2ImagePreview" class="logoPreview" src="<?php echo $result['partner_logo']; ?>">
						<span class="btn btn-file two" style="color: white">Partner Logo<input type="file" name="partnerLogoImage" id="uploadImagePartnerLogo" onchange="PreviewImagePartnerLogo();" ></span>
					</div>
                	
                	<img id="partnerBannerImagePreview" class="bannerPreview" src="<?php echo $result['partner_banner']; ?>">
                	<span class="btn btn-file" style="color: white">
                	Partner Banner<input type="file" name="partnerBannerImage" id="uploadImagePartnerBanner"onchange="PreviewImagePartnerBanner();" >
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
					<input type="text" name="partner_name" value="<?php echo $result['partner_name']; ?>" required>
					<input type="text" name="contact_person" value="<?php echo $result['contact_person']; ?>" required>
					<input type="text" name="contact_number" value="<?php echo $result['contact_number']; ?>" required>
					<input type="text" name="address" value="<?php echo $result['address']; ?>" required>
					<input type="text" name="email" value="<?php echo $result['email']; ?>" required>
					<input type="text" name="website" value="<?php echo $result['website']; ?>" required>
					<input type="date" name="partnership_date" value="<?php echo date_format((date_create($result['partnership_date'])),'Y-m-d'); ?>" style="width: 100%" required>
				</div>

				<div class="cmsButtons">
					<button type="submit" class="btn-success" name="updatePartner">SAVE</button>
					<button type="button" class="btn-warning" onclick="location.href='partners.php'">CANCEL</button>
				</div>
			</div>
		</form>
		</div>
		
	</div>	
	<?php floatButtonsPartnersManager() ?>
</body>

</html>